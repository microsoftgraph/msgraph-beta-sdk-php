<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ConnectorGroup extends Entity implements Parsable 
{
    /**
     * Instantiates a new ConnectorGroup and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConnectorGroup
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConnectorGroup {
        return new ConnectorGroup();
    }

    /**
     * Gets the applications property value. The applications property
     * @return array<Application>|null
    */
    public function getApplications(): ?array {
        $val = $this->getBackingStore()->get('applications');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Application::class);
            /** @var array<Application>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applications'");
    }

    /**
     * Gets the connectorGroupType property value. The connectorGroupType property
     * @return ConnectorGroupType|null
    */
    public function getConnectorGroupType(): ?ConnectorGroupType {
        $val = $this->getBackingStore()->get('connectorGroupType');
        if (is_null($val) || $val instanceof ConnectorGroupType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'connectorGroupType'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'applications' => fn(ParseNode $n) => $o->setApplications($n->getCollectionOfObjectValues([Application::class, 'createFromDiscriminatorValue'])),
            'connectorGroupType' => fn(ParseNode $n) => $o->setConnectorGroupType($n->getEnumValue(ConnectorGroupType::class)),
            'isDefault' => fn(ParseNode $n) => $o->setIsDefault($n->getBooleanValue()),
            'members' => fn(ParseNode $n) => $o->setMembers($n->getCollectionOfObjectValues([Connector::class, 'createFromDiscriminatorValue'])),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'region' => fn(ParseNode $n) => $o->setRegion($n->getEnumValue(ConnectorGroupRegion::class)),
        ]);
    }

    /**
     * Gets the isDefault property value. Indicates if the connectorGroup is the default connectorGroup. Only a single connector group can be the default connectorGroup and this is pre-set by the system. Read-only.
     * @return bool|null
    */
    public function getIsDefault(): ?bool {
        $val = $this->getBackingStore()->get('isDefault');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isDefault'");
    }

    /**
     * Gets the members property value. The members property
     * @return array<Connector>|null
    */
    public function getMembers(): ?array {
        $val = $this->getBackingStore()->get('members');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Connector::class);
            /** @var array<Connector>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'members'");
    }

    /**
     * Gets the name property value. The name associated with the connectorGroup.
     * @return string|null
    */
    public function getName(): ?string {
        $val = $this->getBackingStore()->get('name');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'name'");
    }

    /**
     * Gets the region property value. The region the connectorGroup is assigned to and will optimize traffic for. This region can only be set if no connectors or applications are assigned to the connectorGroup. The possible values are: nam (for North America), eur (for Europe), aus (for Australia), asia (for Asia), ind (for India), and unknownFutureValue.
     * @return ConnectorGroupRegion|null
    */
    public function getRegion(): ?ConnectorGroupRegion {
        $val = $this->getBackingStore()->get('region');
        if (is_null($val) || $val instanceof ConnectorGroupRegion) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'region'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('applications', $this->getApplications());
        $writer->writeEnumValue('connectorGroupType', $this->getConnectorGroupType());
        $writer->writeBooleanValue('isDefault', $this->getIsDefault());
        $writer->writeCollectionOfObjectValues('members', $this->getMembers());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeEnumValue('region', $this->getRegion());
    }

    /**
     * Sets the applications property value. The applications property
     * @param array<Application>|null $value Value to set for the applications property.
    */
    public function setApplications(?array $value): void {
        $this->getBackingStore()->set('applications', $value);
    }

    /**
     * Sets the connectorGroupType property value. The connectorGroupType property
     * @param ConnectorGroupType|null $value Value to set for the connectorGroupType property.
    */
    public function setConnectorGroupType(?ConnectorGroupType $value): void {
        $this->getBackingStore()->set('connectorGroupType', $value);
    }

    /**
     * Sets the isDefault property value. Indicates if the connectorGroup is the default connectorGroup. Only a single connector group can be the default connectorGroup and this is pre-set by the system. Read-only.
     * @param bool|null $value Value to set for the isDefault property.
    */
    public function setIsDefault(?bool $value): void {
        $this->getBackingStore()->set('isDefault', $value);
    }

    /**
     * Sets the members property value. The members property
     * @param array<Connector>|null $value Value to set for the members property.
    */
    public function setMembers(?array $value): void {
        $this->getBackingStore()->set('members', $value);
    }

    /**
     * Sets the name property value. The name associated with the connectorGroup.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the region property value. The region the connectorGroup is assigned to and will optimize traffic for. This region can only be set if no connectors or applications are assigned to the connectorGroup. The possible values are: nam (for North America), eur (for Europe), aus (for Australia), asia (for Asia), ind (for India), and unknownFutureValue.
     * @param ConnectorGroupRegion|null $value Value to set for the region property.
    */
    public function setRegion(?ConnectorGroupRegion $value): void {
        $this->getBackingStore()->set('region', $value);
    }

}
