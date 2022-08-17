<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ValidationResult implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $message The string containing the reason for why the rule passed or not. Read-only. Not nullable.
    */
    private ?string $message = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $ruleName The string containing the name of the password validation rule that the action was validated against. Read-only. Not nullable.
    */
    private ?string $ruleName = null;
    
    /**
     * @var bool|null $validationPassed Whether the password passed or failed the validation rule. Read-only. Not nullable.
    */
    private ?bool $validationPassed = null;
    
    /**
     * Instantiates a new validationResult and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.validationResult');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ValidationResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ValidationResult {
        return new ValidationResult();
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
            'message' => function (ParseNode $n) use ($o) { $o->setMessage($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'ruleName' => function (ParseNode $n) use ($o) { $o->setRuleName($n->getStringValue()); },
            'validationPassed' => function (ParseNode $n) use ($o) { $o->setValidationPassed($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the message property value. The string containing the reason for why the rule passed or not. Read-only. Not nullable.
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
     * Gets the ruleName property value. The string containing the name of the password validation rule that the action was validated against. Read-only. Not nullable.
     * @return string|null
    */
    public function getRuleName(): ?string {
        return $this->ruleName;
    }

    /**
     * Gets the validationPassed property value. Whether the password passed or failed the validation rule. Read-only. Not nullable.
     * @return bool|null
    */
    public function getValidationPassed(): ?bool {
        return $this->validationPassed;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('message', $this->message);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('ruleName', $this->ruleName);
        $writer->writeBooleanValue('validationPassed', $this->validationPassed);
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
     * Sets the message property value. The string containing the reason for why the rule passed or not. Read-only. Not nullable.
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

    /**
     * Sets the ruleName property value. The string containing the name of the password validation rule that the action was validated against. Read-only. Not nullable.
     *  @param string|null $value Value to set for the ruleName property.
    */
    public function setRuleName(?string $value ): void {
        $this->ruleName = $value;
    }

    /**
     * Sets the validationPassed property value. Whether the password passed or failed the validation rule. Read-only. Not nullable.
     *  @param bool|null $value Value to set for the validationPassed property.
    */
    public function setValidationPassed(?bool $value ): void {
        $this->validationPassed = $value;
    }

}
