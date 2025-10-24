<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\Networkaccess;

use Microsoft\\Graph\\Beta\\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConditionalAccessSettings extends Entity implements Parsable 
{
    /**
     * Instantiates a new ConditionalAccessSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConditionalAccessSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConditionalAccessSettings {
        return new ConditionalAccessSettings();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'signalingStatus' => fn(ParseNode $n) => $o->setSignalingStatus($n->getEnumValue(Status::class)),
        ]);
    }

    /**
     * Gets the signalingStatus property value. The signalingStatus property
     * @return Status|null
    */
    public function getSignalingStatus(): ?Status {
        $val = $this->getBackingStore()->get('signalingStatus');
        if (is_null($val) || $val instanceof Status) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'signalingStatus'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('signalingStatus', $this->getSignalingStatus());
    }

    /**
     * Sets the signalingStatus property value. The signalingStatus property
     * @param Status|null $value Value to set for the signalingStatus property.
    */
    public function setSignalingStatus(?Status $value): void {
        $this->getBackingStore()->set('signalingStatus', $value);
    }

}
