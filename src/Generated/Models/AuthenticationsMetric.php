<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

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
     * Gets the authFlow property value. The authFlow property
     * @return string|null
    */
    public function getAuthFlow(): ?string {
        $val = $this->getBackingStore()->get('authFlow');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authFlow'");
    }

    /**
     * Gets the browser property value. The browser property
     * @return string|null
    */
    public function getBrowser(): ?string {
        $val = $this->getBackingStore()->get('browser');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'browser'");
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
     * Gets the failures property value. The failures property
     * @return array<AuthenticationFailure>|null
    */
    public function getFailures(): ?array {
        $val = $this->getBackingStore()->get('failures');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AuthenticationFailure::class);
            /** @var array<AuthenticationFailure>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'failures'");
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
            'authFlow' => fn(ParseNode $n) => $o->setAuthFlow($n->getStringValue()),
            'browser' => fn(ParseNode $n) => $o->setBrowser($n->getStringValue()),
            'country' => fn(ParseNode $n) => $o->setCountry($n->getStringValue()),
            'factDate' => fn(ParseNode $n) => $o->setFactDate($n->getDateValue()),
            'failures' => fn(ParseNode $n) => $o->setFailures($n->getCollectionOfObjectValues([AuthenticationFailure::class, 'createFromDiscriminatorValue'])),
            'identityProvider' => fn(ParseNode $n) => $o->setIdentityProvider($n->getStringValue()),
            'language' => fn(ParseNode $n) => $o->setLanguage($n->getStringValue()),
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
        $writer->writeStringValue('authFlow', $this->getAuthFlow());
        $writer->writeStringValue('browser', $this->getBrowser());
        $writer->writeStringValue('country', $this->getCountry());
        $writer->writeDateValue('factDate', $this->getFactDate());
        $writer->writeCollectionOfObjectValues('failures', $this->getFailures());
        $writer->writeStringValue('identityProvider', $this->getIdentityProvider());
        $writer->writeStringValue('language', $this->getLanguage());
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
     * Sets the authFlow property value. The authFlow property
     * @param string|null $value Value to set for the authFlow property.
    */
    public function setAuthFlow(?string $value): void {
        $this->getBackingStore()->set('authFlow', $value);
    }

    /**
     * Sets the browser property value. The browser property
     * @param string|null $value Value to set for the browser property.
    */
    public function setBrowser(?string $value): void {
        $this->getBackingStore()->set('browser', $value);
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
     * Sets the failures property value. The failures property
     * @param array<AuthenticationFailure>|null $value Value to set for the failures property.
    */
    public function setFailures(?array $value): void {
        $this->getBackingStore()->set('failures', $value);
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
