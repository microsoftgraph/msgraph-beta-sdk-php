<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class FilterClause implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $operatorName Name of the operator to be applied to the source and target operands. Must be one of the supported operators. Supported operators can be discovered.
    */
    private ?string $operatorName = null;
    
    /**
     * @var string|null $sourceOperandName Name of source operand (the operand being tested). The source operand name must match one of the attribute names on the source object.
    */
    private ?string $sourceOperandName = null;
    
    /**
     * @var FilterOperand|null $targetOperand Values that the source operand will be tested against.
    */
    private ?FilterOperand $targetOperand = null;
    
    /**
     * Instantiates a new filterClause and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FilterClause
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FilterClause {
        return new FilterClause();
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
            'operatorName' => function (ParseNode $n) use ($o) { $o->setOperatorName($n->getStringValue()); },
            'sourceOperandName' => function (ParseNode $n) use ($o) { $o->setSourceOperandName($n->getStringValue()); },
            'targetOperand' => function (ParseNode $n) use ($o) { $o->setTargetOperand($n->getObjectValue(array(FilterOperand::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the operatorName property value. Name of the operator to be applied to the source and target operands. Must be one of the supported operators. Supported operators can be discovered.
     * @return string|null
    */
    public function getOperatorName(): ?string {
        return $this->operatorName;
    }

    /**
     * Gets the sourceOperandName property value. Name of source operand (the operand being tested). The source operand name must match one of the attribute names on the source object.
     * @return string|null
    */
    public function getSourceOperandName(): ?string {
        return $this->sourceOperandName;
    }

    /**
     * Gets the targetOperand property value. Values that the source operand will be tested against.
     * @return FilterOperand|null
    */
    public function getTargetOperand(): ?FilterOperand {
        return $this->targetOperand;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('operatorName', $this->operatorName);
        $writer->writeStringValue('sourceOperandName', $this->sourceOperandName);
        $writer->writeObjectValue('targetOperand', $this->targetOperand);
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
     * Sets the operatorName property value. Name of the operator to be applied to the source and target operands. Must be one of the supported operators. Supported operators can be discovered.
     *  @param string|null $value Value to set for the operatorName property.
    */
    public function setOperatorName(?string $value ): void {
        $this->operatorName = $value;
    }

    /**
     * Sets the sourceOperandName property value. Name of source operand (the operand being tested). The source operand name must match one of the attribute names on the source object.
     *  @param string|null $value Value to set for the sourceOperandName property.
    */
    public function setSourceOperandName(?string $value ): void {
        $this->sourceOperandName = $value;
    }

    /**
     * Sets the targetOperand property value. Values that the source operand will be tested against.
     *  @param FilterOperand|null $value Value to set for the targetOperand property.
    */
    public function setTargetOperand(?FilterOperand $value ): void {
        $this->targetOperand = $value;
    }

}
