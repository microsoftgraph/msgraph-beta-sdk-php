<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationReferredSettingInformation implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $settingDefinitionId Setting definition id that is being referred to a setting. Applicable for reusable setting */
    private ?string $settingDefinitionId = null;
    
    /**
     * Instantiates a new deviceManagementConfigurationReferredSettingInformation and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationReferredSettingInformation
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationReferredSettingInformation {
        return new DeviceManagementConfigurationReferredSettingInformation();
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
        ];
    }

    /**
     * Gets the settingDefinitionId property value. Setting definition id that is being referred to a setting. Applicable for reusable setting
     * @return string|null
    */
    public function getSettingDefinitionId(): ?string {
        return $this->settingDefinitionId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('settingDefinitionId', $this->settingDefinitionId);
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
     * Sets the settingDefinitionId property value. Setting definition id that is being referred to a setting. Applicable for reusable setting
     *  @param string|null $value Value to set for the settingDefinitionId property.
    */
    public function setSettingDefinitionId(?string $value ): void {
        $this->settingDefinitionId = $value;
    }

}
