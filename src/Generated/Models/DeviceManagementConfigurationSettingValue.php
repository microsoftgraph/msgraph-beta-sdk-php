<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationSettingValue implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DeviceManagementConfigurationSettingValueTemplateReference|null $settingValueTemplateReference Setting value template reference
    */
    private ?DeviceManagementConfigurationSettingValueTemplateReference $settingValueTemplateReference = null;
    
    /**
     * Instantiates a new deviceManagementConfigurationSettingValue and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
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
                case '#microsoft.graph.deviceManagementConfigurationSimpleSettingValue': return new DeviceManagementConfigurationSimpleSettingValue();
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
            'settingValueTemplateReference' => function (ParseNode $n) use ($o) { $o->setSettingValueTemplateReference($n->getObjectValue(array(DeviceManagementConfigurationSettingValueTemplateReference::class, 'createFromDiscriminatorValue'))); },
        ];
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
     * Sets the settingValueTemplateReference property value. Setting value template reference
     *  @param DeviceManagementConfigurationSettingValueTemplateReference|null $value Value to set for the settingValueTemplateReference property.
    */
    public function setSettingValueTemplateReference(?DeviceManagementConfigurationSettingValueTemplateReference $value ): void {
        $this->settingValueTemplateReference = $value;
    }

}
