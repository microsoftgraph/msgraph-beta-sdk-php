<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MfaFailure extends Entity implements Parsable 
{
    /**
     * Instantiates a new MfaFailure and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MfaFailure
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MfaFailure {
        return new MfaFailure();
    }

    /**
     * Gets the count property value. The count property
     * @return int|null
    */
    public function getCount(): ?int {
        $val = $this->getBackingStore()->get('count');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'count'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'count' => fn(ParseNode $n) => $o->setCount($n->getIntegerValue()),
            'reason' => fn(ParseNode $n) => $o->setReason($n->getStringValue()),
            'reasonCode' => fn(ParseNode $n) => $o->setReasonCode($n->getEnumValue(MfaFailureReasonCode::class)),
        ]);
    }

    /**
     * Gets the reason property value. The reason property
     * @return string|null
    */
    public function getReason(): ?string {
        $val = $this->getBackingStore()->get('reason');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reason'");
    }

    /**
     * Gets the reasonCode property value. The reasonCode property
     * @return MfaFailureReasonCode|null
    */
    public function getReasonCode(): ?MfaFailureReasonCode {
        $val = $this->getBackingStore()->get('reasonCode');
        if (is_null($val) || $val instanceof MfaFailureReasonCode) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reasonCode'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('count', $this->getCount());
        $writer->writeStringValue('reason', $this->getReason());
        $writer->writeEnumValue('reasonCode', $this->getReasonCode());
    }

    /**
     * Sets the count property value. The count property
     * @param int|null $value Value to set for the count property.
    */
    public function setCount(?int $value): void {
        $this->getBackingStore()->set('count', $value);
    }

    /**
     * Sets the reason property value. The reason property
     * @param string|null $value Value to set for the reason property.
    */
    public function setReason(?string $value): void {
        $this->getBackingStore()->set('reason', $value);
    }

    /**
     * Sets the reasonCode property value. The reasonCode property
     * @param MfaFailureReasonCode|null $value Value to set for the reasonCode property.
    */
    public function setReasonCode(?MfaFailureReasonCode $value): void {
        $this->getBackingStore()->set('reasonCode', $value);
    }

}
