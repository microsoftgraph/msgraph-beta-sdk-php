<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ParseExpressionResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var PublicError|null $error Error details, if expression evaluation resulted in an error.
    */
    private ?PublicError $error = null;
    
    /**
     * @var array<string>|null $evaluationResult A collection of values produced by the evaluation of the expression.
    */
    private ?array $evaluationResult = null;
    
    /**
     * @var bool|null $evaluationSucceeded true if the evaluation was successful.
    */
    private ?bool $evaluationSucceeded = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var AttributeMappingSource|null $parsedExpression An attributeMappingSource object representing the parsed expression.
    */
    private ?AttributeMappingSource $parsedExpression = null;
    
    /**
     * @var bool|null $parsingSucceeded true if the expression was parsed successfully.
    */
    private ?bool $parsingSucceeded = null;
    
    /**
     * Instantiates a new parseExpressionResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.parseExpressionResponse');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ParseExpressionResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ParseExpressionResponse {
        return new ParseExpressionResponse();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the error property value. Error details, if expression evaluation resulted in an error.
     * @return PublicError|null
    */
    public function getError(): ?PublicError {
        return $this->error;
    }

    /**
     * Gets the evaluationResult property value. A collection of values produced by the evaluation of the expression.
     * @return array<string>|null
    */
    public function getEvaluationResult(): ?array {
        return $this->evaluationResult;
    }

    /**
     * Gets the evaluationSucceeded property value. true if the evaluation was successful.
     * @return bool|null
    */
    public function getEvaluationSucceeded(): ?bool {
        return $this->evaluationSucceeded;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'error' => function (ParseNode $n) use ($o) { $o->setError($n->getObjectValue(array(PublicError::class, 'createFromDiscriminatorValue'))); },
            'evaluationResult' => function (ParseNode $n) use ($o) { $o->setEvaluationResult($n->getCollectionOfPrimitiveValues()); },
            'evaluationSucceeded' => function (ParseNode $n) use ($o) { $o->setEvaluationSucceeded($n->getBooleanValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'parsedExpression' => function (ParseNode $n) use ($o) { $o->setParsedExpression($n->getObjectValue(array(AttributeMappingSource::class, 'createFromDiscriminatorValue'))); },
            'parsingSucceeded' => function (ParseNode $n) use ($o) { $o->setParsingSucceeded($n->getBooleanValue()); },
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
     * Gets the parsedExpression property value. An attributeMappingSource object representing the parsed expression.
     * @return AttributeMappingSource|null
    */
    public function getParsedExpression(): ?AttributeMappingSource {
        return $this->parsedExpression;
    }

    /**
     * Gets the parsingSucceeded property value. true if the expression was parsed successfully.
     * @return bool|null
    */
    public function getParsingSucceeded(): ?bool {
        return $this->parsingSucceeded;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('error', $this->error);
        $writer->writeCollectionOfPrimitiveValues('evaluationResult', $this->evaluationResult);
        $writer->writeBooleanValue('evaluationSucceeded', $this->evaluationSucceeded);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeObjectValue('parsedExpression', $this->parsedExpression);
        $writer->writeBooleanValue('parsingSucceeded', $this->parsingSucceeded);
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
     * Sets the error property value. Error details, if expression evaluation resulted in an error.
     *  @param PublicError|null $value Value to set for the error property.
    */
    public function setError(?PublicError $value ): void {
        $this->error = $value;
    }

    /**
     * Sets the evaluationResult property value. A collection of values produced by the evaluation of the expression.
     *  @param array<string>|null $value Value to set for the evaluationResult property.
    */
    public function setEvaluationResult(?array $value ): void {
        $this->evaluationResult = $value;
    }

    /**
     * Sets the evaluationSucceeded property value. true if the evaluation was successful.
     *  @param bool|null $value Value to set for the evaluationSucceeded property.
    */
    public function setEvaluationSucceeded(?bool $value ): void {
        $this->evaluationSucceeded = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the parsedExpression property value. An attributeMappingSource object representing the parsed expression.
     *  @param AttributeMappingSource|null $value Value to set for the parsedExpression property.
    */
    public function setParsedExpression(?AttributeMappingSource $value ): void {
        $this->parsedExpression = $value;
    }

    /**
     * Sets the parsingSucceeded property value. true if the expression was parsed successfully.
     *  @param bool|null $value Value to set for the parsingSucceeded property.
    */
    public function setParsingSucceeded(?bool $value ): void {
        $this->parsingSucceeded = $value;
    }

}
