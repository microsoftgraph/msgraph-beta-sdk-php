<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class MfaCompletionMetric extends Entity implements Parsable 
{
    /**
     * Instantiates a new mfaCompletionMetric and sets the default values.
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
     * Gets the attemptsCount property value. The attemptsCount property
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
            'appId' => fn(ParseNode $n) => $o->setAppId($n->getStringValue()),
            'attemptsCount' => fn(ParseNode $n) => $o->setAttemptsCount($n->getIntegerValue()),
            'factDate' => fn(ParseNode $n) => $o->setFactDate($n->getDateValue()),
            'mfaMethod' => fn(ParseNode $n) => $o->setMfaMethod($n->getStringValue()),
            'os' => fn(ParseNode $n) => $o->setOs($n->getStringValue()),
            'successCount' => fn(ParseNode $n) => $o->setSuccessCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the mfaMethod property value. The mfaMethod property
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
     * Gets the successCount property value. The successCount property
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
        $writer->writeDateValue('factDate', $this->getFactDate());
        $writer->writeStringValue('mfaMethod', $this->getMfaMethod());
        $writer->writeStringValue('os', $this->getOs());
        $writer->writeIntegerValue('successCount', $this->getSuccessCount());
    }

    /**
     * Sets the appId property value. The appId property
     * @param string|null $value Value to set for the appId property.
    */
    public function setAppId(?string $value): void {
        $this->getBackingStore()->set('appId', $value);
    }

    /**
     * Sets the attemptsCount property value. The attemptsCount property
     * @param int|null $value Value to set for the attemptsCount property.
    */
    public function setAttemptsCount(?int $value): void {
        $this->getBackingStore()->set('attemptsCount', $value);
    }

    /**
     * Sets the factDate property value. The factDate property
     * @param Date|null $value Value to set for the factDate property.
    */
    public function setFactDate(?Date $value): void {
        $this->getBackingStore()->set('factDate', $value);
    }

    /**
     * Sets the mfaMethod property value. The mfaMethod property
     * @param string|null $value Value to set for the mfaMethod property.
    */
    public function setMfaMethod(?string $value): void {
        $this->getBackingStore()->set('mfaMethod', $value);
    }

    /**
     * Sets the os property value. The os property
     * @param string|null $value Value to set for the os property.
    */
    public function setOs(?string $value): void {
        $this->getBackingStore()->set('os', $value);
    }

    /**
     * Sets the successCount property value. The successCount property
     * @param int|null $value Value to set for the successCount property.
    */
    public function setSuccessCount(?int $value): void {
        $this->getBackingStore()->set('successCount', $value);
    }

}
