<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationSettingValueTemplateReference implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $settingValueTemplateId Setting value template id
    */
    private ?string $settingValueTemplateId = null;
    
    /**
     * @var bool|null $useTemplateDefault Indicates whether to update policy setting value to match template setting default value
    */
    private ?bool $useTemplateDefault = null;
    
    /**
     * Instantiates a new deviceManagementConfigurationSettingValueTemplateReference and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationSettingValueTemplateReference
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationSettingValueTemplateReference {
        return new DeviceManagementConfigurationSettingValueTemplateReference();
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
            'settingValueTemplateId' => function (ParseNode $n) use ($o) { $o->setSettingValueTemplateId($n->getStringValue()); },
            'useTemplateDefault' => function (ParseNode $n) use ($o) { $o->setUseTemplateDefault($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the settingValueTemplateId property value. Setting value template id
     * @return string|null
    */
    public function getSettingValueTemplateId(): ?string {
        return $this->settingValueTemplateId;
    }

    /**
     * Gets the useTemplateDefault property value. Indicates whether to update policy setting value to match template setting default value
     * @return bool|null
    */
    public function getUseTemplateDefault(): ?bool {
        return $this->useTemplateDefault;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('settingValueTemplateId', $this->settingValueTemplateId);
        $writer->writeBooleanValue('useTemplateDefault', $this->useTemplateDefault);
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
     * Sets the settingValueTemplateId property value. Setting value template id
     *  @param string|null $value Value to set for the settingValueTemplateId property.
    */
    public function setSettingValueTemplateId(?string $value ): void {
        $this->settingValueTemplateId = $value;
    }

    /**
     * Sets the useTemplateDefault property value. Indicates whether to update policy setting value to match template setting default value
     *  @param bool|null $value Value to set for the useTemplateDefault property.
    */
    public function setUseTemplateDefault(?bool $value ): void {
        $this->useTemplateDefault = $value;
    }

}
