<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationSettingValue implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var DeviceManagementConfigurationSettingValueTemplateReference|null $settingValueTemplateReference Setting value template reference
    */
    private ?DeviceManagementConfigurationSettingValueTemplateReference $settingValueTemplateReference = null;
    
    /**
     * Instantiates a new deviceManagementConfigurationSettingValue and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.deviceManagementConfigurationSettingValue');
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
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'settingValueTemplateReference' => function (ParseNode $n) use ($o) { $o->setSettingValueTemplateReference($n->getObjectValue(array(DeviceManagementConfigurationSettingValueTemplateReference::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the settingValueTemplateReference property value. Setting value template reference
     * @return DeviceManagementConfigurationSettingValueTemplateReference|null
    */
    public function getSettingValueTemplateReference(): ?DeviceManagementConfigurationSettingValueTemplateReference {
        return $this->settingValueTemplateReference;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeObjectValue('settingValueTemplateReference', $this->settingValueTemplateReference);
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
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the settingValueTemplateReference property value. Setting value template reference
     *  @param DeviceManagementConfigurationSettingValueTemplateReference|null $value Value to set for the settingValueTemplateReference property.
    */
    public function setSettingValueTemplateReference(?DeviceManagementConfigurationSettingValueTemplateReference $value ): void {
        $this->settingValueTemplateReference = $value;
    }

}
