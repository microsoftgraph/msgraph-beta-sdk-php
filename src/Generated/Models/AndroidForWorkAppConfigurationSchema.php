<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;
use Psr\Http\Message\StreamInterface;

/**
 * Schema describing an Android for Work application's custom configurations.
*/
class AndroidForWorkAppConfigurationSchema extends Entity implements Parsable 
{
    /**
     * Instantiates a new AndroidForWorkAppConfigurationSchema and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidForWorkAppConfigurationSchema
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidForWorkAppConfigurationSchema {
        return new AndroidForWorkAppConfigurationSchema();
    }

    /**
     * Gets the exampleJson property value. UTF8 encoded byte array containing example JSON string conforming to this schema that demonstrates how to set the configuration for this app
     * @return StreamInterface|null
    */
    public function getExampleJson(): ?StreamInterface {
        $val = $this->getBackingStore()->get('exampleJson');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exampleJson'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'exampleJson' => fn(ParseNode $n) => $o->setExampleJson($n->getBinaryContent()),
            'schemaItems' => fn(ParseNode $n) => $o->setSchemaItems($n->getCollectionOfObjectValues([AndroidForWorkAppConfigurationSchemaItem::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the schemaItems property value. Collection of items each representing a named configuration option in the schema
     * @return array<AndroidForWorkAppConfigurationSchemaItem>|null
    */
    public function getSchemaItems(): ?array {
        $val = $this->getBackingStore()->get('schemaItems');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AndroidForWorkAppConfigurationSchemaItem::class);
            /** @var array<AndroidForWorkAppConfigurationSchemaItem>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'schemaItems'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBinaryContent('exampleJson', $this->getExampleJson());
        $writer->writeCollectionOfObjectValues('schemaItems', $this->getSchemaItems());
    }

    /**
     * Sets the exampleJson property value. UTF8 encoded byte array containing example JSON string conforming to this schema that demonstrates how to set the configuration for this app
     * @param StreamInterface|null $value Value to set for the exampleJson property.
    */
    public function setExampleJson(?StreamInterface $value): void {
        $this->getBackingStore()->set('exampleJson', $value);
    }

    /**
     * Sets the schemaItems property value. Collection of items each representing a named configuration option in the schema
     * @param array<AndroidForWorkAppConfigurationSchemaItem>|null $value Value to set for the schemaItems property.
    */
    public function setSchemaItems(?array $value): void {
        $this->getBackingStore()->set('schemaItems', $value);
    }

}
