<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Choice Setting Value Constant Default Template
*/
class DeviceManagementConfigurationChoiceSettingValueConstantDefaultTemplate extends DeviceManagementConfigurationChoiceSettingValueDefaultTemplate implements Parsable 
{
    /**
     * Instantiates a new deviceManagementConfigurationChoiceSettingValueConstantDefaultTemplate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceManagementConfigurationChoiceSettingValueConstantDefaultTemplate');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationChoiceSettingValueConstantDefaultTemplate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationChoiceSettingValueConstantDefaultTemplate {
        return new DeviceManagementConfigurationChoiceSettingValueConstantDefaultTemplate();
    }

    /**
     * Gets the children property value. Option Children
     * @return array<DeviceManagementConfigurationSettingInstanceTemplate>|null
    */
    public function getChildren(): ?array {
        $val = $this->getBackingStore()->get('children');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementConfigurationSettingInstanceTemplate::class);
            /** @var array<DeviceManagementConfigurationSettingInstanceTemplate>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'children'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'children' => fn(ParseNode $n) => $o->setChildren($n->getCollectionOfObjectValues([DeviceManagementConfigurationSettingInstanceTemplate::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'settingDefinitionOptionId' => fn(ParseNode $n) => $o->setSettingDefinitionOptionId($n->getStringValue()),
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
     * Gets the settingDefinitionOptionId property value. Default Constant Value
     * @return string|null
    */
    public function getSettingDefinitionOptionId(): ?string {
        $val = $this->getBackingStore()->get('settingDefinitionOptionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settingDefinitionOptionId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('children', $this->getChildren());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('settingDefinitionOptionId', $this->getSettingDefinitionOptionId());
    }

    /**
     * Sets the children property value. Option Children
     * @param array<DeviceManagementConfigurationSettingInstanceTemplate>|null $value Value to set for the children property.
    */
    public function setChildren(?array $value): void {
        $this->getBackingStore()->set('children', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the settingDefinitionOptionId property value. Default Constant Value
     * @param string|null $value Value to set for the settingDefinitionOptionId property.
    */
    public function setSettingDefinitionOptionId(?string $value): void {
        $this->getBackingStore()->set('settingDefinitionOptionId', $value);
    }

}
