<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ContentClassification implements AdditionalDataHolder, Parsable 
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
     * @var array<MatchLocation>|null $matches The matches property
    */
    private ?array $matches = null;
    
    /**
     * @var string|null $sensitiveTypeId The sensitiveTypeId property
    */
    private ?string $sensitiveTypeId = null;
    
    /**
     * @var int|null $uniqueCount The uniqueCount property
    */
    private ?int $uniqueCount = null;
    
    /**
     * Instantiates a new contentClassification and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ContentClassification
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ContentClassification {
        return new ContentClassification();
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
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'confidence' => function (ParseNode $n) use ($o) { $o->setConfidence($n->getIntegerValue()); },
            'matches' => function (ParseNode $n) use ($o) { $o->setMatches($n->getCollectionOfObjectValues(array(MatchLocation::class, 'createFromDiscriminatorValue'))); },
            'sensitiveTypeId' => function (ParseNode $n) use ($o) { $o->setSensitiveTypeId($n->getStringValue()); },
            'uniqueCount' => function (ParseNode $n) use ($o) { $o->setUniqueCount($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the matches property value. The matches property
     * @return array<MatchLocation>|null
    */
    public function getMatches(): ?array {
        return $this->matches;
    }

    /**
     * Gets the sensitiveTypeId property value. The sensitiveTypeId property
     * @return string|null
    */
    public function getSensitiveTypeId(): ?string {
        return $this->sensitiveTypeId;
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
        $writer->writeCollectionOfObjectValues('matches', $this->matches);
        $writer->writeStringValue('sensitiveTypeId', $this->sensitiveTypeId);
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
     * Sets the matches property value. The matches property
     *  @param array<MatchLocation>|null $value Value to set for the matches property.
    */
    public function setMatches(?array $value ): void {
        $this->matches = $value;
    }

    /**
     * Sets the sensitiveTypeId property value. The sensitiveTypeId property
     *  @param string|null $value Value to set for the sensitiveTypeId property.
    */
    public function setSensitiveTypeId(?string $value ): void {
        $this->sensitiveTypeId = $value;
    }

    /**
     * Sets the uniqueCount property value. The uniqueCount property
     *  @param int|null $value Value to set for the uniqueCount property.
    */
    public function setUniqueCount(?int $value ): void {
        $this->uniqueCount = $value;
    }

}
