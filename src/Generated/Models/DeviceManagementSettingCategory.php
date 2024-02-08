<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Entity representing a setting category
*/
class DeviceManagementSettingCategory extends Entity implements Parsable 
{
    /**
     * Instantiates a new DeviceManagementSettingCategory and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementSettingCategory
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementSettingCategory {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.deviceManagementIntentSettingCategory': return new DeviceManagementIntentSettingCategory();
                case '#microsoft.graph.deviceManagementTemplateSettingCategory': return new DeviceManagementTemplateSettingCategory();
            }
        }
        return new DeviceManagementSettingCategory();
    }

    /**
     * Gets the displayName property value. The category name
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
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'hasRequiredSetting' => fn(ParseNode $n) => $o->setHasRequiredSetting($n->getBooleanValue()),
            'settingDefinitions' => fn(ParseNode $n) => $o->setSettingDefinitions($n->getCollectionOfObjectValues([DeviceManagementSettingDefinition::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the hasRequiredSetting property value. The category contains top level required setting
     * @return bool|null
    */
    public function getHasRequiredSetting(): ?bool {
        $val = $this->getBackingStore()->get('hasRequiredSetting');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hasRequiredSetting'");
    }

    /**
     * Gets the settingDefinitions property value. The setting definitions this category contains
     * @return array<DeviceManagementSettingDefinition>|null
    */
    public function getSettingDefinitions(): ?array {
        $val = $this->getBackingStore()->get('settingDefinitions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementSettingDefinition::class);
            /** @var array<DeviceManagementSettingDefinition>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settingDefinitions'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeBooleanValue('hasRequiredSetting', $this->getHasRequiredSetting());
        $writer->writeCollectionOfObjectValues('settingDefinitions', $this->getSettingDefinitions());
    }

    /**
     * Sets the displayName property value. The category name
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the hasRequiredSetting property value. The category contains top level required setting
     * @param bool|null $value Value to set for the hasRequiredSetting property.
    */
    public function setHasRequiredSetting(?bool $value): void {
        $this->getBackingStore()->set('hasRequiredSetting', $value);
    }

    /**
     * Sets the settingDefinitions property value. The setting definitions this category contains
     * @param array<DeviceManagementSettingDefinition>|null $value Value to set for the settingDefinitions property.
    */
    public function setSettingDefinitions(?array $value): void {
        $this->getBackingStore()->set('settingDefinitions', $value);
    }

}
