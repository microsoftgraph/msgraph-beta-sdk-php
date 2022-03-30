<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DetectedSensitiveContentBase implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var int|null $confidence  */
    private ?int $confidence = null;
    
    /** @var string|null $displayName  */
    private ?string $displayName = null;
    
    /** @var string|null $id  */
    private ?string $id = null;
    
    /** @var int|null $recommendedConfidence  */
    private ?int $recommendedConfidence = null;
    
    /** @var int|null $uniqueCount  */
    private ?int $uniqueCount = null;
    
    /**
     * Instantiates a new detectedSensitiveContentBase and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DetectedSensitiveContentBase
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DetectedSensitiveContentBase {
        return new DetectedSensitiveContentBase();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the confidence property value. 
     * @return int|null
    */
    public function getConfidence(): ?int {
        return $this->confidence;
    }

    /**
     * Gets the displayName property value. 
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'confidence' => function (self $o, ParseNode $n) { $o->setConfidence($n->getIntegerValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'id' => function (self $o, ParseNode $n) { $o->setId($n->getStringValue()); },
            'recommendedConfidence' => function (self $o, ParseNode $n) { $o->setRecommendedConfidence($n->getIntegerValue()); },
            'uniqueCount' => function (self $o, ParseNode $n) { $o->setUniqueCount($n->getIntegerValue()); },
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
     * Gets the recommendedConfidence property value. 
     * @return int|null
    */
    public function getRecommendedConfidence(): ?int {
        return $this->recommendedConfidence;
    }

    /**
     * Gets the uniqueCount property value. 
     * @return int|null
    */
    public function getUniqueCount(): ?int {
        return $this->uniqueCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('confidence', $this->confidence);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('id', $this->id);
        $writer->writeIntegerValue('recommendedConfidence', $this->recommendedConfidence);
        $writer->writeIntegerValue('uniqueCount', $this->uniqueCount);
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
     * Sets the confidence property value. 
     *  @param int|null $value Value to set for the confidence property.
    */
    public function setConfidence(?int $value ): void {
        $this->confidence = $value;
    }

    /**
     * Sets the displayName property value. 
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the id property value. 
     *  @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value ): void {
        $this->id = $value;
    }

    /**
     * Sets the recommendedConfidence property value. 
     *  @param int|null $value Value to set for the recommendedConfidence property.
    */
    public function setRecommendedConfidence(?int $value ): void {
        $this->recommendedConfidence = $value;
    }

    /**
     * Sets the uniqueCount property value. 
     *  @param int|null $value Value to set for the uniqueCount property.
    */
    public function setUniqueCount(?int $value ): void {
        $this->uniqueCount = $value;
    }

}
