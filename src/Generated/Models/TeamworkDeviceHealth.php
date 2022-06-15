<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamworkDeviceHealth extends Entity implements Parsable 
{
    /**
     * @var TeamworkConnection|null $connection The connection property
    */
    private ?TeamworkConnection $connection = null;
    
    /**
     * @var IdentitySet|null $createdBy Identity of the user who created the device health document.
    */
    private ?IdentitySet $createdBy = null;
    
    /**
     * @var DateTime|null $createdDateTime The UTC date and time when the device health document was created.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var TeamworkHardwareHealth|null $hardwareHealth Health details about the device hardware.
    */
    private ?TeamworkHardwareHealth $hardwareHealth = null;
    
    /**
     * @var IdentitySet|null $lastModifiedBy Identity of the user who last modified the device health details.
    */
    private ?IdentitySet $lastModifiedBy = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The UTC date and time when the device health detail was last modified.
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var TeamworkLoginStatus|null $loginStatus The login status of Microsoft Teams, Skype for Business, and Exchange.
    */
    private ?TeamworkLoginStatus $loginStatus = null;
    
    /**
     * @var TeamworkPeripheralsHealth|null $peripheralsHealth Health details about all peripherals (for example, speaker and microphone) attached to a device.
    */
    private ?TeamworkPeripheralsHealth $peripheralsHealth = null;
    
    /**
     * @var TeamworkSoftwareUpdateHealth|null $softwareUpdateHealth Software updates available for the device.
    */
    private ?TeamworkSoftwareUpdateHealth $softwareUpdateHealth = null;
    
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
        return $this->connection;
    }

    /**
     * Gets the createdBy property value. Identity of the user who created the device health document.
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        return $this->createdBy;
    }

    /**
     * Gets the createdDateTime property value. The UTC date and time when the device health document was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'connection' => function (ParseNode $n) use ($o) { $o->setConnection($n->getObjectValue(array(TeamworkConnection::class, 'createFromDiscriminatorValue'))); },
            'createdBy' => function (ParseNode $n) use ($o) { $o->setCreatedBy($n->getObjectValue(array(IdentitySet::class, 'createFromDiscriminatorValue'))); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'hardwareHealth' => function (ParseNode $n) use ($o) { $o->setHardwareHealth($n->getObjectValue(array(TeamworkHardwareHealth::class, 'createFromDiscriminatorValue'))); },
            'lastModifiedBy' => function (ParseNode $n) use ($o) { $o->setLastModifiedBy($n->getObjectValue(array(IdentitySet::class, 'createFromDiscriminatorValue'))); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'loginStatus' => function (ParseNode $n) use ($o) { $o->setLoginStatus($n->getObjectValue(array(TeamworkLoginStatus::class, 'createFromDiscriminatorValue'))); },
            'peripheralsHealth' => function (ParseNode $n) use ($o) { $o->setPeripheralsHealth($n->getObjectValue(array(TeamworkPeripheralsHealth::class, 'createFromDiscriminatorValue'))); },
            'softwareUpdateHealth' => function (ParseNode $n) use ($o) { $o->setSoftwareUpdateHealth($n->getObjectValue(array(TeamworkSoftwareUpdateHealth::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the hardwareHealth property value. Health details about the device hardware.
     * @return TeamworkHardwareHealth|null
    */
    public function getHardwareHealth(): ?TeamworkHardwareHealth {
        return $this->hardwareHealth;
    }

    /**
     * Gets the lastModifiedBy property value. Identity of the user who last modified the device health details.
     * @return IdentitySet|null
    */
    public function getLastModifiedBy(): ?IdentitySet {
        return $this->lastModifiedBy;
    }

    /**
     * Gets the lastModifiedDateTime property value. The UTC date and time when the device health detail was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the loginStatus property value. The login status of Microsoft Teams, Skype for Business, and Exchange.
     * @return TeamworkLoginStatus|null
    */
    public function getLoginStatus(): ?TeamworkLoginStatus {
        return $this->loginStatus;
    }

    /**
     * Gets the peripheralsHealth property value. Health details about all peripherals (for example, speaker and microphone) attached to a device.
     * @return TeamworkPeripheralsHealth|null
    */
    public function getPeripheralsHealth(): ?TeamworkPeripheralsHealth {
        return $this->peripheralsHealth;
    }

    /**
     * Gets the softwareUpdateHealth property value. Software updates available for the device.
     * @return TeamworkSoftwareUpdateHealth|null
    */
    public function getSoftwareUpdateHealth(): ?TeamworkSoftwareUpdateHealth {
        return $this->softwareUpdateHealth;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('connection', $this->connection);
        $writer->writeObjectValue('createdBy', $this->createdBy);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeObjectValue('hardwareHealth', $this->hardwareHealth);
        $writer->writeObjectValue('lastModifiedBy', $this->lastModifiedBy);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeObjectValue('loginStatus', $this->loginStatus);
        $writer->writeObjectValue('peripheralsHealth', $this->peripheralsHealth);
        $writer->writeObjectValue('softwareUpdateHealth', $this->softwareUpdateHealth);
    }

    /**
     * Sets the connection property value. The connection property
     *  @param TeamworkConnection|null $value Value to set for the connection property.
    */
    public function setConnection(?TeamworkConnection $value ): void {
        $this->connection = $value;
    }

    /**
     * Sets the createdBy property value. Identity of the user who created the device health document.
     *  @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value ): void {
        $this->createdBy = $value;
    }

    /**
     * Sets the createdDateTime property value. The UTC date and time when the device health document was created.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the hardwareHealth property value. Health details about the device hardware.
     *  @param TeamworkHardwareHealth|null $value Value to set for the hardwareHealth property.
    */
    public function setHardwareHealth(?TeamworkHardwareHealth $value ): void {
        $this->hardwareHealth = $value;
    }

    /**
     * Sets the lastModifiedBy property value. Identity of the user who last modified the device health details.
     *  @param IdentitySet|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?IdentitySet $value ): void {
        $this->lastModifiedBy = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The UTC date and time when the device health detail was last modified.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the loginStatus property value. The login status of Microsoft Teams, Skype for Business, and Exchange.
     *  @param TeamworkLoginStatus|null $value Value to set for the loginStatus property.
    */
    public function setLoginStatus(?TeamworkLoginStatus $value ): void {
        $this->loginStatus = $value;
    }

    /**
     * Sets the peripheralsHealth property value. Health details about all peripherals (for example, speaker and microphone) attached to a device.
     *  @param TeamworkPeripheralsHealth|null $value Value to set for the peripheralsHealth property.
    */
    public function setPeripheralsHealth(?TeamworkPeripheralsHealth $value ): void {
        $this->peripheralsHealth = $value;
    }

    /**
     * Sets the softwareUpdateHealth property value. Software updates available for the device.
     *  @param TeamworkSoftwareUpdateHealth|null $value Value to set for the softwareUpdateHealth property.
    */
    public function setSoftwareUpdateHealth(?TeamworkSoftwareUpdateHealth $value ): void {
        $this->softwareUpdateHealth = $value;
    }

}
