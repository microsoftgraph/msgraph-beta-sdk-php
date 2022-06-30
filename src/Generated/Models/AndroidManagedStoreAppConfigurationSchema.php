<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class AndroidManagedStoreAppConfigurationSchema extends Entity implements Parsable 
{
    /**
     * @var StreamInterface|null $exampleJson UTF8 encoded byte array containing example JSON string conforming to this schema that demonstrates how to set the configuration for this app
    */
    private ?StreamInterface $exampleJson = null;
    
    /**
     * @var array<AndroidManagedStoreAppConfigurationSchemaItem>|null $nestedSchemaItems Collection of items each representing a named configuration option in the schema. It contains a flat list of all configuration.
    */
    private ?array $nestedSchemaItems = null;
    
    /**
     * @var array<AndroidManagedStoreAppConfigurationSchemaItem>|null $schemaItems Collection of items each representing a named configuration option in the schema. It only contains the root-level configuration.
    */
    private ?array $schemaItems = null;
    
    /**
     * Instantiates a new AndroidManagedStoreAppConfigurationSchema and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidManagedStoreAppConfigurationSchema
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidManagedStoreAppConfigurationSchema {
        return new AndroidManagedStoreAppConfigurationSchema();
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
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'exampleJson' => function (ParseNode $n) use ($o) { $o->setExampleJson($n->getBinaryContent()); },
            'nestedSchemaItems' => function (ParseNode $n) use ($o) { $o->setNestedSchemaItems($n->getCollectionOfObjectValues(array(AndroidManagedStoreAppConfigurationSchemaItem::class, 'createFromDiscriminatorValue'))); },
            'schemaItems' => function (ParseNode $n) use ($o) { $o->setSchemaItems($n->getCollectionOfObjectValues(array(AndroidManagedStoreAppConfigurationSchemaItem::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the nestedSchemaItems property value. Collection of items each representing a named configuration option in the schema. It contains a flat list of all configuration.
     * @return array<AndroidManagedStoreAppConfigurationSchemaItem>|null
    */
    public function getNestedSchemaItems(): ?array {
        return $this->nestedSchemaItems;
    }

    /**
     * Gets the schemaItems property value. Collection of items each representing a named configuration option in the schema. It only contains the root-level configuration.
     * @return array<AndroidManagedStoreAppConfigurationSchemaItem>|null
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
        $writer->writeCollectionOfObjectValues('nestedSchemaItems', $this->nestedSchemaItems);
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
     * Sets the nestedSchemaItems property value. Collection of items each representing a named configuration option in the schema. It contains a flat list of all configuration.
     *  @param array<AndroidManagedStoreAppConfigurationSchemaItem>|null $value Value to set for the nestedSchemaItems property.
    */
    public function setNestedSchemaItems(?array $value ): void {
        $this->nestedSchemaItems = $value;
    }

    /**
     * Sets the schemaItems property value. Collection of items each representing a named configuration option in the schema. It only contains the root-level configuration.
     *  @param array<AndroidManagedStoreAppConfigurationSchemaItem>|null $value Value to set for the schemaItems property.
    */
    public function setSchemaItems(?array $value ): void {
        $this->schemaItems = $value;
    }

}
