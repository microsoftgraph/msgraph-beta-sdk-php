<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class IosLobAppProvisioningConfiguration extends Entity implements Parsable 
{
    /**
     * Instantiates a new IosLobAppProvisioningConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosLobAppProvisioningConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosLobAppProvisioningConfiguration {
        return new IosLobAppProvisioningConfiguration();
    }

    /**
     * Gets the assignments property value. The associated group assignments for IosLobAppProvisioningConfiguration.
     * @return array<IosLobAppProvisioningConfigurationAssignment>|null
    */
    public function getAssignments(): ?array {
        return $this->getBackingStore()->get('assignments');
    }

    /**
     * Gets the createdDateTime property value. DateTime the object was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the description property value. Admin provided description of the Device Configuration.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the deviceStatuses property value. The list of device installation states for this mobile app configuration.
     * @return array<ManagedDeviceMobileAppConfigurationDeviceStatus>|null
    */
    public function getDeviceStatuses(): ?array {
        return $this->getBackingStore()->get('deviceStatuses');
    }

    /**
     * Gets the displayName property value. Admin provided name of the device configuration.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the expirationDateTime property value. Optional profile expiration date and time.
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        return $this->getBackingStore()->get('expirationDateTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignments' => fn(ParseNode $n) => $o->setAssignments($n->getCollectionOfObjectValues([IosLobAppProvisioningConfigurationAssignment::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'deviceStatuses' => fn(ParseNode $n) => $o->setDeviceStatuses($n->getCollectionOfObjectValues([ManagedDeviceMobileAppConfigurationDeviceStatus::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'expirationDateTime' => fn(ParseNode $n) => $o->setExpirationDateTime($n->getDateTimeValue()),
            'groupAssignments' => fn(ParseNode $n) => $o->setGroupAssignments($n->getCollectionOfObjectValues([MobileAppProvisioningConfigGroupAssignment::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'payload' => fn(ParseNode $n) => $o->setPayload($n->getBinaryContent()),
            'payloadFileName' => fn(ParseNode $n) => $o->setPayloadFileName($n->getStringValue()),
            'roleScopeTagIds' => fn(ParseNode $n) => $o->setRoleScopeTagIds($n->getCollectionOfPrimitiveValues()),
            'userStatuses' => fn(ParseNode $n) => $o->setUserStatuses($n->getCollectionOfObjectValues([ManagedDeviceMobileAppConfigurationUserStatus::class, 'createFromDiscriminatorValue'])),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the groupAssignments property value. The associated group assignments.
     * @return array<MobileAppProvisioningConfigGroupAssignment>|null
    */
    public function getGroupAssignments(): ?array {
        return $this->getBackingStore()->get('groupAssignments');
    }

    /**
     * Gets the lastModifiedDateTime property value. DateTime the object was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the payload property value. Payload. (UTF8 encoded byte array)
     * @return StreamInterface|null
    */
    public function getPayload(): ?StreamInterface {
        return $this->getBackingStore()->get('payload');
    }

    /**
     * Gets the payloadFileName property value. Payload file name (.mobileprovision
     * @return string|null
    */
    public function getPayloadFileName(): ?string {
        return $this->getBackingStore()->get('payloadFileName');
    }

    /**
     * Gets the roleScopeTagIds property value. List of Scope Tags for this iOS LOB app provisioning configuration entity.
     * @return array<string>|null
    */
    public function getRoleScopeTagIds(): ?array {
        return $this->getBackingStore()->get('roleScopeTagIds');
    }

    /**
     * Gets the userStatuses property value. The list of user installation states for this mobile app configuration.
     * @return array<ManagedDeviceMobileAppConfigurationUserStatus>|null
    */
    public function getUserStatuses(): ?array {
        return $this->getBackingStore()->get('userStatuses');
    }

    /**
     * Gets the version property value. Version of the device configuration.
     * @return int|null
    */
    public function getVersion(): ?int {
        return $this->getBackingStore()->get('version');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('assignments', $this->getAssignments());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeCollectionOfObjectValues('deviceStatuses', $this->getDeviceStatuses());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateTimeValue('expirationDateTime', $this->getExpirationDateTime());
        $writer->writeCollectionOfObjectValues('groupAssignments', $this->getGroupAssignments());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeBinaryContent('payload', $this->getPayload());
        $writer->writeStringValue('payloadFileName', $this->getPayloadFileName());
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->getRoleScopeTagIds());
        $writer->writeCollectionOfObjectValues('userStatuses', $this->getUserStatuses());
        $writer->writeIntegerValue('version', $this->getVersion());
    }

    /**
     * Sets the assignments property value. The associated group assignments for IosLobAppProvisioningConfiguration.
     * @param array<IosLobAppProvisioningConfigurationAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value): void {
        $this->getBackingStore()->set('assignments', $value);
    }

    /**
     * Sets the createdDateTime property value. DateTime the object was created.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the description property value. Admin provided description of the Device Configuration.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the deviceStatuses property value. The list of device installation states for this mobile app configuration.
     * @param array<ManagedDeviceMobileAppConfigurationDeviceStatus>|null $value Value to set for the deviceStatuses property.
    */
    public function setDeviceStatuses(?array $value): void {
        $this->getBackingStore()->set('deviceStatuses', $value);
    }

    /**
     * Sets the displayName property value. Admin provided name of the device configuration.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the expirationDateTime property value. Optional profile expiration date and time.
     * @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('expirationDateTime', $value);
    }

    /**
     * Sets the groupAssignments property value. The associated group assignments.
     * @param array<MobileAppProvisioningConfigGroupAssignment>|null $value Value to set for the groupAssignments property.
    */
    public function setGroupAssignments(?array $value): void {
        $this->getBackingStore()->set('groupAssignments', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. DateTime the object was last modified.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the payload property value. Payload. (UTF8 encoded byte array)
     * @param StreamInterface|null $value Value to set for the payload property.
    */
    public function setPayload(?StreamInterface $value): void {
        $this->getBackingStore()->set('payload', $value);
    }

    /**
     * Sets the payloadFileName property value. Payload file name (.mobileprovision
     * @param string|null $value Value to set for the payloadFileName property.
    */
    public function setPayloadFileName(?string $value): void {
        $this->getBackingStore()->set('payloadFileName', $value);
    }

    /**
     * Sets the roleScopeTagIds property value. List of Scope Tags for this iOS LOB app provisioning configuration entity.
     * @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value): void {
        $this->getBackingStore()->set('roleScopeTagIds', $value);
    }

    /**
     * Sets the userStatuses property value. The list of user installation states for this mobile app configuration.
     * @param array<ManagedDeviceMobileAppConfigurationUserStatus>|null $value Value to set for the userStatuses property.
    */
    public function setUserStatuses(?array $value): void {
        $this->getBackingStore()->set('userStatuses', $value);
    }

    /**
     * Sets the version property value. Version of the device configuration.
     * @param int|null $value Value to set for the version property.
    */
    public function setVersion(?int $value): void {
        $this->getBackingStore()->set('version', $value);
    }

}
