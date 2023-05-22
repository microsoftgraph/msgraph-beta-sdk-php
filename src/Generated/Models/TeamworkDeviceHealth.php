<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamworkDeviceHealth extends Entity implements Parsable 
{
    /**
     * Instantiates a new teamworkDeviceHealth and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkDeviceHealth
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkDeviceHealth {
        return new TeamworkDeviceHealth();
    }

    /**
     * Gets the connection property value. The connection property
     * @return TeamworkConnection|null
    */
    public function getConnection(): ?TeamworkConnection {
        return $this->getBackingStore()->get('connection');
    }

    /**
     * Gets the createdBy property value. Identity of the user who created the device health document.
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        return $this->getBackingStore()->get('createdBy');
    }

    /**
     * Gets the createdDateTime property value. The UTC date and time when the device health document was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'connection' => fn(ParseNode $n) => $o->setConnection($n->getObjectValue([TeamworkConnection::class, 'createFromDiscriminatorValue'])),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'hardwareHealth' => fn(ParseNode $n) => $o->setHardwareHealth($n->getObjectValue([TeamworkHardwareHealth::class, 'createFromDiscriminatorValue'])),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'loginStatus' => fn(ParseNode $n) => $o->setLoginStatus($n->getObjectValue([TeamworkLoginStatus::class, 'createFromDiscriminatorValue'])),
            'peripheralsHealth' => fn(ParseNode $n) => $o->setPeripheralsHealth($n->getObjectValue([TeamworkPeripheralsHealth::class, 'createFromDiscriminatorValue'])),
            'softwareUpdateHealth' => fn(ParseNode $n) => $o->setSoftwareUpdateHealth($n->getObjectValue([TeamworkSoftwareUpdateHealth::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the hardwareHealth property value. Health details about the device hardware.
     * @return TeamworkHardwareHealth|null
    */
    public function getHardwareHealth(): ?TeamworkHardwareHealth {
        return $this->getBackingStore()->get('hardwareHealth');
    }

    /**
     * Gets the lastModifiedBy property value. Identity of the user who last modified the device health details.
     * @return IdentitySet|null
    */
    public function getLastModifiedBy(): ?IdentitySet {
        return $this->getBackingStore()->get('lastModifiedBy');
    }

    /**
     * Gets the lastModifiedDateTime property value. The UTC date and time when the device health detail was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the loginStatus property value. The login status of Microsoft Teams, Skype for Business, and Exchange.
     * @return TeamworkLoginStatus|null
    */
    public function getLoginStatus(): ?TeamworkLoginStatus {
        return $this->getBackingStore()->get('loginStatus');
    }

    /**
     * Gets the peripheralsHealth property value. Health details about all peripherals (for example, speaker and microphone) attached to a device.
     * @return TeamworkPeripheralsHealth|null
    */
    public function getPeripheralsHealth(): ?TeamworkPeripheralsHealth {
        return $this->getBackingStore()->get('peripheralsHealth');
    }

    /**
     * Gets the softwareUpdateHealth property value. Software updates available for the device.
     * @return TeamworkSoftwareUpdateHealth|null
    */
    public function getSoftwareUpdateHealth(): ?TeamworkSoftwareUpdateHealth {
        return $this->getBackingStore()->get('softwareUpdateHealth');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('connection', $this->getConnection());
        $writer->writeObjectValue('createdBy', $this->getCreatedBy());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeObjectValue('hardwareHealth', $this->getHardwareHealth());
        $writer->writeObjectValue('lastModifiedBy', $this->getLastModifiedBy());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeObjectValue('loginStatus', $this->getLoginStatus());
        $writer->writeObjectValue('peripheralsHealth', $this->getPeripheralsHealth());
        $writer->writeObjectValue('softwareUpdateHealth', $this->getSoftwareUpdateHealth());
    }

    /**
     * Sets the connection property value. The connection property
     * @param TeamworkConnection|null $value Value to set for the connection property.
    */
    public function setConnection(?TeamworkConnection $value): void {
        $this->getBackingStore()->set('connection', $value);
    }

    /**
     * Sets the createdBy property value. Identity of the user who created the device health document.
     * @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. The UTC date and time when the device health document was created.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the hardwareHealth property value. Health details about the device hardware.
     * @param TeamworkHardwareHealth|null $value Value to set for the hardwareHealth property.
    */
    public function setHardwareHealth(?TeamworkHardwareHealth $value): void {
        $this->getBackingStore()->set('hardwareHealth', $value);
    }

    /**
     * Sets the lastModifiedBy property value. Identity of the user who last modified the device health details.
     * @param IdentitySet|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('lastModifiedBy', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The UTC date and time when the device health detail was last modified.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the loginStatus property value. The login status of Microsoft Teams, Skype for Business, and Exchange.
     * @param TeamworkLoginStatus|null $value Value to set for the loginStatus property.
    */
    public function setLoginStatus(?TeamworkLoginStatus $value): void {
        $this->getBackingStore()->set('loginStatus', $value);
    }

    /**
     * Sets the peripheralsHealth property value. Health details about all peripherals (for example, speaker and microphone) attached to a device.
     * @param TeamworkPeripheralsHealth|null $value Value to set for the peripheralsHealth property.
    */
    public function setPeripheralsHealth(?TeamworkPeripheralsHealth $value): void {
        $this->getBackingStore()->set('peripheralsHealth', $value);
    }

    /**
     * Sets the softwareUpdateHealth property value. Software updates available for the device.
     * @param TeamworkSoftwareUpdateHealth|null $value Value to set for the softwareUpdateHealth property.
    */
    public function setSoftwareUpdateHealth(?TeamworkSoftwareUpdateHealth $value): void {
        $this->getBackingStore()->set('softwareUpdateHealth', $value);
    }

}
