<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class DeviceManagementIntent extends Entity implements Parsable 
{
    /**
     * Instantiates a new DeviceManagementIntent and sets the default values.
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
        $val = $this->getBackingStore()->get('assignments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementIntentAssignment::class);
            /** @var array<DeviceManagementIntentAssignment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignments'");
    }

    /**
     * Gets the categories property value. Collection of setting categories within the intent
     * @return array<DeviceManagementIntentSettingCategory>|null
    */
    public function getCategories(): ?array {
        $val = $this->getBackingStore()->get('categories');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementIntentSettingCategory::class);
            /** @var array<DeviceManagementIntentSettingCategory>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'categories'");
    }

    /**
     * Gets the description property value. The user given description
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the deviceSettingStateSummaries property value. Collection of settings and their states and counts of devices that belong to corresponding state for all settings within the intent
     * @return array<DeviceManagementIntentDeviceSettingStateSummary>|null
    */
    public function getDeviceSettingStateSummaries(): ?array {
        $val = $this->getBackingStore()->get('deviceSettingStateSummaries');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementIntentDeviceSettingStateSummary::class);
            /** @var array<DeviceManagementIntentDeviceSettingStateSummary>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceSettingStateSummaries'");
    }

    /**
     * Gets the deviceStates property value. Collection of states of all devices that the intent is applied to
     * @return array<DeviceManagementIntentDeviceState>|null
    */
    public function getDeviceStates(): ?array {
        $val = $this->getBackingStore()->get('deviceStates');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementIntentDeviceState::class);
            /** @var array<DeviceManagementIntentDeviceState>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceStates'");
    }

    /**
     * Gets the deviceStateSummary property value. A summary of device states and counts of devices that belong to corresponding state for all devices that the intent is applied to
     * @return DeviceManagementIntentDeviceStateSummary|null
    */
    public function getDeviceStateSummary(): ?DeviceManagementIntentDeviceStateSummary {
        $val = $this->getBackingStore()->get('deviceStateSummary');
        if (is_null($val) || $val instanceof DeviceManagementIntentDeviceStateSummary) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceStateSummary'");
    }

    /**
     * Gets the displayName property value. The user given display name
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
            'assignments' => fn(ParseNode $n) => $o->setAssignments($n->getCollectionOfObjectValues([DeviceManagementIntentAssignment::class, 'createFromDiscriminatorValue'])),
            'categories' => fn(ParseNode $n) => $o->setCategories($n->getCollectionOfObjectValues([DeviceManagementIntentSettingCategory::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'deviceSettingStateSummaries' => fn(ParseNode $n) => $o->setDeviceSettingStateSummaries($n->getCollectionOfObjectValues([DeviceManagementIntentDeviceSettingStateSummary::class, 'createFromDiscriminatorValue'])),
            'deviceStates' => fn(ParseNode $n) => $o->setDeviceStates($n->getCollectionOfObjectValues([DeviceManagementIntentDeviceState::class, 'createFromDiscriminatorValue'])),
            'deviceStateSummary' => fn(ParseNode $n) => $o->setDeviceStateSummary($n->getObjectValue([DeviceManagementIntentDeviceStateSummary::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'isAssigned' => fn(ParseNode $n) => $o->setIsAssigned($n->getBooleanValue()),
            'isMigratingToConfigurationPolicy' => fn(ParseNode $n) => $o->setIsMigratingToConfigurationPolicy($n->getBooleanValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'roleScopeTagIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setRoleScopeTagIds($val);
            },
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
        $val = $this->getBackingStore()->get('isAssigned');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isAssigned'");
    }

    /**
     * Gets the isMigratingToConfigurationPolicy property value. Signifies whether or not the intent is being migrated to the configurationPolicies endpoint
     * @return bool|null
    */
    public function getIsMigratingToConfigurationPolicy(): ?bool {
        $val = $this->getBackingStore()->get('isMigratingToConfigurationPolicy');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isMigratingToConfigurationPolicy'");
    }

    /**
     * Gets the lastModifiedDateTime property value. When the intent was last modified
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the roleScopeTagIds property value. List of Scope Tags for this Entity instance.
     * @return array<string>|null
    */
    public function getRoleScopeTagIds(): ?array {
        $val = $this->getBackingStore()->get('roleScopeTagIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleScopeTagIds'");
    }

    /**
     * Gets the settings property value. Collection of all settings to be applied
     * @return array<DeviceManagementSettingInstance>|null
    */
    public function getSettings(): ?array {
        $val = $this->getBackingStore()->get('settings');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementSettingInstance::class);
            /** @var array<DeviceManagementSettingInstance>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settings'");
    }

    /**
     * Gets the templateId property value. The ID of the template this intent was created from (if any)
     * @return string|null
    */
    public function getTemplateId(): ?string {
        $val = $this->getBackingStore()->get('templateId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'templateId'");
    }

    /**
     * Gets the userStates property value. Collection of states of all users that the intent is applied to
     * @return array<DeviceManagementIntentUserState>|null
    */
    public function getUserStates(): ?array {
        $val = $this->getBackingStore()->get('userStates');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementIntentUserState::class);
            /** @var array<DeviceManagementIntentUserState>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userStates'");
    }

    /**
     * Gets the userStateSummary property value. A summary of user states and counts of users that belong to corresponding state for all users that the intent is applied to
     * @return DeviceManagementIntentUserStateSummary|null
    */
    public function getUserStateSummary(): ?DeviceManagementIntentUserStateSummary {
        $val = $this->getBackingStore()->get('userStateSummary');
        if (is_null($val) || $val instanceof DeviceManagementIntentUserStateSummary) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userStateSummary'");
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
        $writer->writeBooleanValue('isMigratingToConfigurationPolicy', $this->getIsMigratingToConfigurationPolicy());
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
     * Sets the isMigratingToConfigurationPolicy property value. Signifies whether or not the intent is being migrated to the configurationPolicies endpoint
     * @param bool|null $value Value to set for the isMigratingToConfigurationPolicy property.
    */
    public function setIsMigratingToConfigurationPolicy(?bool $value): void {
        $this->getBackingStore()->set('isMigratingToConfigurationPolicy', $value);
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
