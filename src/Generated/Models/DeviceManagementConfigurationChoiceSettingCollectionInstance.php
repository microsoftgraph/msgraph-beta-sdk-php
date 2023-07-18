<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Setting instance within policy
*/
class DeviceManagementConfigurationChoiceSettingCollectionInstance extends DeviceManagementConfigurationSettingInstance implements Parsable 
{
    /**
     * Instantiates a new deviceManagementConfigurationChoiceSettingCollectionInstance and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceManagementConfigurationChoiceSettingCollectionInstance');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationChoiceSettingCollectionInstance
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationChoiceSettingCollectionInstance {
        return new DeviceManagementConfigurationChoiceSettingCollectionInstance();
    }

    /**
     * Gets the choiceSettingCollectionValue property value. Choice setting collection value
     * @return array<DeviceManagementConfigurationChoiceSettingValue>|null
    */
    public function getChoiceSettingCollectionValue(): ?array {
        $val = $this->getBackingStore()->get('choiceSettingCollectionValue');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementConfigurationChoiceSettingValue::class);
            /** @var array<DeviceManagementConfigurationChoiceSettingValue>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'choiceSettingCollectionValue'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'choiceSettingCollectionValue' => fn(ParseNode $n) => $o->setChoiceSettingCollectionValue($n->getCollectionOfObjectValues([DeviceManagementConfigurationChoiceSettingValue::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ]);
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
        $writer->writeCollectionOfObjectValues('choiceSettingCollectionValue', $this->getChoiceSettingCollectionValue());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the choiceSettingCollectionValue property value. Choice setting collection value
     * @param array<DeviceManagementConfigurationChoiceSettingValue>|null $value Value to set for the choiceSettingCollectionValue property.
    */
    public function setChoiceSettingCollectionValue(?array $value): void {
        $this->getBackingStore()->set('choiceSettingCollectionValue', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
