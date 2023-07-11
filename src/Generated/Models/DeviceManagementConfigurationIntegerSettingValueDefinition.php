<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationIntegerSettingValueDefinition extends DeviceManagementConfigurationSettingValueDefinition implements Parsable 
{
    /**
     * Instantiates a new deviceManagementConfigurationIntegerSettingValueDefinition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceManagementConfigurationIntegerSettingValueDefinition');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationIntegerSettingValueDefinition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationIntegerSettingValueDefinition {
        return new DeviceManagementConfigurationIntegerSettingValueDefinition();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'maximumValue' => fn(ParseNode $n) => $o->setMaximumValue($n->getIntegerValue()),
            'minimumValue' => fn(ParseNode $n) => $o->setMinimumValue($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the maximumValue property value. Maximum allowed value of the integer
     * @return int|null
    */
    public function getMaximumValue(): ?int {
        $val = $this->getBackingStore()->get('maximumValue');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maximumValue'");
    }

    /**
     * Gets the minimumValue property value. Minimum allowed value of the integer
     * @return int|null
    */
    public function getMinimumValue(): ?int {
        $val = $this->getBackingStore()->get('minimumValue');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumValue'");
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
        $writer->writeIntegerValue('maximumValue', $this->getMaximumValue());
        $writer->writeIntegerValue('minimumValue', $this->getMinimumValue());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the maximumValue property value. Maximum allowed value of the integer
     * @param int|null $value Value to set for the maximumValue property.
    */
    public function setMaximumValue(?int $value): void {
        $this->getBackingStore()->set('maximumValue', $value);
    }

    /**
     * Sets the minimumValue property value. Minimum allowed value of the integer
     * @param int|null $value Value to set for the minimumValue property.
    */
    public function setMinimumValue(?int $value): void {
        $this->getBackingStore()->set('minimumValue', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
