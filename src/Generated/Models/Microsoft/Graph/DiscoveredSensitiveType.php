<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DiscoveredSensitiveType implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<ClassificationAttribute>|null $classificationAttributes  */
    private ?array $classificationAttributes = null;
    
    /** @var int|null $confidence  */
    private ?int $confidence = null;
    
    /** @var int|null $count  */
    private ?int $count = null;
    
    /** @var string|null $id  */
    private ?string $id = null;
    
    /**
     * Instantiates a new discoveredSensitiveType and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DiscoveredSensitiveType
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DiscoveredSensitiveType {
        return new DiscoveredSensitiveType();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the classificationAttributes property value. 
     * @return array<ClassificationAttribute>|null
    */
    public function getClassificationAttributes(): ?array {
        return $this->classificationAttributes;
    }

    /**
     * Gets the confidence property value. 
     * @return int|null
    */
    public function getConfidence(): ?int {
        return $this->confidence;
    }

    /**
     * Gets the count property value. 
     * @return int|null
    */
    public function getCount(): ?int {
        return $this->count;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'classificationAttributes' => function (self $o, ParseNode $n) { $o->setClassificationAttributes($n->getCollectionOfObjectValues(ClassificationAttribute::class)); },
            'confidence' => function (self $o, ParseNode $n) { $o->setConfidence($n->getIntegerValue()); },
            'count' => function (self $o, ParseNode $n) { $o->setCount($n->getIntegerValue()); },
            'id' => function (self $o, ParseNode $n) { $o->setId($n->getStringValue()); },
        ];
    }

    /**
     * Gets the id property value. 
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('classificationAttributes', $this->classificationAttributes);
        $writer->writeIntegerValue('confidence', $this->confidence);
        $writer->writeIntegerValue('count', $this->count);
        $writer->writeStringValue('id', $this->id);
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
     * Sets the classificationAttributes property value. 
     *  @param array<ClassificationAttribute>|null $value Value to set for the classificationAttributes property.
    */
    public function setClassificationAttributes(?array $value ): void {
        $this->classificationAttributes = $value;
    }

    /**
     * Sets the confidence property value. 
     *  @param int|null $value Value to set for the confidence property.
    */
    public function setConfidence(?int $value ): void {
        $this->confidence = $value;
    }

    /**
     * Sets the count property value. 
     *  @param int|null $value Value to set for the count property.
    */
    public function setCount(?int $value ): void {
        $this->count = $value;
    }

    /**
     * Sets the id property value. 
     *  @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value ): void {
        $this->id = $value;
    }

}
