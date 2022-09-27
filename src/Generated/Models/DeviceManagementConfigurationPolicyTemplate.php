<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationPolicyTemplate extends Entity implements Parsable 
{
    /**
     * @var bool|null $allowUnmanagedSettings Allow unmanaged setting templates
    */
    private ?bool $allowUnmanagedSettings = null;
    
    /**
     * @var string|null $baseId Template base identifier
    */
    private ?string $baseId = null;
    
    /**
     * @var string|null $description Template description
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName Template display name
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $displayVersion Description of template version
    */
    private ?string $displayVersion = null;
    
    /**
     * @var DeviceManagementTemplateLifecycleState|null $lifecycleState Describes current lifecycle state of a template
    */
    private ?DeviceManagementTemplateLifecycleState $lifecycleState = null;
    
    /**
     * @var DeviceManagementConfigurationPlatforms|null $platforms Supported platform types.
    */
    private ?DeviceManagementConfigurationPlatforms $platforms = null;
    
    /**
     * @var int|null $settingTemplateCount Number of setting templates. Valid values 0 to 2147483647. This property is read-only.
    */
    private ?int $settingTemplateCount = null;
    
    /**
     * @var array<DeviceManagementConfigurationSettingTemplate>|null $settingTemplates Setting templates
    */
    private ?array $settingTemplates = null;
    
    /**
     * @var DeviceManagementConfigurationTechnologies|null $technologies Describes which technology this setting can be deployed with
    */
    private ?DeviceManagementConfigurationTechnologies $technologies = null;
    
    /**
     * @var DeviceManagementConfigurationTemplateFamily|null $templateFamily Describes the TemplateFamily for the Template entity
    */
    private ?DeviceManagementConfigurationTemplateFamily $templateFamily = null;
    
    /**
     * @var int|null $version Template version. Valid values 1 to 2147483647. This property is read-only.
    */
    private ?int $version = null;
    
    /**
     * Instantiates a new DeviceManagementConfigurationPolicyTemplate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceManagementConfigurationPolicyTemplate');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationPolicyTemplate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationPolicyTemplate {
        return new DeviceManagementConfigurationPolicyTemplate();
    }

    /**
     * Gets the allowUnmanagedSettings property value. Allow unmanaged setting templates
     * @return bool|null
    */
    public function getAllowUnmanagedSettings(): ?bool {
        return $this->allowUnmanagedSettings;
    }

    /**
     * Gets the baseId property value. Template base identifier
     * @return string|null
    */
    public function getBaseId(): ?string {
        return $this->baseId;
    }

    /**
     * Gets the description property value. Template description
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. Template display name
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the displayVersion property value. Description of template version
     * @return string|null
    */
    public function getDisplayVersion(): ?string {
        return $this->displayVersion;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowUnmanagedSettings' => function (ParseNode $n) use ($o) { $o->setAllowUnmanagedSettings($n->getBooleanValue()); },
            'baseId' => function (ParseNode $n) use ($o) { $o->setBaseId($n->getStringValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'displayVersion' => function (ParseNode $n) use ($o) { $o->setDisplayVersion($n->getStringValue()); },
            'lifecycleState' => function (ParseNode $n) use ($o) { $o->setLifecycleState($n->getEnumValue(DeviceManagementTemplateLifecycleState::class)); },
            'platforms' => function (ParseNode $n) use ($o) { $o->setPlatforms($n->getEnumValue(DeviceManagementConfigurationPlatforms::class)); },
            'settingTemplateCount' => function (ParseNode $n) use ($o) { $o->setSettingTemplateCount($n->getIntegerValue()); },
            'settingTemplates' => function (ParseNode $n) use ($o) { $o->setSettingTemplates($n->getCollectionOfObjectValues(array(DeviceManagementConfigurationSettingTemplate::class, 'createFromDiscriminatorValue'))); },
            'technologies' => function (ParseNode $n) use ($o) { $o->setTechnologies($n->getEnumValue(DeviceManagementConfigurationTechnologies::class)); },
            'templateFamily' => function (ParseNode $n) use ($o) { $o->setTemplateFamily($n->getEnumValue(DeviceManagementConfigurationTemplateFamily::class)); },
            'version' => function (ParseNode $n) use ($o) { $o->setVersion($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the lifecycleState property value. Describes current lifecycle state of a template
     * @return DeviceManagementTemplateLifecycleState|null
    */
    public function getLifecycleState(): ?DeviceManagementTemplateLifecycleState {
        return $this->lifecycleState;
    }

    /**
     * Gets the platforms property value. Supported platform types.
     * @return DeviceManagementConfigurationPlatforms|null
    */
    public function getPlatforms(): ?DeviceManagementConfigurationPlatforms {
        return $this->platforms;
    }

    /**
     * Gets the settingTemplateCount property value. Number of setting templates. Valid values 0 to 2147483647. This property is read-only.
     * @return int|null
    */
    public function getSettingTemplateCount(): ?int {
        return $this->settingTemplateCount;
    }

    /**
     * Gets the settingTemplates property value. Setting templates
     * @return array<DeviceManagementConfigurationSettingTemplate>|null
    */
    public function getSettingTemplates(): ?array {
        return $this->settingTemplates;
    }

    /**
     * Gets the technologies property value. Describes which technology this setting can be deployed with
     * @return DeviceManagementConfigurationTechnologies|null
    */
    public function getTechnologies(): ?DeviceManagementConfigurationTechnologies {
        return $this->technologies;
    }

    /**
     * Gets the templateFamily property value. Describes the TemplateFamily for the Template entity
     * @return DeviceManagementConfigurationTemplateFamily|null
    */
    public function getTemplateFamily(): ?DeviceManagementConfigurationTemplateFamily {
        return $this->templateFamily;
    }

    /**
     * Gets the version property value. Template version. Valid values 1 to 2147483647. This property is read-only.
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
        $writer->writeBooleanValue('allowUnmanagedSettings', $this->allowUnmanagedSettings);
        $writer->writeStringValue('baseId', $this->baseId);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('displayVersion', $this->displayVersion);
        $writer->writeEnumValue('lifecycleState', $this->lifecycleState);
        $writer->writeEnumValue('platforms', $this->platforms);
        $writer->writeCollectionOfObjectValues('settingTemplates', $this->settingTemplates);
        $writer->writeEnumValue('technologies', $this->technologies);
        $writer->writeEnumValue('templateFamily', $this->templateFamily);
    }

    /**
     * Sets the allowUnmanagedSettings property value. Allow unmanaged setting templates
     *  @param bool|null $value Value to set for the allowUnmanagedSettings property.
    */
    public function setAllowUnmanagedSettings(?bool $value ): void {
        $this->allowUnmanagedSettings = $value;
    }

    /**
     * Sets the baseId property value. Template base identifier
     *  @param string|null $value Value to set for the baseId property.
    */
    public function setBaseId(?string $value ): void {
        $this->baseId = $value;
    }

    /**
     * Sets the description property value. Template description
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. Template display name
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the displayVersion property value. Description of template version
     *  @param string|null $value Value to set for the displayVersion property.
    */
    public function setDisplayVersion(?string $value ): void {
        $this->displayVersion = $value;
    }

    /**
     * Sets the lifecycleState property value. Describes current lifecycle state of a template
     *  @param DeviceManagementTemplateLifecycleState|null $value Value to set for the lifecycleState property.
    */
    public function setLifecycleState(?DeviceManagementTemplateLifecycleState $value ): void {
        $this->lifecycleState = $value;
    }

    /**
     * Sets the platforms property value. Supported platform types.
     *  @param DeviceManagementConfigurationPlatforms|null $value Value to set for the platforms property.
    */
    public function setPlatforms(?DeviceManagementConfigurationPlatforms $value ): void {
        $this->platforms = $value;
    }

    /**
     * Sets the settingTemplateCount property value. Number of setting templates. Valid values 0 to 2147483647. This property is read-only.
     *  @param int|null $value Value to set for the settingTemplateCount property.
    */
    public function setSettingTemplateCount(?int $value ): void {
        $this->settingTemplateCount = $value;
    }

    /**
     * Sets the settingTemplates property value. Setting templates
     *  @param array<DeviceManagementConfigurationSettingTemplate>|null $value Value to set for the settingTemplates property.
    */
    public function setSettingTemplates(?array $value ): void {
        $this->settingTemplates = $value;
    }

    /**
     * Sets the technologies property value. Describes which technology this setting can be deployed with
     *  @param DeviceManagementConfigurationTechnologies|null $value Value to set for the technologies property.
    */
    public function setTechnologies(?DeviceManagementConfigurationTechnologies $value ): void {
        $this->technologies = $value;
    }

    /**
     * Sets the templateFamily property value. Describes the TemplateFamily for the Template entity
     *  @param DeviceManagementConfigurationTemplateFamily|null $value Value to set for the templateFamily property.
    */
    public function setTemplateFamily(?DeviceManagementConfigurationTemplateFamily $value ): void {
        $this->templateFamily = $value;
    }

    /**
     * Sets the version property value. Template version. Valid values 1 to 2147483647. This property is read-only.
     *  @param int|null $value Value to set for the version property.
    */
    public function setVersion(?int $value ): void {
        $this->version = $value;
    }

}
