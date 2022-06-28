<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationIntegerSettingValueDefinitionTemplate implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $maxValue Integer Setting Maximum Value. Valid values -2147483648 to 2147483647
    */
    private ?int $maxValue = null;
    
    /**
     * @var int|null $minValue Integer Setting Minimum Value. Valid values -2147483648 to 2147483647
    */
    private ?int $minValue = null;
    
    /**
     * Instantiates a new deviceManagementConfigurationIntegerSettingValueDefinitionTemplate and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationIntegerSettingValueDefinitionTemplate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationIntegerSettingValueDefinitionTemplate {
        return new DeviceManagementConfigurationIntegerSettingValueDefinitionTemplate();
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
            'maxValue' => function (ParseNode $n) use ($o) { $o->setMaxValue($n->getIntegerValue()); },
            'minValue' => function (ParseNode $n) use ($o) { $o->setMinValue($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the maxValue property value. Integer Setting Maximum Value. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getMaxValue(): ?int {
        return $this->maxValue;
    }

    /**
     * Gets the minValue property value. Integer Setting Minimum Value. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getMinValue(): ?int {
        return $this->minValue;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('maxValue', $this->maxValue);
        $writer->writeIntegerValue('minValue', $this->minValue);
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
     * Sets the maxValue property value. Integer Setting Maximum Value. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the maxValue property.
    */
    public function setMaxValue(?int $value ): void {
        $this->maxValue = $value;
    }

    /**
     * Sets the minValue property value. Integer Setting Minimum Value. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the minValue property.
    */
    public function setMinValue(?int $value ): void {
        $this->minValue = $value;
    }

}
