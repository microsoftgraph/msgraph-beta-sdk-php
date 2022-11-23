<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationPolicy extends Entity implements Parsable 
{
    /**
     * Instantiates a new deviceManagementConfigurationPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationPolicy {
        return new DeviceManagementConfigurationPolicy();
    }

    /**
     * Gets the assignments property value. Policy assignments
     * @return array<DeviceManagementConfigurationPolicyAssignment>|null
    */
    public function getAssignments(): ?array {
        return $this->getBackingStore()->get('assignments');
    }

    /**
     * Gets the createdDateTime property value. Policy creation date and time
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the creationSource property value. Policy creation source
     * @return string|null
    */
    public function getCreationSource(): ?string {
        return $this->getBackingStore()->get('creationSource');
    }

    /**
     * Gets the description property value. Policy description
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignments' => fn(ParseNode $n) => $o->setAssignments($n->getCollectionOfObjectValues([DeviceManagementConfigurationPolicyAssignment::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'creationSource' => fn(ParseNode $n) => $o->setCreationSource($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'isAssigned' => fn(ParseNode $n) => $o->setIsAssigned($n->getBooleanValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'platforms' => fn(ParseNode $n) => $o->setPlatforms($n->getEnumValue(DeviceManagementConfigurationPlatforms::class)),
            'priorityMetaData' => fn(ParseNode $n) => $o->setPriorityMetaData($n->getObjectValue([DeviceManagementPriorityMetaData::class, 'createFromDiscriminatorValue'])),
            'roleScopeTagIds' => fn(ParseNode $n) => $o->setRoleScopeTagIds($n->getCollectionOfPrimitiveValues()),
            'settingCount' => fn(ParseNode $n) => $o->setSettingCount($n->getIntegerValue()),
            'settings' => fn(ParseNode $n) => $o->setSettings($n->getCollectionOfObjectValues([DeviceManagementConfigurationSetting::class, 'createFromDiscriminatorValue'])),
            'technologies' => fn(ParseNode $n) => $o->setTechnologies($n->getEnumValue(DeviceManagementConfigurationTechnologies::class)),
            'templateReference' => fn(ParseNode $n) => $o->setTemplateReference($n->getObjectValue([DeviceManagementConfigurationPolicyTemplateReference::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the isAssigned property value. Policy assignment status. This property is read-only.
     * @return bool|null
    */
    public function getIsAssigned(): ?bool {
        return $this->getBackingStore()->get('isAssigned');
    }

    /**
     * Gets the lastModifiedDateTime property value. Policy last modification date and time
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the name property value. Policy name
     * @return string|null
    */
    public function getName(): ?string {
        return $this->getBackingStore()->get('name');
    }

    /**
     * Gets the platforms property value. Supported platform types.
     * @return DeviceManagementConfigurationPlatforms|null
    */
    public function getPlatforms(): ?DeviceManagementConfigurationPlatforms {
        return $this->getBackingStore()->get('platforms');
    }

    /**
     * Gets the priorityMetaData property value. Indicates the priority of each policies that are selected by the admin during enrollment process
     * @return DeviceManagementPriorityMetaData|null
    */
    public function getPriorityMetaData(): ?DeviceManagementPriorityMetaData {
        return $this->getBackingStore()->get('priorityMetaData');
    }

    /**
     * Gets the roleScopeTagIds property value. List of Scope Tags for this Entity instance.
     * @return array<string>|null
    */
    public function getRoleScopeTagIds(): ?array {
        return $this->getBackingStore()->get('roleScopeTagIds');
    }

    /**
     * Gets the settingCount property value. Number of settings
     * @return int|null
    */
    public function getSettingCount(): ?int {
        return $this->getBackingStore()->get('settingCount');
    }

    /**
     * Gets the settings property value. Policy settings
     * @return array<DeviceManagementConfigurationSetting>|null
    */
    public function getSettings(): ?array {
        return $this->getBackingStore()->get('settings');
    }

    /**
     * Gets the technologies property value. Describes which technology this setting can be deployed with
     * @return DeviceManagementConfigurationTechnologies|null
    */
    public function getTechnologies(): ?DeviceManagementConfigurationTechnologies {
        return $this->getBackingStore()->get('technologies');
    }

    /**
     * Gets the templateReference property value. Template reference information
     * @return DeviceManagementConfigurationPolicyTemplateReference|null
    */
    public function getTemplateReference(): ?DeviceManagementConfigurationPolicyTemplateReference {
        return $this->getBackingStore()->get('templateReference');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('assignments', $this->getAssignments());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('creationSource', $this->getCreationSource());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeEnumValue('platforms', $this->getPlatforms());
        $writer->writeObjectValue('priorityMetaData', $this->getPriorityMetaData());
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->getRoleScopeTagIds());
        $writer->writeIntegerValue('settingCount', $this->getSettingCount());
        $writer->writeCollectionOfObjectValues('settings', $this->getSettings());
        $writer->writeEnumValue('technologies', $this->getTechnologies());
        $writer->writeObjectValue('templateReference', $this->getTemplateReference());
    }

    /**
     * Sets the assignments property value. Policy assignments
     *  @param array<DeviceManagementConfigurationPolicyAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value): void {
        $this->getBackingStore()->set('assignments', $value);
    }

    /**
     * Sets the createdDateTime property value. Policy creation date and time
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the creationSource property value. Policy creation source
     *  @param string|null $value Value to set for the creationSource property.
    */
    public function setCreationSource(?string $value): void {
        $this->getBackingStore()->set('creationSource', $value);
    }

    /**
     * Sets the description property value. Policy description
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the isAssigned property value. Policy assignment status. This property is read-only.
     *  @param bool|null $value Value to set for the isAssigned property.
    */
    public function setIsAssigned(?bool $value): void {
        $this->getBackingStore()->set('isAssigned', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. Policy last modification date and time
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the name property value. Policy name
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the platforms property value. Supported platform types.
     *  @param DeviceManagementConfigurationPlatforms|null $value Value to set for the platforms property.
    */
    public function setPlatforms(?DeviceManagementConfigurationPlatforms $value): void {
        $this->getBackingStore()->set('platforms', $value);
    }

    /**
     * Sets the priorityMetaData property value. Indicates the priority of each policies that are selected by the admin during enrollment process
     *  @param DeviceManagementPriorityMetaData|null $value Value to set for the priorityMetaData property.
    */
    public function setPriorityMetaData(?DeviceManagementPriorityMetaData $value): void {
        $this->getBackingStore()->set('priorityMetaData', $value);
    }

    /**
     * Sets the roleScopeTagIds property value. List of Scope Tags for this Entity instance.
     *  @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value): void {
        $this->getBackingStore()->set('roleScopeTagIds', $value);
    }

    /**
     * Sets the settingCount property value. Number of settings
     *  @param int|null $value Value to set for the settingCount property.
    */
    public function setSettingCount(?int $value): void {
        $this->getBackingStore()->set('settingCount', $value);
    }

    /**
     * Sets the settings property value. Policy settings
     *  @param array<DeviceManagementConfigurationSetting>|null $value Value to set for the settings property.
    */
    public function setSettings(?array $value): void {
        $this->getBackingStore()->set('settings', $value);
    }

    /**
     * Sets the technologies property value. Describes which technology this setting can be deployed with
     *  @param DeviceManagementConfigurationTechnologies|null $value Value to set for the technologies property.
    */
    public function setTechnologies(?DeviceManagementConfigurationTechnologies $value): void {
        $this->getBackingStore()->set('technologies', $value);
    }

    /**
     * Sets the templateReference property value. Template reference information
     *  @param DeviceManagementConfigurationPolicyTemplateReference|null $value Value to set for the templateReference property.
    */
    public function setTemplateReference(?DeviceManagementConfigurationPolicyTemplateReference $value): void {
        $this->getBackingStore()->set('templateReference', $value);
    }

}
