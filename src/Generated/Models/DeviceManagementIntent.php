<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementIntent extends Entity 
{
    /** @var array<DeviceManagementIntentAssignment>|null $assignments Collection of assignments */
    private ?array $assignments = null;
    
    /** @var array<DeviceManagementIntentSettingCategory>|null $categories Collection of setting categories within the intent */
    private ?array $categories = null;
    
    /** @var string|null $description The user given description */
    private ?string $description = null;
    
    /** @var array<DeviceManagementIntentDeviceSettingStateSummary>|null $deviceSettingStateSummaries Collection of settings and their states and counts of devices that belong to corresponding state for all settings within the intent */
    private ?array $deviceSettingStateSummaries = null;
    
    /** @var array<DeviceManagementIntentDeviceState>|null $deviceStates Collection of states of all devices that the intent is applied to */
    private ?array $deviceStates = null;
    
    /** @var DeviceManagementIntentDeviceStateSummary|null $deviceStateSummary A summary of device states and counts of devices that belong to corresponding state for all devices that the intent is applied to */
    private ?DeviceManagementIntentDeviceStateSummary $deviceStateSummary = null;
    
    /** @var string|null $displayName The user given display name */
    private ?string $displayName = null;
    
    /** @var bool|null $isAssigned Signifies whether or not the intent is assigned to users */
    private ?bool $isAssigned = null;
    
    /** @var DateTime|null $lastModifiedDateTime When the intent was last modified */
    private ?DateTime $lastModifiedDateTime = null;
    
    /** @var array<string>|null $roleScopeTagIds List of Scope Tags for this Entity instance. */
    private ?array $roleScopeTagIds = null;
    
    /** @var array<DeviceManagementSettingInstance>|null $settings Collection of all settings to be applied */
    private ?array $settings = null;
    
    /** @var string|null $templateId The ID of the template this intent was created from (if any) */
    private ?string $templateId = null;
    
    /** @var array<DeviceManagementIntentUserState>|null $userStates Collection of states of all users that the intent is applied to */
    private ?array $userStates = null;
    
    /** @var DeviceManagementIntentUserStateSummary|null $userStateSummary A summary of user states and counts of users that belong to corresponding state for all users that the intent is applied to */
    private ?DeviceManagementIntentUserStateSummary $userStateSummary = null;
    
    /**
     * Instantiates a new deviceManagementIntent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementIntent
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementIntent {
        return new DeviceManagementIntent();
    }

    /**
     * Gets the assignments property value. Collection of assignments
     * @return array<DeviceManagementIntentAssignment>|null
    */
    public function getAssignments(): ?array {
        return $this->assignments;
    }

    /**
     * Gets the categories property value. Collection of setting categories within the intent
     * @return array<DeviceManagementIntentSettingCategory>|null
    */
    public function getCategories(): ?array {
        return $this->categories;
    }

    /**
     * Gets the description property value. The user given description
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the deviceSettingStateSummaries property value. Collection of settings and their states and counts of devices that belong to corresponding state for all settings within the intent
     * @return array<DeviceManagementIntentDeviceSettingStateSummary>|null
    */
    public function getDeviceSettingStateSummaries(): ?array {
        return $this->deviceSettingStateSummaries;
    }

    /**
     * Gets the deviceStates property value. Collection of states of all devices that the intent is applied to
     * @return array<DeviceManagementIntentDeviceState>|null
    */
    public function getDeviceStates(): ?array {
        return $this->deviceStates;
    }

    /**
     * Gets the deviceStateSummary property value. A summary of device states and counts of devices that belong to corresponding state for all devices that the intent is applied to
     * @return DeviceManagementIntentDeviceStateSummary|null
    */
    public function getDeviceStateSummary(): ?DeviceManagementIntentDeviceStateSummary {
        return $this->deviceStateSummary;
    }

    /**
     * Gets the displayName property value. The user given display name
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
            'assignments' => function (self $o, ParseNode $n) { $o->setAssignments($n->getCollectionOfObjectValues(DeviceManagementIntentAssignment::class)); },
            'categories' => function (self $o, ParseNode $n) { $o->setCategories($n->getCollectionOfObjectValues(DeviceManagementIntentSettingCategory::class)); },
            'description' => function (self $o, ParseNode $n) { $o->setDescription($n->getStringValue()); },
            'deviceSettingStateSummaries' => function (self $o, ParseNode $n) { $o->setDeviceSettingStateSummaries($n->getCollectionOfObjectValues(DeviceManagementIntentDeviceSettingStateSummary::class)); },
            'deviceStates' => function (self $o, ParseNode $n) { $o->setDeviceStates($n->getCollectionOfObjectValues(DeviceManagementIntentDeviceState::class)); },
            'deviceStateSummary' => function (self $o, ParseNode $n) { $o->setDeviceStateSummary($n->getObjectValue(DeviceManagementIntentDeviceStateSummary::class)); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'isAssigned' => function (self $o, ParseNode $n) { $o->setIsAssigned($n->getBooleanValue()); },
            'lastModifiedDateTime' => function (self $o, ParseNode $n) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'roleScopeTagIds' => function (self $o, ParseNode $n) { $o->setRoleScopeTagIds($n->getCollectionOfPrimitiveValues()); },
            'settings' => function (self $o, ParseNode $n) { $o->setSettings($n->getCollectionOfObjectValues(DeviceManagementSettingInstance::class)); },
            'templateId' => function (self $o, ParseNode $n) { $o->setTemplateId($n->getStringValue()); },
            'userStates' => function (self $o, ParseNode $n) { $o->setUserStates($n->getCollectionOfObjectValues(DeviceManagementIntentUserState::class)); },
            'userStateSummary' => function (self $o, ParseNode $n) { $o->setUserStateSummary($n->getObjectValue(DeviceManagementIntentUserStateSummary::class)); },
        ]);
    }

    /**
     * Gets the isAssigned property value. Signifies whether or not the intent is assigned to users
     * @return bool|null
    */
    public function getIsAssigned(): ?bool {
        return $this->isAssigned;
    }

    /**
     * Gets the lastModifiedDateTime property value. When the intent was last modified
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
     * Gets the settings property value. Collection of all settings to be applied
     * @return array<DeviceManagementSettingInstance>|null
    */
    public function getSettings(): ?array {
        return $this->settings;
    }

    /**
     * Gets the templateId property value. The ID of the template this intent was created from (if any)
     * @return string|null
    */
    public function getTemplateId(): ?string {
        return $this->templateId;
    }

    /**
     * Gets the userStates property value. Collection of states of all users that the intent is applied to
     * @return array<DeviceManagementIntentUserState>|null
    */
    public function getUserStates(): ?array {
        return $this->userStates;
    }

    /**
     * Gets the userStateSummary property value. A summary of user states and counts of users that belong to corresponding state for all users that the intent is applied to
     * @return DeviceManagementIntentUserStateSummary|null
    */
    public function getUserStateSummary(): ?DeviceManagementIntentUserStateSummary {
        return $this->userStateSummary;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('assignments', $this->assignments);
        $writer->writeCollectionOfObjectValues('categories', $this->categories);
        $writer->writeStringValue('description', $this->description);
        $writer->writeCollectionOfObjectValues('deviceSettingStateSummaries', $this->deviceSettingStateSummaries);
        $writer->writeCollectionOfObjectValues('deviceStates', $this->deviceStates);
        $writer->writeObjectValue('deviceStateSummary', $this->deviceStateSummary);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeBooleanValue('isAssigned', $this->isAssigned);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->roleScopeTagIds);
        $writer->writeCollectionOfObjectValues('settings', $this->settings);
        $writer->writeStringValue('templateId', $this->templateId);
        $writer->writeCollectionOfObjectValues('userStates', $this->userStates);
        $writer->writeObjectValue('userStateSummary', $this->userStateSummary);
    }

    /**
     * Sets the assignments property value. Collection of assignments
     *  @param array<DeviceManagementIntentAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value ): void {
        $this->assignments = $value;
    }

    /**
     * Sets the categories property value. Collection of setting categories within the intent
     *  @param array<DeviceManagementIntentSettingCategory>|null $value Value to set for the categories property.
    */
    public function setCategories(?array $value ): void {
        $this->categories = $value;
    }

    /**
     * Sets the description property value. The user given description
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the deviceSettingStateSummaries property value. Collection of settings and their states and counts of devices that belong to corresponding state for all settings within the intent
     *  @param array<DeviceManagementIntentDeviceSettingStateSummary>|null $value Value to set for the deviceSettingStateSummaries property.
    */
    public function setDeviceSettingStateSummaries(?array $value ): void {
        $this->deviceSettingStateSummaries = $value;
    }

    /**
     * Sets the deviceStates property value. Collection of states of all devices that the intent is applied to
     *  @param array<DeviceManagementIntentDeviceState>|null $value Value to set for the deviceStates property.
    */
    public function setDeviceStates(?array $value ): void {
        $this->deviceStates = $value;
    }

    /**
     * Sets the deviceStateSummary property value. A summary of device states and counts of devices that belong to corresponding state for all devices that the intent is applied to
     *  @param DeviceManagementIntentDeviceStateSummary|null $value Value to set for the deviceStateSummary property.
    */
    public function setDeviceStateSummary(?DeviceManagementIntentDeviceStateSummary $value ): void {
        $this->deviceStateSummary = $value;
    }

    /**
     * Sets the displayName property value. The user given display name
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the isAssigned property value. Signifies whether or not the intent is assigned to users
     *  @param bool|null $value Value to set for the isAssigned property.
    */
    public function setIsAssigned(?bool $value ): void {
        $this->isAssigned = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. When the intent was last modified
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
     * Sets the settings property value. Collection of all settings to be applied
     *  @param array<DeviceManagementSettingInstance>|null $value Value to set for the settings property.
    */
    public function setSettings(?array $value ): void {
        $this->settings = $value;
    }

    /**
     * Sets the templateId property value. The ID of the template this intent was created from (if any)
     *  @param string|null $value Value to set for the templateId property.
    */
    public function setTemplateId(?string $value ): void {
        $this->templateId = $value;
    }

    /**
     * Sets the userStates property value. Collection of states of all users that the intent is applied to
     *  @param array<DeviceManagementIntentUserState>|null $value Value to set for the userStates property.
    */
    public function setUserStates(?array $value ): void {
        $this->userStates = $value;
    }

    /**
     * Sets the userStateSummary property value. A summary of user states and counts of users that belong to corresponding state for all users that the intent is applied to
     *  @param DeviceManagementIntentUserStateSummary|null $value Value to set for the userStateSummary property.
    */
    public function setUserStateSummary(?DeviceManagementIntentUserStateSummary $value ): void {
        $this->userStateSummary = $value;
    }

}
