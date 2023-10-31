<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class InsightSummary extends Entity implements Parsable 
{
    /**
     * Instantiates a new insightSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InsightSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InsightSummary {
        return new InsightSummary();
    }

    /**
     * Gets the activeUsers property value. The activeUsers property
     * @return int|null
    */
    public function getActiveUsers(): ?int {
        $val = $this->getBackingStore()->get('activeUsers');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activeUsers'");
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
     * Gets the authenticationCompletions property value. The authenticationCompletions property
     * @return int|null
    */
    public function getAuthenticationCompletions(): ?int {
        $val = $this->getBackingStore()->get('authenticationCompletions');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authenticationCompletions'");
    }

    /**
     * Gets the authenticationRequests property value. The authenticationRequests property
     * @return int|null
    */
    public function getAuthenticationRequests(): ?int {
        $val = $this->getBackingStore()->get('authenticationRequests');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authenticationRequests'");
    }

    /**
     * Gets the factDate property value. The factDate property
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
            'activeUsers' => fn(ParseNode $n) => $o->setActiveUsers($n->getIntegerValue()),
            'appId' => fn(ParseNode $n) => $o->setAppId($n->getStringValue()),
            'authenticationCompletions' => fn(ParseNode $n) => $o->setAuthenticationCompletions($n->getIntegerValue()),
            'authenticationRequests' => fn(ParseNode $n) => $o->setAuthenticationRequests($n->getIntegerValue()),
            'factDate' => fn(ParseNode $n) => $o->setFactDate($n->getDateValue()),
            'os' => fn(ParseNode $n) => $o->setOs($n->getStringValue()),
            'securityTextCompletions' => fn(ParseNode $n) => $o->setSecurityTextCompletions($n->getIntegerValue()),
            'securityTextRequests' => fn(ParseNode $n) => $o->setSecurityTextRequests($n->getIntegerValue()),
            'securityVoiceCompletions' => fn(ParseNode $n) => $o->setSecurityVoiceCompletions($n->getIntegerValue()),
            'securityVoiceRequests' => fn(ParseNode $n) => $o->setSecurityVoiceRequests($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the os property value. The os property
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
     * Gets the securityTextCompletions property value. The securityTextCompletions property
     * @return int|null
    */
    public function getSecurityTextCompletions(): ?int {
        $val = $this->getBackingStore()->get('securityTextCompletions');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'securityTextCompletions'");
    }

    /**
     * Gets the securityTextRequests property value. The securityTextRequests property
     * @return int|null
    */
    public function getSecurityTextRequests(): ?int {
        $val = $this->getBackingStore()->get('securityTextRequests');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'securityTextRequests'");
    }

    /**
     * Gets the securityVoiceCompletions property value. The securityVoiceCompletions property
     * @return int|null
    */
    public function getSecurityVoiceCompletions(): ?int {
        $val = $this->getBackingStore()->get('securityVoiceCompletions');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'securityVoiceCompletions'");
    }

    /**
     * Gets the securityVoiceRequests property value. The securityVoiceRequests property
     * @return int|null
    */
    public function getSecurityVoiceRequests(): ?int {
        $val = $this->getBackingStore()->get('securityVoiceRequests');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'securityVoiceRequests'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('activeUsers', $this->getActiveUsers());
        $writer->writeStringValue('appId', $this->getAppId());
        $writer->writeIntegerValue('authenticationCompletions', $this->getAuthenticationCompletions());
        $writer->writeIntegerValue('authenticationRequests', $this->getAuthenticationRequests());
        $writer->writeDateValue('factDate', $this->getFactDate());
        $writer->writeStringValue('os', $this->getOs());
        $writer->writeIntegerValue('securityTextCompletions', $this->getSecurityTextCompletions());
        $writer->writeIntegerValue('securityTextRequests', $this->getSecurityTextRequests());
        $writer->writeIntegerValue('securityVoiceCompletions', $this->getSecurityVoiceCompletions());
        $writer->writeIntegerValue('securityVoiceRequests', $this->getSecurityVoiceRequests());
    }

    /**
     * Sets the activeUsers property value. The activeUsers property
     * @param int|null $value Value to set for the activeUsers property.
    */
    public function setActiveUsers(?int $value): void {
        $this->getBackingStore()->set('activeUsers', $value);
    }

    /**
     * Sets the appId property value. The appId property
     * @param string|null $value Value to set for the appId property.
    */
    public function setAppId(?string $value): void {
        $this->getBackingStore()->set('appId', $value);
    }

    /**
     * Sets the authenticationCompletions property value. The authenticationCompletions property
     * @param int|null $value Value to set for the authenticationCompletions property.
    */
    public function setAuthenticationCompletions(?int $value): void {
        $this->getBackingStore()->set('authenticationCompletions', $value);
    }

    /**
     * Sets the authenticationRequests property value. The authenticationRequests property
     * @param int|null $value Value to set for the authenticationRequests property.
    */
    public function setAuthenticationRequests(?int $value): void {
        $this->getBackingStore()->set('authenticationRequests', $value);
    }

    /**
     * Sets the factDate property value. The factDate property
     * @param Date|null $value Value to set for the factDate property.
    */
    public function setFactDate(?Date $value): void {
        $this->getBackingStore()->set('factDate', $value);
    }

    /**
     * Sets the os property value. The os property
     * @param string|null $value Value to set for the os property.
    */
    public function setOs(?string $value): void {
        $this->getBackingStore()->set('os', $value);
    }

    /**
     * Sets the securityTextCompletions property value. The securityTextCompletions property
     * @param int|null $value Value to set for the securityTextCompletions property.
    */
    public function setSecurityTextCompletions(?int $value): void {
        $this->getBackingStore()->set('securityTextCompletions', $value);
    }

    /**
     * Sets the securityTextRequests property value. The securityTextRequests property
     * @param int|null $value Value to set for the securityTextRequests property.
    */
    public function setSecurityTextRequests(?int $value): void {
        $this->getBackingStore()->set('securityTextRequests', $value);
    }

    /**
     * Sets the securityVoiceCompletions property value. The securityVoiceCompletions property
     * @param int|null $value Value to set for the securityVoiceCompletions property.
    */
    public function setSecurityVoiceCompletions(?int $value): void {
        $this->getBackingStore()->set('securityVoiceCompletions', $value);
    }

    /**
     * Sets the securityVoiceRequests property value. The securityVoiceRequests property
     * @param int|null $value Value to set for the securityVoiceRequests property.
    */
    public function setSecurityVoiceRequests(?int $value): void {
        $this->getBackingStore()->set('securityVoiceRequests', $value);
    }

}
