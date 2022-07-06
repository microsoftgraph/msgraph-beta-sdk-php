<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationSettingInstance implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $settingDefinitionId Setting Definition Id
    */
    private ?string $settingDefinitionId = null;
    
    /**
     * @var DeviceManagementConfigurationSettingInstanceTemplateReference|null $settingInstanceTemplateReference Setting Instance Template Reference
    */
    private ?DeviceManagementConfigurationSettingInstanceTemplateReference $settingInstanceTemplateReference = null;
    
    /**
     * @var string|null $type The type property
    */
    private ?string $type = null;
    
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
        $o = $this;
        return  [
            'settingDefinitionId' => function (ParseNode $n) use ($o) { $o->setSettingDefinitionId($n->getStringValue()); },
            'settingInstanceTemplateReference' => function (ParseNode $n) use ($o) { $o->setSettingInstanceTemplateReference($n->getObjectValue(array(DeviceManagementConfigurationSettingInstanceTemplateReference::class, 'createFromDiscriminatorValue'))); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdatatype($n->getStringValue()); },
        ];
    }

    /**
     * Gets the @odata.type property value. The type property
     * @return string|null
    */
    public function getOdatatype(): ?string {
        return $this->type;
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
        $writer->writeStringValue('@odata.type', $this->type);
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
     * Sets the @odata.type property value. The type property
     *  @param string|null $value Value to set for the type property.
    */
    public function setOdatatype(?string $value ): void {
        $this->type = $value;
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
