<?php

namespace VOD\QubitArgentinaBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use VOD\BaseBundle\Controller\PaymentController as BaseController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use VOD\BaseBundle\Services\Client\User\Model\User;
use VOD\QubitArgentinaBundle\Entity\ClarinCard;

class PaymentController extends BaseController
{
    public function activateSubscriptionAction(Request $request)
    {
        // Verificamos que pueda acceder
        $ip = $this->container->get('request')->getClientIp();
        if (false === $this->get('vod_base.utils_client')->getGeoIp($ip)->getData()->getAllowed()) {
            return $this->redirectToRoute('homepage');
        }

        return $this->forward('VODQubitArgentinaBundle:Payment:paymentMethod', []);
    }

    public function activatePaymentMethodAction(Request $request)
    {
        return $this->forward('VODQubitArgentinaBundle:Payment:paymentMethod', []);
    }

    protected function addPaymentPromotions()
    {
        $this->get('vod_base.payment')->addPromotion('clarin', ['clarin365', 'clarin365plus']);
    }



//    /**
//     * @Route("/usuario/metodo-pago/", name="payment_method");
//     */
//    public function paymentMethodAction(Request $request)
//    {
//        /** @var User $user */
//        $user = $this->getUser();
//        if (false === $this->get('vod_base.utilities.user')->isUser($user)) {
//            return $this->redirect($this->generateUrl('homepage', []));
//        }
//
//        // Tenemos que actualizar el payment method del usuario
//        $userStatusResponse = $this->get('vod_base.user_client')->getUserStatus($this->getUser()->getSessionToken());
//        if (false === $userStatusResponse->isValidResponse()) {
//            throw new NotFoundHttpException();
//        }
//        $user->setHasPaymentMethod($userStatusResponse->getData()->getHasPaymentMethod());
//
//        if (true === $user->getHasPaidProduct() && null !== $user->getCoupon()) {
//            return $this->redirect($this->generateUrl('homepage', []));
//        }
//
//        $paymentMethodForm = $this->createForm('vod_payment_method');
//        $paymentMethodForm->handleRequest($request);
//
//        if ($paymentMethodForm->isValid()) {
//
//            try {
//                $data = $paymentMethodForm->getData();
//
//                $products = $this->get('vod_base.utils_client')->getProducts();
//
//                $response = new \stdClass();
//
//                foreach ($products->getData() as $product) {
//                    if ($product->getId() == $data['product']) {
//                        //$response->MONTO = $product->getPrice() * 100;
//                        // Vale $1 el monto, ya que se le cobra el mes gratis... MALISIMO esto
//                        $response->MONTO = self::VALIDATION_FEE ;
//                        if (true === $user->getHasPaymentMethod()) {
//                            $response->MONTO = $product->getPrice() * 100;
//                        }
//                    }
//                }
//
//                $operationId = $this->get('vod_base.utils_client')->getOperationId($this->getUser()->getSessionToken());
//
//                $response->NROOPERACION = ($operationId->OperationId) ? $operationId->OperationId : '';
//
//                $response->URLDINAMICA = $data['URLDINAMICA'].$data['product'];
//
//                $response->MEDIODEPAGO = $data['credit_card'];
//
////                $response->PARAMSITIO = SerialCrypt::getInstance()->encrypt($data['EMAILCLIENTE'].$operationId->OperationId);
//
//                if ('decidir_clarin365' === $data['PARAMSITIO'] || 'decidir_clarin365plus' === $data['PARAMSITIO']) {
//                    $response->PARAMSITIO = $data['PARAMSITIO'];
//                    $response->MONTO = (int) $data['MONTO'];
//
//                    // Guardado credencial clarin en session para luego guardarla cuando vuelve de decidir con success
//                    $this->saveClarinCardInSession($data['clarin_card_number']);
//                }
//
//                return new JsonResponse(array('response' => $response));
//
//            } catch(\Exception $e) {
//                $this->get('logger')->info(sprintf(
//                    'Excepcion registrando al usuario: %s',
//                    $e->getMessage()
//                ));
//
//                return new JsonResponse(array('response' => 'En este momento no podemos suscribirlo, intentelo mas tarde'));
//            }
//        }
//
//        $clientUtils = $this->get('vod_base.utils_client');
//        $apiProducts = $clientUtils->getProducts()->getData();
//
//        $sessionService = $this->get('session');
//        $content = null;
//
//        if (true === $sessionService->has('content-uuid')) {
//            $contentDetail = $this->get('vod_base.content_client')->getContentDetail($sessionService->get('content-uuid'));
//            if (true === $contentDetail->isValidResponse()) {
//                $content = $contentDetail->getData();
//            }
//        }
//
//        $view = $this->get('vod_base.utilities.mobile')->getToRenderView('VODQubitArgentinaBundle:Payment:methods-mobile.html.twig',
//            'VODBaseBundle:Payment:payment-methods.html.twig');
//
//        return $this->render($view, [
//            'form' => $paymentMethodForm->createView(),
//            'products' => $apiProducts,
//            'product' => $apiProducts->first(),
//            'contentDetail' => $content
//        ]);
//    }

//    public function operationStatusAction($operationId)
//    {
//        if (null === $operationId) {
//            return $this->redirectToRoute('homepage', []);
//        }
//
//        $operationStatus = $this->get('vod_base.utils_client')->getOperationStatus($this->getUser()->getSessionToken(),$operationId);
//        if (false === $operationStatus->isValidResponse()) {
//            return $this->redirectToRoute('homepage', []);
//        }
//
//        $params[ 'operationId']=$operationId;
//        $hash = $this->get('vod_base.utilities.utils')->EncodeArrayUrl($params);
//        $path = $this->generateUrl('operation_result', [
//            'status' => 'rechazada',
//            'paramHash' => $hash
//        ]);
//
//        if (self::OPERATION_STATUS_OK === $operationStatus->getData()->getResult()) {
//            if (true === $this->get('session')->has('clarinCard')) {
//                $this->saveClarinCardInDataBase();
//            }
//            $path = $this->generateUrl('operation_result', [
//                'status' => 'aprobada',
//                'paramHash' => $hash
//            ]);
//        }
//
//        return $this->redirect($path);
//    }

    private function saveClarinCardInDataBase()
    {
        $clarinCard = $this->get('session')->get('clarinCard');
        $em = $this->getDoctrine()->getManager();
        $em->persist($clarinCard);
        $em->flush();
    }

    private function saveClarinCardInSession($number)
    {
        $validatedCard = $this->get('clarin.webservice.client')->validateClarin365($number);

        if (0 === $validatedCard['codigoResultado']) {
            $clarinCard = new ClarinCard();
            /** @var \VOD\QubitArgentinaBundle\Services\Clarin\Model\ClarinCard $validatedClarinCard */
            $validatedClarinCard = $validatedCard['clarinCard'];
            $credentialType = 'Clasica';
            if (2 === $validatedClarinCard->getCredentialType()) {
                $credentialType = 'Plus';
            }
            $clarinCard->setUsername($this->getUser()->getUserName())->setNumber($number)->setLastname($validatedClarinCard->getLastname())
                ->setName($validatedClarinCard->getName())->setType($credentialType)
                ->setDocumentNumber($validatedClarinCard->getDocumentNumber())->setDocumentType($validatedClarinCard->getDocumentType())
                ->setPartnerType($validatedClarinCard->getPartnerType());
            $this->get('session')->set('clarinCard', $clarinCard);
        }
    }
}