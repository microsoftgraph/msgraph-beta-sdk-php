<?php

namespace Microsoft\Graph\Beta\Generated\Models\Networkaccess;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ForwardingPolicy extends Policy implements Parsable 
{
    /**
     * Instantiates a new ForwardingPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.networkaccess.forwardingPolicy');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ForwardingPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ForwardingPolicy {
        return new ForwardingPolicy();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'trafficForwardingType' => fn(ParseNode $n) => $o->setTrafficForwardingType($n->getEnumValue(TrafficForwardingType::class)),
        ]);
    }

    /**
     * Gets the trafficForwardingType property value. The trafficForwardingType property
     * @return TrafficForwardingType|null
    */
    public function getTrafficForwardingType(): ?TrafficForwardingType {
        $val = $this->getBackingStore()->get('trafficForwardingType');
        if (is_null($val) || $val instanceof TrafficForwardingType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'trafficForwardingType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('trafficForwardingType', $this->getTrafficForwardingType());
    }

    /**
     * Sets the trafficForwardingType property value. The trafficForwardingType property
     * @param TrafficForwardingType|null $value Value to set for the trafficForwardingType property.
    */
    public function setTrafficForwardingType(?TrafficForwardingType $value): void {
        $this->getBackingStore()->set('trafficForwardingType', $value);
    }

}
