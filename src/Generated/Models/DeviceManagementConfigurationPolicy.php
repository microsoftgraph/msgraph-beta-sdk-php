<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationPolicy extends Entity implements Parsable 
{
    /**
     * @var array<DeviceManagementConfigurationPolicyAssignment>|null $assignments Policy assignments
    */
    private ?array $assignments = null;
    
    /**
     * @var DateTime|null $createdDateTime Policy creation date and time
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $creationSource Policy creation source
    */
    private ?string $creationSource = null;
    
    /**
     * @var string|null $description Policy description
    */
    private ?string $description = null;
    
    /**
     * @var bool|null $isAssigned Policy assignment status. This property is read-only.
    */
    private ?bool $isAssigned = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime Policy last modification date and time
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var string|null $name Policy name
    */
    private ?string $name = null;
    
    /**
     * @var DeviceManagementConfigurationPlatforms|null $platforms Supported platform types.
    */
    private ?DeviceManagementConfigurationPlatforms $platforms = null;
    
    /**
     * @var array<string>|null $roleScopeTagIds List of Scope Tags for this Entity instance.
    */
    private ?array $roleScopeTagIds = null;
    
    /**
     * @var int|null $settingCount Number of settings
    */
    private ?int $settingCount = null;
    
    /**
     * @var array<DeviceManagementConfigurationSetting>|null $settings Policy settings
    */
    private ?array $settings = null;
    
    /**
     * @var DeviceManagementConfigurationTechnologies|null $technologies Describes which technology this setting can be deployed with
    */
    private ?DeviceManagementConfigurationTechnologies $technologies = null;
    
    /**
     * @var DeviceManagementConfigurationPolicyTemplateReference|null $templateReference Template reference information
    */
    private ?DeviceManagementConfigurationPolicyTemplateReference $templateReference = null;
    
    /**
     * Instantiates a new DeviceManagementConfigurationPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceManagementConfigurationPolicy');
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
        return $this->assignments;
    }

    /**
     * Gets the createdDateTime property value. Policy creation date and time
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the creationSource property value. Policy creation source
     * @return string|null
    */
    public function getCreationSource(): ?string {
        return $this->creationSource;
    }

    /**
     * Gets the description property value. Policy description
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignments' => function (ParseNode $n) use ($o) { $o->setAssignments($n->getCollectionOfObjectValues(array(DeviceManagementConfigurationPolicyAssignment::class, 'createFromDiscriminatorValue'))); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'creationSource' => function (ParseNode $n) use ($o) { $o->setCreationSource($n->getStringValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'isAssigned' => function (ParseNode $n) use ($o) { $o->setIsAssigned($n->getBooleanValue()); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
            'platforms' => function (ParseNode $n) use ($o) { $o->setPlatforms($n->getEnumValue(DeviceManagementConfigurationPlatforms::class)); },
            'roleScopeTagIds' => function (ParseNode $n) use ($o) { $o->setRoleScopeTagIds($n->getCollectionOfPrimitiveValues()); },
            'settingCount' => function (ParseNode $n) use ($o) { $o->setSettingCount($n->getIntegerValue()); },
            'settings' => function (ParseNode $n) use ($o) { $o->setSettings($n->getCollectionOfObjectValues(array(DeviceManagementConfigurationSetting::class, 'createFromDiscriminatorValue'))); },
            'technologies' => function (ParseNode $n) use ($o) { $o->setTechnologies($n->getEnumValue(DeviceManagementConfigurationTechnologies::class)); },
            'templateReference' => function (ParseNode $n) use ($o) { $o->setTemplateReference($n->getObjectValue(array(DeviceManagementConfigurationPolicyTemplateReference::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the isAssigned property value. Policy assignment status. This property is read-only.
     * @return bool|null
    */
    public function getIsAssigned(): ?bool {
        return $this->isAssigned;
    }

    /**
     * Gets the lastModifiedDateTime property value. Policy last modification date and time
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the name property value. Policy name
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the platforms property value. Supported platform types.
     * @return DeviceManagementConfigurationPlatforms|null
    */
    public function getPlatforms(): ?DeviceManagementConfigurationPlatforms {
        return $this->platforms;
    }

    /**
     * Gets the roleScopeTagIds property value. List of Scope Tags for this Entity instance.
     * @return array<string>|null
    */
    public function getRoleScopeTagIds(): ?array {
        return $this->roleScopeTagIds;
    }

    /**
     * Gets the settingCount property value. Number of settings
     * @return int|null
    */
    public function getSettingCount(): ?int {
        return $this->settingCount;
    }

    /**
     * Gets the settings property value. Policy settings
     * @return array<DeviceManagementConfigurationSetting>|null
    */
    public function getSettings(): ?array {
        return $this->settings;
    }

    /**
     * Gets the technologies property value. Describes which technology this setting can be deployed with
     * @return DeviceManagementConfigurationTechnologies|null
    */
    public function getTechnologies(): ?DeviceManagementConfigurationTechnologies {
        return $this->technologies;
    }

    /**
     * Gets the templateReference property value. Template reference information
     * @return DeviceManagementConfigurationPolicyTemplateReference|null
    */
    public function getTemplateReference(): ?DeviceManagementConfigurationPolicyTemplateReference {
        return $this->templateReference;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('assignments', $this->assignments);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('creationSource', $this->creationSource);
        $writer->writeStringValue('description', $this->description);
        $writer->writeBooleanValue('isAssigned', $this->isAssigned);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeStringValue('name', $this->name);
        $writer->writeEnumValue('platforms', $this->platforms);
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->roleScopeTagIds);
        $writer->writeIntegerValue('settingCount', $this->settingCount);
        $writer->writeCollectionOfObjectValues('settings', $this->settings);
        $writer->writeEnumValue('technologies', $this->technologies);
        $writer->writeObjectValue('templateReference', $this->templateReference);
    }

    /**
     * Sets the assignments property value. Policy assignments
     *  @param array<DeviceManagementConfigurationPolicyAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value ): void {
        $this->assignments = $value;
    }

    /**
     * Sets the createdDateTime property value. Policy creation date and time
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the creationSource property value. Policy creation source
     *  @param string|null $value Value to set for the creationSource property.
    */
    public function setCreationSource(?string $value ): void {
        $this->creationSource = $value;
    }

    /**
     * Sets the description property value. Policy description
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the isAssigned property value. Policy assignment status. This property is read-only.
     *  @param bool|null $value Value to set for the isAssigned property.
    */
    public function setIsAssigned(?bool $value ): void {
        $this->isAssigned = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. Policy last modification date and time
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the name property value. Policy name
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the platforms property value. Supported platform types.
     *  @param DeviceManagementConfigurationPlatforms|null $value Value to set for the platforms property.
    */
    public function setPlatforms(?DeviceManagementConfigurationPlatforms $value ): void {
        $this->platforms = $value;
    }

    /**
     * Sets the roleScopeTagIds property value. List of Scope Tags for this Entity instance.
     *  @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value ): void {
        $this->roleScopeTagIds = $value;
    }

    /**
     * Sets the settingCount property value. Number of settings
     *  @param int|null $value Value to set for the settingCount property.
    */
    public function setSettingCount(?int $value ): void {
        $this->settingCount = $value;
    }

    /**
     * Sets the settings property value. Policy settings
     *  @param array<DeviceManagementConfigurationSetting>|null $value Value to set for the settings property.
    */
    public function setSettings(?array $value ): void {
        $this->settings = $value;
    }

    /**
     * Sets the technologies property value. Describes which technology this setting can be deployed with
     *  @param DeviceManagementConfigurationTechnologies|null $value Value to set for the technologies property.
    */
    public function setTechnologies(?DeviceManagementConfigurationTechnologies $value ): void {
        $this->technologies = $value;
    }

    /**
     * Sets the templateReference property value. Template reference information
     *  @param DeviceManagementConfigurationPolicyTemplateReference|null $value Value to set for the templateReference property.
    */
    public function setTemplateReference(?DeviceManagementConfigurationPolicyTemplateReference $value ): void {
        $this->templateReference = $value;
    }

}
