<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Integer Setting Value Constant Default Template
*/
class DeviceManagementConfigurationIntegerSettingValueConstantDefaultTemplate extends DeviceManagementConfigurationIntegerSettingValueDefaultTemplate implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new deviceManagementConfigurationIntegerSettingValueConstantDefaultTemplate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceManagementConfigurationIntegerSettingValueConstantDefaultTemplate');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationIntegerSettingValueConstantDefaultTemplate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationIntegerSettingValueConstantDefaultTemplate {
        return new DeviceManagementConfigurationIntegerSettingValueConstantDefaultTemplate();
    }

    /**
     * Gets the constantValue property value. Default Constant Value. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getConstantValue(): ?int {
        $val = $this->getBackingStore()->get('constantValue');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'constantValue'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'constantValue' => fn(ParseNode $n) => $o->setConstantValue($n->getIntegerValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('constantValue', $this->getConstantValue());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the constantValue property value. Default Constant Value. Valid values -2147483648 to 2147483647
     * @param int|null $value Value to set for the constantValue property.
    */
    public function setConstantValue(?int $value): void {
        $this->getBackingStore()->set('constantValue', $value);
    }

}
