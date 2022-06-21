<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AssignmentFilterValidationResult implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var bool|null $isValidRule Indicator to valid or invalid rule. */
    private ?bool $isValidRule = null;
    
    /**
     * Instantiates a new assignmentFilterValidationResult and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AssignmentFilterValidationResult
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): AssignmentFilterValidationResult {
        return new AssignmentFilterValidationResult();
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
            'isValidRule' => function (self $o, ParseNode $n) { $o->setIsValidRule($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the isValidRule property value. Indicator to valid or invalid rule.
     * @return bool|null
    */
    public function getIsValidRule(): ?bool {
        return $this->isValidRule;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('isValidRule', $this->isValidRule);
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
     * Sets the isValidRule property value. Indicator to valid or invalid rule.
     *  @param bool|null $value Value to set for the isValidRule property.
    */
    public function setIsValidRule(?bool $value ): void {
        $this->isValidRule = $value;
    }

}
