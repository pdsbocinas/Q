<?php
/*
 * This class was auto-generated from the API references found at
 * https://developer.globalcollect.com/documentation/api/server/
 */
namespace Ingenico\Connect\Sdk\Domain\Sessions\Definitions;

use Ingenico\Connect\Sdk\DataObject;
use Ingenico\Connect\Sdk\Domain\Definitions\PaymentProductFilter;
use UnexpectedValueException;

/**
 * Class PaymentProductFiltersClientSession
 *
 * @package Ingenico\Connect\Sdk\Domain\Sessions\Definitions
 * @link https://developer.globalcollect.com/documentation/api/server/#schema_PaymentProductFiltersClientSession PaymentProductFiltersClientSession
 */
class PaymentProductFiltersClientSession extends DataObject
{
    /**
     * @var PaymentProductFilter
     */
    public $exclude = null;

    /**
     * @var PaymentProductFilter
     */
    public $restrictTo = null;

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject($object)
    {
        parent::fromObject($object);
        if (property_exists($object, 'exclude')) {
            if (!is_object($object->exclude)) {
                throw new UnexpectedValueException('value \'' . print_r($object->exclude, true) . '\' is not an object');
            }
            $value = new PaymentProductFilter();
            $this->exclude = $value->fromObject($object->exclude);
        }
        if (property_exists($object, 'restrictTo')) {
            if (!is_object($object->restrictTo)) {
                throw new UnexpectedValueException('value \'' . print_r($object->restrictTo, true) . '\' is not an object');
            }
            $value = new PaymentProductFilter();
            $this->restrictTo = $value->fromObject($object->restrictTo);
        }
        return $this;
    }
}
