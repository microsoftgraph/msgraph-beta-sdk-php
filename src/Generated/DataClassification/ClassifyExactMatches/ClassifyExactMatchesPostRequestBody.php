<?php

namespace Microsoft\Graph\Beta\Generated\DataClassification\ClassifyExactMatches;

use Microsoft\Graph\Beta\Generated\Models\ContentClassification;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ClassifyExactMatchesPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<ContentClassification>|null $contentClassifications The contentClassifications property
    */
    private ?array $contentClassifications = null;
    
    /**
     * @var array<string>|null $sensitiveTypeIds The sensitiveTypeIds property
    */
    private ?array $sensitiveTypeIds = null;
    
    /**
     * @var string|null $text The text property
    */
    private ?string $text = null;
    
    /**
     * @var string|null $timeoutInMs The timeoutInMs property
    */
    private ?string $timeoutInMs = null;
    
    /**
     * Instantiates a new classifyExactMatchesPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ClassifyExactMatchesPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ClassifyExactMatchesPostRequestBody {
        return new ClassifyExactMatchesPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the contentClassifications property value. The contentClassifications property
     * @return array<ContentClassification>|null
    */
    public function getContentClassifications(): ?array {
        return $this->contentClassifications;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'contentClassifications' => fn(ParseNode $n) => $o->setContentClassifications($n->getCollectionOfObjectValues([ContentClassification::class, 'createFromDiscriminatorValue'])),
            'sensitiveTypeIds' => fn(ParseNode $n) => $o->setSensitiveTypeIds($n->getCollectionOfPrimitiveValues()),
            'text' => fn(ParseNode $n) => $o->setText($n->getStringValue()),
            'timeoutInMs' => fn(ParseNode $n) => $o->setTimeoutInMs($n->getStringValue()),
        ];
    }

    /**
     * Gets the sensitiveTypeIds property value. The sensitiveTypeIds property
     * @return array<string>|null
    */
    public function getSensitiveTypeIds(): ?array {
        return $this->sensitiveTypeIds;
    }

    /**
     * Gets the text property value. The text property
     * @return string|null
    */
    public function getText(): ?string {
        return $this->text;
    }

    /**
     * Gets the timeoutInMs property value. The timeoutInMs property
     * @return string|null
    */
    public function getTimeoutInMs(): ?string {
        return $this->timeoutInMs;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('contentClassifications', $this->contentClassifications);
        $writer->writeCollectionOfPrimitiveValues('sensitiveTypeIds', $this->sensitiveTypeIds);
        $writer->writeStringValue('text', $this->text);
        $writer->writeStringValue('timeoutInMs', $this->timeoutInMs);
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
     * Sets the contentClassifications property value. The contentClassifications property
     *  @param array<ContentClassification>|null $value Value to set for the contentClassifications property.
    */
    public function setContentClassifications(?array $value ): void {
        $this->contentClassifications = $value;
    }

    /**
     * Sets the sensitiveTypeIds property value. The sensitiveTypeIds property
     *  @param array<string>|null $value Value to set for the sensitiveTypeIds property.
    */
    public function setSensitiveTypeIds(?array $value ): void {
        $this->sensitiveTypeIds = $value;
    }

    /**
     * Sets the text property value. The text property
     *  @param string|null $value Value to set for the text property.
    */
    public function setText(?string $value ): void {
        $this->text = $value;
    }

    /**
     * Sets the timeoutInMs property value. The timeoutInMs property
     *  @param string|null $value Value to set for the timeoutInMs property.
    */
    public function setTimeoutInMs(?string $value ): void {
        $this->timeoutInMs = $value;
    }

}
