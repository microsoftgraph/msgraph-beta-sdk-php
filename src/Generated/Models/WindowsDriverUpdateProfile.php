<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsDriverUpdateProfile extends Entity implements Parsable 
{
    /**
     * Instantiates a new WindowsDriverUpdateProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsDriverUpdateProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsDriverUpdateProfile {
        return new WindowsDriverUpdateProfile();
    }

    /**
     * Gets the approvalType property value. An enum type to represent approval type of a driver update profile.
     * @return DriverUpdateProfileApprovalType|null
    */
    public function getApprovalType(): ?DriverUpdateProfileApprovalType {
        return $this->getBackingStore()->get('approvalType');
    }

    /**
     * Gets the assignments property value. The list of group assignments of the profile.
     * @return array<WindowsDriverUpdateProfileAssignment>|null
    */
    public function getAssignments(): ?array {
        return $this->getBackingStore()->get('assignments');
    }

    /**
     * Gets the createdDateTime property value. The date time that the profile was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the deploymentDeferralInDays property value. Deployment deferral settings in days, only applicable when ApprovalType is set to automatic approval.
     * @return int|null
    */
    public function getDeploymentDeferralInDays(): ?int {
        return $this->getBackingStore()->get('deploymentDeferralInDays');
    }

    /**
     * Gets the description property value. The description of the profile which is specified by the user.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the deviceReporting property value. Number of devices reporting for this profile
     * @return int|null
    */
    public function getDeviceReporting(): ?int {
        return $this->getBackingStore()->get('deviceReporting');
    }

    /**
     * Gets the displayName property value. The display name for the profile.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the driverInventories property value. Driver inventories for this profile.
     * @return array<WindowsDriverUpdateInventory>|null
    */
    public function getDriverInventories(): ?array {
        return $this->getBackingStore()->get('driverInventories');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'approvalType' => fn(ParseNode $n) => $o->setApprovalType($n->getEnumValue(DriverUpdateProfileApprovalType::class)),
            'assignments' => fn(ParseNode $n) => $o->setAssignments($n->getCollectionOfObjectValues([WindowsDriverUpdateProfileAssignment::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'deploymentDeferralInDays' => fn(ParseNode $n) => $o->setDeploymentDeferralInDays($n->getIntegerValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'deviceReporting' => fn(ParseNode $n) => $o->setDeviceReporting($n->getIntegerValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'driverInventories' => fn(ParseNode $n) => $o->setDriverInventories($n->getCollectionOfObjectValues([WindowsDriverUpdateInventory::class, 'createFromDiscriminatorValue'])),
            'inventorySyncStatus' => fn(ParseNode $n) => $o->setInventorySyncStatus($n->getObjectValue([WindowsDriverUpdateProfileInventorySyncStatus::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'newUpdates' => fn(ParseNode $n) => $o->setNewUpdates($n->getIntegerValue()),
            'roleScopeTagIds' => fn(ParseNode $n) => $o->setRoleScopeTagIds($n->getCollectionOfPrimitiveValues()),
        ]);
    }

    /**
     * Gets the inventorySyncStatus property value. Driver inventory sync status for this profile.
     * @return WindowsDriverUpdateProfileInventorySyncStatus|null
    */
    public function getInventorySyncStatus(): ?WindowsDriverUpdateProfileInventorySyncStatus {
        return $this->getBackingStore()->get('inventorySyncStatus');
    }

    /**
     * Gets the lastModifiedDateTime property value. The date time that the profile was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the newUpdates property value. Number of new driver updates available for this profile.
     * @return int|null
    */
    public function getNewUpdates(): ?int {
        return $this->getBackingStore()->get('newUpdates');
    }

    /**
     * Gets the roleScopeTagIds property value. List of Scope Tags for this Driver Update entity.
     * @return array<string>|null
    */
    public function getRoleScopeTagIds(): ?array {
        return $this->getBackingStore()->get('roleScopeTagIds');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('approvalType', $this->getApprovalType());
        $writer->writeCollectionOfObjectValues('assignments', $this->getAssignments());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeIntegerValue('deploymentDeferralInDays', $this->getDeploymentDeferralInDays());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeIntegerValue('deviceReporting', $this->getDeviceReporting());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfObjectValues('driverInventories', $this->getDriverInventories());
        $writer->writeObjectValue('inventorySyncStatus', $this->getInventorySyncStatus());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeIntegerValue('newUpdates', $this->getNewUpdates());
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->getRoleScopeTagIds());
    }

    /**
     * Sets the approvalType property value. An enum type to represent approval type of a driver update profile.
     * @param DriverUpdateProfileApprovalType|null $value Value to set for the approvalType property.
    */
    public function setApprovalType(?DriverUpdateProfileApprovalType $value): void {
        $this->getBackingStore()->set('approvalType', $value);
    }

    /**
     * Sets the assignments property value. The list of group assignments of the profile.
     * @param array<WindowsDriverUpdateProfileAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value): void {
        $this->getBackingStore()->set('assignments', $value);
    }

    /**
     * Sets the createdDateTime property value. The date time that the profile was created.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the deploymentDeferralInDays property value. Deployment deferral settings in days, only applicable when ApprovalType is set to automatic approval.
     * @param int|null $value Value to set for the deploymentDeferralInDays property.
    */
    public function setDeploymentDeferralInDays(?int $value): void {
        $this->getBackingStore()->set('deploymentDeferralInDays', $value);
    }

    /**
     * Sets the description property value. The description of the profile which is specified by the user.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the deviceReporting property value. Number of devices reporting for this profile
     * @param int|null $value Value to set for the deviceReporting property.
    */
    public function setDeviceReporting(?int $value): void {
        $this->getBackingStore()->set('deviceReporting', $value);
    }

    /**
     * Sets the displayName property value. The display name for the profile.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the driverInventories property value. Driver inventories for this profile.
     * @param array<WindowsDriverUpdateInventory>|null $value Value to set for the driverInventories property.
    */
    public function setDriverInventories(?array $value): void {
        $this->getBackingStore()->set('driverInventories', $value);
    }

    /**
     * Sets the inventorySyncStatus property value. Driver inventory sync status for this profile.
     * @param WindowsDriverUpdateProfileInventorySyncStatus|null $value Value to set for the inventorySyncStatus property.
    */
    public function setInventorySyncStatus(?WindowsDriverUpdateProfileInventorySyncStatus $value): void {
        $this->getBackingStore()->set('inventorySyncStatus', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The date time that the profile was last modified.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the newUpdates property value. Number of new driver updates available for this profile.
     * @param int|null $value Value to set for the newUpdates property.
    */
    public function setNewUpdates(?int $value): void {
        $this->getBackingStore()->set('newUpdates', $value);
    }

    /**
     * Sets the roleScopeTagIds property value. List of Scope Tags for this Driver Update entity.
     * @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value): void {
        $this->getBackingStore()->set('roleScopeTagIds', $value);
    }

}
