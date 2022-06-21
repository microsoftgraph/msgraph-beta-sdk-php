<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceComplianceScriptError implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var Code|null $code Error code. Possible values are: none, jsonFileInvalid, jsonFileMissing, jsonFileTooLarge, rulesMissing, duplicateRules, tooManyRulesSpecified, operatorMissing, operatorNotSupported, datatypeMissing, datatypeNotSupported, operatorDataTypeCombinationNotSupported, moreInfoUriMissing, moreInfoUriInvalid, moreInfoUriTooLarge, descriptionMissing, descriptionInvalid, descriptionTooLarge, titleMissing, titleInvalid, titleTooLarge, operandMissing, operandInvalid, operandTooLarge, settingNameMissing, settingNameInvalid, settingNameTooLarge, englishLocaleMissing, duplicateLocales, unrecognizedLocale, unknown, remediationStringsMissing.
    */
    private ?Code $code = null;
    
    /**
     * @var DeviceComplianceScriptRulesValidationError|null $deviceComplianceScriptRulesValidationError Error code. Possible values are: none, jsonFileInvalid, jsonFileMissing, jsonFileTooLarge, rulesMissing, duplicateRules, tooManyRulesSpecified, operatorMissing, operatorNotSupported, datatypeMissing, datatypeNotSupported, operatorDataTypeCombinationNotSupported, moreInfoUriMissing, moreInfoUriInvalid, moreInfoUriTooLarge, descriptionMissing, descriptionInvalid, descriptionTooLarge, titleMissing, titleInvalid, titleTooLarge, operandMissing, operandInvalid, operandTooLarge, settingNameMissing, settingNameInvalid, settingNameTooLarge, englishLocaleMissing, duplicateLocales, unrecognizedLocale, unknown, remediationStringsMissing.
    */
    private ?DeviceComplianceScriptRulesValidationError $deviceComplianceScriptRulesValidationError = null;
    
    /**
     * @var string|null $message Error message.
    */
    private ?string $message = null;
    
    /**
     * Instantiates a new deviceComplianceScriptError and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceComplianceScriptError
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceComplianceScriptError {
        return new DeviceComplianceScriptError();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the code property value. Error code. Possible values are: none, jsonFileInvalid, jsonFileMissing, jsonFileTooLarge, rulesMissing, duplicateRules, tooManyRulesSpecified, operatorMissing, operatorNotSupported, datatypeMissing, datatypeNotSupported, operatorDataTypeCombinationNotSupported, moreInfoUriMissing, moreInfoUriInvalid, moreInfoUriTooLarge, descriptionMissing, descriptionInvalid, descriptionTooLarge, titleMissing, titleInvalid, titleTooLarge, operandMissing, operandInvalid, operandTooLarge, settingNameMissing, settingNameInvalid, settingNameTooLarge, englishLocaleMissing, duplicateLocales, unrecognizedLocale, unknown, remediationStringsMissing.
     * @return Code|null
    */
    public function getCode(): ?Code {
        return $this->code;
    }

    /**
     * Gets the deviceComplianceScriptRulesValidationError property value. Error code. Possible values are: none, jsonFileInvalid, jsonFileMissing, jsonFileTooLarge, rulesMissing, duplicateRules, tooManyRulesSpecified, operatorMissing, operatorNotSupported, datatypeMissing, datatypeNotSupported, operatorDataTypeCombinationNotSupported, moreInfoUriMissing, moreInfoUriInvalid, moreInfoUriTooLarge, descriptionMissing, descriptionInvalid, descriptionTooLarge, titleMissing, titleInvalid, titleTooLarge, operandMissing, operandInvalid, operandTooLarge, settingNameMissing, settingNameInvalid, settingNameTooLarge, englishLocaleMissing, duplicateLocales, unrecognizedLocale, unknown, remediationStringsMissing.
     * @return DeviceComplianceScriptRulesValidationError|null
    */
    public function getDeviceComplianceScriptRulesValidationError(): ?DeviceComplianceScriptRulesValidationError {
        return $this->deviceComplianceScriptRulesValidationError;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'code' => function (ParseNode $n) use ($o) { $o->setCode($n->getEnumValue(Code::class)); },
            'deviceComplianceScriptRulesValidationError' => function (ParseNode $n) use ($o) { $o->setDeviceComplianceScriptRulesValidationError($n->getEnumValue(DeviceComplianceScriptRulesValidationError::class)); },
            'message' => function (ParseNode $n) use ($o) { $o->setMessage($n->getStringValue()); },
        ];
    }

    /**
     * Gets the message property value. Error message.
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->message;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('code', $this->code);
        $writer->writeEnumValue('deviceComplianceScriptRulesValidationError', $this->deviceComplianceScriptRulesValidationError);
        $writer->writeStringValue('message', $this->message);
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
     * Sets the code property value. Error code. Possible values are: none, jsonFileInvalid, jsonFileMissing, jsonFileTooLarge, rulesMissing, duplicateRules, tooManyRulesSpecified, operatorMissing, operatorNotSupported, datatypeMissing, datatypeNotSupported, operatorDataTypeCombinationNotSupported, moreInfoUriMissing, moreInfoUriInvalid, moreInfoUriTooLarge, descriptionMissing, descriptionInvalid, descriptionTooLarge, titleMissing, titleInvalid, titleTooLarge, operandMissing, operandInvalid, operandTooLarge, settingNameMissing, settingNameInvalid, settingNameTooLarge, englishLocaleMissing, duplicateLocales, unrecognizedLocale, unknown, remediationStringsMissing.
     *  @param Code|null $value Value to set for the code property.
    */
    public function setCode(?Code $value ): void {
        $this->code = $value;
    }

    /**
     * Sets the deviceComplianceScriptRulesValidationError property value. Error code. Possible values are: none, jsonFileInvalid, jsonFileMissing, jsonFileTooLarge, rulesMissing, duplicateRules, tooManyRulesSpecified, operatorMissing, operatorNotSupported, datatypeMissing, datatypeNotSupported, operatorDataTypeCombinationNotSupported, moreInfoUriMissing, moreInfoUriInvalid, moreInfoUriTooLarge, descriptionMissing, descriptionInvalid, descriptionTooLarge, titleMissing, titleInvalid, titleTooLarge, operandMissing, operandInvalid, operandTooLarge, settingNameMissing, settingNameInvalid, settingNameTooLarge, englishLocaleMissing, duplicateLocales, unrecognizedLocale, unknown, remediationStringsMissing.
     *  @param DeviceComplianceScriptRulesValidationError|null $value Value to set for the deviceComplianceScriptRulesValidationError property.
    */
    public function setDeviceComplianceScriptRulesValidationError(?DeviceComplianceScriptRulesValidationError $value ): void {
        $this->deviceComplianceScriptRulesValidationError = $value;
    }

    /**
     * Sets the message property value. Error message.
     *  @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value ): void {
        $this->message = $value;
    }

}
