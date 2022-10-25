<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class FilterOperatorSchema extends Entity implements Parsable 
{
    /**
     * @var ScopeOperatorType|null $arity The arity property
    */
    private ?ScopeOperatorType $arity = null;
    
    /**
     * @var ScopeOperatorMultiValuedComparisonType|null $multivaluedComparisonType The multivaluedComparisonType property
    */
    private ?ScopeOperatorMultiValuedComparisonType $multivaluedComparisonType = null;
    
    /**
     * @var array<AttributeType>|null $supportedAttributeTypes Attribute types supported by the operator. Possible values are: Boolean, Binary, Reference, Integer, String.
    */
    private ?array $supportedAttributeTypes = null;
    
    /**
     * Instantiates a new filterOperatorSchema and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.filterOperatorSchema');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FilterOperatorSchema
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FilterOperatorSchema {
        return new FilterOperatorSchema();
    }

    /**
     * Gets the arity property value. The arity property
     * @return ScopeOperatorType|null
    */
    public function getArity(): ?ScopeOperatorType {
        return $this->arity;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'arity' => fn(ParseNode $n) => $o->setArity($n->getEnumValue(ScopeOperatorType::class)),
            'multivaluedComparisonType' => fn(ParseNode $n) => $o->setMultivaluedComparisonType($n->getEnumValue(ScopeOperatorMultiValuedComparisonType::class)),
            'supportedAttributeTypes' => fn(ParseNode $n) => $o->setSupportedAttributeTypes($n->getCollectionOfEnumValues(AttributeType::class)),
        ]);
    }

    /**
     * Gets the multivaluedComparisonType property value. The multivaluedComparisonType property
     * @return ScopeOperatorMultiValuedComparisonType|null
    */
    public function getMultivaluedComparisonType(): ?ScopeOperatorMultiValuedComparisonType {
        return $this->multivaluedComparisonType;
    }

    /**
     * Gets the supportedAttributeTypes property value. Attribute types supported by the operator. Possible values are: Boolean, Binary, Reference, Integer, String.
     * @return array<AttributeType>|null
    */
    public function getSupportedAttributeTypes(): ?array {
        return $this->supportedAttributeTypes;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('arity', $this->arity);
        $writer->writeEnumValue('multivaluedComparisonType', $this->multivaluedComparisonType);
        $writer->writeCollectionOfEnumValues('supportedAttributeTypes', $this->supportedAttributeTypes);
    }

    /**
     * Sets the arity property value. The arity property
     *  @param ScopeOperatorType|null $value Value to set for the arity property.
    */
    public function setArity(?ScopeOperatorType $value ): void {
        $this->arity = $value;
    }

    /**
     * Sets the multivaluedComparisonType property value. The multivaluedComparisonType property
     *  @param ScopeOperatorMultiValuedComparisonType|null $value Value to set for the multivaluedComparisonType property.
    */
    public function setMultivaluedComparisonType(?ScopeOperatorMultiValuedComparisonType $value ): void {
        $this->multivaluedComparisonType = $value;
    }

    /**
     * Sets the supportedAttributeTypes property value. Attribute types supported by the operator. Possible values are: Boolean, Binary, Reference, Integer, String.
     *  @param array<AttributeType>|null $value Value to set for the supportedAttributeTypes property.
    */
    public function setSupportedAttributeTypes(?array $value ): void {
        $this->supportedAttributeTypes = $value;
    }

}
