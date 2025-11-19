<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Instance of a GroupSettingCollection
*/
class DeviceManagementConfigurationGroupSettingCollectionInstance extends DeviceManagementConfigurationSettingInstance implements Parsable 
{
    /**
     * Instantiates a new DeviceManagementConfigurationGroupSettingCollectionInstance and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceManagementConfigurationGroupSettingCollectionInstance');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationGroupSettingCollectionInstance
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationGroupSettingCollectionInstance {
        return new DeviceManagementConfigurationGroupSettingCollectionInstance();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'groupSettingCollectionValue' => fn(ParseNode $n) => $o->setGroupSettingCollectionValue($n->getCollectionOfObjectValues([DeviceManagementConfigurationGroupSettingValue::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the groupSettingCollectionValue property value. A collection of GroupSetting values
     * @return array<DeviceManagementConfigurationGroupSettingValue>|null
    */
    public function getGroupSettingCollectionValue(): ?array {
        $val = $this->getBackingStore()->get('groupSettingCollectionValue');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementConfigurationGroupSettingValue::class);
            /** @var array<DeviceManagementConfigurationGroupSettingValue>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'groupSettingCollectionValue'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('groupSettingCollectionValue', $this->getGroupSettingCollectionValue());
    }

    /**
     * Sets the groupSettingCollectionValue property value. A collection of GroupSetting values
     * @param array<DeviceManagementConfigurationGroupSettingValue>|null $value Value to set for the groupSettingCollectionValue property.
    */
    public function setGroupSettingCollectionValue(?array $value): void {
        $this->getBackingStore()->set('groupSettingCollectionValue', $value);
    }

}
