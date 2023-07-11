<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Instance of a GroupSetting
*/
class DeviceManagementConfigurationGroupSettingInstance extends DeviceManagementConfigurationSettingInstance implements Parsable 
{
    /**
     * Instantiates a new deviceManagementConfigurationGroupSettingInstance and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceManagementConfigurationGroupSettingInstance');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationGroupSettingInstance
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationGroupSettingInstance {
        return new DeviceManagementConfigurationGroupSettingInstance();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'groupSettingValue' => fn(ParseNode $n) => $o->setGroupSettingValue($n->getObjectValue([DeviceManagementConfigurationGroupSettingValue::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the groupSettingValue property value. The groupSettingValue property
     * @return DeviceManagementConfigurationGroupSettingValue|null
    */
    public function getGroupSettingValue(): ?DeviceManagementConfigurationGroupSettingValue {
        $val = $this->getBackingStore()->get('groupSettingValue');
        if (is_null($val) || $val instanceof DeviceManagementConfigurationGroupSettingValue) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'groupSettingValue'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('groupSettingValue', $this->getGroupSettingValue());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the groupSettingValue property value. The groupSettingValue property
     * @param DeviceManagementConfigurationGroupSettingValue|null $value Value to set for the groupSettingValue property.
    */
    public function setGroupSettingValue(?DeviceManagementConfigurationGroupSettingValue $value): void {
        $this->getBackingStore()->set('groupSettingValue', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
