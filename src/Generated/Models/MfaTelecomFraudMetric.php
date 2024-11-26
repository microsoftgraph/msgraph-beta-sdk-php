<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class MfaTelecomFraudMetric extends Entity implements Parsable 
{
    /**
     * Instantiates a new MfaTelecomFraudMetric and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MfaTelecomFraudMetric
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MfaTelecomFraudMetric {
        return new MfaTelecomFraudMetric();
    }

    /**
     * Gets the captchaFailureCount property value. The captchaFailureCount property
     * @return int|null
    */
    public function getCaptchaFailureCount(): ?int {
        $val = $this->getBackingStore()->get('captchaFailureCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'captchaFailureCount'");
    }

    /**
     * Gets the captchaNotTriggeredUserCount property value. The captchaNotTriggeredUserCount property
     * @return int|null
    */
    public function getCaptchaNotTriggeredUserCount(): ?int {
        $val = $this->getBackingStore()->get('captchaNotTriggeredUserCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'captchaNotTriggeredUserCount'");
    }

    /**
     * Gets the captchaShownUserCount property value. The captchaShownUserCount property
     * @return int|null
    */
    public function getCaptchaShownUserCount(): ?int {
        $val = $this->getBackingStore()->get('captchaShownUserCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'captchaShownUserCount'");
    }

    /**
     * Gets the captchaSuccessCount property value. The captchaSuccessCount property
     * @return int|null
    */
    public function getCaptchaSuccessCount(): ?int {
        $val = $this->getBackingStore()->get('captchaSuccessCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'captchaSuccessCount'");
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
            'captchaFailureCount' => fn(ParseNode $n) => $o->setCaptchaFailureCount($n->getIntegerValue()),
            'captchaNotTriggeredUserCount' => fn(ParseNode $n) => $o->setCaptchaNotTriggeredUserCount($n->getIntegerValue()),
            'captchaShownUserCount' => fn(ParseNode $n) => $o->setCaptchaShownUserCount($n->getIntegerValue()),
            'captchaSuccessCount' => fn(ParseNode $n) => $o->setCaptchaSuccessCount($n->getIntegerValue()),
            'factDate' => fn(ParseNode $n) => $o->setFactDate($n->getDateValue()),
            'telecomBlockedUserCount' => fn(ParseNode $n) => $o->setTelecomBlockedUserCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the telecomBlockedUserCount property value. The telecomBlockedUserCount property
     * @return int|null
    */
    public function getTelecomBlockedUserCount(): ?int {
        $val = $this->getBackingStore()->get('telecomBlockedUserCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'telecomBlockedUserCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('captchaFailureCount', $this->getCaptchaFailureCount());
        $writer->writeIntegerValue('captchaNotTriggeredUserCount', $this->getCaptchaNotTriggeredUserCount());
        $writer->writeIntegerValue('captchaShownUserCount', $this->getCaptchaShownUserCount());
        $writer->writeIntegerValue('captchaSuccessCount', $this->getCaptchaSuccessCount());
        $writer->writeDateValue('factDate', $this->getFactDate());
        $writer->writeIntegerValue('telecomBlockedUserCount', $this->getTelecomBlockedUserCount());
    }

    /**
     * Sets the captchaFailureCount property value. The captchaFailureCount property
     * @param int|null $value Value to set for the captchaFailureCount property.
    */
    public function setCaptchaFailureCount(?int $value): void {
        $this->getBackingStore()->set('captchaFailureCount', $value);
    }

    /**
     * Sets the captchaNotTriggeredUserCount property value. The captchaNotTriggeredUserCount property
     * @param int|null $value Value to set for the captchaNotTriggeredUserCount property.
    */
    public function setCaptchaNotTriggeredUserCount(?int $value): void {
        $this->getBackingStore()->set('captchaNotTriggeredUserCount', $value);
    }

    /**
     * Sets the captchaShownUserCount property value. The captchaShownUserCount property
     * @param int|null $value Value to set for the captchaShownUserCount property.
    */
    public function setCaptchaShownUserCount(?int $value): void {
        $this->getBackingStore()->set('captchaShownUserCount', $value);
    }

    /**
     * Sets the captchaSuccessCount property value. The captchaSuccessCount property
     * @param int|null $value Value to set for the captchaSuccessCount property.
    */
    public function setCaptchaSuccessCount(?int $value): void {
        $this->getBackingStore()->set('captchaSuccessCount', $value);
    }

    /**
     * Sets the factDate property value. The factDate property
     * @param Date|null $value Value to set for the factDate property.
    */
    public function setFactDate(?Date $value): void {
        $this->getBackingStore()->set('factDate', $value);
    }

    /**
     * Sets the telecomBlockedUserCount property value. The telecomBlockedUserCount property
     * @param int|null $value Value to set for the telecomBlockedUserCount property.
    */
    public function setTelecomBlockedUserCount(?int $value): void {
        $this->getBackingStore()->set('telecomBlockedUserCount', $value);
    }

}
