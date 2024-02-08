<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Device Management Configuration Policy Template
*/
class DeviceManagementConfigurationPolicyTemplate extends Entity implements Parsable 
{
    /**
     * Instantiates a new DeviceManagementConfigurationPolicyTemplate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        $val = $this->getBackingStore()->get('allowUnmanagedSettings');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowUnmanagedSettings'");
    }

    /**
     * Gets the baseId property value. Template base identifier
     * @return string|null
    */
    public function getBaseId(): ?string {
        $val = $this->getBackingStore()->get('baseId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'baseId'");
    }

    /**
     * Gets the description property value. Template description
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
     * Gets the displayName property value. Template display name
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
     * Gets the displayVersion property value. Description of template version
     * @return string|null
    */
    public function getDisplayVersion(): ?string {
        $val = $this->getBackingStore()->get('displayVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayVersion'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowUnmanagedSettings' => fn(ParseNode $n) => $o->setAllowUnmanagedSettings($n->getBooleanValue()),
            'baseId' => fn(ParseNode $n) => $o->setBaseId($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'displayVersion' => fn(ParseNode $n) => $o->setDisplayVersion($n->getStringValue()),
            'lifecycleState' => fn(ParseNode $n) => $o->setLifecycleState($n->getEnumValue(DeviceManagementTemplateLifecycleState::class)),
            'platforms' => fn(ParseNode $n) => $o->setPlatforms($n->getEnumValue(DeviceManagementConfigurationPlatforms::class)),
            'settingTemplateCount' => fn(ParseNode $n) => $o->setSettingTemplateCount($n->getIntegerValue()),
            'settingTemplates' => fn(ParseNode $n) => $o->setSettingTemplates($n->getCollectionOfObjectValues([DeviceManagementConfigurationSettingTemplate::class, 'createFromDiscriminatorValue'])),
            'technologies' => fn(ParseNode $n) => $o->setTechnologies($n->getEnumValue(DeviceManagementConfigurationTechnologies::class)),
            'templateFamily' => fn(ParseNode $n) => $o->setTemplateFamily($n->getEnumValue(DeviceManagementConfigurationTemplateFamily::class)),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the lifecycleState property value. Describes current lifecycle state of a template
     * @return DeviceManagementTemplateLifecycleState|null
    */
    public function getLifecycleState(): ?DeviceManagementTemplateLifecycleState {
        $val = $this->getBackingStore()->get('lifecycleState');
        if (is_null($val) || $val instanceof DeviceManagementTemplateLifecycleState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lifecycleState'");
    }

    /**
     * Gets the platforms property value. Supported platform types.
     * @return DeviceManagementConfigurationPlatforms|null
    */
    public function getPlatforms(): ?DeviceManagementConfigurationPlatforms {
        $val = $this->getBackingStore()->get('platforms');
        if (is_null($val) || $val instanceof DeviceManagementConfigurationPlatforms) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'platforms'");
    }

    /**
     * Gets the settingTemplateCount property value. Number of setting templates. Valid values 0 to 2147483647. This property is read-only.
     * @return int|null
    */
    public function getSettingTemplateCount(): ?int {
        $val = $this->getBackingStore()->get('settingTemplateCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settingTemplateCount'");
    }

    /**
     * Gets the settingTemplates property value. Setting templates
     * @return array<DeviceManagementConfigurationSettingTemplate>|null
    */
    public function getSettingTemplates(): ?array {
        $val = $this->getBackingStore()->get('settingTemplates');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementConfigurationSettingTemplate::class);
            /** @var array<DeviceManagementConfigurationSettingTemplate>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settingTemplates'");
    }

    /**
     * Gets the technologies property value. Describes which technology this setting can be deployed with
     * @return DeviceManagementConfigurationTechnologies|null
    */
    public function getTechnologies(): ?DeviceManagementConfigurationTechnologies {
        $val = $this->getBackingStore()->get('technologies');
        if (is_null($val) || $val instanceof DeviceManagementConfigurationTechnologies) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'technologies'");
    }

    /**
     * Gets the templateFamily property value. Describes the TemplateFamily for the Template entity
     * @return DeviceManagementConfigurationTemplateFamily|null
    */
    public function getTemplateFamily(): ?DeviceManagementConfigurationTemplateFamily {
        $val = $this->getBackingStore()->get('templateFamily');
        if (is_null($val) || $val instanceof DeviceManagementConfigurationTemplateFamily) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'templateFamily'");
    }

    /**
     * Gets the version property value. Template version. Valid values 1 to 2147483647. This property is read-only.
     * @return int|null
    */
    public function getVersion(): ?int {
        $val = $this->getBackingStore()->get('version');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'version'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allowUnmanagedSettings', $this->getAllowUnmanagedSettings());
        $writer->writeStringValue('baseId', $this->getBaseId());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('displayVersion', $this->getDisplayVersion());
        $writer->writeEnumValue('lifecycleState', $this->getLifecycleState());
        $writer->writeEnumValue('platforms', $this->getPlatforms());
        $writer->writeCollectionOfObjectValues('settingTemplates', $this->getSettingTemplates());
        $writer->writeEnumValue('technologies', $this->getTechnologies());
        $writer->writeEnumValue('templateFamily', $this->getTemplateFamily());
    }

    /**
     * Sets the allowUnmanagedSettings property value. Allow unmanaged setting templates
     * @param bool|null $value Value to set for the allowUnmanagedSettings property.
    */
    public function setAllowUnmanagedSettings(?bool $value): void {
        $this->getBackingStore()->set('allowUnmanagedSettings', $value);
    }

    /**
     * Sets the baseId property value. Template base identifier
     * @param string|null $value Value to set for the baseId property.
    */
    public function setBaseId(?string $value): void {
        $this->getBackingStore()->set('baseId', $value);
    }

    /**
     * Sets the description property value. Template description
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. Template display name
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the displayVersion property value. Description of template version
     * @param string|null $value Value to set for the displayVersion property.
    */
    public function setDisplayVersion(?string $value): void {
        $this->getBackingStore()->set('displayVersion', $value);
    }

    /**
     * Sets the lifecycleState property value. Describes current lifecycle state of a template
     * @param DeviceManagementTemplateLifecycleState|null $value Value to set for the lifecycleState property.
    */
    public function setLifecycleState(?DeviceManagementTemplateLifecycleState $value): void {
        $this->getBackingStore()->set('lifecycleState', $value);
    }

    /**
     * Sets the platforms property value. Supported platform types.
     * @param DeviceManagementConfigurationPlatforms|null $value Value to set for the platforms property.
    */
    public function setPlatforms(?DeviceManagementConfigurationPlatforms $value): void {
        $this->getBackingStore()->set('platforms', $value);
    }

    /**
     * Sets the settingTemplateCount property value. Number of setting templates. Valid values 0 to 2147483647. This property is read-only.
     * @param int|null $value Value to set for the settingTemplateCount property.
    */
    public function setSettingTemplateCount(?int $value): void {
        $this->getBackingStore()->set('settingTemplateCount', $value);
    }

    /**
     * Sets the settingTemplates property value. Setting templates
     * @param array<DeviceManagementConfigurationSettingTemplate>|null $value Value to set for the settingTemplates property.
    */
    public function setSettingTemplates(?array $value): void {
        $this->getBackingStore()->set('settingTemplates', $value);
    }

    /**
     * Sets the technologies property value. Describes which technology this setting can be deployed with
     * @param DeviceManagementConfigurationTechnologies|null $value Value to set for the technologies property.
    */
    public function setTechnologies(?DeviceManagementConfigurationTechnologies $value): void {
        $this->getBackingStore()->set('technologies', $value);
    }

    /**
     * Sets the templateFamily property value. Describes the TemplateFamily for the Template entity
     * @param DeviceManagementConfigurationTemplateFamily|null $value Value to set for the templateFamily property.
    */
    public function setTemplateFamily(?DeviceManagementConfigurationTemplateFamily $value): void {
        $this->getBackingStore()->set('templateFamily', $value);
    }

    /**
     * Sets the version property value. Template version. Valid values 1 to 2147483647. This property is read-only.
     * @param int|null $value Value to set for the version property.
    */
    public function setVersion(?int $value): void {
        $this->getBackingStore()->set('version', $value);
    }

}
