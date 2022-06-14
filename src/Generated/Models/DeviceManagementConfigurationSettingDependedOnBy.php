<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationSettingDependedOnBy implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $dependedOnBy Identifier of child setting that is dependent on the current setting
    */
    private ?string $dependedOnBy = null;
    
    /**
     * @var bool|null $required Value that determines if the child setting is required based on the parent setting's selection
    */
    private ?bool $required = null;
    
    /**
     * Instantiates a new deviceManagementConfigurationSettingDependedOnBy and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationSettingDependedOnBy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationSettingDependedOnBy {
        return new DeviceManagementConfigurationSettingDependedOnBy();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the dependedOnBy property value. Identifier of child setting that is dependent on the current setting
     * @return string|null
    */
    public function getDependedOnBy(): ?string {
        return $this->dependedOnBy;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'dependedOnBy' => function (ParseNode $n) use ($o) { $o->setDependedOnBy($n->getStringValue()); },
            'required' => function (ParseNode $n) use ($o) { $o->setRequired($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the required property value. Value that determines if the child setting is required based on the parent setting's selection
     * @return bool|null
    */
    public function getRequired(): ?bool {
        return $this->required;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('dependedOnBy', $this->dependedOnBy);
        $writer->writeBooleanValue('required', $this->required);
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
     * Sets the dependedOnBy property value. Identifier of child setting that is dependent on the current setting
     *  @param string|null $value Value to set for the dependedOnBy property.
    */
    public function setDependedOnBy(?string $value ): void {
        $this->dependedOnBy = $value;
    }

    /**
     * Sets the required property value. Value that determines if the child setting is required based on the parent setting's selection
     *  @param bool|null $value Value to set for the required property.
    */
    public function setRequired(?bool $value ): void {
        $this->required = $value;
    }

}
