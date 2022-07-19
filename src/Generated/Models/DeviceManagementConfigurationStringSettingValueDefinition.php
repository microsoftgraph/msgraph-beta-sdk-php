<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationStringSettingValueDefinition extends DeviceManagementConfigurationSettingValueDefinition implements Parsable 
{
    /**
     * @var array<string>|null $fileTypes Supported file types for this setting.
    */
    private ?array $fileTypes = null;
    
    /**
     * @var DeviceManagementConfigurationStringFormat|null $format The format property
    */
    private ?DeviceManagementConfigurationStringFormat $format = null;
    
    /**
     * @var string|null $inputValidationSchema Regular expression or any xml or json schema that the input string should match
    */
    private ?string $inputValidationSchema = null;
    
    /**
     * @var bool|null $isSecret Specifies whether the setting needs to be treated as a secret. Settings marked as yes will be encrypted in transit and at rest and will be displayed as asterisks when represented in the UX.
    */
    private ?bool $isSecret = null;
    
    /**
     * @var int|null $maximumLength Maximum length of string
    */
    private ?int $maximumLength = null;
    
    /**
     * @var int|null $minimumLength Minimum length of string
    */
    private ?int $minimumLength = null;
    
    /**
     * Instantiates a new DeviceManagementConfigurationStringSettingValueDefinition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceManagementConfigurationStringSettingValueDefinition');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationStringSettingValueDefinition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationStringSettingValueDefinition {
        return new DeviceManagementConfigurationStringSettingValueDefinition();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'fileTypes' => function (ParseNode $n) use ($o) { $o->setFileTypes($n->getCollectionOfPrimitiveValues()); },
            'format' => function (ParseNode $n) use ($o) { $o->setFormat($n->getEnumValue(DeviceManagementConfigurationStringFormat::class)); },
            'inputValidationSchema' => function (ParseNode $n) use ($o) { $o->setInputValidationSchema($n->getStringValue()); },
            'isSecret' => function (ParseNode $n) use ($o) { $o->setIsSecret($n->getBooleanValue()); },
            'maximumLength' => function (ParseNode $n) use ($o) { $o->setMaximumLength($n->getIntegerValue()); },
            'minimumLength' => function (ParseNode $n) use ($o) { $o->setMinimumLength($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the fileTypes property value. Supported file types for this setting.
     * @return array<string>|null
    */
    public function getFileTypes(): ?array {
        return $this->fileTypes;
    }

    /**
     * Gets the format property value. The format property
     * @return DeviceManagementConfigurationStringFormat|null
    */
    public function getFormat(): ?DeviceManagementConfigurationStringFormat {
        return $this->format;
    }

    /**
     * Gets the inputValidationSchema property value. Regular expression or any xml or json schema that the input string should match
     * @return string|null
    */
    public function getInputValidationSchema(): ?string {
        return $this->inputValidationSchema;
    }

    /**
     * Gets the isSecret property value. Specifies whether the setting needs to be treated as a secret. Settings marked as yes will be encrypted in transit and at rest and will be displayed as asterisks when represented in the UX.
     * @return bool|null
    */
    public function getIsSecret(): ?bool {
        return $this->isSecret;
    }

    /**
     * Gets the maximumLength property value. Maximum length of string
     * @return int|null
    */
    public function getMaximumLength(): ?int {
        return $this->maximumLength;
    }

    /**
     * Gets the minimumLength property value. Minimum length of string
     * @return int|null
    */
    public function getMinimumLength(): ?int {
        return $this->minimumLength;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('fileTypes', $this->fileTypes);
        $writer->writeEnumValue('format', $this->format);
        $writer->writeStringValue('inputValidationSchema', $this->inputValidationSchema);
        $writer->writeBooleanValue('isSecret', $this->isSecret);
        $writer->writeIntegerValue('maximumLength', $this->maximumLength);
        $writer->writeIntegerValue('minimumLength', $this->minimumLength);
    }

    /**
     * Sets the fileTypes property value. Supported file types for this setting.
     *  @param array<string>|null $value Value to set for the fileTypes property.
    */
    public function setFileTypes(?array $value ): void {
        $this->fileTypes = $value;
    }

    /**
     * Sets the format property value. The format property
     *  @param DeviceManagementConfigurationStringFormat|null $value Value to set for the format property.
    */
    public function setFormat(?DeviceManagementConfigurationStringFormat $value ): void {
        $this->format = $value;
    }

    /**
     * Sets the inputValidationSchema property value. Regular expression or any xml or json schema that the input string should match
     *  @param string|null $value Value to set for the inputValidationSchema property.
    */
    public function setInputValidationSchema(?string $value ): void {
        $this->inputValidationSchema = $value;
    }

    /**
     * Sets the isSecret property value. Specifies whether the setting needs to be treated as a secret. Settings marked as yes will be encrypted in transit and at rest and will be displayed as asterisks when represented in the UX.
     *  @param bool|null $value Value to set for the isSecret property.
    */
    public function setIsSecret(?bool $value ): void {
        $this->isSecret = $value;
    }

    /**
     * Sets the maximumLength property value. Maximum length of string
     *  @param int|null $value Value to set for the maximumLength property.
    */
    public function setMaximumLength(?int $value ): void {
        $this->maximumLength = $value;
    }

    /**
     * Sets the minimumLength property value. Minimum length of string
     *  @param int|null $value Value to set for the minimumLength property.
    */
    public function setMinimumLength(?int $value ): void {
        $this->minimumLength = $value;
    }

}
