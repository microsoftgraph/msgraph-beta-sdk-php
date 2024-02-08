<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Setting instance within policy
*/
class DeviceManagementConfigurationSetting extends Entity implements Parsable 
{
    /**
     * Instantiates a new DeviceManagementConfigurationSetting and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationSetting
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationSetting {
        return new DeviceManagementConfigurationSetting();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'settingDefinitions' => fn(ParseNode $n) => $o->setSettingDefinitions($n->getCollectionOfObjectValues([DeviceManagementConfigurationSettingDefinition::class, 'createFromDiscriminatorValue'])),
            'settingInstance' => fn(ParseNode $n) => $o->setSettingInstance($n->getObjectValue([DeviceManagementConfigurationSettingInstance::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the settingDefinitions property value. List of related Setting Definitions. This property is read-only.
     * @return array<DeviceManagementConfigurationSettingDefinition>|null
    */
    public function getSettingDefinitions(): ?array {
        $val = $this->getBackingStore()->get('settingDefinitions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementConfigurationSettingDefinition::class);
            /** @var array<DeviceManagementConfigurationSettingDefinition>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settingDefinitions'");
    }

    /**
     * Gets the settingInstance property value. Setting instance within policy
     * @return DeviceManagementConfigurationSettingInstance|null
    */
    public function getSettingInstance(): ?DeviceManagementConfigurationSettingInstance {
        $val = $this->getBackingStore()->get('settingInstance');
        if (is_null($val) || $val instanceof DeviceManagementConfigurationSettingInstance) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settingInstance'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('settingDefinitions', $this->getSettingDefinitions());
        $writer->writeObjectValue('settingInstance', $this->getSettingInstance());
    }

    /**
     * Sets the settingDefinitions property value. List of related Setting Definitions. This property is read-only.
     * @param array<DeviceManagementConfigurationSettingDefinition>|null $value Value to set for the settingDefinitions property.
    */
    public function setSettingDefinitions(?array $value): void {
        $this->getBackingStore()->set('settingDefinitions', $value);
    }

    /**
     * Sets the settingInstance property value. Setting instance within policy
     * @param DeviceManagementConfigurationSettingInstance|null $value Value to set for the settingInstance property.
    */
    public function setSettingInstance(?DeviceManagementConfigurationSettingInstance $value): void {
        $this->getBackingStore()->set('settingInstance', $value);
    }

}
