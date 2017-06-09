<?php

namespace VOD\QubitArgentinaBundle\Services\Clarin\Model;

/**
 * Class ClarinCard
 *
 * @package VOD\QubitArgentinaBundle\Services\Clarin\Model
 * @author Sebastián Poliak <spoliak@qubit.tv>
 */
class ClarinCard
{
    private $name;
    private $lastname;
    private $documentType;
    private $documentNumber;
    private $credentialType;
    private $partnerType;

    /**
     * @return mixed
     */
    public function getPartnerType()
    {
        return $this->partnerType;
    }

    /**
     * @param mixed $partnerType
     * @return ClarinCard
     */
    public function setPartnerType($partnerType)
    {
        $this->partnerType = $partnerType;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return ClarinCard
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     * @return ClarinCard
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDocumentType()
    {
        return $this->documentType;
    }

    /**
     * @param mixed $documentType
     * @return ClarinCard
     */
    public function setDocumentType($documentType)
    {
        $this->documentType = $documentType;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDocumentNumber()
    {
        return $this->documentNumber;
    }

    /**
     * @param mixed $documentNumber
     * @return ClarinCard
     */
    public function setDocumentNumber($documentNumber)
    {
        $this->documentNumber = $documentNumber;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCredentialType()
    {
        return $this->credentialType;
    }

    /**
     * @param mixed $credentialType
     * @return ClarinCard
     */
    public function setCredentialType($credentialType)
    {
        $this->credentialType = $credentialType;

        return $this;
    }

}