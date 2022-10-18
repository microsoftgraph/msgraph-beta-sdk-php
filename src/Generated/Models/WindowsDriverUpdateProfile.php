<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsDriverUpdateProfile extends Entity implements Parsable 
{
    /**
     * @var DriverUpdateProfileApprovalType|null $approvalType An enum type to represent approval type of a driver update profile.
    */
    private ?DriverUpdateProfileApprovalType $approvalType = null;
    
    /**
     * @var array<WindowsDriverUpdateProfileAssignment>|null $assignments The list of group assignments of the profile.
    */
    private ?array $assignments = null;
    
    /**
     * @var DateTime|null $createdDateTime The date time that the profile was created.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var int|null $deploymentDeferralInDays Deployment deferral settings in days, only applicable when ApprovalType is set to automatic approval.
    */
    private ?int $deploymentDeferralInDays = null;
    
    /**
     * @var string|null $description The description of the profile which is specified by the user.
    */
    private ?string $description = null;
    
    /**
     * @var int|null $deviceReporting Number of devices reporting for this profile
    */
    private ?int $deviceReporting = null;
    
    /**
     * @var string|null $displayName The display name for the profile.
    */
    private ?string $displayName = null;
    
    /**
     * @var array<WindowsDriverUpdateInventory>|null $driverInventories Driver inventories for this profile.
    */
    private ?array $driverInventories = null;
    
    /**
     * @var WindowsDriverUpdateProfileInventorySyncStatus|null $inventorySyncStatus Driver inventory sync status for this profile.
    */
    private ?WindowsDriverUpdateProfileInventorySyncStatus $inventorySyncStatus = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The date time that the profile was last modified.
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var int|null $newUpdates Number of new driver updates available for this profile.
    */
    private ?int $newUpdates = null;
    
    /**
     * @var array<string>|null $roleScopeTagIds List of Scope Tags for this Driver Update entity.
    */
    private ?array $roleScopeTagIds = null;
    
    /**
     * Instantiates a new windowsDriverUpdateProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsDriverUpdateProfile');
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
        return $this->approvalType;
    }

    /**
     * Gets the assignments property value. The list of group assignments of the profile.
     * @return array<WindowsDriverUpdateProfileAssignment>|null
    */
    public function getAssignments(): ?array {
        return $this->assignments;
    }

    /**
     * Gets the createdDateTime property value. The date time that the profile was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the deploymentDeferralInDays property value. Deployment deferral settings in days, only applicable when ApprovalType is set to automatic approval.
     * @return int|null
    */
    public function getDeploymentDeferralInDays(): ?int {
        return $this->deploymentDeferralInDays;
    }

    /**
     * Gets the description property value. The description of the profile which is specified by the user.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the deviceReporting property value. Number of devices reporting for this profile
     * @return int|null
    */
    public function getDeviceReporting(): ?int {
        return $this->deviceReporting;
    }

    /**
     * Gets the displayName property value. The display name for the profile.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the driverInventories property value. Driver inventories for this profile.
     * @return array<WindowsDriverUpdateInventory>|null
    */
    public function getDriverInventories(): ?array {
        return $this->driverInventories;
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
        return $this->inventorySyncStatus;
    }

    /**
     * Gets the lastModifiedDateTime property value. The date time that the profile was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the newUpdates property value. Number of new driver updates available for this profile.
     * @return int|null
    */
    public function getNewUpdates(): ?int {
        return $this->newUpdates;
    }

    /**
     * Gets the roleScopeTagIds property value. List of Scope Tags for this Driver Update entity.
     * @return array<string>|null
    */
    public function getRoleScopeTagIds(): ?array {
        return $this->roleScopeTagIds;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('approvalType', $this->approvalType);
        $writer->writeCollectionOfObjectValues('assignments', $this->assignments);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeIntegerValue('deploymentDeferralInDays', $this->deploymentDeferralInDays);
        $writer->writeStringValue('description', $this->description);
        $writer->writeIntegerValue('deviceReporting', $this->deviceReporting);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfObjectValues('driverInventories', $this->driverInventories);
        $writer->writeObjectValue('inventorySyncStatus', $this->inventorySyncStatus);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeIntegerValue('newUpdates', $this->newUpdates);
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->roleScopeTagIds);
    }

    /**
     * Sets the approvalType property value. An enum type to represent approval type of a driver update profile.
     *  @param DriverUpdateProfileApprovalType|null $value Value to set for the approvalType property.
    */
    public function setApprovalType(?DriverUpdateProfileApprovalType $value ): void {
        $this->approvalType = $value;
    }

    /**
     * Sets the assignments property value. The list of group assignments of the profile.
     *  @param array<WindowsDriverUpdateProfileAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value ): void {
        $this->assignments = $value;
    }

    /**
     * Sets the createdDateTime property value. The date time that the profile was created.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the deploymentDeferralInDays property value. Deployment deferral settings in days, only applicable when ApprovalType is set to automatic approval.
     *  @param int|null $value Value to set for the deploymentDeferralInDays property.
    */
    public function setDeploymentDeferralInDays(?int $value ): void {
        $this->deploymentDeferralInDays = $value;
    }

    /**
     * Sets the description property value. The description of the profile which is specified by the user.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the deviceReporting property value. Number of devices reporting for this profile
     *  @param int|null $value Value to set for the deviceReporting property.
    */
    public function setDeviceReporting(?int $value ): void {
        $this->deviceReporting = $value;
    }

    /**
     * Sets the displayName property value. The display name for the profile.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the driverInventories property value. Driver inventories for this profile.
     *  @param array<WindowsDriverUpdateInventory>|null $value Value to set for the driverInventories property.
    */
    public function setDriverInventories(?array $value ): void {
        $this->driverInventories = $value;
    }

    /**
     * Sets the inventorySyncStatus property value. Driver inventory sync status for this profile.
     *  @param WindowsDriverUpdateProfileInventorySyncStatus|null $value Value to set for the inventorySyncStatus property.
    */
    public function setInventorySyncStatus(?WindowsDriverUpdateProfileInventorySyncStatus $value ): void {
        $this->inventorySyncStatus = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The date time that the profile was last modified.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the newUpdates property value. Number of new driver updates available for this profile.
     *  @param int|null $value Value to set for the newUpdates property.
    */
    public function setNewUpdates(?int $value ): void {
        $this->newUpdates = $value;
    }

    /**
     * Sets the roleScopeTagIds property value. List of Scope Tags for this Driver Update entity.
     *  @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value ): void {
        $this->roleScopeTagIds = $value;
    }

}
