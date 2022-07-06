<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementTemplate extends Entity implements Parsable 
{
    /**
     * @var array<DeviceManagementTemplateSettingCategory>|null $categories Collection of setting categories within the template
    */
    private ?array $categories = null;
    
    /**
     * @var string|null $description The template's description
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName The template's display name
    */
    private ?string $displayName = null;
    
    /**
     * @var int|null $intentCount Number of Intents created from this template.
    */
    private ?int $intentCount = null;
    
    /**
     * @var bool|null $isDeprecated The template is deprecated or not. Intents cannot be created from a deprecated template.
    */
    private ?bool $isDeprecated = null;
    
    /**
     * @var array<DeviceManagementTemplate>|null $migratableTo Collection of templates this template can migrate to
    */
    private ?array $migratableTo = null;
    
    /**
     * @var PolicyPlatformType|null $platformType The template's platform. Possible values are: android, androidForWork, iOS, macOS, windowsPhone81, windows81AndLater, windows10AndLater, androidWorkProfile, windows10XProfile, all.
    */
    private ?PolicyPlatformType $platformType = null;
    
    /**
     * @var DateTime|null $publishedDateTime When the template was published
    */
    private ?DateTime $publishedDateTime = null;
    
    /**
     * @var array<DeviceManagementSettingInstance>|null $settings Collection of all settings this template has
    */
    private ?array $settings = null;
    
    /**
     * @var DeviceManagementTemplateSubtype|null $templateSubtype The template's subtype. Possible values are: none, firewall, diskEncryption, attackSurfaceReduction, endpointDetectionReponse, accountProtection, antivirus, firewallSharedAppList, firewallSharedIpList, firewallSharedPortlist.
    */
    private ?DeviceManagementTemplateSubtype $templateSubtype = null;
    
    /**
     * @var DeviceManagementTemplateType|null $templateType The template's type. Possible values are: securityBaseline, specializedDevices, advancedThreatProtectionSecurityBaseline, deviceConfiguration, custom, securityTemplate, microsoftEdgeSecurityBaseline, microsoftOffice365ProPlusSecurityBaseline, deviceCompliance, deviceConfigurationForOffice365, cloudPC, firewallSharedSettings.
    */
    private ?DeviceManagementTemplateType $templateType = null;
    
    /**
     * @var string|null $type The type property
    */
    private ?string $type = null;
    
    /**
     * @var string|null $versionInfo The template's version information
    */
    private ?string $versionInfo = null;
    
    /**
     * Instantiates a new DeviceManagementTemplate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementTemplate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementTemplate {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.securityBaselineTemplate': return new SecurityBaselineTemplate();
            }
        }
        return new DeviceManagementTemplate();
    }

    /**
     * Gets the categories property value. Collection of setting categories within the template
     * @return array<DeviceManagementTemplateSettingCategory>|null
    */
    public function getCategories(): ?array {
        return $this->categories;
    }

    /**
     * Gets the description property value. The template's description
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The template's display name
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
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'categories' => function (ParseNode $n) use ($o) { $o->setCategories($n->getCollectionOfObjectValues(array(DeviceManagementTemplateSettingCategory::class, 'createFromDiscriminatorValue'))); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'intentCount' => function (ParseNode $n) use ($o) { $o->setIntentCount($n->getIntegerValue()); },
            'isDeprecated' => function (ParseNode $n) use ($o) { $o->setIsDeprecated($n->getBooleanValue()); },
            'migratableTo' => function (ParseNode $n) use ($o) { $o->setMigratableTo($n->getCollectionOfObjectValues(array(DeviceManagementTemplate::class, 'createFromDiscriminatorValue'))); },
            'platformType' => function (ParseNode $n) use ($o) { $o->setPlatformType($n->getEnumValue(PolicyPlatformType::class)); },
            'publishedDateTime' => function (ParseNode $n) use ($o) { $o->setPublishedDateTime($n->getDateTimeValue()); },
            'settings' => function (ParseNode $n) use ($o) { $o->setSettings($n->getCollectionOfObjectValues(array(DeviceManagementSettingInstance::class, 'createFromDiscriminatorValue'))); },
            'templateSubtype' => function (ParseNode $n) use ($o) { $o->setTemplateSubtype($n->getEnumValue(DeviceManagementTemplateSubtype::class)); },
            'templateType' => function (ParseNode $n) use ($o) { $o->setTemplateType($n->getEnumValue(DeviceManagementTemplateType::class)); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdatatype($n->getStringValue()); },
            'versionInfo' => function (ParseNode $n) use ($o) { $o->setVersionInfo($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the intentCount property value. Number of Intents created from this template.
     * @return int|null
    */
    public function getIntentCount(): ?int {
        return $this->intentCount;
    }

    /**
     * Gets the isDeprecated property value. The template is deprecated or not. Intents cannot be created from a deprecated template.
     * @return bool|null
    */
    public function getIsDeprecated(): ?bool {
        return $this->isDeprecated;
    }

    /**
     * Gets the migratableTo property value. Collection of templates this template can migrate to
     * @return array<DeviceManagementTemplate>|null
    */
    public function getMigratableTo(): ?array {
        return $this->migratableTo;
    }

    /**
     * Gets the @odata.type property value. The type property
     * @return string|null
    */
    public function getOdatatype(): ?string {
        return $this->type;
    }

    /**
     * Gets the platformType property value. The template's platform. Possible values are: android, androidForWork, iOS, macOS, windowsPhone81, windows81AndLater, windows10AndLater, androidWorkProfile, windows10XProfile, all.
     * @return PolicyPlatformType|null
    */
    public function getPlatformType(): ?PolicyPlatformType {
        return $this->platformType;
    }

    /**
     * Gets the publishedDateTime property value. When the template was published
     * @return DateTime|null
    */
    public function getPublishedDateTime(): ?DateTime {
        return $this->publishedDateTime;
    }

    /**
     * Gets the settings property value. Collection of all settings this template has
     * @return array<DeviceManagementSettingInstance>|null
    */
    public function getSettings(): ?array {
        return $this->settings;
    }

    /**
     * Gets the templateSubtype property value. The template's subtype. Possible values are: none, firewall, diskEncryption, attackSurfaceReduction, endpointDetectionReponse, accountProtection, antivirus, firewallSharedAppList, firewallSharedIpList, firewallSharedPortlist.
     * @return DeviceManagementTemplateSubtype|null
    */
    public function getTemplateSubtype(): ?DeviceManagementTemplateSubtype {
        return $this->templateSubtype;
    }

    /**
     * Gets the templateType property value. The template's type. Possible values are: securityBaseline, specializedDevices, advancedThreatProtectionSecurityBaseline, deviceConfiguration, custom, securityTemplate, microsoftEdgeSecurityBaseline, microsoftOffice365ProPlusSecurityBaseline, deviceCompliance, deviceConfigurationForOffice365, cloudPC, firewallSharedSettings.
     * @return DeviceManagementTemplateType|null
    */
    public function getTemplateType(): ?DeviceManagementTemplateType {
        return $this->templateType;
    }

    /**
     * Gets the versionInfo property value. The template's version information
     * @return string|null
    */
    public function getVersionInfo(): ?string {
        return $this->versionInfo;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('categories', $this->categories);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeIntegerValue('intentCount', $this->intentCount);
        $writer->writeBooleanValue('isDeprecated', $this->isDeprecated);
        $writer->writeCollectionOfObjectValues('migratableTo', $this->migratableTo);
        $writer->writeEnumValue('platformType', $this->platformType);
        $writer->writeDateTimeValue('publishedDateTime', $this->publishedDateTime);
        $writer->writeCollectionOfObjectValues('settings', $this->settings);
        $writer->writeEnumValue('templateSubtype', $this->templateSubtype);
        $writer->writeEnumValue('templateType', $this->templateType);
        $writer->writeStringValue('@odata.type', $this->type);
        $writer->writeStringValue('versionInfo', $this->versionInfo);
    }

    /**
     * Sets the categories property value. Collection of setting categories within the template
     *  @param array<DeviceManagementTemplateSettingCategory>|null $value Value to set for the categories property.
    */
    public function setCategories(?array $value ): void {
        $this->categories = $value;
    }

    /**
     * Sets the description property value. The template's description
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The template's display name
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the intentCount property value. Number of Intents created from this template.
     *  @param int|null $value Value to set for the intentCount property.
    */
    public function setIntentCount(?int $value ): void {
        $this->intentCount = $value;
    }

    /**
     * Sets the isDeprecated property value. The template is deprecated or not. Intents cannot be created from a deprecated template.
     *  @param bool|null $value Value to set for the isDeprecated property.
    */
    public function setIsDeprecated(?bool $value ): void {
        $this->isDeprecated = $value;
    }

    /**
     * Sets the migratableTo property value. Collection of templates this template can migrate to
     *  @param array<DeviceManagementTemplate>|null $value Value to set for the migratableTo property.
    */
    public function setMigratableTo(?array $value ): void {
        $this->migratableTo = $value;
    }

    /**
     * Sets the @odata.type property value. The type property
     *  @param string|null $value Value to set for the type property.
    */
    public function setOdatatype(?string $value ): void {
        $this->type = $value;
    }

    /**
     * Sets the platformType property value. The template's platform. Possible values are: android, androidForWork, iOS, macOS, windowsPhone81, windows81AndLater, windows10AndLater, androidWorkProfile, windows10XProfile, all.
     *  @param PolicyPlatformType|null $value Value to set for the platformType property.
    */
    public function setPlatformType(?PolicyPlatformType $value ): void {
        $this->platformType = $value;
    }

    /**
     * Sets the publishedDateTime property value. When the template was published
     *  @param DateTime|null $value Value to set for the publishedDateTime property.
    */
    public function setPublishedDateTime(?DateTime $value ): void {
        $this->publishedDateTime = $value;
    }

    /**
     * Sets the settings property value. Collection of all settings this template has
     *  @param array<DeviceManagementSettingInstance>|null $value Value to set for the settings property.
    */
    public function setSettings(?array $value ): void {
        $this->settings = $value;
    }

    /**
     * Sets the templateSubtype property value. The template's subtype. Possible values are: none, firewall, diskEncryption, attackSurfaceReduction, endpointDetectionReponse, accountProtection, antivirus, firewallSharedAppList, firewallSharedIpList, firewallSharedPortlist.
     *  @param DeviceManagementTemplateSubtype|null $value Value to set for the templateSubtype property.
    */
    public function setTemplateSubtype(?DeviceManagementTemplateSubtype $value ): void {
        $this->templateSubtype = $value;
    }

    /**
     * Sets the templateType property value. The template's type. Possible values are: securityBaseline, specializedDevices, advancedThreatProtectionSecurityBaseline, deviceConfiguration, custom, securityTemplate, microsoftEdgeSecurityBaseline, microsoftOffice365ProPlusSecurityBaseline, deviceCompliance, deviceConfigurationForOffice365, cloudPC, firewallSharedSettings.
     *  @param DeviceManagementTemplateType|null $value Value to set for the templateType property.
    */
    public function setTemplateType(?DeviceManagementTemplateType $value ): void {
        $this->templateType = $value;
    }

    /**
     * Sets the versionInfo property value. The template's version information
     *  @param string|null $value Value to set for the versionInfo property.
    */
    public function setVersionInfo(?string $value ): void {
        $this->versionInfo = $value;
    }

}
