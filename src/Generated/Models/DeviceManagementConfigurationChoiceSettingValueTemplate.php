<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationChoiceSettingValueTemplate implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DeviceManagementConfigurationChoiceSettingValueDefaultTemplate|null $defaultValue Choice Setting Value Default Template.
    */
    private ?DeviceManagementConfigurationChoiceSettingValueDefaultTemplate $defaultValue = null;
    
    /**
     * @var DeviceManagementConfigurationChoiceSettingValueDefinitionTemplate|null $recommendedValueDefinition Recommended definition override.
    */
    private ?DeviceManagementConfigurationChoiceSettingValueDefinitionTemplate $recommendedValueDefinition = null;
    
    /**
     * @var DeviceManagementConfigurationChoiceSettingValueDefinitionTemplate|null $requiredValueDefinition Required definition override.
    */
    private ?DeviceManagementConfigurationChoiceSettingValueDefinitionTemplate $requiredValueDefinition = null;
    
    /**
     * @var string|null $settingValueTemplateId Setting Value Template Id
    */
    private ?string $settingValueTemplateId = null;
    
    /**
     * Instantiates a new deviceManagementConfigurationChoiceSettingValueTemplate and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
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
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the defaultValue property value. Choice Setting Value Default Template.
     * @return DeviceManagementConfigurationChoiceSettingValueDefaultTemplate|null
    */
    public function getDefaultValue(): ?DeviceManagementConfigurationChoiceSettingValueDefaultTemplate {
        return $this->defaultValue;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'defaultValue' => function (ParseNode $n) use ($o) { $o->setDefaultValue($n->getObjectValue(array(DeviceManagementConfigurationChoiceSettingValueDefaultTemplate::class, 'createFromDiscriminatorValue'))); },
            'recommendedValueDefinition' => function (ParseNode $n) use ($o) { $o->setRecommendedValueDefinition($n->getObjectValue(array(DeviceManagementConfigurationChoiceSettingValueDefinitionTemplate::class, 'createFromDiscriminatorValue'))); },
            'requiredValueDefinition' => function (ParseNode $n) use ($o) { $o->setRequiredValueDefinition($n->getObjectValue(array(DeviceManagementConfigurationChoiceSettingValueDefinitionTemplate::class, 'createFromDiscriminatorValue'))); },
            'settingValueTemplateId' => function (ParseNode $n) use ($o) { $o->setSettingValueTemplateId($n->getStringValue()); },
        ];
    }

    /**
     * Gets the recommendedValueDefinition property value. Recommended definition override.
     * @return DeviceManagementConfigurationChoiceSettingValueDefinitionTemplate|null
    */
    public function getRecommendedValueDefinition(): ?DeviceManagementConfigurationChoiceSettingValueDefinitionTemplate {
        return $this->recommendedValueDefinition;
    }

    /**
     * Gets the requiredValueDefinition property value. Required definition override.
     * @return DeviceManagementConfigurationChoiceSettingValueDefinitionTemplate|null
    */
    public function getRequiredValueDefinition(): ?DeviceManagementConfigurationChoiceSettingValueDefinitionTemplate {
        return $this->requiredValueDefinition;
    }

    /**
     * Gets the settingValueTemplateId property value. Setting Value Template Id
     * @return string|null
    */
    public function getSettingValueTemplateId(): ?string {
        return $this->settingValueTemplateId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('defaultValue', $this->defaultValue);
        $writer->writeObjectValue('recommendedValueDefinition', $this->recommendedValueDefinition);
        $writer->writeObjectValue('requiredValueDefinition', $this->requiredValueDefinition);
        $writer->writeStringValue('settingValueTemplateId', $this->settingValueTemplateId);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the defaultValue property value. Choice Setting Value Default Template.
     *  @param DeviceManagementConfigurationChoiceSettingValueDefaultTemplate|null $value Value to set for the defaultValue property.
    */
    public function setDefaultValue(?DeviceManagementConfigurationChoiceSettingValueDefaultTemplate $value ): void {
        $this->defaultValue = $value;
    }

    /**
     * Sets the recommendedValueDefinition property value. Recommended definition override.
     *  @param DeviceManagementConfigurationChoiceSettingValueDefinitionTemplate|null $value Value to set for the recommendedValueDefinition property.
    */
    public function setRecommendedValueDefinition(?DeviceManagementConfigurationChoiceSettingValueDefinitionTemplate $value ): void {
        $this->recommendedValueDefinition = $value;
    }

    /**
     * Sets the requiredValueDefinition property value. Required definition override.
     *  @param DeviceManagementConfigurationChoiceSettingValueDefinitionTemplate|null $value Value to set for the requiredValueDefinition property.
    */
    public function setRequiredValueDefinition(?DeviceManagementConfigurationChoiceSettingValueDefinitionTemplate $value ): void {
        $this->requiredValueDefinition = $value;
    }

    /**
     * Sets the settingValueTemplateId property value. Setting Value Template Id
     *  @param string|null $value Value to set for the settingValueTemplateId property.
    */
    public function setSettingValueTemplateId(?string $value ): void {
        $this->settingValueTemplateId = $value;
    }

}
