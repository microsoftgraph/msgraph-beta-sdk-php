<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class NdesConnector extends Entity implements Parsable 
{
    /**
     * @var string|null $connectorVersion The build version of the Ndes Connector.
    */
    private ?string $connectorVersion = null;
    
    /**
     * @var string|null $displayName The friendly name of the Ndes Connector.
    */
    private ?string $displayName = null;
    
    /**
     * @var DateTime|null $enrolledDateTime Timestamp when on-prem certificate connector was enrolled in Intune.
    */
    private ?DateTime $enrolledDateTime = null;
    
    /**
     * @var DateTime|null $lastConnectionDateTime Last connection time for the Ndes Connector
    */
    private ?DateTime $lastConnectionDateTime = null;
    
    /**
     * @var string|null $machineName Name of the machine running on-prem certificate connector service.
    */
    private ?string $machineName = null;
    
    /**
     * @var array<string>|null $roleScopeTagIds List of Scope Tags for this Entity instance.
    */
    private ?array $roleScopeTagIds = null;
    
    /**
     * @var NdesConnectorState|null $state The current status of the Ndes Connector.
    */
    private ?NdesConnectorState $state = null;
    
    /**
     * Instantiates a new ndesConnector and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.ndesConnector');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return NdesConnector
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): NdesConnector {
        return new NdesConnector();
    }

    /**
     * Gets the connectorVersion property value. The build version of the Ndes Connector.
     * @return string|null
    */
    public function getConnectorVersion(): ?string {
        return $this->connectorVersion;
    }

    /**
     * Gets the displayName property value. The friendly name of the Ndes Connector.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the enrolledDateTime property value. Timestamp when on-prem certificate connector was enrolled in Intune.
     * @return DateTime|null
    */
    public function getEnrolledDateTime(): ?DateTime {
        return $this->enrolledDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'connectorVersion' => function (ParseNode $n) use ($o) { $o->setConnectorVersion($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'enrolledDateTime' => function (ParseNode $n) use ($o) { $o->setEnrolledDateTime($n->getDateTimeValue()); },
            'lastConnectionDateTime' => function (ParseNode $n) use ($o) { $o->setLastConnectionDateTime($n->getDateTimeValue()); },
            'machineName' => function (ParseNode $n) use ($o) { $o->setMachineName($n->getStringValue()); },
            'roleScopeTagIds' => function (ParseNode $n) use ($o) { $o->setRoleScopeTagIds($n->getCollectionOfPrimitiveValues()); },
            'state' => function (ParseNode $n) use ($o) { $o->setState($n->getEnumValue(NdesConnectorState::class)); },
        ]);
    }

    /**
     * Gets the lastConnectionDateTime property value. Last connection time for the Ndes Connector
     * @return DateTime|null
    */
    public function getLastConnectionDateTime(): ?DateTime {
        return $this->lastConnectionDateTime;
    }

    /**
     * Gets the machineName property value. Name of the machine running on-prem certificate connector service.
     * @return string|null
    */
    public function getMachineName(): ?string {
        return $this->machineName;
    }

    /**
     * Gets the roleScopeTagIds property value. List of Scope Tags for this Entity instance.
     * @return array<string>|null
    */
    public function getRoleScopeTagIds(): ?array {
        return $this->roleScopeTagIds;
    }

    /**
     * Gets the state property value. The current status of the Ndes Connector.
     * @return NdesConnectorState|null
    */
    public function getState(): ?NdesConnectorState {
        return $this->state;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('connectorVersion', $this->connectorVersion);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeDateTimeValue('enrolledDateTime', $this->enrolledDateTime);
        $writer->writeDateTimeValue('lastConnectionDateTime', $this->lastConnectionDateTime);
        $writer->writeStringValue('machineName', $this->machineName);
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->roleScopeTagIds);
        $writer->writeEnumValue('state', $this->state);
    }

    /**
     * Sets the connectorVersion property value. The build version of the Ndes Connector.
     *  @param string|null $value Value to set for the connectorVersion property.
    */
    public function setConnectorVersion(?string $value ): void {
        $this->connectorVersion = $value;
    }

    /**
     * Sets the displayName property value. The friendly name of the Ndes Connector.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the enrolledDateTime property value. Timestamp when on-prem certificate connector was enrolled in Intune.
     *  @param DateTime|null $value Value to set for the enrolledDateTime property.
    */
    public function setEnrolledDateTime(?DateTime $value ): void {
        $this->enrolledDateTime = $value;
    }

    /**
     * Sets the lastConnectionDateTime property value. Last connection time for the Ndes Connector
     *  @param DateTime|null $value Value to set for the lastConnectionDateTime property.
    */
    public function setLastConnectionDateTime(?DateTime $value ): void {
        $this->lastConnectionDateTime = $value;
    }

    /**
     * Sets the machineName property value. Name of the machine running on-prem certificate connector service.
     *  @param string|null $value Value to set for the machineName property.
    */
    public function setMachineName(?string $value ): void {
        $this->machineName = $value;
    }

    /**
     * Sets the roleScopeTagIds property value. List of Scope Tags for this Entity instance.
     *  @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value ): void {
        $this->roleScopeTagIds = $value;
    }

    /**
     * Sets the state property value. The current status of the Ndes Connector.
     *  @param NdesConnectorState|null $value Value to set for the state property.
    */
    public function setState(?NdesConnectorState $value ): void {
        $this->state = $value;
    }

}
