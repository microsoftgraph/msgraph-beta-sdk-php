<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DetectedSensitiveContentBase implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $confidence The confidence property
    */
    private ?int $confidence = null;
    
    /**
     * @var string|null $displayName The displayName property
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var int|null $recommendedConfidence The recommendedConfidence property
    */
    private ?int $recommendedConfidence = null;
    
    /**
     * @var string|null $type The type property
    */
    private ?string $type = null;
    
    /**
     * @var int|null $uniqueCount The uniqueCount property
    */
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
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DetectedSensitiveContentBase {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.detectedSensitiveContent': return new DetectedSensitiveContent();
                case '#microsoft.graph.exactMatchDetectedSensitiveContent': return new ExactMatchDetectedSensitiveContent();
            }
        }
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
     * Gets the confidence property value. The confidence property
     * @return int|null
    */
    public function getConfidence(): ?int {
        return $this->confidence;
    }

    /**
     * Gets the displayName property value. The displayName property
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
        $o = $this;
        return  [
            'confidence' => function (ParseNode $n) use ($o) { $o->setConfidence($n->getIntegerValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'id' => function (ParseNode $n) use ($o) { $o->setId($n->getStringValue()); },
            'recommendedConfidence' => function (ParseNode $n) use ($o) { $o->setRecommendedConfidence($n->getIntegerValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdatatype($n->getStringValue()); },
            'uniqueCount' => function (ParseNode $n) use ($o) { $o->setUniqueCount($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the @odata.type property value. The type property
     * @return string|null
    */
    public function getOdatatype(): ?string {
        return $this->type;
    }

    /**
     * Gets the recommendedConfidence property value. The recommendedConfidence property
     * @return int|null
    */
    public function getRecommendedConfidence(): ?int {
        return $this->recommendedConfidence;
    }

    /**
     * Gets the uniqueCount property value. The uniqueCount property
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
        $writer->writeStringValue('@odata.type', $this->type);
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
     * Sets the confidence property value. The confidence property
     *  @param int|null $value Value to set for the confidence property.
    */
    public function setConfidence(?int $value ): void {
        $this->confidence = $value;
    }

    /**
     * Sets the displayName property value. The displayName property
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the id property value. The id property
     *  @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value ): void {
        $this->id = $value;
    }

    /**
     * Sets the @odata.type property value. The type property
     *  @param string|null $value Value to set for the type property.
    */
    public function setOdatatype(?string $value ): void {
        $this->type = $value;
    }

    /**
     * Sets the recommendedConfidence property value. The recommendedConfidence property
     *  @param int|null $value Value to set for the recommendedConfidence property.
    */
    public function setRecommendedConfidence(?int $value ): void {
        $this->recommendedConfidence = $value;
    }

    /**
     * Sets the uniqueCount property value. The uniqueCount property
     *  @param int|null $value Value to set for the uniqueCount property.
    */
    public function setUniqueCount(?int $value ): void {
        $this->uniqueCount = $value;
    }

}
