<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * Setting value
*/
class DeviceManagementConfigurationSettingValue implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new DeviceManagementConfigurationSettingValue and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationSettingValue
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationSettingValue {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.deviceManagementConfigurationChoiceSettingValue': return new DeviceManagementConfigurationChoiceSettingValue();
                case '#microsoft.graph.deviceManagementConfigurationGroupSettingValue': return new DeviceManagementConfigurationGroupSettingValue();
                case '#microsoft.graph.deviceManagementConfigurationIntegerSettingValue': return new DeviceManagementConfigurationIntegerSettingValue();
                case '#microsoft.graph.deviceManagementConfigurationReferenceSettingValue': return new DeviceManagementConfigurationReferenceSettingValue();
                case '#microsoft.graph.deviceManagementConfigurationSecretSettingValue': return new DeviceManagementConfigurationSecretSettingValue();
                case '#microsoft.graph.deviceManagementConfigurationSimpleSettingValue': return new DeviceManagementConfigurationSimpleSettingValue();
                case '#microsoft.graph.deviceManagementConfigurationStringSettingValue': return new DeviceManagementConfigurationStringSettingValue();
            }
        }
        return new DeviceManagementConfigurationSettingValue();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'settingValueTemplateReference' => fn(ParseNode $n) => $o->setSettingValueTemplateReference($n->getObjectValue([DeviceManagementConfigurationSettingValueTemplateReference::class, 'createFromDiscriminatorValue'])),
        ];
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
     * Gets the settingValueTemplateReference property value. Setting value template reference
     * @return DeviceManagementConfigurationSettingValueTemplateReference|null
    */
    public function getSettingValueTemplateReference(): ?DeviceManagementConfigurationSettingValueTemplateReference {
        $val = $this->getBackingStore()->get('settingValueTemplateReference');
        if (is_null($val) || $val instanceof DeviceManagementConfigurationSettingValueTemplateReference) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settingValueTemplateReference'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('settingValueTemplateReference', $this->getSettingValueTemplateReference());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the settingValueTemplateReference property value. Setting value template reference
     * @param DeviceManagementConfigurationSettingValueTemplateReference|null $value Value to set for the settingValueTemplateReference property.
    */
    public function setSettingValueTemplateReference(?DeviceManagementConfigurationSettingValueTemplateReference $value): void {
        $this->getBackingStore()->set('settingValueTemplateReference', $value);
    }

}
