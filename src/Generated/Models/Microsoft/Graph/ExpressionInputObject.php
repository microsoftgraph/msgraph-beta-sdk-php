<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ExpressionInputObject implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var ObjectDefinition|null $definition Definition of the test object. */
    private ?ObjectDefinition $definition = null;
    
    /** @var array<StringKeyObjectValuePair>|null $properties Property values of the test object. */
    private ?array $properties = null;
    
    /**
     * Instantiates a new expressionInputObject and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExpressionInputObject
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ExpressionInputObject {
        return new ExpressionInputObject();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the definition property value. Definition of the test object.
     * @return ObjectDefinition|null
    */
    public function getDefinition(): ?ObjectDefinition {
        return $this->definition;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'definition' => function (self $o, ParseNode $n) { $o->setDefinition($n->getObjectValue(ObjectDefinition::class)); },
            'properties' => function (self $o, ParseNode $n) { $o->setProperties($n->getCollectionOfObjectValues(StringKeyObjectValuePair::class)); },
        ];
    }

    /**
     * Gets the properties property value. Property values of the test object.
     * @return array<StringKeyObjectValuePair>|null
    */
    public function getProperties(): ?array {
        return $this->properties;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('definition', $this->definition);
        $writer->writeCollectionOfObjectValues('properties', $this->properties);
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
     * Sets the definition property value. Definition of the test object.
     *  @param ObjectDefinition|null $value Value to set for the definition property.
    */
    public function setDefinition(?ObjectDefinition $value ): void {
        $this->definition = $value;
    }

    /**
     * Sets the properties property value. Property values of the test object.
     *  @param array<StringKeyObjectValuePair>|null $value Value to set for the properties property.
    */
    public function setProperties(?array $value ): void {
        $this->properties = $value;
    }

}
