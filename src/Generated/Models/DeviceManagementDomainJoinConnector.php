<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A Domain Join Connector is a connector that is responsible to allocate (and delete) machine account blobs
*/
class DeviceManagementDomainJoinConnector extends Entity implements Parsable 
{
    /**
     * Instantiates a new deviceManagementDomainJoinConnector and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'lastConnectionDateTime' => fn(ParseNode $n) => $o->setLastConnectionDateTime($n->getDateTimeValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(DeviceManagementDomainJoinConnectorState::class)),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastConnectionDateTime property value. Last time connector contacted Intune.
     * @return DateTime|null
    */
    public function getLastConnectionDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastConnectionDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastConnectionDateTime'");
    }

    /**
     * Gets the state property value. The ODJ request states.
     * @return DeviceManagementDomainJoinConnectorState|null
    */
    public function getState(): ?DeviceManagementDomainJoinConnectorState {
        $val = $this->getBackingStore()->get('state');
        if (is_null($val) || $val instanceof DeviceManagementDomainJoinConnectorState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'state'");
    }

    /**
     * Gets the version property value. The version of the connector.
     * @return string|null
    */
    public function getVersion(): ?string {
        $val = $this->getBackingStore()->get('version');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'version'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateTimeValue('lastConnectionDateTime', $this->getLastConnectionDateTime());
        $writer->writeEnumValue('state', $this->getState());
        $writer->writeStringValue('version', $this->getVersion());
    }

    /**
     * Sets the displayName property value. The connector display name.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the lastConnectionDateTime property value. Last time connector contacted Intune.
     * @param DateTime|null $value Value to set for the lastConnectionDateTime property.
    */
    public function setLastConnectionDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastConnectionDateTime', $value);
    }

    /**
     * Sets the state property value. The ODJ request states.
     * @param DeviceManagementDomainJoinConnectorState|null $value Value to set for the state property.
    */
    public function setState(?DeviceManagementDomainJoinConnectorState $value): void {
        $this->getBackingStore()->set('state', $value);
    }

    /**
     * Sets the version property value. The version of the connector.
     * @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value): void {
        $this->getBackingStore()->set('version', $value);
    }

}
