<?php

namespace Microsoft\Graph\Beta\Generated\Applications\Item\Synchronization\Jobs\Item\Schema\ParseExpression;

use Microsoft\Graph\Beta\Generated\Models\AttributeDefinition;
use Microsoft\Graph\Beta\Generated\Models\ExpressionInputObject;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ParseExpressionPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $expression The expression property
    */
    private ?string $expression = null;
    
    /**
     * @var AttributeDefinition|null $targetAttributeDefinition The targetAttributeDefinition property
    */
    private ?AttributeDefinition $targetAttributeDefinition = null;
    
    /**
     * @var ExpressionInputObject|null $testInputObject The testInputObject property
    */
    private ?ExpressionInputObject $testInputObject = null;
    
    /**
     * Instantiates a new parseExpressionPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ParseExpressionPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ParseExpressionPostRequestBody {
        return new ParseExpressionPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the expression property value. The expression property
     * @return string|null
    */
    public function getExpression(): ?string {
        return $this->expression;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'expression' => function (ParseNode $n) use ($o) { $o->setExpression($n->getStringValue()); },
            'targetAttributeDefinition' => function (ParseNode $n) use ($o) { $o->setTargetAttributeDefinition($n->getObjectValue(array(AttributeDefinition::class, 'createFromDiscriminatorValue'))); },
            'testInputObject' => function (ParseNode $n) use ($o) { $o->setTestInputObject($n->getObjectValue(array(ExpressionInputObject::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the targetAttributeDefinition property value. The targetAttributeDefinition property
     * @return AttributeDefinition|null
    */
    public function getTargetAttributeDefinition(): ?AttributeDefinition {
        return $this->targetAttributeDefinition;
    }

    /**
     * Gets the testInputObject property value. The testInputObject property
     * @return ExpressionInputObject|null
    */
    public function getTestInputObject(): ?ExpressionInputObject {
        return $this->testInputObject;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('expression', $this->expression);
        $writer->writeObjectValue('targetAttributeDefinition', $this->targetAttributeDefinition);
        $writer->writeObjectValue('testInputObject', $this->testInputObject);
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
     * Sets the expression property value. The expression property
     *  @param string|null $value Value to set for the expression property.
    */
    public function setExpression(?string $value ): void {
        $this->expression = $value;
    }

    /**
     * Sets the targetAttributeDefinition property value. The targetAttributeDefinition property
     *  @param AttributeDefinition|null $value Value to set for the targetAttributeDefinition property.
    */
    public function setTargetAttributeDefinition(?AttributeDefinition $value ): void {
        $this->targetAttributeDefinition = $value;
    }

    /**
     * Sets the testInputObject property value. The testInputObject property
     *  @param ExpressionInputObject|null $value Value to set for the testInputObject property.
    */
    public function setTestInputObject(?ExpressionInputObject $value ): void {
        $this->testInputObject = $value;
    }

}
