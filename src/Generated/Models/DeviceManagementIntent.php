<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Entity that represents an intent to apply settings to a device
*/
class DeviceManagementIntent extends Entity implements Parsable 
{
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
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementIntent {
        return new DeviceManagementIntent();
    }

    /**
     * Gets the assignments property value. Collection of assignments
     * @return array<DeviceManagementIntentAssignment>|null
    */
    public function getAssignments(): ?array {
        return $this->getBackingStore()->get('assignments');
    }

    /**
     * Gets the categories property value. Collection of setting categories within the intent
     * @return array<DeviceManagementIntentSettingCategory>|null
    */
    public function getCategories(): ?array {
        return $this->getBackingStore()->get('categories');
    }

    /**
     * Gets the description property value. The user given description
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the deviceSettingStateSummaries property value. Collection of settings and their states and counts of devices that belong to corresponding state for all settings within the intent
     * @return array<DeviceManagementIntentDeviceSettingStateSummary>|null
    */
    public function getDeviceSettingStateSummaries(): ?array {
        return $this->getBackingStore()->get('deviceSettingStateSummaries');
    }

    /**
     * Gets the deviceStates property value. Collection of states of all devices that the intent is applied to
     * @return array<DeviceManagementIntentDeviceState>|null
    */
    public function getDeviceStates(): ?array {
        return $this->getBackingStore()->get('deviceStates');
    }

    /**
     * Gets the deviceStateSummary property value. A summary of device states and counts of devices that belong to corresponding state for all devices that the intent is applied to
     * @return DeviceManagementIntentDeviceStateSummary|null
    */
    public function getDeviceStateSummary(): ?DeviceManagementIntentDeviceStateSummary {
        return $this->getBackingStore()->get('deviceStateSummary');
    }

    /**
     * Gets the displayName property value. The user given display name
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignments' => fn(ParseNode $n) => $o->setAssignments($n->getCollectionOfObjectValues([DeviceManagementIntentAssignment::class, 'createFromDiscriminatorValue'])),
            'categories' => fn(ParseNode $n) => $o->setCategories($n->getCollectionOfObjectValues([DeviceManagementIntentSettingCategory::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'deviceSettingStateSummaries' => fn(ParseNode $n) => $o->setDeviceSettingStateSummaries($n->getCollectionOfObjectValues([DeviceManagementIntentDeviceSettingStateSummary::class, 'createFromDiscriminatorValue'])),
            'deviceStates' => fn(ParseNode $n) => $o->setDeviceStates($n->getCollectionOfObjectValues([DeviceManagementIntentDeviceState::class, 'createFromDiscriminatorValue'])),
            'deviceStateSummary' => fn(ParseNode $n) => $o->setDeviceStateSummary($n->getObjectValue([DeviceManagementIntentDeviceStateSummary::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'isAssigned' => fn(ParseNode $n) => $o->setIsAssigned($n->getBooleanValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'roleScopeTagIds' => fn(ParseNode $n) => $o->setRoleScopeTagIds($n->getCollectionOfPrimitiveValues()),
            'settings' => fn(ParseNode $n) => $o->setSettings($n->getCollectionOfObjectValues([DeviceManagementSettingInstance::class, 'createFromDiscriminatorValue'])),
            'templateId' => fn(ParseNode $n) => $o->setTemplateId($n->getStringValue()),
            'userStates' => fn(ParseNode $n) => $o->setUserStates($n->getCollectionOfObjectValues([DeviceManagementIntentUserState::class, 'createFromDiscriminatorValue'])),
            'userStateSummary' => fn(ParseNode $n) => $o->setUserStateSummary($n->getObjectValue([DeviceManagementIntentUserStateSummary::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the isAssigned property value. Signifies whether or not the intent is assigned to users
     * @return bool|null
    */
    public function getIsAssigned(): ?bool {
        return $this->getBackingStore()->get('isAssigned');
    }

    /**
     * Gets the lastModifiedDateTime property value. When the intent was last modified
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the roleScopeTagIds property value. List of Scope Tags for this Entity instance.
     * @return array<string>|null
    */
    public function getRoleScopeTagIds(): ?array {
        return $this->getBackingStore()->get('roleScopeTagIds');
    }

    /**
     * Gets the settings property value. Collection of all settings to be applied
     * @return array<DeviceManagementSettingInstance>|null
    */
    public function getSettings(): ?array {
        return $this->getBackingStore()->get('settings');
    }

    /**
     * Gets the templateId property value. The ID of the template this intent was created from (if any)
     * @return string|null
    */
    public function getTemplateId(): ?string {
        return $this->getBackingStore()->get('templateId');
    }

    /**
     * Gets the userStates property value. Collection of states of all users that the intent is applied to
     * @return array<DeviceManagementIntentUserState>|null
    */
    public function getUserStates(): ?array {
        return $this->getBackingStore()->get('userStates');
    }

    /**
     * Gets the userStateSummary property value. A summary of user states and counts of users that belong to corresponding state for all users that the intent is applied to
     * @return DeviceManagementIntentUserStateSummary|null
    */
    public function getUserStateSummary(): ?DeviceManagementIntentUserStateSummary {
        return $this->getBackingStore()->get('userStateSummary');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('assignments', $this->getAssignments());
        $writer->writeCollectionOfObjectValues('categories', $this->getCategories());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeCollectionOfObjectValues('deviceSettingStateSummaries', $this->getDeviceSettingStateSummaries());
        $writer->writeCollectionOfObjectValues('deviceStates', $this->getDeviceStates());
        $writer->writeObjectValue('deviceStateSummary', $this->getDeviceStateSummary());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeBooleanValue('isAssigned', $this->getIsAssigned());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->getRoleScopeTagIds());
        $writer->writeCollectionOfObjectValues('settings', $this->getSettings());
        $writer->writeStringValue('templateId', $this->getTemplateId());
        $writer->writeCollectionOfObjectValues('userStates', $this->getUserStates());
        $writer->writeObjectValue('userStateSummary', $this->getUserStateSummary());
    }

    /**
     * Sets the assignments property value. Collection of assignments
     * @param array<DeviceManagementIntentAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value): void {
        $this->getBackingStore()->set('assignments', $value);
    }

    /**
     * Sets the categories property value. Collection of setting categories within the intent
     * @param array<DeviceManagementIntentSettingCategory>|null $value Value to set for the categories property.
    */
    public function setCategories(?array $value): void {
        $this->getBackingStore()->set('categories', $value);
    }

    /**
     * Sets the description property value. The user given description
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the deviceSettingStateSummaries property value. Collection of settings and their states and counts of devices that belong to corresponding state for all settings within the intent
     * @param array<DeviceManagementIntentDeviceSettingStateSummary>|null $value Value to set for the deviceSettingStateSummaries property.
    */
    public function setDeviceSettingStateSummaries(?array $value): void {
        $this->getBackingStore()->set('deviceSettingStateSummaries', $value);
    }

    /**
     * Sets the deviceStates property value. Collection of states of all devices that the intent is applied to
     * @param array<DeviceManagementIntentDeviceState>|null $value Value to set for the deviceStates property.
    */
    public function setDeviceStates(?array $value): void {
        $this->getBackingStore()->set('deviceStates', $value);
    }

    /**
     * Sets the deviceStateSummary property value. A summary of device states and counts of devices that belong to corresponding state for all devices that the intent is applied to
     * @param DeviceManagementIntentDeviceStateSummary|null $value Value to set for the deviceStateSummary property.
    */
    public function setDeviceStateSummary(?DeviceManagementIntentDeviceStateSummary $value): void {
        $this->getBackingStore()->set('deviceStateSummary', $value);
    }

    /**
     * Sets the displayName property value. The user given display name
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the isAssigned property value. Signifies whether or not the intent is assigned to users
     * @param bool|null $value Value to set for the isAssigned property.
    */
    public function setIsAssigned(?bool $value): void {
        $this->getBackingStore()->set('isAssigned', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. When the intent was last modified
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the roleScopeTagIds property value. List of Scope Tags for this Entity instance.
     * @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value): void {
        $this->getBackingStore()->set('roleScopeTagIds', $value);
    }

    /**
     * Sets the settings property value. Collection of all settings to be applied
     * @param array<DeviceManagementSettingInstance>|null $value Value to set for the settings property.
    */
    public function setSettings(?array $value): void {
        $this->getBackingStore()->set('settings', $value);
    }

    /**
     * Sets the templateId property value. The ID of the template this intent was created from (if any)
     * @param string|null $value Value to set for the templateId property.
    */
    public function setTemplateId(?string $value): void {
        $this->getBackingStore()->set('templateId', $value);
    }

    /**
     * Sets the userStates property value. Collection of states of all users that the intent is applied to
     * @param array<DeviceManagementIntentUserState>|null $value Value to set for the userStates property.
    */
    public function setUserStates(?array $value): void {
        $this->getBackingStore()->set('userStates', $value);
    }

    /**
     * Sets the userStateSummary property value. A summary of user states and counts of users that belong to corresponding state for all users that the intent is applied to
     * @param DeviceManagementIntentUserStateSummary|null $value Value to set for the userStateSummary property.
    */
    public function setUserStateSummary(?DeviceManagementIntentUserStateSummary $value): void {
        $this->getBackingStore()->set('userStateSummary', $value);
    }

}
