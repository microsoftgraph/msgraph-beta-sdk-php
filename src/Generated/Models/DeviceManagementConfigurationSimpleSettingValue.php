<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationSimpleSettingValue extends DeviceManagementConfigurationSettingValue implements Parsable 
{
    /**
     * Instantiates a new deviceManagementConfigurationSimpleSettingValue and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceManagementConfigurationSimpleSettingValue');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationSimpleSettingValue
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationSimpleSettingValue {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.deviceManagementConfigurationIntegerSettingValue': return new DeviceManagementConfigurationIntegerSettingValue();
                case '#microsoft.graph.deviceManagementConfigurationReferenceSettingValue': return new DeviceManagementConfigurationReferenceSettingValue();
                case '#microsoft.graph.deviceManagementConfigurationSecretSettingValue': return new DeviceManagementConfigurationSecretSettingValue();
                case '#microsoft.graph.deviceManagementConfigurationStringSettingValue': return new DeviceManagementConfigurationStringSettingValue();
            }
        }
        return new DeviceManagementConfigurationSimpleSettingValue();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
    }

}
