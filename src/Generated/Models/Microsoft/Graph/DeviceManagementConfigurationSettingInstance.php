<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationSettingInstance implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $settingDefinitionId Setting Definition Id */
    private ?string $settingDefinitionId = null;
    
    /** @var DeviceManagementConfigurationSettingInstanceTemplateReference|null $settingInstanceTemplateReference Setting Instance Template Reference */
    private ?DeviceManagementConfigurationSettingInstanceTemplateReference $settingInstanceTemplateReference = null;
    
    /**
     * Instantiates a new deviceManagementConfigurationSettingInstance and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationSettingInstance
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationSettingInstance {
        return new DeviceManagementConfigurationSettingInstance();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'settingDefinitionId' => function (self $o, ParseNode $n) { $o->setSettingDefinitionId($n->getStringValue()); },
            'settingInstanceTemplateReference' => function (self $o, ParseNode $n) { $o->setSettingInstanceTemplateReference($n->getObjectValue(DeviceManagementConfigurationSettingInstanceTemplateReference::class)); },
        ];
    }

    /**
     * Gets the settingDefinitionId property value. Setting Definition Id
     * @return string|null
    */
    public function getSettingDefinitionId(): ?string {
        return $this->settingDefinitionId;
    }

    /**
     * Gets the settingInstanceTemplateReference property value. Setting Instance Template Reference
     * @return DeviceManagementConfigurationSettingInstanceTemplateReference|null
    */
    public function getSettingInstanceTemplateReference(): ?DeviceManagementConfigurationSettingInstanceTemplateReference {
        return $this->settingInstanceTemplateReference;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('settingDefinitionId', $this->settingDefinitionId);
        $writer->writeObjectValue('settingInstanceTemplateReference', $this->settingInstanceTemplateReference);
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
     * Sets the settingDefinitionId property value. Setting Definition Id
     *  @param string|null $value Value to set for the settingDefinitionId property.
    */
    public function setSettingDefinitionId(?string $value ): void {
        $this->settingDefinitionId = $value;
    }

    /**
     * Sets the settingInstanceTemplateReference property value. Setting Instance Template Reference
     *  @param DeviceManagementConfigurationSettingInstanceTemplateReference|null $value Value to set for the settingInstanceTemplateReference property.
    */
    public function setSettingInstanceTemplateReference(?DeviceManagementConfigurationSettingInstanceTemplateReference $value ): void {
        $this->settingInstanceTemplateReference = $value;
    }

}
