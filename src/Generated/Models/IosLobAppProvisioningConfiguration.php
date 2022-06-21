<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class IosLobAppProvisioningConfiguration extends Entity 
{
    /** @var array<IosLobAppProvisioningConfigurationAssignment>|null $assignments The associated group assignments for IosLobAppProvisioningConfiguration. */
    private ?array $assignments = null;
    
    /** @var DateTime|null $createdDateTime DateTime the object was created. */
    private ?DateTime $createdDateTime = null;
    
    /** @var string|null $description Admin provided description of the Device Configuration. */
    private ?string $description = null;
    
    /** @var array<ManagedDeviceMobileAppConfigurationDeviceStatus>|null $deviceStatuses The list of device installation states for this mobile app configuration. */
    private ?array $deviceStatuses = null;
    
    /** @var string|null $displayName Admin provided name of the device configuration. */
    private ?string $displayName = null;
    
    /** @var DateTime|null $expirationDateTime Optional profile expiration date and time. */
    private ?DateTime $expirationDateTime = null;
    
    /** @var array<MobileAppProvisioningConfigGroupAssignment>|null $groupAssignments The associated group assignments. */
    private ?array $groupAssignments = null;
    
    /** @var DateTime|null $lastModifiedDateTime DateTime the object was last modified. */
    private ?DateTime $lastModifiedDateTime = null;
    
    /** @var StreamInterface|null $payload Payload. (UTF8 encoded byte array) */
    private ?StreamInterface $payload = null;
    
    /** @var string|null $payloadFileName Payload file name (.mobileprovision */
    private ?string $payloadFileName = null;
    
    /** @var array<string>|null $roleScopeTagIds List of Scope Tags for this iOS LOB app provisioning configuration entity. */
    private ?array $roleScopeTagIds = null;
    
    /** @var array<ManagedDeviceMobileAppConfigurationUserStatus>|null $userStatuses The list of user installation states for this mobile app configuration. */
    private ?array $userStatuses = null;
    
    /** @var int|null $version Version of the device configuration. */
    private ?int $version = null;
    
    /**
     * Instantiates a new iosLobAppProvisioningConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosLobAppProvisioningConfiguration
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): IosLobAppProvisioningConfiguration {
        return new IosLobAppProvisioningConfiguration();
    }

    /**
     * Gets the assignments property value. The associated group assignments for IosLobAppProvisioningConfiguration.
     * @return array<IosLobAppProvisioningConfigurationAssignment>|null
    */
    public function getAssignments(): ?array {
        return $this->assignments;
    }

    /**
     * Gets the createdDateTime property value. DateTime the object was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the description property value. Admin provided description of the Device Configuration.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the deviceStatuses property value. The list of device installation states for this mobile app configuration.
     * @return array<ManagedDeviceMobileAppConfigurationDeviceStatus>|null
    */
    public function getDeviceStatuses(): ?array {
        return $this->deviceStatuses;
    }

    /**
     * Gets the displayName property value. Admin provided name of the device configuration.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the expirationDateTime property value. Optional profile expiration date and time.
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        return $this->expirationDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'assignments' => function (self $o, ParseNode $n) { $o->setAssignments($n->getCollectionOfObjectValues(IosLobAppProvisioningConfigurationAssignment::class)); },
            'createdDateTime' => function (self $o, ParseNode $n) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'description' => function (self $o, ParseNode $n) { $o->setDescription($n->getStringValue()); },
            'deviceStatuses' => function (self $o, ParseNode $n) { $o->setDeviceStatuses($n->getCollectionOfObjectValues(ManagedDeviceMobileAppConfigurationDeviceStatus::class)); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'expirationDateTime' => function (self $o, ParseNode $n) { $o->setExpirationDateTime($n->getDateTimeValue()); },
            'groupAssignments' => function (self $o, ParseNode $n) { $o->setGroupAssignments($n->getCollectionOfObjectValues(MobileAppProvisioningConfigGroupAssignment::class)); },
            'lastModifiedDateTime' => function (self $o, ParseNode $n) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'payload' => function (self $o, ParseNode $n) { $o->setPayload($n->getBinaryContent()); },
            'payloadFileName' => function (self $o, ParseNode $n) { $o->setPayloadFileName($n->getStringValue()); },
            'roleScopeTagIds' => function (self $o, ParseNode $n) { $o->setRoleScopeTagIds($n->getCollectionOfPrimitiveValues()); },
            'userStatuses' => function (self $o, ParseNode $n) { $o->setUserStatuses($n->getCollectionOfObjectValues(ManagedDeviceMobileAppConfigurationUserStatus::class)); },
            'version' => function (self $o, ParseNode $n) { $o->setVersion($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the groupAssignments property value. The associated group assignments.
     * @return array<MobileAppProvisioningConfigGroupAssignment>|null
    */
    public function getGroupAssignments(): ?array {
        return $this->groupAssignments;
    }

    /**
     * Gets the lastModifiedDateTime property value. DateTime the object was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the payload property value. Payload. (UTF8 encoded byte array)
     * @return StreamInterface|null
    */
    public function getPayload(): ?StreamInterface {
        return $this->payload;
    }

    /**
     * Gets the payloadFileName property value. Payload file name (.mobileprovision
     * @return string|null
    */
    public function getPayloadFileName(): ?string {
        return $this->payloadFileName;
    }

    /**
     * Gets the roleScopeTagIds property value. List of Scope Tags for this iOS LOB app provisioning configuration entity.
     * @return array<string>|null
    */
    public function getRoleScopeTagIds(): ?array {
        return $this->roleScopeTagIds;
    }

    /**
     * Gets the userStatuses property value. The list of user installation states for this mobile app configuration.
     * @return array<ManagedDeviceMobileAppConfigurationUserStatus>|null
    */
    public function getUserStatuses(): ?array {
        return $this->userStatuses;
    }

    /**
     * Gets the version property value. Version of the device configuration.
     * @return int|null
    */
    public function getVersion(): ?int {
        return $this->version;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('assignments', $this->assignments);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('description', $this->description);
        $writer->writeCollectionOfObjectValues('deviceStatuses', $this->deviceStatuses);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeDateTimeValue('expirationDateTime', $this->expirationDateTime);
        $writer->writeCollectionOfObjectValues('groupAssignments', $this->groupAssignments);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeBinaryContent('payload', $this->payload);
        $writer->writeStringValue('payloadFileName', $this->payloadFileName);
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->roleScopeTagIds);
        $writer->writeCollectionOfObjectValues('userStatuses', $this->userStatuses);
        $writer->writeIntegerValue('version', $this->version);
    }

    /**
     * Sets the assignments property value. The associated group assignments for IosLobAppProvisioningConfiguration.
     *  @param array<IosLobAppProvisioningConfigurationAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value ): void {
        $this->assignments = $value;
    }

    /**
     * Sets the createdDateTime property value. DateTime the object was created.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the description property value. Admin provided description of the Device Configuration.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the deviceStatuses property value. The list of device installation states for this mobile app configuration.
     *  @param array<ManagedDeviceMobileAppConfigurationDeviceStatus>|null $value Value to set for the deviceStatuses property.
    */
    public function setDeviceStatuses(?array $value ): void {
        $this->deviceStatuses = $value;
    }

    /**
     * Sets the displayName property value. Admin provided name of the device configuration.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the expirationDateTime property value. Optional profile expiration date and time.
     *  @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value ): void {
        $this->expirationDateTime = $value;
    }

    /**
     * Sets the groupAssignments property value. The associated group assignments.
     *  @param array<MobileAppProvisioningConfigGroupAssignment>|null $value Value to set for the groupAssignments property.
    */
    public function setGroupAssignments(?array $value ): void {
        $this->groupAssignments = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. DateTime the object was last modified.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the payload property value. Payload. (UTF8 encoded byte array)
     *  @param StreamInterface|null $value Value to set for the payload property.
    */
    public function setPayload(?StreamInterface $value ): void {
        $this->payload = $value;
    }

    /**
     * Sets the payloadFileName property value. Payload file name (.mobileprovision
     *  @param string|null $value Value to set for the payloadFileName property.
    */
    public function setPayloadFileName(?string $value ): void {
        $this->payloadFileName = $value;
    }

    /**
     * Sets the roleScopeTagIds property value. List of Scope Tags for this iOS LOB app provisioning configuration entity.
     *  @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value ): void {
        $this->roleScopeTagIds = $value;
    }

    /**
     * Sets the userStatuses property value. The list of user installation states for this mobile app configuration.
     *  @param array<ManagedDeviceMobileAppConfigurationUserStatus>|null $value Value to set for the userStatuses property.
    */
    public function setUserStatuses(?array $value ): void {
        $this->userStatuses = $value;
    }

    /**
     * Sets the version property value. Version of the device configuration.
     *  @param int|null $value Value to set for the version property.
    */
    public function setVersion(?int $value ): void {
        $this->version = $value;
    }

}
