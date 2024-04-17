<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class MfaCompletionMetric extends Entity implements Parsable 
{
    /**
     * Instantiates a new MfaCompletionMetric and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MfaCompletionMetric
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MfaCompletionMetric {
        return new MfaCompletionMetric();
    }

    /**
     * Gets the appId property value. The ID of the Microsoft Entra application. Supports $filter (eq).
     * @return string|null
    */
    public function getAppId(): ?string {
        $val = $this->getBackingStore()->get('appId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appId'");
    }

    /**
     * Gets the attemptsCount property value. Number of users who attempted to sign up. Supports $filter (eq).
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
     * Gets the country property value. The country property
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
            'appId' => fn(ParseNode $n) => $o->setAppId($n->getStringValue()),
            'attemptsCount' => fn(ParseNode $n) => $o->setAttemptsCount($n->getIntegerValue()),
            'country' => fn(ParseNode $n) => $o->setCountry($n->getStringValue()),
            'factDate' => fn(ParseNode $n) => $o->setFactDate($n->getDateValue()),
            'identityProvider' => fn(ParseNode $n) => $o->setIdentityProvider($n->getStringValue()),
            'language' => fn(ParseNode $n) => $o->setLanguage($n->getStringValue()),
            'mfaFailures' => fn(ParseNode $n) => $o->setMfaFailures($n->getCollectionOfObjectValues([MfaFailure::class, 'createFromDiscriminatorValue'])),
            'mfaMethod' => fn(ParseNode $n) => $o->setMfaMethod($n->getStringValue()),
            'os' => fn(ParseNode $n) => $o->setOs($n->getStringValue()),
            'successCount' => fn(ParseNode $n) => $o->setSuccessCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the identityProvider property value. The identityProvider property
     * @return string|null
    */
    public function getIdentityProvider(): ?string {
        $val = $this->getBackingStore()->get('identityProvider');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'identityProvider'");
    }

    /**
     * Gets the language property value. The language property
     * @return string|null
    */
    public function getLanguage(): ?string {
        $val = $this->getBackingStore()->get('language');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'language'");
    }

    /**
     * Gets the mfaFailures property value. The mfaFailures property
     * @return array<MfaFailure>|null
    */
    public function getMfaFailures(): ?array {
        $val = $this->getBackingStore()->get('mfaFailures');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MfaFailure::class);
            /** @var array<MfaFailure>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mfaFailures'");
    }

    /**
     * Gets the mfaMethod property value. The MFA authentication method used by the customers. Supports $filter (eq).
     * @return string|null
    */
    public function getMfaMethod(): ?string {
        $val = $this->getBackingStore()->get('mfaMethod');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mfaMethod'");
    }

    /**
     * Gets the os property value. The platform of the device that the customers used. Supports $filter (eq).
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
     * Gets the successCount property value. Number of users who signed up successfully. Supports $filter (eq).
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
        $writer->writeStringValue('appId', $this->getAppId());
        $writer->writeIntegerValue('attemptsCount', $this->getAttemptsCount());
        $writer->writeStringValue('country', $this->getCountry());
        $writer->writeDateValue('factDate', $this->getFactDate());
        $writer->writeStringValue('identityProvider', $this->getIdentityProvider());
        $writer->writeStringValue('language', $this->getLanguage());
        $writer->writeCollectionOfObjectValues('mfaFailures', $this->getMfaFailures());
        $writer->writeStringValue('mfaMethod', $this->getMfaMethod());
        $writer->writeStringValue('os', $this->getOs());
        $writer->writeIntegerValue('successCount', $this->getSuccessCount());
    }

    /**
     * Sets the appId property value. The ID of the Microsoft Entra application. Supports $filter (eq).
     * @param string|null $value Value to set for the appId property.
    */
    public function setAppId(?string $value): void {
        $this->getBackingStore()->set('appId', $value);
    }

    /**
     * Sets the attemptsCount property value. Number of users who attempted to sign up. Supports $filter (eq).
     * @param int|null $value Value to set for the attemptsCount property.
    */
    public function setAttemptsCount(?int $value): void {
        $this->getBackingStore()->set('attemptsCount', $value);
    }

    /**
     * Sets the country property value. The country property
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
     * Sets the identityProvider property value. The identityProvider property
     * @param string|null $value Value to set for the identityProvider property.
    */
    public function setIdentityProvider(?string $value): void {
        $this->getBackingStore()->set('identityProvider', $value);
    }

    /**
     * Sets the language property value. The language property
     * @param string|null $value Value to set for the language property.
    */
    public function setLanguage(?string $value): void {
        $this->getBackingStore()->set('language', $value);
    }

    /**
     * Sets the mfaFailures property value. The mfaFailures property
     * @param array<MfaFailure>|null $value Value to set for the mfaFailures property.
    */
    public function setMfaFailures(?array $value): void {
        $this->getBackingStore()->set('mfaFailures', $value);
    }

    /**
     * Sets the mfaMethod property value. The MFA authentication method used by the customers. Supports $filter (eq).
     * @param string|null $value Value to set for the mfaMethod property.
    */
    public function setMfaMethod(?string $value): void {
        $this->getBackingStore()->set('mfaMethod', $value);
    }

    /**
     * Sets the os property value. The platform of the device that the customers used. Supports $filter (eq).
     * @param string|null $value Value to set for the os property.
    */
    public function setOs(?string $value): void {
        $this->getBackingStore()->set('os', $value);
    }

    /**
     * Sets the successCount property value. Number of users who signed up successfully. Supports $filter (eq).
     * @param int|null $value Value to set for the successCount property.
    */
    public function setSuccessCount(?int $value): void {
        $this->getBackingStore()->set('successCount', $value);
    }

}
