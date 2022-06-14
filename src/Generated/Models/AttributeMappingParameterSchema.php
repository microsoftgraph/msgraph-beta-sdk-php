<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AttributeMappingParameterSchema implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $allowMultipleOccurrences The given parameter can be provided multiple times (for example, multiple input strings in the Concatenate(string,string,...) function).
    */
    private ?bool $allowMultipleOccurrences = null;
    
    /**
     * @var string|null $name Parameter name.
    */
    private ?string $name = null;
    
    /**
     * @var bool|null $required true if the parameter is required; otherwise false.
    */
    private ?bool $required = null;
    
    /**
     * @var AttributeType|null $type Possible values are: Boolean, Binary, Reference, Integer, String. Default is String.
    */
    private ?AttributeType $type = null;
    
    /**
     * Instantiates a new attributeMappingParameterSchema and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AttributeMappingParameterSchema
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AttributeMappingParameterSchema {
        return new AttributeMappingParameterSchema();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the allowMultipleOccurrences property value. The given parameter can be provided multiple times (for example, multiple input strings in the Concatenate(string,string,...) function).
     * @return bool|null
    */
    public function getAllowMultipleOccurrences(): ?bool {
        return $this->allowMultipleOccurrences;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowMultipleOccurrences' => function (ParseNode $n) use ($o) { $o->setAllowMultipleOccurrences($n->getBooleanValue()); },
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
            'required' => function (ParseNode $n) use ($o) { $o->setRequired($n->getBooleanValue()); },
            'type' => function (ParseNode $n) use ($o) { $o->setType($n->getEnumValue(AttributeType::class)); },
        ];
    }

    /**
     * Gets the name property value. Parameter name.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the required property value. true if the parameter is required; otherwise false.
     * @return bool|null
    */
    public function getRequired(): ?bool {
        return $this->required;
    }

    /**
     * Gets the type property value. Possible values are: Boolean, Binary, Reference, Integer, String. Default is String.
     * @return AttributeType|null
    */
    public function getType(): ?AttributeType {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('allowMultipleOccurrences', $this->allowMultipleOccurrences);
        $writer->writeStringValue('name', $this->name);
        $writer->writeBooleanValue('required', $this->required);
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
     * Sets the allowMultipleOccurrences property value. The given parameter can be provided multiple times (for example, multiple input strings in the Concatenate(string,string,...) function).
     *  @param bool|null $value Value to set for the allowMultipleOccurrences property.
    */
    public function setAllowMultipleOccurrences(?bool $value ): void {
        $this->allowMultipleOccurrences = $value;
    }

    /**
     * Sets the name property value. Parameter name.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the required property value. true if the parameter is required; otherwise false.
     *  @param bool|null $value Value to set for the required property.
    */
    public function setRequired(?bool $value ): void {
        $this->required = $value;
    }

    /**
     * Sets the type property value. Possible values are: Boolean, Binary, Reference, Integer, String. Default is String.
     *  @param AttributeType|null $value Value to set for the type property.
    */
    public function setType(?AttributeType $value ): void {
        $this->type = $value;
    }

}
