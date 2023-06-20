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
 * Setting Instance Template
*/
class DeviceManagementConfigurationSettingInstanceTemplate implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new DeviceManagementConfigurationSettingInstanceTemplate and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationSettingInstanceTemplate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationSettingInstanceTemplate {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.deviceManagementConfigurationChoiceSettingCollectionInstanceTemplate': return new DeviceManagementConfigurationChoiceSettingCollectionInstanceTemplate();
                case '#microsoft.graph.deviceManagementConfigurationChoiceSettingInstanceTemplate': return new DeviceManagementConfigurationChoiceSettingInstanceTemplate();
                case '#microsoft.graph.deviceManagementConfigurationGroupSettingCollectionInstanceTemplate': return new DeviceManagementConfigurationGroupSettingCollectionInstanceTemplate();
                case '#microsoft.graph.deviceManagementConfigurationGroupSettingInstanceTemplate': return new DeviceManagementConfigurationGroupSettingInstanceTemplate();
                case '#microsoft.graph.deviceManagementConfigurationSimpleSettingCollectionInstanceTemplate': return new DeviceManagementConfigurationSimpleSettingCollectionInstanceTemplate();
                case '#microsoft.graph.deviceManagementConfigurationSimpleSettingInstanceTemplate': return new DeviceManagementConfigurationSimpleSettingInstanceTemplate();
            }
        }
        return new DeviceManagementConfigurationSettingInstanceTemplate();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
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
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'isRequired' => fn(ParseNode $n) => $o->setIsRequired($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'settingDefinitionId' => fn(ParseNode $n) => $o->setSettingDefinitionId($n->getStringValue()),
            'settingInstanceTemplateId' => fn(ParseNode $n) => $o->setSettingInstanceTemplateId($n->getStringValue()),
        ];
    }

    /**
     * Gets the isRequired property value. Indicates if a policy must specify this setting.
     * @return bool|null
    */
    public function getIsRequired(): ?bool {
        return $this->getBackingStore()->get('isRequired');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the settingDefinitionId property value. Setting Definition Id
     * @return string|null
    */
    public function getSettingDefinitionId(): ?string {
        return $this->getBackingStore()->get('settingDefinitionId');
    }

    /**
     * Gets the settingInstanceTemplateId property value. Setting Instance Template Id
     * @return string|null
    */
    public function getSettingInstanceTemplateId(): ?string {
        return $this->getBackingStore()->get('settingInstanceTemplateId');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('isRequired', $this->getIsRequired());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('settingDefinitionId', $this->getSettingDefinitionId());
        $writer->writeStringValue('settingInstanceTemplateId', $this->getSettingInstanceTemplateId());
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
     * Sets the isRequired property value. Indicates if a policy must specify this setting.
     * @param bool|null $value Value to set for the isRequired property.
    */
    public function setIsRequired(?bool $value): void {
        $this->getBackingStore()->set('isRequired', $value);
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
     * Sets the settingInstanceTemplateId property value. Setting Instance Template Id
     * @param string|null $value Value to set for the settingInstanceTemplateId property.
    */
    public function setSettingInstanceTemplateId(?string $value): void {
        $this->getBackingStore()->set('settingInstanceTemplateId', $value);
    }

}
