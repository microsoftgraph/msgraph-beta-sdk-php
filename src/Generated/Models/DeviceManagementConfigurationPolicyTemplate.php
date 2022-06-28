<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationPolicyTemplate extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
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
     * @var DeviceManagementTemplateLifecycleState|null $lifecycleState Indicate current lifecycle state of template. Possible values are: invalid, draft, active, superseded, deprecated, retired.
    */
    private ?DeviceManagementTemplateLifecycleState $lifecycleState = null;
    
    /**
     * @var DeviceManagementConfigurationPlatforms|null $platforms Platforms for this template. Possible values are: none, android, iOS, macOS, windows10X, windows10, linux, unknownFutureValue.
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
     * @var DeviceManagementConfigurationTechnologies|null $technologies Technologies for this template. Possible values are: none, mdm, windows10XManagement, configManager, appleRemoteManagement, microsoftSense, exchangeOnline, linuxMdm, unknownFutureValue.
    */
    private ?DeviceManagementConfigurationTechnologies $technologies = null;
    
    /**
     * @var DeviceManagementConfigurationTemplateFamily|null $templateFamily TemplateFamily for this template. Possible values are: none, endpointSecurityAntivirus, endpointSecurityDiskEncryption, endpointSecurityFirewall, endpointSecurityEndpointDetectionAndResponse, endpointSecurityAttackSurfaceReduction, endpointSecurityAccountProtection, endpointSecurityApplicationControl, baseline.
    */
    private ?DeviceManagementConfigurationTemplateFamily $templateFamily = null;
    
    /**
     * @var int|null $version Template version. Valid values 1 to 2147483647. This property is read-only.
    */
    private ?int $version = null;
    
    /**
     * Instantiates a new deviceManagementConfigurationPolicyTemplate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
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
     * Gets the lifecycleState property value. Indicate current lifecycle state of template. Possible values are: invalid, draft, active, superseded, deprecated, retired.
     * @return DeviceManagementTemplateLifecycleState|null
    */
    public function getLifecycleState(): ?DeviceManagementTemplateLifecycleState {
        return $this->lifecycleState;
    }

    /**
     * Gets the platforms property value. Platforms for this template. Possible values are: none, android, iOS, macOS, windows10X, windows10, linux, unknownFutureValue.
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
     * Gets the technologies property value. Technologies for this template. Possible values are: none, mdm, windows10XManagement, configManager, appleRemoteManagement, microsoftSense, exchangeOnline, linuxMdm, unknownFutureValue.
     * @return DeviceManagementConfigurationTechnologies|null
    */
    public function getTechnologies(): ?DeviceManagementConfigurationTechnologies {
        return $this->technologies;
    }

    /**
     * Gets the templateFamily property value. TemplateFamily for this template. Possible values are: none, endpointSecurityAntivirus, endpointSecurityDiskEncryption, endpointSecurityFirewall, endpointSecurityEndpointDetectionAndResponse, endpointSecurityAttackSurfaceReduction, endpointSecurityAccountProtection, endpointSecurityApplicationControl, baseline.
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
        $writer->writeIntegerValue('settingTemplateCount', $this->settingTemplateCount);
        $writer->writeCollectionOfObjectValues('settingTemplates', $this->settingTemplates);
        $writer->writeEnumValue('technologies', $this->technologies);
        $writer->writeEnumValue('templateFamily', $this->templateFamily);
        $writer->writeIntegerValue('version', $this->version);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
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
     * Sets the lifecycleState property value. Indicate current lifecycle state of template. Possible values are: invalid, draft, active, superseded, deprecated, retired.
     *  @param DeviceManagementTemplateLifecycleState|null $value Value to set for the lifecycleState property.
    */
    public function setLifecycleState(?DeviceManagementTemplateLifecycleState $value ): void {
        $this->lifecycleState = $value;
    }

    /**
     * Sets the platforms property value. Platforms for this template. Possible values are: none, android, iOS, macOS, windows10X, windows10, linux, unknownFutureValue.
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
     * Sets the technologies property value. Technologies for this template. Possible values are: none, mdm, windows10XManagement, configManager, appleRemoteManagement, microsoftSense, exchangeOnline, linuxMdm, unknownFutureValue.
     *  @param DeviceManagementConfigurationTechnologies|null $value Value to set for the technologies property.
    */
    public function setTechnologies(?DeviceManagementConfigurationTechnologies $value ): void {
        $this->technologies = $value;
    }

    /**
     * Sets the templateFamily property value. TemplateFamily for this template. Possible values are: none, endpointSecurityAntivirus, endpointSecurityDiskEncryption, endpointSecurityFirewall, endpointSecurityEndpointDetectionAndResponse, endpointSecurityAttackSurfaceReduction, endpointSecurityAccountProtection, endpointSecurityApplicationControl, baseline.
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
