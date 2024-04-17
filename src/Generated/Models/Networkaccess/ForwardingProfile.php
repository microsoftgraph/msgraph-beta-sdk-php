<?php

namespace Microsoft\Graph\Beta\Generated\Models\Networkaccess;

use Microsoft\Graph\Beta\Generated\Models\ServicePrincipal;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

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
     * Gets the associations property value. Specifies the users, groups, devices, and remote networks whose traffic is associated with the given traffic forwarding profile.
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
            'priority' => fn(ParseNode $n) => $o->setPriority($n->getIntegerValue()),
            'servicePrincipal' => fn(ParseNode $n) => $o->setServicePrincipal($n->getObjectValue([ServicePrincipal::class, 'createFromDiscriminatorValue'])),
            'trafficForwardingType' => fn(ParseNode $n) => $o->setTrafficForwardingType($n->getEnumValue(TrafficForwardingType::class)),
        ]);
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
     * Gets the servicePrincipal property value. The servicePrincipal property
     * @return ServicePrincipal|null
    */
    public function getServicePrincipal(): ?ServicePrincipal {
        $val = $this->getBackingStore()->get('servicePrincipal');
        if (is_null($val) || $val instanceof ServicePrincipal) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'servicePrincipal'");
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
        $writer->writeIntegerValue('priority', $this->getPriority());
        $writer->writeObjectValue('servicePrincipal', $this->getServicePrincipal());
        $writer->writeEnumValue('trafficForwardingType', $this->getTrafficForwardingType());
    }

    /**
     * Sets the associations property value. Specifies the users, groups, devices, and remote networks whose traffic is associated with the given traffic forwarding profile.
     * @param array<Association>|null $value Value to set for the associations property.
    */
    public function setAssociations(?array $value): void {
        $this->getBackingStore()->set('associations', $value);
    }

    /**
     * Sets the priority property value. Profile priority.
     * @param int|null $value Value to set for the priority property.
    */
    public function setPriority(?int $value): void {
        $this->getBackingStore()->set('priority', $value);
    }

    /**
     * Sets the servicePrincipal property value. The servicePrincipal property
     * @param ServicePrincipal|null $value Value to set for the servicePrincipal property.
    */
    public function setServicePrincipal(?ServicePrincipal $value): void {
        $this->getBackingStore()->set('servicePrincipal', $value);
    }

    /**
     * Sets the trafficForwardingType property value. The trafficForwardingType property
     * @param TrafficForwardingType|null $value Value to set for the trafficForwardingType property.
    */
    public function setTrafficForwardingType(?TrafficForwardingType $value): void {
        $this->getBackingStore()->set('trafficForwardingType', $value);
    }

}
