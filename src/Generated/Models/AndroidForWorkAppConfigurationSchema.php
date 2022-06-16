<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class AndroidForWorkAppConfigurationSchema extends Entity 
{
    /** @var StreamInterface|null $exampleJson UTF8 encoded byte array containing example JSON string conforming to this schema that demonstrates how to set the configuration for this app */
    private ?StreamInterface $exampleJson = null;
    
    /** @var array<AndroidForWorkAppConfigurationSchemaItem>|null $schemaItems Collection of items each representing a named configuration option in the schema */
    private ?array $schemaItems = null;
    
    /**
     * Instantiates a new androidForWorkAppConfigurationSchema and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidForWorkAppConfigurationSchema
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): AndroidForWorkAppConfigurationSchema {
        return new AndroidForWorkAppConfigurationSchema();
    }

    /**
     * Gets the exampleJson property value. UTF8 encoded byte array containing example JSON string conforming to this schema that demonstrates how to set the configuration for this app
     * @return StreamInterface|null
    */
    public function getExampleJson(): ?StreamInterface {
        return $this->exampleJson;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'exampleJson' => function (self $o, ParseNode $n) { $o->setExampleJson($n->getBinaryContent()); },
            'schemaItems' => function (self $o, ParseNode $n) { $o->setSchemaItems($n->getCollectionOfObjectValues(AndroidForWorkAppConfigurationSchemaItem::class)); },
        ]);
    }

    /**
     * Gets the schemaItems property value. Collection of items each representing a named configuration option in the schema
     * @return array<AndroidForWorkAppConfigurationSchemaItem>|null
    */
    public function getSchemaItems(): ?array {
        return $this->schemaItems;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBinaryContent('exampleJson', $this->exampleJson);
        $writer->writeCollectionOfObjectValues('schemaItems', $this->schemaItems);
    }

    /**
     * Sets the exampleJson property value. UTF8 encoded byte array containing example JSON string conforming to this schema that demonstrates how to set the configuration for this app
     *  @param StreamInterface|null $value Value to set for the exampleJson property.
    */
    public function setExampleJson(?StreamInterface $value ): void {
        $this->exampleJson = $value;
    }

    /**
     * Sets the schemaItems property value. Collection of items each representing a named configuration option in the schema
     *  @param array<AndroidForWorkAppConfigurationSchemaItem>|null $value Value to set for the schemaItems property.
    */
    public function setSchemaItems(?array $value ): void {
        $this->schemaItems = $value;
    }

}
