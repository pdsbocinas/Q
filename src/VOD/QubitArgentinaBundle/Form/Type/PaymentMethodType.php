<?php

namespace VOD\QubitArgentinaBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Translation\TranslatorInterface;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Luhn;
use Symfony\Component\Validator\Constraints\NotBlank;
use VOD\BaseBundle\Services\Client\Utils\UtilsClient;

class PaymentMethodType extends AbstractType
{
    private $utilsClient;
    private $creditCards = [
        '1' => 'VISA', '15' => 'MASTERCARD', '6' => 'AMEX', '8' => 'DINERS', '24' => 'TARJETA NARANJA', '42' => 'TARJETA NATIVA', '39' => 'NEVADA' //, '20' => 'MASTERCARD TEST'
    ];
    private $decidirParameters;
    private $user;
    private $translator;

    public function __construct(TranslatorInterface $translator, UtilsClient $utilsClient, $parametersArray, TokenStorageInterface $tokenStorage) {
        $this->utilsClient          = $utilsClient;
        $this->decidirParameters    = $parametersArray;
        $this->user                 = $tokenStorage->getToken()->getUser();
        $this->translator           = $translator;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $products = $this->utilsClient->getProducts();

        $choices = [];

        $maxPrice = 0;
        $maxProduct = 0;
        foreach($products->getData() as $product) {
            $choices[$product->getId()] = $product->getName() .' $'. $product->getPrice();
            if ($product->getPrice() > $maxPrice){
                $maxProduct = $product->getId();
            }
        }

        $builder
            ->add('product', 'choice', [
                'choices' => $choices,
                'expanded' => true,
                'multiple' => false,
                'data' => $maxProduct,
                'constraints' => [
                    new NotBlank(['message' => 'form.errors.not_blank']),
                ]
            ])
            ->add('credit_card', 'choice', [
                'choices' => $this->creditCards,
                'expanded' => true,
                'multiple' => false,
                'data' => key($this->creditCards),
                'constraints' => [
                    new NotBlank(['message' => 'form.errors.not_blank']),
                ]
            ])
            ->add('clarin_card_number', TextType::class, [
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
            ])
            ->add('MEDIODEPAGO', 'hidden')
            ->add('NROCOMERCIO', 'hidden', [
                'data' => $this->decidirParameters['commerce_id'],
            ])
            ->add('NROOPERACION', 'hidden',[
            ])
            ->add('URLDINAMICA', 'hidden', [
                'data' => $this->decidirParameters['dynamic_url'].'/user/'.$this->decidirParameters['operator'].'/confirmacionTarjeta/',
            ])
            ->add('decidir_url', 'hidden',[
                'data' => $this->decidirParameters['url'],
            ])
            ->add('MONTO', 'hidden',[
                'data' => '1',
            ])
            ->add('CUOTAS', 'hidden', [
                'data' => 1,
            ])

            ->add('EMAILCLIENTE', 'hidden', [
                'data' => $this->user->getEmail(),
            ])
            ->add('PARAMSITIO', 'hidden', [
            ])
            /*->add('credit_card_name', 'hidden', [
                'data' => $this->user->getFirstName() .' '. $this->user->getLastName()
            ])
            ->add('street', 'hidden', [
                'data' => '',
            ])
            ->add('street_number', 'hidden', [
                'data' => '',
            ])
            ->add('birthday', 'hidden', [
                'data' => $this->user->getBirthday(),
            ])*/


            /*->add('cc_name', 'text', [
            'constraints' => [
                new NotBlank(['message' => 'form.errors.not_blank']),
                new Regex(['pattern' => '/^[a-zA-Z]+$/',
                           'message' => 'No se permiten números'])
                ]
            ])
            ->add('cc_number', 'number', [
                'constraints' => [
                    new NotBlank(['message' => 'form.errors.not_blank']),
                    new CardScheme(['schemes' => $this->creditCards])
                ]
            ])
            ->add('cc_exp_date', 'date', [
                'format' => 'MM yyyy d',
                'years' => range(date('Y'), date('Y') + 10),
                'days' => [1]

            ])
            ->add('cc_security_code', 'number', [
                'constraints' => [
                    new NotBlank(['message' => 'form.errors.not_blank']),
                    new Regex(['pattern' => '/^[0-9]{3,4}$/',
                        'message' => 'El código de seguridad no puede tener mas de 4 digitos'])
                ]
            ])
            ->add('cc_statement', 'text', [
                'constraints' => [
                    new NotBlank(['message' => 'form.errors.not_blank'])
                ]
            ])*/
            ->add('save', 'submit', [
                'label' => 'common.buttons.confirm',
                'translation_domain' => 'common'
            ])
        ;
    }

    public function getName() {
        return 'vod_payment_method';
    }
}