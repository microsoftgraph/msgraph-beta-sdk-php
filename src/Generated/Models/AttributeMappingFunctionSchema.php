<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AttributeMappingFunctionSchema extends Entity implements Parsable 
{
    /**
     * @var array<AttributeMappingParameterSchema>|null $parameters Collection of function parameters.
    */
    private ?array $parameters = null;
    
    /**
     * Instantiates a new attributeMappingFunctionSchema and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AttributeMappingFunctionSchema
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AttributeMappingFunctionSchema {
        return new AttributeMappingFunctionSchema();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'parameters' => function (ParseNode $n) use ($o) { $o->setParameters($n->getCollectionOfObjectValues(array(AttributeMappingParameterSchema::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the parameters property value. Collection of function parameters.
     * @return array<AttributeMappingParameterSchema>|null
    */
    public function getParameters(): ?array {
        return $this->parameters;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('parameters', $this->parameters);
    }

    /**
     * Sets the parameters property value. Collection of function parameters.
     *  @param array<AttributeMappingParameterSchema>|null $value Value to set for the parameters property.
    */
    public function setParameters(?array $value ): void {
        $this->parameters = $value;
    }

}
