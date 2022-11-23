<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationStringSettingValueDefinition extends DeviceManagementConfigurationSettingValueDefinition implements Parsable 
{
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
            'fileTypes' => fn(ParseNode $n) => $o->setFileTypes($n->getCollectionOfPrimitiveValues()),
            'format' => fn(ParseNode $n) => $o->setFormat($n->getEnumValue(DeviceManagementConfigurationStringFormat::class)),
            'inputValidationSchema' => fn(ParseNode $n) => $o->setInputValidationSchema($n->getStringValue()),
            'isSecret' => fn(ParseNode $n) => $o->setIsSecret($n->getBooleanValue()),
            'maximumLength' => fn(ParseNode $n) => $o->setMaximumLength($n->getIntegerValue()),
            'minimumLength' => fn(ParseNode $n) => $o->setMinimumLength($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the fileTypes property value. Supported file types for this setting.
     * @return array<string>|null
    */
    public function getFileTypes(): ?array {
        return $this->getBackingStore()->get('fileTypes');
    }

    /**
     * Gets the format property value. The format property
     * @return DeviceManagementConfigurationStringFormat|null
    */
    public function getFormat(): ?DeviceManagementConfigurationStringFormat {
        return $this->getBackingStore()->get('format');
    }

    /**
     * Gets the inputValidationSchema property value. Regular expression or any xml or json schema that the input string should match
     * @return string|null
    */
    public function getInputValidationSchema(): ?string {
        return $this->getBackingStore()->get('inputValidationSchema');
    }

    /**
     * Gets the isSecret property value. Specifies whether the setting needs to be treated as a secret. Settings marked as yes will be encrypted in transit and at rest and will be displayed as asterisks when represented in the UX.
     * @return bool|null
    */
    public function getIsSecret(): ?bool {
        return $this->getBackingStore()->get('isSecret');
    }

    /**
     * Gets the maximumLength property value. Maximum length of string. Valid values 0 to 87516
     * @return int|null
    */
    public function getMaximumLength(): ?int {
        return $this->getBackingStore()->get('maximumLength');
    }

    /**
     * Gets the minimumLength property value. Minimum length of string. Valid values 0 to 87516
     * @return int|null
    */
    public function getMinimumLength(): ?int {
        return $this->getBackingStore()->get('minimumLength');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('fileTypes', $this->getFileTypes());
        $writer->writeEnumValue('format', $this->getFormat());
        $writer->writeStringValue('inputValidationSchema', $this->getInputValidationSchema());
        $writer->writeBooleanValue('isSecret', $this->getIsSecret());
        $writer->writeIntegerValue('maximumLength', $this->getMaximumLength());
        $writer->writeIntegerValue('minimumLength', $this->getMinimumLength());
    }

    /**
     * Sets the fileTypes property value. Supported file types for this setting.
     *  @param array<string>|null $value Value to set for the fileTypes property.
    */
    public function setFileTypes(?array $value): void {
        $this->getBackingStore()->set('fileTypes', $value);
    }

    /**
     * Sets the format property value. The format property
     *  @param DeviceManagementConfigurationStringFormat|null $value Value to set for the format property.
    */
    public function setFormat(?DeviceManagementConfigurationStringFormat $value): void {
        $this->getBackingStore()->set('format', $value);
    }

    /**
     * Sets the inputValidationSchema property value. Regular expression or any xml or json schema that the input string should match
     *  @param string|null $value Value to set for the inputValidationSchema property.
    */
    public function setInputValidationSchema(?string $value): void {
        $this->getBackingStore()->set('inputValidationSchema', $value);
    }

    /**
     * Sets the isSecret property value. Specifies whether the setting needs to be treated as a secret. Settings marked as yes will be encrypted in transit and at rest and will be displayed as asterisks when represented in the UX.
     *  @param bool|null $value Value to set for the isSecret property.
    */
    public function setIsSecret(?bool $value): void {
        $this->getBackingStore()->set('isSecret', $value);
    }

    /**
     * Sets the maximumLength property value. Maximum length of string. Valid values 0 to 87516
     *  @param int|null $value Value to set for the maximumLength property.
    */
    public function setMaximumLength(?int $value): void {
        $this->getBackingStore()->set('maximumLength', $value);
    }

    /**
     * Sets the minimumLength property value. Minimum length of string. Valid values 0 to 87516
     *  @param int|null $value Value to set for the minimumLength property.
    */
    public function setMinimumLength(?int $value): void {
        $this->getBackingStore()->set('minimumLength', $value);
    }

}
