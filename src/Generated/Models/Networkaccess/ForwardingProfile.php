<?php

namespace Microsoft\Graph\Beta\Generated\Models\Networkaccess;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ForwardingProfile extends Profile implements Parsable 
{
    /**
     * Instantiates a new forwardingProfile and sets the default values.
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
     * Gets the associations property value. Specifies the users, groups, devices, and branch locations whose traffic is associated with the given traffic forwarding profile.
     * @return array<Association>|null
    */
    public function getAssociations(): ?array {
        $val = $this->getBackingStore()->get('associations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Association::class);
            /** @var array<Association>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'associations'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'associations' => fn(ParseNode $n) => $o->setAssociations($n->getCollectionOfObjectValues([Association::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'priority' => fn(ParseNode $n) => $o->setPriority($n->getIntegerValue()),
            'trafficForwardingType' => fn(ParseNode $n) => $o->setTrafficForwardingType($n->getEnumValue(TrafficForwardingType::class)),
        ]);
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the priority property value. Profile priority.
     * @return int|null
    */
    public function getPriority(): ?int {
        $val = $this->getBackingStore()->get('priority');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'priority'");
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
        $writer->writeCollectionOfObjectValues('associations', $this->getAssociations());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('priority', $this->getPriority());
        $writer->writeEnumValue('trafficForwardingType', $this->getTrafficForwardingType());
    }

    /**
     * Sets the associations property value. Specifies the users, groups, devices, and branch locations whose traffic is associated with the given traffic forwarding profile.
     * @param array<Association>|null $value Value to set for the associations property.
    */
    public function setAssociations(?array $value): void {
        $this->getBackingStore()->set('associations', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the priority property value. Profile priority.
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
