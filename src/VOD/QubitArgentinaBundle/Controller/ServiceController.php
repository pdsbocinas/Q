<?php

namespace VOD\QubitArgentinaBundle\Controller;

use \VOD\BaseBundle\Controller\ServiceController as BaseController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use VOD\QubitArgentinaBundle\Services\Clarin\ClarinClient;
use VOD\QubitArgentinaBundle\Services\Clarin\Model\ClarinCard;

class ServiceController extends BaseController
{
    /**
     * @Route("/service/clarin-validator/{cardNumber}", name="service_constraint_clarin_validator",
     *     options={"expose" = true});
     */
    public function checkPromoClarin($cardNumber = null)
    {
        $response = null;

        if (null === $cardNumber) {
            $clarinCard = new ClarinCard();
            $response = [
                'clarinCard' => $clarinCard,
                'codigoResultado' => 999, // Error contra la API de Clarín, lo manejamos nosotros.
                'descripcionResultado' => 'Falló la comunicación, por favor intente nuevamente en un rato.'
            ];
        } else {
            /** @var ClarinClient $clarinClient */
            $response = $this->get('clarin.webservice.client')->validateClarin365($cardNumber);
        }

        return new JsonResponse($response);
    }
}