<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class AuthenticationsMetric extends Entity implements Parsable 
{
    /**
     * Instantiates a new AuthenticationsMetric and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuthenticationsMetric
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuthenticationsMetric {
        return new AuthenticationsMetric();
    }

    /**
     * Gets the appid property value. The ID of the Microsoft Entra application. Supports $filter (eq).
     * @return string|null
    */
    public function getAppid(): ?string {
        $val = $this->getBackingStore()->get('appid');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appid'");
    }

    /**
     * Gets the attemptsCount property value. The number of authentication requests made in the specified period. Supports $filter (eq).
     * @return int|null
    */
    public function getAttemptsCount(): ?int {
        $val = $this->getBackingStore()->get('attemptsCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attemptsCount'");
    }

    /**
     * Gets the country property value. The location where the customers authenticated from. Supports $filter (eq).
     * @return string|null
    */
    public function getCountry(): ?string {
        $val = $this->getBackingStore()->get('country');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'country'");
    }

    /**
     * Gets the factDate property value. The date of the user insight.
     * @return Date|null
    */
    public function getFactDate(): ?Date {
        $val = $this->getBackingStore()->get('factDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'factDate'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appid' => fn(ParseNode $n) => $o->setAppid($n->getStringValue()),
            'attemptsCount' => fn(ParseNode $n) => $o->setAttemptsCount($n->getIntegerValue()),
            'country' => fn(ParseNode $n) => $o->setCountry($n->getStringValue()),
            'factDate' => fn(ParseNode $n) => $o->setFactDate($n->getDateValue()),
            'os' => fn(ParseNode $n) => $o->setOs($n->getStringValue()),
            'successCount' => fn(ParseNode $n) => $o->setSuccessCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the os property value. The platform for the device that the customers used. Supports $filter (eq).
     * @return string|null
    */
    public function getOs(): ?string {
        $val = $this->getBackingStore()->get('os');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'os'");
    }

    /**
     * Gets the successCount property value. Number of successful authentication requests. Supports $filter (eq).
     * @return int|null
    */
    public function getSuccessCount(): ?int {
        $val = $this->getBackingStore()->get('successCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'successCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('appid', $this->getAppid());
        $writer->writeIntegerValue('attemptsCount', $this->getAttemptsCount());
        $writer->writeStringValue('country', $this->getCountry());
        $writer->writeDateValue('factDate', $this->getFactDate());
        $writer->writeStringValue('os', $this->getOs());
        $writer->writeIntegerValue('successCount', $this->getSuccessCount());
    }

    /**
     * Sets the appid property value. The ID of the Microsoft Entra application. Supports $filter (eq).
     * @param string|null $value Value to set for the appid property.
    */
    public function setAppid(?string $value): void {
        $this->getBackingStore()->set('appid', $value);
    }

    /**
     * Sets the attemptsCount property value. The number of authentication requests made in the specified period. Supports $filter (eq).
     * @param int|null $value Value to set for the attemptsCount property.
    */
    public function setAttemptsCount(?int $value): void {
        $this->getBackingStore()->set('attemptsCount', $value);
    }

    /**
     * Sets the country property value. The location where the customers authenticated from. Supports $filter (eq).
     * @param string|null $value Value to set for the country property.
    */
    public function setCountry(?string $value): void {
        $this->getBackingStore()->set('country', $value);
    }

    /**
     * Sets the factDate property value. The date of the user insight.
     * @param Date|null $value Value to set for the factDate property.
    */
    public function setFactDate(?Date $value): void {
        $this->getBackingStore()->set('factDate', $value);
    }

    /**
     * Sets the os property value. The platform for the device that the customers used. Supports $filter (eq).
     * @param string|null $value Value to set for the os property.
    */
    public function setOs(?string $value): void {
        $this->getBackingStore()->set('os', $value);
    }

    /**
     * Sets the successCount property value. Number of successful authentication requests. Supports $filter (eq).
     * @param int|null $value Value to set for the successCount property.
    */
    public function setSuccessCount(?int $value): void {
        $this->getBackingStore()->set('successCount', $value);
    }

}
