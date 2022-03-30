<?php

namespace Microsoft\Graph\Beta\Generated\ServicePrincipals\Item\Synchronization\Jobs\Item\Schema\ParseExpression;

use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\AttributeDefinition;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\ExpressionInputObject;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ParseExpressionRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $expression  */
    private ?string $expression = null;
    
    /** @var AttributeDefinition|null $targetAttributeDefinition  */
    private ?AttributeDefinition $targetAttributeDefinition = null;
    
    /** @var ExpressionInputObject|null $testInputObject  */
    private ?ExpressionInputObject $testInputObject = null;
    
    /**
     * Instantiates a new parseExpressionRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ParseExpressionRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ParseExpressionRequestBody {
        return new ParseExpressionRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the expression property value. 
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
        return  [
            'expression' => function (self $o, ParseNode $n) { $o->setExpression($n->getStringValue()); },
            'targetAttributeDefinition' => function (self $o, ParseNode $n) { $o->setTargetAttributeDefinition($n->getObjectValue(AttributeDefinition::class)); },
            'testInputObject' => function (self $o, ParseNode $n) { $o->setTestInputObject($n->getObjectValue(ExpressionInputObject::class)); },
        ];
    }

    /**
     * Gets the targetAttributeDefinition property value. 
     * @return AttributeDefinition|null
    */
    public function getTargetAttributeDefinition(): ?AttributeDefinition {
        return $this->targetAttributeDefinition;
    }

    /**
     * Gets the testInputObject property value. 
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
     * Sets the expression property value. 
     *  @param string|null $value Value to set for the expression property.
    */
    public function setExpression(?string $value ): void {
        $this->expression = $value;
    }

    /**
     * Sets the targetAttributeDefinition property value. 
     *  @param AttributeDefinition|null $value Value to set for the targetAttributeDefinition property.
    */
    public function setTargetAttributeDefinition(?AttributeDefinition $value ): void {
        $this->targetAttributeDefinition = $value;
    }

    /**
     * Sets the testInputObject property value. 
     *  @param ExpressionInputObject|null $value Value to set for the testInputObject property.
    */
    public function setTestInputObject(?ExpressionInputObject $value ): void {
        $this->testInputObject = $value;
    }

}
