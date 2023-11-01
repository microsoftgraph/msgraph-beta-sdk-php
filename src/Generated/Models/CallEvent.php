<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CallEvent extends Entity implements Parsable 
{
    /**
     * Instantiates a new callEvent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CallEvent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CallEvent {
        return new CallEvent();
    }

    /**
     * Gets the callEventType property value. The callEventType property
     * @return CallEventType|null
    */
    public function getCallEventType(): ?CallEventType {
        $val = $this->getBackingStore()->get('callEventType');
        if (is_null($val) || $val instanceof CallEventType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'callEventType'");
    }

    /**
     * Gets the direction property value. The direction property
     * @return CallDirection|null
    */
    public function getDirection(): ?CallDirection {
        $val = $this->getBackingStore()->get('direction');
        if (is_null($val) || $val instanceof CallDirection) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'direction'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'callEventType' => fn(ParseNode $n) => $o->setCallEventType($n->getEnumValue(CallEventType::class)),
            'direction' => fn(ParseNode $n) => $o->setDirection($n->getEnumValue(CallDirection::class)),
            'joinCallUrl' => fn(ParseNode $n) => $o->setJoinCallUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the joinCallUrl property value. The joinCallUrl property
     * @return string|null
    */
    public function getJoinCallUrl(): ?string {
        $val = $this->getBackingStore()->get('joinCallUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'joinCallUrl'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('callEventType', $this->getCallEventType());
        $writer->writeEnumValue('direction', $this->getDirection());
        $writer->writeStringValue('joinCallUrl', $this->getJoinCallUrl());
    }

    /**
     * Sets the callEventType property value. The callEventType property
     * @param CallEventType|null $value Value to set for the callEventType property.
    */
    public function setCallEventType(?CallEventType $value): void {
        $this->getBackingStore()->set('callEventType', $value);
    }

    /**
     * Sets the direction property value. The direction property
     * @param CallDirection|null $value Value to set for the direction property.
    */
    public function setDirection(?CallDirection $value): void {
        $this->getBackingStore()->set('direction', $value);
    }

    /**
     * Sets the joinCallUrl property value. The joinCallUrl property
     * @param string|null $value Value to set for the joinCallUrl property.
    */
    public function setJoinCallUrl(?string $value): void {
        $this->getBackingStore()->set('joinCallUrl', $value);
    }

}
