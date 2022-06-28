<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConnectorGroup extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<Application>|null $applications The applications property
    */
    private ?array $applications = null;
    
    /**
     * @var ConnectorGroupType|null $connectorGroupType Indicates the type of hybrid agent. This pre-set by the system. Possible values are: applicationProxy. Read-only.
    */
    private ?ConnectorGroupType $connectorGroupType = null;
    
    /**
     * @var bool|null $isDefault Indicates if the connectorGroup is the default connectorGroup. Only a single connector group can be the default connectorGroup and this is pre-set by the system. Read-only.
    */
    private ?bool $isDefault = null;
    
    /**
     * @var array<Connector>|null $members The members property
    */
    private ?array $members = null;
    
    /**
     * @var string|null $name The name associated with the connectorGroup.
    */
    private ?string $name = null;
    
    /**
     * @var ConnectorGroupRegion|null $region The region the connectorGroup is assigned to and will optimize traffic for. This region can only be set if no connectors or applications are assigned to the connectorGroup. The possible values are: nam (for North America), eur (for Europe), aus (for Australia), asia (for Asia), ind (for India), and unknownFutureValue.
    */
    private ?ConnectorGroupRegion $region = null;
    
    /**
     * Instantiates a new connectorGroup and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the applications property value. The applications property
     * @return array<Application>|null
    */
    public function getApplications(): ?array {
        return $this->applications;
    }

    /**
     * Gets the connectorGroupType property value. Indicates the type of hybrid agent. This pre-set by the system. Possible values are: applicationProxy. Read-only.
     * @return ConnectorGroupType|null
    */
    public function getConnectorGroupType(): ?ConnectorGroupType {
        return $this->connectorGroupType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'applications' => function (ParseNode $n) use ($o) { $o->setApplications($n->getCollectionOfObjectValues(array(Application::class, 'createFromDiscriminatorValue'))); },
            'connectorGroupType' => function (ParseNode $n) use ($o) { $o->setConnectorGroupType($n->getEnumValue(ConnectorGroupType::class)); },
            'isDefault' => function (ParseNode $n) use ($o) { $o->setIsDefault($n->getBooleanValue()); },
            'members' => function (ParseNode $n) use ($o) { $o->setMembers($n->getCollectionOfObjectValues(array(Connector::class, 'createFromDiscriminatorValue'))); },
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
            'region' => function (ParseNode $n) use ($o) { $o->setRegion($n->getEnumValue(ConnectorGroupRegion::class)); },
        ]);
    }

    /**
     * Gets the isDefault property value. Indicates if the connectorGroup is the default connectorGroup. Only a single connector group can be the default connectorGroup and this is pre-set by the system. Read-only.
     * @return bool|null
    */
    public function getIsDefault(): ?bool {
        return $this->isDefault;
    }

    /**
     * Gets the members property value. The members property
     * @return array<Connector>|null
    */
    public function getMembers(): ?array {
        return $this->members;
    }

    /**
     * Gets the name property value. The name associated with the connectorGroup.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the region property value. The region the connectorGroup is assigned to and will optimize traffic for. This region can only be set if no connectors or applications are assigned to the connectorGroup. The possible values are: nam (for North America), eur (for Europe), aus (for Australia), asia (for Asia), ind (for India), and unknownFutureValue.
     * @return ConnectorGroupRegion|null
    */
    public function getRegion(): ?ConnectorGroupRegion {
        return $this->region;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('applications', $this->applications);
        $writer->writeEnumValue('connectorGroupType', $this->connectorGroupType);
        $writer->writeBooleanValue('isDefault', $this->isDefault);
        $writer->writeCollectionOfObjectValues('members', $this->members);
        $writer->writeStringValue('name', $this->name);
        $writer->writeEnumValue('region', $this->region);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the applications property value. The applications property
     *  @param array<Application>|null $value Value to set for the applications property.
    */
    public function setApplications(?array $value ): void {
        $this->applications = $value;
    }

    /**
     * Sets the connectorGroupType property value. Indicates the type of hybrid agent. This pre-set by the system. Possible values are: applicationProxy. Read-only.
     *  @param ConnectorGroupType|null $value Value to set for the connectorGroupType property.
    */
    public function setConnectorGroupType(?ConnectorGroupType $value ): void {
        $this->connectorGroupType = $value;
    }

    /**
     * Sets the isDefault property value. Indicates if the connectorGroup is the default connectorGroup. Only a single connector group can be the default connectorGroup and this is pre-set by the system. Read-only.
     *  @param bool|null $value Value to set for the isDefault property.
    */
    public function setIsDefault(?bool $value ): void {
        $this->isDefault = $value;
    }

    /**
     * Sets the members property value. The members property
     *  @param array<Connector>|null $value Value to set for the members property.
    */
    public function setMembers(?array $value ): void {
        $this->members = $value;
    }

    /**
     * Sets the name property value. The name associated with the connectorGroup.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the region property value. The region the connectorGroup is assigned to and will optimize traffic for. This region can only be set if no connectors or applications are assigned to the connectorGroup. The possible values are: nam (for North America), eur (for Europe), aus (for Australia), asia (for Asia), ind (for India), and unknownFutureValue.
     *  @param ConnectorGroupRegion|null $value Value to set for the region property.
    */
    public function setRegion(?ConnectorGroupRegion $value ): void {
        $this->region = $value;
    }

}
