<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceComplianceScriptError implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var Code|null $code Error code for rule validation.
    */
    private ?Code $code = null;
    
    /**
     * @var DeviceComplianceScriptRulesValidationError|null $deviceComplianceScriptRulesValidationError Error code for rule validation.
    */
    private ?DeviceComplianceScriptRulesValidationError $deviceComplianceScriptRulesValidationError = null;
    
    /**
     * @var string|null $message Error message.
    */
    private ?string $message = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new deviceComplianceScriptError and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.deviceComplianceScriptError');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceComplianceScriptError
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceComplianceScriptError {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.deviceComplianceScriptRuleError': return new DeviceComplianceScriptRuleError();
            }
        }
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
     * Gets the code property value. Error code for rule validation.
     * @return Code|null
    */
    public function getCode(): ?Code {
        return $this->code;
    }

    /**
     * Gets the deviceComplianceScriptRulesValidationError property value. Error code for rule validation.
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
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
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
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('code', $this->code);
        $writer->writeEnumValue('deviceComplianceScriptRulesValidationError', $this->deviceComplianceScriptRulesValidationError);
        $writer->writeStringValue('message', $this->message);
        $writer->writeStringValue('@odata.type', $this->odataType);
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
     * Sets the code property value. Error code for rule validation.
     *  @param Code|null $value Value to set for the code property.
    */
    public function setCode(?Code $value ): void {
        $this->code = $value;
    }

    /**
     * Sets the deviceComplianceScriptRulesValidationError property value. Error code for rule validation.
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

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
