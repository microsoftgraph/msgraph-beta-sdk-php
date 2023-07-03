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
 * Setting instance within policy
*/
class DeviceManagementConfigurationSettingInstance implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new DeviceManagementConfigurationSettingInstance and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationSettingInstance
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationSettingInstance {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.deviceManagementConfigurationChoiceSettingCollectionInstance': return new DeviceManagementConfigurationChoiceSettingCollectionInstance();
                case '#microsoft.graph.deviceManagementConfigurationChoiceSettingInstance': return new DeviceManagementConfigurationChoiceSettingInstance();
                case '#microsoft.graph.deviceManagementConfigurationGroupSettingCollectionInstance': return new DeviceManagementConfigurationGroupSettingCollectionInstance();
                case '#microsoft.graph.deviceManagementConfigurationGroupSettingInstance': return new DeviceManagementConfigurationGroupSettingInstance();
                case '#microsoft.graph.deviceManagementConfigurationSettingGroupCollectionInstance': return new DeviceManagementConfigurationSettingGroupCollectionInstance();
                case '#microsoft.graph.deviceManagementConfigurationSettingGroupInstance': return new DeviceManagementConfigurationSettingGroupInstance();
                case '#microsoft.graph.deviceManagementConfigurationSimpleSettingCollectionInstance': return new DeviceManagementConfigurationSimpleSettingCollectionInstance();
                case '#microsoft.graph.deviceManagementConfigurationSimpleSettingInstance': return new DeviceManagementConfigurationSimpleSettingInstance();
            }
        }
        return new DeviceManagementConfigurationSettingInstance();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the backingStore property value. Stores model information.
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
            'settingDefinitionId' => fn(ParseNode $n) => $o->setSettingDefinitionId($n->getStringValue()),
            'settingInstanceTemplateReference' => fn(ParseNode $n) => $o->setSettingInstanceTemplateReference($n->getObjectValue([DeviceManagementConfigurationSettingInstanceTemplateReference::class, 'createFromDiscriminatorValue'])),
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
     * Gets the settingDefinitionId property value. Setting Definition Id
     * @return string|null
    */
    public function getSettingDefinitionId(): ?string {
        $val = $this->getBackingStore()->get('settingDefinitionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settingDefinitionId'");
    }

    /**
     * Gets the settingInstanceTemplateReference property value. Setting Instance Template Reference
     * @return DeviceManagementConfigurationSettingInstanceTemplateReference|null
    */
    public function getSettingInstanceTemplateReference(): ?DeviceManagementConfigurationSettingInstanceTemplateReference {
        $val = $this->getBackingStore()->get('settingInstanceTemplateReference');
        if (is_null($val) || $val instanceof DeviceManagementConfigurationSettingInstanceTemplateReference) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settingInstanceTemplateReference'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('settingDefinitionId', $this->getSettingDefinitionId());
        $writer->writeObjectValue('settingInstanceTemplateReference', $this->getSettingInstanceTemplateReference());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the settingDefinitionId property value. Setting Definition Id
     * @param string|null $value Value to set for the settingDefinitionId property.
    */
    public function setSettingDefinitionId(?string $value): void {
        $this->getBackingStore()->set('settingDefinitionId', $value);
    }

    /**
     * Sets the settingInstanceTemplateReference property value. Setting Instance Template Reference
     * @param DeviceManagementConfigurationSettingInstanceTemplateReference|null $value Value to set for the settingInstanceTemplateReference property.
    */
    public function setSettingInstanceTemplateReference(?DeviceManagementConfigurationSettingInstanceTemplateReference $value): void {
        $this->getBackingStore()->set('settingInstanceTemplateReference', $value);
    }

}
