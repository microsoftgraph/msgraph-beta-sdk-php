<?php

namespace Microsoft\Graph\Beta\Generated\Models\ExternalConnectors;

use Microsoft\Graph\Beta\Generated\Models\BinaryOperator;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PropertyRule implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var RuleOperation|null $operation Specifies the operations to be performed during evaluation of a single propertyRule, where property and a string from the values collection are the respective operands. Possible values are: null, equals, notEquals, contains, notContains, lessThan, greaterThan, startsWith, unknownFutureValue. Required.
    */
    private ?RuleOperation $operation = null;
    
    /**
     * @var string|null $property The property from the externalItem schema. Required.
    */
    private ?string $property = null;
    
    /**
     * @var array<string>|null $values A collection with one or many strings. The specified string(s) will be matched with the specified property using the specified operation. Required.
    */
    private ?array $values = null;
    
    /**
     * @var BinaryOperator|null $valuesJoinedBy The join operator for evaluating multiple propertyRules. For example, if and is specified, then all propertyRules must be true for the propertyRule to be true. Possible values are: or, and. Required.
    */
    private ?BinaryOperator $valuesJoinedBy = null;
    
    /**
     * Instantiates a new propertyRule and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PropertyRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PropertyRule {
        return new PropertyRule();
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
            'operation' => function (ParseNode $n) use ($o) { $o->setOperation($n->getEnumValue(RuleOperation::class)); },
            'property' => function (ParseNode $n) use ($o) { $o->setProperty($n->getStringValue()); },
            'values' => function (ParseNode $n) use ($o) { $o->setValues($n->getCollectionOfPrimitiveValues()); },
            'valuesJoinedBy' => function (ParseNode $n) use ($o) { $o->setValuesJoinedBy($n->getEnumValue(BinaryOperator::class)); },
        ];
    }

    /**
     * Gets the operation property value. Specifies the operations to be performed during evaluation of a single propertyRule, where property and a string from the values collection are the respective operands. Possible values are: null, equals, notEquals, contains, notContains, lessThan, greaterThan, startsWith, unknownFutureValue. Required.
     * @return RuleOperation|null
    */
    public function getOperation(): ?RuleOperation {
        return $this->operation;
    }

    /**
     * Gets the property property value. The property from the externalItem schema. Required.
     * @return string|null
    */
    public function getProperty(): ?string {
        return $this->property;
    }

    /**
     * Gets the values property value. A collection with one or many strings. The specified string(s) will be matched with the specified property using the specified operation. Required.
     * @return array<string>|null
    */
    public function getValues(): ?array {
        return $this->values;
    }

    /**
     * Gets the valuesJoinedBy property value. The join operator for evaluating multiple propertyRules. For example, if and is specified, then all propertyRules must be true for the propertyRule to be true. Possible values are: or, and. Required.
     * @return BinaryOperator|null
    */
    public function getValuesJoinedBy(): ?BinaryOperator {
        return $this->valuesJoinedBy;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('operation', $this->operation);
        $writer->writeStringValue('property', $this->property);
        $writer->writeCollectionOfPrimitiveValues('values', $this->values);
        $writer->writeEnumValue('valuesJoinedBy', $this->valuesJoinedBy);
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
     * Sets the operation property value. Specifies the operations to be performed during evaluation of a single propertyRule, where property and a string from the values collection are the respective operands. Possible values are: null, equals, notEquals, contains, notContains, lessThan, greaterThan, startsWith, unknownFutureValue. Required.
     *  @param RuleOperation|null $value Value to set for the operation property.
    */
    public function setOperation(?RuleOperation $value ): void {
        $this->operation = $value;
    }

    /**
     * Sets the property property value. The property from the externalItem schema. Required.
     *  @param string|null $value Value to set for the property property.
    */
    public function setProperty(?string $value ): void {
        $this->property = $value;
    }

    /**
     * Sets the values property value. A collection with one or many strings. The specified string(s) will be matched with the specified property using the specified operation. Required.
     *  @param array<string>|null $value Value to set for the values property.
    */
    public function setValues(?array $value ): void {
        $this->values = $value;
    }

    /**
     * Sets the valuesJoinedBy property value. The join operator for evaluating multiple propertyRules. For example, if and is specified, then all propertyRules must be true for the propertyRule to be true. Possible values are: or, and. Required.
     *  @param BinaryOperator|null $value Value to set for the valuesJoinedBy property.
    */
    public function setValuesJoinedBy(?BinaryOperator $value ): void {
        $this->valuesJoinedBy = $value;
    }

}
