<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AttributeMappingSource implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $expression The expression property */
    private ?string $expression = null;
    
    /** @var string|null $name The name property */
    private ?string $name = null;
    
    /** @var array<StringKeyAttributeMappingSourceValuePair>|null $parameters The parameters property */
    private ?array $parameters = null;
    
    /** @var AttributeMappingSourceType|null $type The type property */
    private ?AttributeMappingSourceType $type = null;
    
    /**
     * Instantiates a new attributeMappingSource and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AttributeMappingSource
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): AttributeMappingSource {
        return new AttributeMappingSource();
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
        return  [
            'expression' => function (self $o, ParseNode $n) { $o->setExpression($n->getStringValue()); },
            'name' => function (self $o, ParseNode $n) { $o->setName($n->getStringValue()); },
            'parameters' => function (self $o, ParseNode $n) { $o->setParameters($n->getCollectionOfObjectValues(StringKeyAttributeMappingSourceValuePair::class)); },
            'type' => function (self $o, ParseNode $n) { $o->setType($n->getEnumValue(AttributeMappingSourceType::class)); },
        ];
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the parameters property value. The parameters property
     * @return array<StringKeyAttributeMappingSourceValuePair>|null
    */
    public function getParameters(): ?array {
        return $this->parameters;
    }

    /**
     * Gets the type property value. The type property
     * @return AttributeMappingSourceType|null
    */
    public function getType(): ?AttributeMappingSourceType {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('expression', $this->expression);
        $writer->writeStringValue('name', $this->name);
        $writer->writeCollectionOfObjectValues('parameters', $this->parameters);
        $writer->writeEnumValue('type', $this->type);
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
     * Sets the name property value. The name property
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the parameters property value. The parameters property
     *  @param array<StringKeyAttributeMappingSourceValuePair>|null $value Value to set for the parameters property.
    */
    public function setParameters(?array $value ): void {
        $this->parameters = $value;
    }

    /**
     * Sets the type property value. The type property
     *  @param AttributeMappingSourceType|null $value Value to set for the type property.
    */
    public function setType(?AttributeMappingSourceType $value ): void {
        $this->type = $value;
    }

}
