<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationSettingInstanceTemplate implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $isRequired Indicates if a policy must specify this setting.
    */
    private ?bool $isRequired = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $settingDefinitionId Setting Definition Id
    */
    private ?string $settingDefinitionId = null;
    
    /**
     * @var string|null $settingInstanceTemplateId Setting Instance Template Id
    */
    private ?string $settingInstanceTemplateId = null;
    
    /**
     * Instantiates a new deviceManagementConfigurationSettingInstanceTemplate and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.deviceManagementConfigurationSettingInstanceTemplate');
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
            'isRequired' => function (ParseNode $n) use ($o) { $o->setIsRequired($n->getBooleanValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'settingDefinitionId' => function (ParseNode $n) use ($o) { $o->setSettingDefinitionId($n->getStringValue()); },
            'settingInstanceTemplateId' => function (ParseNode $n) use ($o) { $o->setSettingInstanceTemplateId($n->getStringValue()); },
        ];
    }

    /**
     * Gets the isRequired property value. Indicates if a policy must specify this setting.
     * @return bool|null
    */
    public function getIsRequired(): ?bool {
        return $this->isRequired;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the settingDefinitionId property value. Setting Definition Id
     * @return string|null
    */
    public function getSettingDefinitionId(): ?string {
        return $this->settingDefinitionId;
    }

    /**
     * Gets the settingInstanceTemplateId property value. Setting Instance Template Id
     * @return string|null
    */
    public function getSettingInstanceTemplateId(): ?string {
        return $this->settingInstanceTemplateId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('isRequired', $this->isRequired);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('settingDefinitionId', $this->settingDefinitionId);
        $writer->writeStringValue('settingInstanceTemplateId', $this->settingInstanceTemplateId);
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
     * Sets the isRequired property value. Indicates if a policy must specify this setting.
     *  @param bool|null $value Value to set for the isRequired property.
    */
    public function setIsRequired(?bool $value ): void {
        $this->isRequired = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the settingDefinitionId property value. Setting Definition Id
     *  @param string|null $value Value to set for the settingDefinitionId property.
    */
    public function setSettingDefinitionId(?string $value ): void {
        $this->settingDefinitionId = $value;
    }

    /**
     * Sets the settingInstanceTemplateId property value. Setting Instance Template Id
     *  @param string|null $value Value to set for the settingInstanceTemplateId property.
    */
    public function setSettingInstanceTemplateId(?string $value ): void {
        $this->settingInstanceTemplateId = $value;
    }

}
