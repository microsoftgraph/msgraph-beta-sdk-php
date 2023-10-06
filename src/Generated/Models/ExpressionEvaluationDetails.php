<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ExpressionEvaluationDetails implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new expressionEvaluationDetails and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the expression property value. Represents expression which has been evaluated.
     * @return string|null
    */
    public function getExpression(): ?string {
        $val = $this->getBackingStore()->get('expression');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'expression'");
    }

    /**
     * Gets the expressionEvaluationDetails property value. Represents the details of the evaluation of the expression.
     * @return array<ExpressionEvaluationDetails>|null
    */
    public function getExpressionEvaluationDetails(): ?array {
        $val = $this->getBackingStore()->get('expressionEvaluationDetails');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ExpressionEvaluationDetails::class);
            /** @var array<ExpressionEvaluationDetails>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'expressionEvaluationDetails'");
    }

    /**
     * Gets the expressionResult property value. Represents the value of the result of the current expression.
     * @return bool|null
    */
    public function getExpressionResult(): ?bool {
        $val = $this->getBackingStore()->get('expressionResult');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'expressionResult'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
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
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the propertyToEvaluate property value. Defines the name of the property and the value of that property.
     * @return PropertyToEvaluate|null
    */
    public function getPropertyToEvaluate(): ?PropertyToEvaluate {
        $val = $this->getBackingStore()->get('propertyToEvaluate');
        if (is_null($val) || $val instanceof PropertyToEvaluate) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'propertyToEvaluate'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('expression', $this->getExpression());
        $writer->writeCollectionOfObjectValues('expressionEvaluationDetails', $this->getExpressionEvaluationDetails());
        $writer->writeBooleanValue('expressionResult', $this->getExpressionResult());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('propertyToEvaluate', $this->getPropertyToEvaluate());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the expression property value. Represents expression which has been evaluated.
     * @param string|null $value Value to set for the expression property.
    */
    public function setExpression(?string $value): void {
        $this->getBackingStore()->set('expression', $value);
    }

    /**
     * Sets the expressionEvaluationDetails property value. Represents the details of the evaluation of the expression.
     * @param array<ExpressionEvaluationDetails>|null $value Value to set for the expressionEvaluationDetails property.
    */
    public function setExpressionEvaluationDetails(?array $value): void {
        $this->getBackingStore()->set('expressionEvaluationDetails', $value);
    }

    /**
     * Sets the expressionResult property value. Represents the value of the result of the current expression.
     * @param bool|null $value Value to set for the expressionResult property.
    */
    public function setExpressionResult(?bool $value): void {
        $this->getBackingStore()->set('expressionResult', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the propertyToEvaluate property value. Defines the name of the property and the value of that property.
     * @param PropertyToEvaluate|null $value Value to set for the propertyToEvaluate property.
    */
    public function setPropertyToEvaluate(?PropertyToEvaluate $value): void {
        $this->getBackingStore()->set('propertyToEvaluate', $value);
    }

}
