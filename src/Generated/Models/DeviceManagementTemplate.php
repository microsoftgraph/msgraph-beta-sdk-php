<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Entity that represents a defined collection of device settings
*/
class DeviceManagementTemplate extends Entity implements Parsable 
{
    /**
     * Instantiates a new deviceManagementTemplate and sets the default values.
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
        $val = $this->getBackingStore()->get('categories');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementTemplateSettingCategory::class);
            /** @var array<DeviceManagementTemplateSettingCategory>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'categories'");
    }

    /**
     * Gets the description property value. The template's description
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
     * Gets the displayName property value. The template's display name
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
            'categories' => fn(ParseNode $n) => $o->setCategories($n->getCollectionOfObjectValues([DeviceManagementTemplateSettingCategory::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'intentCount' => fn(ParseNode $n) => $o->setIntentCount($n->getIntegerValue()),
            'isDeprecated' => fn(ParseNode $n) => $o->setIsDeprecated($n->getBooleanValue()),
            'migratableTo' => fn(ParseNode $n) => $o->setMigratableTo($n->getCollectionOfObjectValues([DeviceManagementTemplate::class, 'createFromDiscriminatorValue'])),
            'platformType' => fn(ParseNode $n) => $o->setPlatformType($n->getEnumValue(PolicyPlatformType::class)),
            'publishedDateTime' => fn(ParseNode $n) => $o->setPublishedDateTime($n->getDateTimeValue()),
            'settings' => fn(ParseNode $n) => $o->setSettings($n->getCollectionOfObjectValues([DeviceManagementSettingInstance::class, 'createFromDiscriminatorValue'])),
            'templateSubtype' => fn(ParseNode $n) => $o->setTemplateSubtype($n->getEnumValue(DeviceManagementTemplateSubtype::class)),
            'templateType' => fn(ParseNode $n) => $o->setTemplateType($n->getEnumValue(DeviceManagementTemplateType::class)),
            'versionInfo' => fn(ParseNode $n) => $o->setVersionInfo($n->getStringValue()),
        ]);
    }

    /**
     * Gets the intentCount property value. Number of Intents created from this template.
     * @return int|null
    */
    public function getIntentCount(): ?int {
        $val = $this->getBackingStore()->get('intentCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'intentCount'");
    }

    /**
     * Gets the isDeprecated property value. The template is deprecated or not. Intents cannot be created from a deprecated template.
     * @return bool|null
    */
    public function getIsDeprecated(): ?bool {
        $val = $this->getBackingStore()->get('isDeprecated');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isDeprecated'");
    }

    /**
     * Gets the migratableTo property value. Collection of templates this template can migrate to
     * @return array<DeviceManagementTemplate>|null
    */
    public function getMigratableTo(): ?array {
        $val = $this->getBackingStore()->get('migratableTo');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementTemplate::class);
            /** @var array<DeviceManagementTemplate>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'migratableTo'");
    }

    /**
     * Gets the platformType property value. Supported platform types for policies.
     * @return PolicyPlatformType|null
    */
    public function getPlatformType(): ?PolicyPlatformType {
        $val = $this->getBackingStore()->get('platformType');
        if (is_null($val) || $val instanceof PolicyPlatformType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'platformType'");
    }

    /**
     * Gets the publishedDateTime property value. When the template was published
     * @return DateTime|null
    */
    public function getPublishedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('publishedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'publishedDateTime'");
    }

    /**
     * Gets the settings property value. Collection of all settings this template has
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
     * Gets the templateSubtype property value. Template subtype
     * @return DeviceManagementTemplateSubtype|null
    */
    public function getTemplateSubtype(): ?DeviceManagementTemplateSubtype {
        $val = $this->getBackingStore()->get('templateSubtype');
        if (is_null($val) || $val instanceof DeviceManagementTemplateSubtype) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'templateSubtype'");
    }

    /**
     * Gets the templateType property value. Template type
     * @return DeviceManagementTemplateType|null
    */
    public function getTemplateType(): ?DeviceManagementTemplateType {
        $val = $this->getBackingStore()->get('templateType');
        if (is_null($val) || $val instanceof DeviceManagementTemplateType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'templateType'");
    }

    /**
     * Gets the versionInfo property value. The template's version information
     * @return string|null
    */
    public function getVersionInfo(): ?string {
        $val = $this->getBackingStore()->get('versionInfo');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'versionInfo'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('categories', $this->getCategories());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeIntegerValue('intentCount', $this->getIntentCount());
        $writer->writeBooleanValue('isDeprecated', $this->getIsDeprecated());
        $writer->writeCollectionOfObjectValues('migratableTo', $this->getMigratableTo());
        $writer->writeEnumValue('platformType', $this->getPlatformType());
        $writer->writeDateTimeValue('publishedDateTime', $this->getPublishedDateTime());
        $writer->writeCollectionOfObjectValues('settings', $this->getSettings());
        $writer->writeEnumValue('templateSubtype', $this->getTemplateSubtype());
        $writer->writeEnumValue('templateType', $this->getTemplateType());
        $writer->writeStringValue('versionInfo', $this->getVersionInfo());
    }

    /**
     * Sets the categories property value. Collection of setting categories within the template
     * @param array<DeviceManagementTemplateSettingCategory>|null $value Value to set for the categories property.
    */
    public function setCategories(?array $value): void {
        $this->getBackingStore()->set('categories', $value);
    }

    /**
     * Sets the description property value. The template's description
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The template's display name
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the intentCount property value. Number of Intents created from this template.
     * @param int|null $value Value to set for the intentCount property.
    */
    public function setIntentCount(?int $value): void {
        $this->getBackingStore()->set('intentCount', $value);
    }

    /**
     * Sets the isDeprecated property value. The template is deprecated or not. Intents cannot be created from a deprecated template.
     * @param bool|null $value Value to set for the isDeprecated property.
    */
    public function setIsDeprecated(?bool $value): void {
        $this->getBackingStore()->set('isDeprecated', $value);
    }

    /**
     * Sets the migratableTo property value. Collection of templates this template can migrate to
     * @param array<DeviceManagementTemplate>|null $value Value to set for the migratableTo property.
    */
    public function setMigratableTo(?array $value): void {
        $this->getBackingStore()->set('migratableTo', $value);
    }

    /**
     * Sets the platformType property value. Supported platform types for policies.
     * @param PolicyPlatformType|null $value Value to set for the platformType property.
    */
    public function setPlatformType(?PolicyPlatformType $value): void {
        $this->getBackingStore()->set('platformType', $value);
    }

    /**
     * Sets the publishedDateTime property value. When the template was published
     * @param DateTime|null $value Value to set for the publishedDateTime property.
    */
    public function setPublishedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('publishedDateTime', $value);
    }

    /**
     * Sets the settings property value. Collection of all settings this template has
     * @param array<DeviceManagementSettingInstance>|null $value Value to set for the settings property.
    */
    public function setSettings(?array $value): void {
        $this->getBackingStore()->set('settings', $value);
    }

    /**
     * Sets the templateSubtype property value. Template subtype
     * @param DeviceManagementTemplateSubtype|null $value Value to set for the templateSubtype property.
    */
    public function setTemplateSubtype(?DeviceManagementTemplateSubtype $value): void {
        $this->getBackingStore()->set('templateSubtype', $value);
    }

    /**
     * Sets the templateType property value. Template type
     * @param DeviceManagementTemplateType|null $value Value to set for the templateType property.
    */
    public function setTemplateType(?DeviceManagementTemplateType $value): void {
        $this->getBackingStore()->set('templateType', $value);
    }

    /**
     * Sets the versionInfo property value. The template's version information
     * @param string|null $value Value to set for the versionInfo property.
    */
    public function setVersionInfo(?string $value): void {
        $this->getBackingStore()->set('versionInfo', $value);
    }

}
