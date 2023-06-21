<?php

namespace Microsoft\Graph\Beta\Generated\Models\Networkaccess;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ForwardingProfile extends Profile implements Parsable 
{
    /**
     * Instantiates a new ForwardingProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.networkaccess.forwardingProfile');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ForwardingProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ForwardingProfile {
        return new ForwardingProfile();
    }

    /**
     * Gets the associations property value. The associations property
     * @return array<Association>|null
    */
    public function getAssociations(): ?array {
        return $this->getBackingStore()->get('associations');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'associations' => fn(ParseNode $n) => $o->setAssociations($n->getCollectionOfObjectValues([Association::class, 'createFromDiscriminatorValue'])),
            'priority' => fn(ParseNode $n) => $o->setPriority($n->getIntegerValue()),
            'trafficForwardingType' => fn(ParseNode $n) => $o->setTrafficForwardingType($n->getEnumValue(TrafficForwardingType::class)),
        ]);
    }

    /**
     * Gets the priority property value. The priority property
     * @return int|null
    */
    public function getPriority(): ?int {
        return $this->getBackingStore()->get('priority');
    }

    /**
     * Gets the trafficForwardingType property value. The trafficForwardingType property
     * @return TrafficForwardingType|null
    */
    public function getTrafficForwardingType(): ?TrafficForwardingType {
        return $this->getBackingStore()->get('trafficForwardingType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('associations', $this->getAssociations());
        $writer->writeIntegerValue('priority', $this->getPriority());
        $writer->writeEnumValue('trafficForwardingType', $this->getTrafficForwardingType());
    }

    /**
     * Sets the associations property value. The associations property
     * @param array<Association>|null $value Value to set for the associations property.
    */
    public function setAssociations(?array $value): void {
        $this->getBackingStore()->set('associations', $value);
    }

    /**
     * Sets the priority property value. The priority property
     * @param int|null $value Value to set for the priority property.
    */
    public function setPriority(?int $value): void {
        $this->getBackingStore()->set('priority', $value);
    }

    /**
     * Sets the trafficForwardingType property value. The trafficForwardingType property
     * @param TrafficForwardingType|null $value Value to set for the trafficForwardingType property.
    */
    public function setTrafficForwardingType(?TrafficForwardingType $value): void {
        $this->getBackingStore()->set('trafficForwardingType', $value);
    }

}
