<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ObjectDefinition implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<AttributeDefinition>|null $attributes The attributes property
    */
    private ?array $attributes = null;
    
    /**
     * @var array<MetadataEntry>|null $metadata The metadata property
    */
    private ?array $metadata = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * @var array<string>|null $supportedApis The supportedApis property
    */
    private ?array $supportedApis = null;
    
    /**
     * Instantiates a new objectDefinition and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ObjectDefinition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ObjectDefinition {
        return new ObjectDefinition();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the attributes property value. The attributes property
     * @return array<AttributeDefinition>|null
    */
    public function getAttributes(): ?array {
        return $this->attributes;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'attributes' => function (ParseNode $n) use ($o) { $o->setAttributes($n->getCollectionOfObjectValues(array(AttributeDefinition::class, 'createFromDiscriminatorValue'))); },
            'metadata' => function (ParseNode $n) use ($o) { $o->setMetadata($n->getCollectionOfObjectValues(array(MetadataEntry::class, 'createFromDiscriminatorValue'))); },
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
            'supportedApis' => function (ParseNode $n) use ($o) { $o->setSupportedApis($n->getCollectionOfPrimitiveValues()); },
        ];
    }

    /**
     * Gets the metadata property value. The metadata property
     * @return array<MetadataEntry>|null
    */
    public function getMetadata(): ?array {
        return $this->metadata;
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the supportedApis property value. The supportedApis property
     * @return array<string>|null
    */
    public function getSupportedApis(): ?array {
        return $this->supportedApis;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('attributes', $this->attributes);
        $writer->writeCollectionOfObjectValues('metadata', $this->metadata);
        $writer->writeStringValue('name', $this->name);
        $writer->writeCollectionOfPrimitiveValues('supportedApis', $this->supportedApis);
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
     * Sets the attributes property value. The attributes property
     *  @param array<AttributeDefinition>|null $value Value to set for the attributes property.
    */
    public function setAttributes(?array $value ): void {
        $this->attributes = $value;
    }

    /**
     * Sets the metadata property value. The metadata property
     *  @param array<MetadataEntry>|null $value Value to set for the metadata property.
    */
    public function setMetadata(?array $value ): void {
        $this->metadata = $value;
    }

    /**
     * Sets the name property value. The name property
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the supportedApis property value. The supportedApis property
     *  @param array<string>|null $value Value to set for the supportedApis property.
    */
    public function setSupportedApis(?array $value ): void {
        $this->supportedApis = $value;
    }

}
