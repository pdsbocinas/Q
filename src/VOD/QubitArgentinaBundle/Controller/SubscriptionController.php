<?php

namespace VOD\QubitArgentinaBundle\Controller;

use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use VOD\BaseBundle\Controller\SubscriptionController as BaseController;
use Symfony\Component\HttpFoundation\Request;
use VOD\BaseBundle\Form\Type\SubscriptionMovistarType;
use VOD\BaseBundle\Services\Client\User\Model\User;

class SubscriptionController extends BaseController
{
    const MOVISTAR_XMSISDN_KEY = '258SmSc01Ms1sd7';

    public function promotionAndSubscriptionAction(Request $request, $company)
    {
        // Si esta logeado me voy.
        if ($this->getUser() instanceof User) {
            return $this->redirectToRoute('homepage');
        }

        $xmsisdn    = $request->query->get('xmsisdn', false);
        $hasXmsisdn = false === $xmsisdn ? false : true;
        $error      = false;

        $data = ['hasxmsisdn' => $hasXmsisdn];

        if (true === $hasXmsisdn) {
            $data['phone'] = $this->decodeXmsisdn($xmsisdn);
        }

        $registerForm = $this->createForm(SubscriptionMovistarType::class, $data);
        $registerForm->handleRequest($request);

        if (true === $registerForm->isValid()) {
            $data = $registerForm->getData();
            $provisionResponse = $this->get('movistar.provision.client')->movistarProvision($data['username'], $data['password'], $data['phone']);

            if (false === $provisionResponse->isValidResponse()) {
                $error = new \stdClass();
                $error = $provisionResponse->getError();
            }

            if (true === $provisionResponse->isValidResponse()) {
                $username = $registerForm->getData()['username'];
                $loginWithHashResponse = $this->get('vod_base.user_client')->loginWithAutoLoginHash($username, $provisionResponse->getData()->AutoLoginHash);
                if (false === $loginWithHashResponse->isApiAuthenticated()) {
                    $this->get('monolog.logger.activity')
                        ->critical(sprintf('Error 10102. Loggeando al usuario contra la API luego de registrarse. Usuario: %s. ErrorMessage: %s', $username, $loginWithHashResponse->getErrorMessage()));

                    return $this->redirectToRoute('homepage');
                }

                $this->get('security.token_storage')->setToken(new UsernamePasswordToken(
                    $loginWithHashResponse,
                    null,
                    'main',
                    $loginWithHashResponse->getRoles()
                ));

                $this->get('monolog.logger.activity')
                    ->info('Se registro el usuario y se logeo bien, procedo a redirigir');

                return $this->redirectToRoute('user_success_subscription');
            }

            $this->get('monolog.logger.activity')
                ->info('Error en provisioner response', array('provisionResponse' => $provisionResponse));
        }

        return $this->render('VODQubitArgentinaBundle:User:Subscription/movistar-subscription.html.twig', [
            'form'  => $registerForm->createView(),
            'hasxmsisdn' => $hasXmsisdn,
            'error' => $error,
        ]);
    }

    public function shortPromotionAction(Request $request, $promotion)
    {
        // Parámetros que hay que agregar a la url
        // el 20/12/2016 asi debe quedar:
        // GET: utm_source=SMSConsulting&utm_medium=CPA&utm_campaign=movistar
        $queryParams = [
            'utm_source' => 'SMSConsulting',
            'utm_medium' => 'CPA',
            'utm_campaign' => 'movistar'
        ];

        // ponmeos movistar porque por ahora no hay otra
        $queryParams['company'] = $promotion;

        return $this->redirectToRoute('promotion_and_subscription', array_merge(
            $queryParams, $request->query->all()
        ));
    }

    private function decodeXmsisdn($xmsisdn)
    {
        // Decodifico el base64
        $data = base64_decode(rawurldecode($xmsisdn));

        // Obtengo el vector de inicializacion
        $iv = substr($data, 0, mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_CBC));

        // Obtengo el MSISDN encriptado
        $data = substr($data, mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_CBC));

        $key = self::MOVISTAR_XMSISDN_KEY;

        // Validamos que el módulo de encripción soporte key menor a 16 bytes, de lo contrario agregamos un espacio vacío
        $resources = mcrypt_module_open(MCRYPT_RIJNDAEL_256, '', MCRYPT_MODE_CBC, '');
        if (false === in_array(strlen(self::MOVISTAR_XMSISDN_KEY), mcrypt_enc_get_supported_key_sizes($resources))) {
            $key = self::MOVISTAR_XMSISDN_KEY . chr(0);
        }
        //mcrypt_module_close($resources);


        // Desencripto el MSISDN
        $data = trim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, $data, MCRYPT_MODE_CBC, $iv));

        // Retorno el MSISDN desencriptado
        return $data;
    }
}