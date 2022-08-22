<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementDomainJoinConnector extends Entity implements Parsable 
{
    /**
     * @var string|null $displayName The connector display name.
    */
    private ?string $displayName = null;
    
    /**
     * @var DateTime|null $lastConnectionDateTime Last time connector contacted Intune.
    */
    private ?DateTime $lastConnectionDateTime = null;
    
    /**
     * @var DeviceManagementDomainJoinConnectorState|null $state The ODJ request states.
    */
    private ?DeviceManagementDomainJoinConnectorState $state = null;
    
    /**
     * @var string|null $version The version of the connector.
    */
    private ?string $version = null;
    
    /**
     * Instantiates a new DeviceManagementDomainJoinConnector and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceManagementDomainJoinConnector');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementDomainJoinConnector
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementDomainJoinConnector {
        return new DeviceManagementDomainJoinConnector();
    }

    /**
     * Gets the displayName property value. The connector display name.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'lastConnectionDateTime' => function (ParseNode $n) use ($o) { $o->setLastConnectionDateTime($n->getDateTimeValue()); },
            'state' => function (ParseNode $n) use ($o) { $o->setState($n->getEnumValue(DeviceManagementDomainJoinConnectorState::class)); },
            'version' => function (ParseNode $n) use ($o) { $o->setVersion($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the lastConnectionDateTime property value. Last time connector contacted Intune.
     * @return DateTime|null
    */
    public function getLastConnectionDateTime(): ?DateTime {
        return $this->lastConnectionDateTime;
    }

    /**
     * Gets the state property value. The ODJ request states.
     * @return DeviceManagementDomainJoinConnectorState|null
    */
    public function getState(): ?DeviceManagementDomainJoinConnectorState {
        return $this->state;
    }

    /**
     * Gets the version property value. The version of the connector.
     * @return string|null
    */
    public function getVersion(): ?string {
        return $this->version;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeDateTimeValue('lastConnectionDateTime', $this->lastConnectionDateTime);
        $writer->writeEnumValue('state', $this->state);
        $writer->writeStringValue('version', $this->version);
    }

    /**
     * Sets the displayName property value. The connector display name.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the lastConnectionDateTime property value. Last time connector contacted Intune.
     *  @param DateTime|null $value Value to set for the lastConnectionDateTime property.
    */
    public function setLastConnectionDateTime(?DateTime $value ): void {
        $this->lastConnectionDateTime = $value;
    }

    /**
     * Sets the state property value. The ODJ request states.
     *  @param DeviceManagementDomainJoinConnectorState|null $value Value to set for the state property.
    */
    public function setState(?DeviceManagementDomainJoinConnectorState $value ): void {
        $this->state = $value;
    }

    /**
     * Sets the version property value. The version of the connector.
     *  @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value ): void {
        $this->version = $value;
    }

}
