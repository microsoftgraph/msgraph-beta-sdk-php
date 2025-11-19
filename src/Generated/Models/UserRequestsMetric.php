<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class UserRequestsMetric extends Entity implements Parsable 
{
    /**
     * Instantiates a new UserRequestsMetric and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserRequestsMetric
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserRequestsMetric {
        return new UserRequestsMetric();
    }

    /**
     * Gets the appId property value. The appId property
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
            'browser' => fn(ParseNode $n) => $o->setBrowser($n->getStringValue()),
            'country' => fn(ParseNode $n) => $o->setCountry($n->getStringValue()),
            'factDate' => fn(ParseNode $n) => $o->setFactDate($n->getDateValue()),
            'identityProvider' => fn(ParseNode $n) => $o->setIdentityProvider($n->getStringValue()),
            'language' => fn(ParseNode $n) => $o->setLanguage($n->getStringValue()),
            'requestCount' => fn(ParseNode $n) => $o->setRequestCount($n->getIntegerValue()),
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
     * Gets the requestCount property value. Number of requests to the tenant. Supports $filter (eq).
     * @return int|null
    */
    public function getRequestCount(): ?int {
        $val = $this->getBackingStore()->get('requestCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requestCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('appId', $this->getAppId());
        $writer->writeStringValue('browser', $this->getBrowser());
        $writer->writeStringValue('country', $this->getCountry());
        $writer->writeDateValue('factDate', $this->getFactDate());
        $writer->writeStringValue('identityProvider', $this->getIdentityProvider());
        $writer->writeStringValue('language', $this->getLanguage());
        $writer->writeIntegerValue('requestCount', $this->getRequestCount());
    }

    /**
     * Sets the appId property value. The appId property
     * @param string|null $value Value to set for the appId property.
    */
    public function setAppId(?string $value): void {
        $this->getBackingStore()->set('appId', $value);
    }

    /**
     * Sets the browser property value. The browser property
     * @param string|null $value Value to set for the browser property.
    */
    public function setBrowser(?string $value): void {
        $this->getBackingStore()->set('browser', $value);
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
     * Sets the requestCount property value. Number of requests to the tenant. Supports $filter (eq).
     * @param int|null $value Value to set for the requestCount property.
    */
    public function setRequestCount(?int $value): void {
        $this->getBackingStore()->set('requestCount', $value);
    }

}
