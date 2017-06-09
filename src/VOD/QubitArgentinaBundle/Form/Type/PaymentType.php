<?php

namespace VOD\QubitArgentinaBundle\Form\Type;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Translation\TranslatorInterface;
use Symfony\Component\Validator\Constraints\Length;
use VOD\BaseBundle\Form\Type\PaymentType as BaseType;
use VOD\BaseBundle\Services\Client\Utils\UtilsClient;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

/**
 * Class PaymentType
 *
 * Esta clase extiende del PaymentType base y agrega el campo para la tarjeta de Clarín.
 *
 * @package VOD\QubitArgentinaBundle\Form\Type
 */
class PaymentType extends BaseType
{
    private $tokenStorage;
    private $userClient;

    public function __construct(TranslatorInterface $translator, UtilsClient $utilsClient, TokenStorageInterface $tokenStorage, $userClient)
    {
        $this->tokenStorage = $tokenStorage;
        $this->userClient = $userClient;

        parent::__construct($translator, $utilsClient);
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $couponsResponse = $this->userClient->getUserCoupons(
            $this->tokenStorage->getToken()->getUser()->getSessionToken(), false
        );

        $promotionSkip = false;
        foreach ($couponsResponse->getData() As $coupon) {
            if ((true === $coupon->getIsActive() || true === $coupon->isPending()) && $coupon->isSubscription()) {
                $promotionSkip = true;
            }
        }

        if (false === $promotionSkip) {
            $builder->add('clarin_card_number', TextType::class, [
                'required'      => false,
                'attr'          => [
                    'placeholder'           => $this->translator->trans('promotions.clarin.form.number_card_placeholder', [], 'promotions')
                ],
                'constraints'   => [
                    new Length([
                        'min'               => 19,
                        'max'               => 19,
                        'maxMessage'        => $this->translator->trans('promotions.clarin.form.number_card_max_validation', [], 'promotions')
                    ]),
                ]
            ]);
        }

        parent::buildForm($builder, $options);
    }

    public function getName()
    {
        return parent::getName();
    }
}