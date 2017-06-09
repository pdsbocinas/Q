<?php
namespace VOD\QubitArgentinaBundle\Services\Payment;

use VOD\BaseBundle\Services\Payment\GatewayInterface;
use VOD\BaseBundle\Services\Payment\PaymentService as ServiceBase;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class PaymentService extends ServiceBase
{
    private $session = null;

    public function __construct(FormFactoryInterface $formFactory, TokenStorageInterface $tokenStorage, $session)
    {
        parent::__construct($formFactory, $tokenStorage);
        $this->session = $session;
    }

    public function generatePaymentForm()
    {
        // Instancio el form type de payment, el cual actua como contenedor de medios de pago
        $form = $this->formFactory->create('vod_base_payment_form');

        if (true === $this->session->get('movistar_campaign')) {
            $this->gateways = array_reverse($this->gateways);
        }

        /** @var GatewayInterface $gateway */
        foreach($this->gateways as $gateway) {
            if (!$this->getGateway()) {
                $this->setGateway($gateway);
            }
            $form->get('gateways')->add($gateway->getShortName(), $gateway->getFormType(), array('required' => false));
        }

        if ($form->get('gateway')->setData($this->getGateway()->getShortName()));

        $this->paymentForm = $form;
    }
}