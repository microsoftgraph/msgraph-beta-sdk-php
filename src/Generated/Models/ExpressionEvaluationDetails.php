<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ExpressionEvaluationDetails implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $expression Represents expression which has been evaluated.
    */
    private ?string $expression = null;
    
    /**
     * @var array<ExpressionEvaluationDetails>|null $expressionEvaluationDetails Represents the details of the evaluation of the expression.
    */
    private ?array $expressionEvaluationDetails = null;
    
    /**
     * @var bool|null $expressionResult Represents the value of the result of the current expression.
    */
    private ?bool $expressionResult = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var PropertyToEvaluate|null $propertyToEvaluate Defines the name of the property and the value of that property.
    */
    private ?PropertyToEvaluate $propertyToEvaluate = null;
    
    /**
     * Instantiates a new expressionEvaluationDetails and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.expressionEvaluationDetails');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExpressionEvaluationDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExpressionEvaluationDetails {
        return new ExpressionEvaluationDetails();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the expression property value. Represents expression which has been evaluated.
     * @return string|null
    */
    public function getExpression(): ?string {
        return $this->expression;
    }

    /**
     * Gets the expressionEvaluationDetails property value. Represents the details of the evaluation of the expression.
     * @return array<ExpressionEvaluationDetails>|null
    */
    public function getExpressionEvaluationDetails(): ?array {
        return $this->expressionEvaluationDetails;
    }

    /**
     * Gets the expressionResult property value. Represents the value of the result of the current expression.
     * @return bool|null
    */
    public function getExpressionResult(): ?bool {
        return $this->expressionResult;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'expression' => fn(ParseNode $n) => $o->setExpression($n->getStringValue()),
            'expressionEvaluationDetails' => fn(ParseNode $n) => $o->setExpressionEvaluationDetails($n->getCollectionOfObjectValues([ExpressionEvaluationDetails::class, 'createFromDiscriminatorValue'])),
            'expressionResult' => fn(ParseNode $n) => $o->setExpressionResult($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'propertyToEvaluate' => fn(ParseNode $n) => $o->setPropertyToEvaluate($n->getObjectValue([PropertyToEvaluate::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the propertyToEvaluate property value. Defines the name of the property and the value of that property.
     * @return PropertyToEvaluate|null
    */
    public function getPropertyToEvaluate(): ?PropertyToEvaluate {
        return $this->propertyToEvaluate;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('expression', $this->expression);
        $writer->writeCollectionOfObjectValues('expressionEvaluationDetails', $this->expressionEvaluationDetails);
        $writer->writeBooleanValue('expressionResult', $this->expressionResult);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeObjectValue('propertyToEvaluate', $this->propertyToEvaluate);
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
     * Sets the expression property value. Represents expression which has been evaluated.
     *  @param string|null $value Value to set for the expression property.
    */
    public function setExpression(?string $value ): void {
        $this->expression = $value;
    }

    /**
     * Sets the expressionEvaluationDetails property value. Represents the details of the evaluation of the expression.
     *  @param array<ExpressionEvaluationDetails>|null $value Value to set for the expressionEvaluationDetails property.
    */
    public function setExpressionEvaluationDetails(?array $value ): void {
        $this->expressionEvaluationDetails = $value;
    }

    /**
     * Sets the expressionResult property value. Represents the value of the result of the current expression.
     *  @param bool|null $value Value to set for the expressionResult property.
    */
    public function setExpressionResult(?bool $value ): void {
        $this->expressionResult = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the propertyToEvaluate property value. Defines the name of the property and the value of that property.
     *  @param PropertyToEvaluate|null $value Value to set for the propertyToEvaluate property.
    */
    public function setPropertyToEvaluate(?PropertyToEvaluate $value ): void {
        $this->propertyToEvaluate = $value;
    }

}
