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
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var RuleOperation|null $operation The operation property
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
     * @var BinaryOperator|null $valuesJoinedBy The valuesJoinedBy property
    */
    private ?BinaryOperator $valuesJoinedBy = null;
    
    /**
     * Instantiates a new propertyRule and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.externalConnectors.propertyRule');
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
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'operation' => fn(ParseNode $n) => $o->setOperation($n->getEnumValue(RuleOperation::class)),
            'property' => fn(ParseNode $n) => $o->setProperty($n->getStringValue()),
            'values' => fn(ParseNode $n) => $o->setValues($n->getCollectionOfPrimitiveValues()),
            'valuesJoinedBy' => fn(ParseNode $n) => $o->setValuesJoinedBy($n->getEnumValue(BinaryOperator::class)),
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
     * Gets the operation property value. The operation property
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
     * Gets the valuesJoinedBy property value. The valuesJoinedBy property
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
        $writer->writeStringValue('@odata.type', $this->odataType);
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
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the operation property value. The operation property
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
     * Sets the valuesJoinedBy property value. The valuesJoinedBy property
     *  @param BinaryOperator|null $value Value to set for the valuesJoinedBy property.
    */
    public function setValuesJoinedBy(?BinaryOperator $value ): void {
        $this->valuesJoinedBy = $value;
    }

}
