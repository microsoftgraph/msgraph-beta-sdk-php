<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class StringKeyAttributeMappingSourceValuePair implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $key The name of the parameter. */
    private ?string $key = null;
    
    /** @var AttributeMappingSource|null $value The value of the parameter. */
    private ?AttributeMappingSource $value = null;
    
    /**
     * Instantiates a new stringKeyAttributeMappingSourceValuePair and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return StringKeyAttributeMappingSourceValuePair
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): StringKeyAttributeMappingSourceValuePair {
        return new StringKeyAttributeMappingSourceValuePair();
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
        return  [
            'key' => function (self $o, ParseNode $n) { $o->setKey($n->getStringValue()); },
            'value' => function (self $o, ParseNode $n) { $o->setValue($n->getObjectValue(AttributeMappingSource::class)); },
        ];
    }

    /**
     * Gets the key property value. The name of the parameter.
     * @return string|null
    */
    public function getKey(): ?string {
        return $this->key;
    }

    /**
     * Gets the value property value. The value of the parameter.
     * @return AttributeMappingSource|null
    */
    public function getValue(): ?AttributeMappingSource {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('key', $this->key);
        $writer->writeObjectValue('value', $this->value);
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
     * Sets the key property value. The name of the parameter.
     *  @param string|null $value Value to set for the key property.
    */
    public function setKey(?string $value ): void {
        $this->key = $value;
    }

    /**
     * Sets the value property value. The value of the parameter.
     *  @param AttributeMappingSource|null $value Value to set for the value property.
    */
    public function setValue(?AttributeMappingSource $value ): void {
        $this->value = $value;
    }

}
