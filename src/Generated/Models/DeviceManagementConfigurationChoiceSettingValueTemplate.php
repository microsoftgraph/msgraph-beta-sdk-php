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
 * Choice Setting Value Template
*/
class DeviceManagementConfigurationChoiceSettingValueTemplate implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new deviceManagementConfigurationChoiceSettingValueTemplate and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationChoiceSettingValueTemplate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationChoiceSettingValueTemplate {
        return new DeviceManagementConfigurationChoiceSettingValueTemplate();
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
     * Gets the defaultValue property value. Choice Setting Value Default Template.
     * @return DeviceManagementConfigurationChoiceSettingValueDefaultTemplate|null
    */
    public function getDefaultValue(): ?DeviceManagementConfigurationChoiceSettingValueDefaultTemplate {
        return $this->getBackingStore()->get('defaultValue');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'defaultValue' => fn(ParseNode $n) => $o->setDefaultValue($n->getObjectValue([DeviceManagementConfigurationChoiceSettingValueDefaultTemplate::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'recommendedValueDefinition' => fn(ParseNode $n) => $o->setRecommendedValueDefinition($n->getObjectValue([DeviceManagementConfigurationChoiceSettingValueDefinitionTemplate::class, 'createFromDiscriminatorValue'])),
            'requiredValueDefinition' => fn(ParseNode $n) => $o->setRequiredValueDefinition($n->getObjectValue([DeviceManagementConfigurationChoiceSettingValueDefinitionTemplate::class, 'createFromDiscriminatorValue'])),
            'settingValueTemplateId' => fn(ParseNode $n) => $o->setSettingValueTemplateId($n->getStringValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the recommendedValueDefinition property value. Recommended definition override.
     * @return DeviceManagementConfigurationChoiceSettingValueDefinitionTemplate|null
    */
    public function getRecommendedValueDefinition(): ?DeviceManagementConfigurationChoiceSettingValueDefinitionTemplate {
        return $this->getBackingStore()->get('recommendedValueDefinition');
    }

    /**
     * Gets the requiredValueDefinition property value. Required definition override.
     * @return DeviceManagementConfigurationChoiceSettingValueDefinitionTemplate|null
    */
    public function getRequiredValueDefinition(): ?DeviceManagementConfigurationChoiceSettingValueDefinitionTemplate {
        return $this->getBackingStore()->get('requiredValueDefinition');
    }

    /**
     * Gets the settingValueTemplateId property value. Setting Value Template Id
     * @return string|null
    */
    public function getSettingValueTemplateId(): ?string {
        return $this->getBackingStore()->get('settingValueTemplateId');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('defaultValue', $this->getDefaultValue());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('recommendedValueDefinition', $this->getRecommendedValueDefinition());
        $writer->writeObjectValue('requiredValueDefinition', $this->getRequiredValueDefinition());
        $writer->writeStringValue('settingValueTemplateId', $this->getSettingValueTemplateId());
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
     * Sets the defaultValue property value. Choice Setting Value Default Template.
     * @param DeviceManagementConfigurationChoiceSettingValueDefaultTemplate|null $value Value to set for the defaultValue property.
    */
    public function setDefaultValue(?DeviceManagementConfigurationChoiceSettingValueDefaultTemplate $value): void {
        $this->getBackingStore()->set('defaultValue', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the recommendedValueDefinition property value. Recommended definition override.
     * @param DeviceManagementConfigurationChoiceSettingValueDefinitionTemplate|null $value Value to set for the recommendedValueDefinition property.
    */
    public function setRecommendedValueDefinition(?DeviceManagementConfigurationChoiceSettingValueDefinitionTemplate $value): void {
        $this->getBackingStore()->set('recommendedValueDefinition', $value);
    }

    /**
     * Sets the requiredValueDefinition property value. Required definition override.
     * @param DeviceManagementConfigurationChoiceSettingValueDefinitionTemplate|null $value Value to set for the requiredValueDefinition property.
    */
    public function setRequiredValueDefinition(?DeviceManagementConfigurationChoiceSettingValueDefinitionTemplate $value): void {
        $this->getBackingStore()->set('requiredValueDefinition', $value);
    }

    /**
     * Sets the settingValueTemplateId property value. Setting Value Template Id
     * @param string|null $value Value to set for the settingValueTemplateId property.
    */
    public function setSettingValueTemplateId(?string $value): void {
        $this->getBackingStore()->set('settingValueTemplateId', $value);
    }

}
