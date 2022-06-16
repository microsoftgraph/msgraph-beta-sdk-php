<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceConfiguration extends Entity 
{
    /** @var array<DeviceConfigurationAssignment>|null $assignments The list of assignments for the device configuration profile. */
    private ?array $assignments = null;
    
    /** @var DateTime|null $createdDateTime DateTime the object was created. */
    private ?DateTime $createdDateTime = null;
    
    /** @var string|null $description Admin provided description of the Device Configuration. */
    private ?string $description = null;
    
    /** @var DeviceManagementApplicabilityRuleDeviceMode|null $deviceManagementApplicabilityRuleDeviceMode The device mode applicability rule for this Policy. */
    private ?DeviceManagementApplicabilityRuleDeviceMode $deviceManagementApplicabilityRuleDeviceMode = null;
    
    /** @var DeviceManagementApplicabilityRuleOsEdition|null $deviceManagementApplicabilityRuleOsEdition The OS edition applicability for this Policy. */
    private ?DeviceManagementApplicabilityRuleOsEdition $deviceManagementApplicabilityRuleOsEdition = null;
    
    /** @var DeviceManagementApplicabilityRuleOsVersion|null $deviceManagementApplicabilityRuleOsVersion The OS version applicability rule for this Policy. */
    private ?DeviceManagementApplicabilityRuleOsVersion $deviceManagementApplicabilityRuleOsVersion = null;
    
    /** @var array<SettingStateDeviceSummary>|null $deviceSettingStateSummaries Device Configuration Setting State Device Summary */
    private ?array $deviceSettingStateSummaries = null;
    
    /** @var array<DeviceConfigurationDeviceStatus>|null $deviceStatuses Device configuration installation status by device. */
    private ?array $deviceStatuses = null;
    
    /** @var DeviceConfigurationDeviceOverview|null $deviceStatusOverview Device Configuration devices status overview */
    private ?DeviceConfigurationDeviceOverview $deviceStatusOverview = null;
    
    /** @var string|null $displayName Admin provided name of the device configuration. */
    private ?string $displayName = null;
    
    /** @var array<DeviceConfigurationGroupAssignment>|null $groupAssignments The list of group assignments for the device configuration profile. */
    private ?array $groupAssignments = null;
    
    /** @var DateTime|null $lastModifiedDateTime DateTime the object was last modified. */
    private ?DateTime $lastModifiedDateTime = null;
    
    /** @var array<string>|null $roleScopeTagIds List of Scope Tags for this Entity instance. */
    private ?array $roleScopeTagIds = null;
    
    /** @var bool|null $supportsScopeTags Indicates whether or not the underlying Device Configuration supports the assignment of scope tags. Assigning to the ScopeTags property is not allowed when this value is false and entities will not be visible to scoped users. This occurs for Legacy policies created in Silverlight and can be resolved by deleting and recreating the policy in the Azure Portal. This property is read-only. */
    private ?bool $supportsScopeTags = null;
    
    /** @var array<DeviceConfigurationUserStatus>|null $userStatuses Device configuration installation status by user. */
    private ?array $userStatuses = null;
    
    /** @var DeviceConfigurationUserOverview|null $userStatusOverview Device Configuration users status overview */
    private ?DeviceConfigurationUserOverview $userStatusOverview = null;
    
    /** @var int|null $version Version of the device configuration. */
    private ?int $version = null;
    
    /**
     * Instantiates a new deviceConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceConfiguration
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DeviceConfiguration {
        return new DeviceConfiguration();
    }

    /**
     * Gets the assignments property value. The list of assignments for the device configuration profile.
     * @return array<DeviceConfigurationAssignment>|null
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
     * Gets the deviceManagementApplicabilityRuleDeviceMode property value. The device mode applicability rule for this Policy.
     * @return DeviceManagementApplicabilityRuleDeviceMode|null
    */
    public function getDeviceManagementApplicabilityRuleDeviceMode(): ?DeviceManagementApplicabilityRuleDeviceMode {
        return $this->deviceManagementApplicabilityRuleDeviceMode;
    }

    /**
     * Gets the deviceManagementApplicabilityRuleOsEdition property value. The OS edition applicability for this Policy.
     * @return DeviceManagementApplicabilityRuleOsEdition|null
    */
    public function getDeviceManagementApplicabilityRuleOsEdition(): ?DeviceManagementApplicabilityRuleOsEdition {
        return $this->deviceManagementApplicabilityRuleOsEdition;
    }

    /**
     * Gets the deviceManagementApplicabilityRuleOsVersion property value. The OS version applicability rule for this Policy.
     * @return DeviceManagementApplicabilityRuleOsVersion|null
    */
    public function getDeviceManagementApplicabilityRuleOsVersion(): ?DeviceManagementApplicabilityRuleOsVersion {
        return $this->deviceManagementApplicabilityRuleOsVersion;
    }

    /**
     * Gets the deviceSettingStateSummaries property value. Device Configuration Setting State Device Summary
     * @return array<SettingStateDeviceSummary>|null
    */
    public function getDeviceSettingStateSummaries(): ?array {
        return $this->deviceSettingStateSummaries;
    }

    /**
     * Gets the deviceStatuses property value. Device configuration installation status by device.
     * @return array<DeviceConfigurationDeviceStatus>|null
    */
    public function getDeviceStatuses(): ?array {
        return $this->deviceStatuses;
    }

    /**
     * Gets the deviceStatusOverview property value. Device Configuration devices status overview
     * @return DeviceConfigurationDeviceOverview|null
    */
    public function getDeviceStatusOverview(): ?DeviceConfigurationDeviceOverview {
        return $this->deviceStatusOverview;
    }

    /**
     * Gets the displayName property value. Admin provided name of the device configuration.
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
        return array_merge(parent::getFieldDeserializers(), [
            'assignments' => function (self $o, ParseNode $n) { $o->setAssignments($n->getCollectionOfObjectValues(DeviceConfigurationAssignment::class)); },
            'createdDateTime' => function (self $o, ParseNode $n) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'description' => function (self $o, ParseNode $n) { $o->setDescription($n->getStringValue()); },
            'deviceManagementApplicabilityRuleDeviceMode' => function (self $o, ParseNode $n) { $o->setDeviceManagementApplicabilityRuleDeviceMode($n->getObjectValue(DeviceManagementApplicabilityRuleDeviceMode::class)); },
            'deviceManagementApplicabilityRuleOsEdition' => function (self $o, ParseNode $n) { $o->setDeviceManagementApplicabilityRuleOsEdition($n->getObjectValue(DeviceManagementApplicabilityRuleOsEdition::class)); },
            'deviceManagementApplicabilityRuleOsVersion' => function (self $o, ParseNode $n) { $o->setDeviceManagementApplicabilityRuleOsVersion($n->getObjectValue(DeviceManagementApplicabilityRuleOsVersion::class)); },
            'deviceSettingStateSummaries' => function (self $o, ParseNode $n) { $o->setDeviceSettingStateSummaries($n->getCollectionOfObjectValues(SettingStateDeviceSummary::class)); },
            'deviceStatuses' => function (self $o, ParseNode $n) { $o->setDeviceStatuses($n->getCollectionOfObjectValues(DeviceConfigurationDeviceStatus::class)); },
            'deviceStatusOverview' => function (self $o, ParseNode $n) { $o->setDeviceStatusOverview($n->getObjectValue(DeviceConfigurationDeviceOverview::class)); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'groupAssignments' => function (self $o, ParseNode $n) { $o->setGroupAssignments($n->getCollectionOfObjectValues(DeviceConfigurationGroupAssignment::class)); },
            'lastModifiedDateTime' => function (self $o, ParseNode $n) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'roleScopeTagIds' => function (self $o, ParseNode $n) { $o->setRoleScopeTagIds($n->getCollectionOfPrimitiveValues()); },
            'supportsScopeTags' => function (self $o, ParseNode $n) { $o->setSupportsScopeTags($n->getBooleanValue()); },
            'userStatuses' => function (self $o, ParseNode $n) { $o->setUserStatuses($n->getCollectionOfObjectValues(DeviceConfigurationUserStatus::class)); },
            'userStatusOverview' => function (self $o, ParseNode $n) { $o->setUserStatusOverview($n->getObjectValue(DeviceConfigurationUserOverview::class)); },
            'version' => function (self $o, ParseNode $n) { $o->setVersion($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the groupAssignments property value. The list of group assignments for the device configuration profile.
     * @return array<DeviceConfigurationGroupAssignment>|null
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
     * Gets the roleScopeTagIds property value. List of Scope Tags for this Entity instance.
     * @return array<string>|null
    */
    public function getRoleScopeTagIds(): ?array {
        return $this->roleScopeTagIds;
    }

    /**
     * Gets the supportsScopeTags property value. Indicates whether or not the underlying Device Configuration supports the assignment of scope tags. Assigning to the ScopeTags property is not allowed when this value is false and entities will not be visible to scoped users. This occurs for Legacy policies created in Silverlight and can be resolved by deleting and recreating the policy in the Azure Portal. This property is read-only.
     * @return bool|null
    */
    public function getSupportsScopeTags(): ?bool {
        return $this->supportsScopeTags;
    }

    /**
     * Gets the userStatuses property value. Device configuration installation status by user.
     * @return array<DeviceConfigurationUserStatus>|null
    */
    public function getUserStatuses(): ?array {
        return $this->userStatuses;
    }

    /**
     * Gets the userStatusOverview property value. Device Configuration users status overview
     * @return DeviceConfigurationUserOverview|null
    */
    public function getUserStatusOverview(): ?DeviceConfigurationUserOverview {
        return $this->userStatusOverview;
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
        $writer->writeObjectValue('deviceManagementApplicabilityRuleDeviceMode', $this->deviceManagementApplicabilityRuleDeviceMode);
        $writer->writeObjectValue('deviceManagementApplicabilityRuleOsEdition', $this->deviceManagementApplicabilityRuleOsEdition);
        $writer->writeObjectValue('deviceManagementApplicabilityRuleOsVersion', $this->deviceManagementApplicabilityRuleOsVersion);
        $writer->writeCollectionOfObjectValues('deviceSettingStateSummaries', $this->deviceSettingStateSummaries);
        $writer->writeCollectionOfObjectValues('deviceStatuses', $this->deviceStatuses);
        $writer->writeObjectValue('deviceStatusOverview', $this->deviceStatusOverview);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfObjectValues('groupAssignments', $this->groupAssignments);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->roleScopeTagIds);
        $writer->writeBooleanValue('supportsScopeTags', $this->supportsScopeTags);
        $writer->writeCollectionOfObjectValues('userStatuses', $this->userStatuses);
        $writer->writeObjectValue('userStatusOverview', $this->userStatusOverview);
        $writer->writeIntegerValue('version', $this->version);
    }

    /**
     * Sets the assignments property value. The list of assignments for the device configuration profile.
     *  @param array<DeviceConfigurationAssignment>|null $value Value to set for the assignments property.
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
     * Sets the deviceManagementApplicabilityRuleDeviceMode property value. The device mode applicability rule for this Policy.
     *  @param DeviceManagementApplicabilityRuleDeviceMode|null $value Value to set for the deviceManagementApplicabilityRuleDeviceMode property.
    */
    public function setDeviceManagementApplicabilityRuleDeviceMode(?DeviceManagementApplicabilityRuleDeviceMode $value ): void {
        $this->deviceManagementApplicabilityRuleDeviceMode = $value;
    }

    /**
     * Sets the deviceManagementApplicabilityRuleOsEdition property value. The OS edition applicability for this Policy.
     *  @param DeviceManagementApplicabilityRuleOsEdition|null $value Value to set for the deviceManagementApplicabilityRuleOsEdition property.
    */
    public function setDeviceManagementApplicabilityRuleOsEdition(?DeviceManagementApplicabilityRuleOsEdition $value ): void {
        $this->deviceManagementApplicabilityRuleOsEdition = $value;
    }

    /**
     * Sets the deviceManagementApplicabilityRuleOsVersion property value. The OS version applicability rule for this Policy.
     *  @param DeviceManagementApplicabilityRuleOsVersion|null $value Value to set for the deviceManagementApplicabilityRuleOsVersion property.
    */
    public function setDeviceManagementApplicabilityRuleOsVersion(?DeviceManagementApplicabilityRuleOsVersion $value ): void {
        $this->deviceManagementApplicabilityRuleOsVersion = $value;
    }

    /**
     * Sets the deviceSettingStateSummaries property value. Device Configuration Setting State Device Summary
     *  @param array<SettingStateDeviceSummary>|null $value Value to set for the deviceSettingStateSummaries property.
    */
    public function setDeviceSettingStateSummaries(?array $value ): void {
        $this->deviceSettingStateSummaries = $value;
    }

    /**
     * Sets the deviceStatuses property value. Device configuration installation status by device.
     *  @param array<DeviceConfigurationDeviceStatus>|null $value Value to set for the deviceStatuses property.
    */
    public function setDeviceStatuses(?array $value ): void {
        $this->deviceStatuses = $value;
    }

    /**
     * Sets the deviceStatusOverview property value. Device Configuration devices status overview
     *  @param DeviceConfigurationDeviceOverview|null $value Value to set for the deviceStatusOverview property.
    */
    public function setDeviceStatusOverview(?DeviceConfigurationDeviceOverview $value ): void {
        $this->deviceStatusOverview = $value;
    }

    /**
     * Sets the displayName property value. Admin provided name of the device configuration.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the groupAssignments property value. The list of group assignments for the device configuration profile.
     *  @param array<DeviceConfigurationGroupAssignment>|null $value Value to set for the groupAssignments property.
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
     * Sets the roleScopeTagIds property value. List of Scope Tags for this Entity instance.
     *  @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value ): void {
        $this->roleScopeTagIds = $value;
    }

    /**
     * Sets the supportsScopeTags property value. Indicates whether or not the underlying Device Configuration supports the assignment of scope tags. Assigning to the ScopeTags property is not allowed when this value is false and entities will not be visible to scoped users. This occurs for Legacy policies created in Silverlight and can be resolved by deleting and recreating the policy in the Azure Portal. This property is read-only.
     *  @param bool|null $value Value to set for the supportsScopeTags property.
    */
    public function setSupportsScopeTags(?bool $value ): void {
        $this->supportsScopeTags = $value;
    }

    /**
     * Sets the userStatuses property value. Device configuration installation status by user.
     *  @param array<DeviceConfigurationUserStatus>|null $value Value to set for the userStatuses property.
    */
    public function setUserStatuses(?array $value ): void {
        $this->userStatuses = $value;
    }

    /**
     * Sets the userStatusOverview property value. Device Configuration users status overview
     *  @param DeviceConfigurationUserOverview|null $value Value to set for the userStatusOverview property.
    */
    public function setUserStatusOverview(?DeviceConfigurationUserOverview $value ): void {
        $this->userStatusOverview = $value;
    }

    /**
     * Sets the version property value. Version of the device configuration.
     *  @param int|null $value Value to set for the version property.
    */
    public function setVersion(?int $value ): void {
        $this->version = $value;
    }

}
