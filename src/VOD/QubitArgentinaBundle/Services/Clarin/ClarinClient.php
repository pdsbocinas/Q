<?php

namespace VOD\QubitArgentinaBundle\Services\Clarin;

use Symfony\Component\HttpFoundation\JsonResponse;
use VOD\QubitArgentinaBundle\Services\Clarin\Model\ClarinCard;

/**
 * Class ClarinClient
 * @package VOD\BaseBundle\Services\Client\Clarin
 * @author Leonardo J. Suárez Amézquita <lamezquita@qubit.tv>
 */
class ClarinClient
{
    private $apiUrl;

    public function __construct($clarinApiUrl)
    {
        $this->apiUrl = $clarinApiUrl;
    }

    public function validateClarin365($clarinNumberCard)
    {
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $this->apiUrl.$clarinNumberCard
        ]);

        $clarinResponse = json_decode(curl_exec($curl));

        $clarinCard = new ClarinCard();
        $response = [
            'clarinCard' => $clarinCard,
            'codigoResultado' => 999, // Error contra la API de Clarín, lo manejamos nosotros.
            'descripcionResultado' => 'Falló la comunicación, por favor intente nuevamente en un rato.'
        ];

        if (null !== $clarinResponse) {
            $clarinCard->setCredentialType(1);
            if ('Plus' === $clarinResponse->categoriaCredencial) {
                $clarinCard->setCredentialType(2);
            }
            $clarinCard->setDocumentNumber($clarinResponse->numeroDocumento);
            $clarinCard->setDocumentType($clarinResponse->tipoDocumento);
            $clarinCard->setLastname($clarinResponse->apellido);
            $clarinCard->setName($clarinResponse->nombre);
            $clarinCard->setPartnerType($clarinResponse->tipoSocio);

            $response = [
                'clarinCard' => $clarinCard,
                'codigoResultado' => $clarinResponse->codigoResultado,
                'categoriaCredencial' => $clarinCard->getCredentialType(),
                'descripcionResultado' => $clarinResponse->descripcionResultado,
            ];
        }

        return $response;
    }
}