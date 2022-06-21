<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class File extends Entity implements Parsable 
{
    /**
     * @var StreamInterface|null $content The content property
    */
    private ?StreamInterface $content = null;
    
    /**
     * @var DateTime|null $dateTime The dateTime property
    */
    private ?DateTime $dateTime = null;
    
    /**
     * @var string|null $extension The extension property
    */
    private ?string $extension = null;
    
    /**
     * @var StreamInterface|null $extractedTextContent The extractedTextContent property
    */
    private ?StreamInterface $extractedTextContent = null;
    
    /**
     * @var string|null $mediaType The mediaType property
    */
    private ?string $mediaType = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * @var StringValueDictionary|null $otherProperties The otherProperties property
    */
    private ?StringValueDictionary $otherProperties = null;
    
    /**
     * @var FileProcessingStatus|null $processingStatus The processingStatus property
    */
    private ?FileProcessingStatus $processingStatus = null;
    
    /**
     * @var array<string>|null $senderOrAuthors The senderOrAuthors property
    */
    private ?array $senderOrAuthors = null;
    
    /**
     * @var int|null $size The size property
    */
    private ?int $size = null;
    
    /**
     * @var SourceType|null $sourceType The sourceType property
    */
    private ?SourceType $sourceType = null;
    
    /**
     * @var string|null $subjectTitle The subjectTitle property
    */
    private ?string $subjectTitle = null;
    
    /**
     * Instantiates a new file and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return File
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): File {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.security.ediscoveryFile': return new EdiscoveryFile();
            }
        }
        return new File();
    }

    /**
     * Gets the content property value. The content property
     * @return StreamInterface|null
    */
    public function getContent(): ?StreamInterface {
        return $this->content;
    }

    /**
     * Gets the dateTime property value. The dateTime property
     * @return DateTime|null
    */
    public function getDateTime(): ?DateTime {
        return $this->dateTime;
    }

    /**
     * Gets the extension property value. The extension property
     * @return string|null
    */
    public function getExtension(): ?string {
        return $this->extension;
    }

    /**
     * Gets the extractedTextContent property value. The extractedTextContent property
     * @return StreamInterface|null
    */
    public function getExtractedTextContent(): ?StreamInterface {
        return $this->extractedTextContent;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'content' => function (ParseNode $n) use ($o) { $o->setContent($n->getBinaryContent()); },
            'dateTime' => function (ParseNode $n) use ($o) { $o->setDateTime($n->getDateTimeValue()); },
            'extension' => function (ParseNode $n) use ($o) { $o->setExtension($n->getStringValue()); },
            'extractedTextContent' => function (ParseNode $n) use ($o) { $o->setExtractedTextContent($n->getBinaryContent()); },
            'mediaType' => function (ParseNode $n) use ($o) { $o->setMediaType($n->getStringValue()); },
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
            'otherProperties' => function (ParseNode $n) use ($o) { $o->setOtherProperties($n->getObjectValue(array(StringValueDictionary::class, 'createFromDiscriminatorValue'))); },
            'processingStatus' => function (ParseNode $n) use ($o) { $o->setProcessingStatus($n->getEnumValue(FileProcessingStatus::class)); },
            'senderOrAuthors' => function (ParseNode $n) use ($o) { $o->setSenderOrAuthors($n->getCollectionOfPrimitiveValues()); },
            'size' => function (ParseNode $n) use ($o) { $o->setSize($n->getIntegerValue()); },
            'sourceType' => function (ParseNode $n) use ($o) { $o->setSourceType($n->getEnumValue(SourceType::class)); },
            'subjectTitle' => function (ParseNode $n) use ($o) { $o->setSubjectTitle($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the mediaType property value. The mediaType property
     * @return string|null
    */
    public function getMediaType(): ?string {
        return $this->mediaType;
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the otherProperties property value. The otherProperties property
     * @return StringValueDictionary|null
    */
    public function getOtherProperties(): ?StringValueDictionary {
        return $this->otherProperties;
    }

    /**
     * Gets the processingStatus property value. The processingStatus property
     * @return FileProcessingStatus|null
    */
    public function getProcessingStatus(): ?FileProcessingStatus {
        return $this->processingStatus;
    }

    /**
     * Gets the senderOrAuthors property value. The senderOrAuthors property
     * @return array<string>|null
    */
    public function getSenderOrAuthors(): ?array {
        return $this->senderOrAuthors;
    }

    /**
     * Gets the size property value. The size property
     * @return int|null
    */
    public function getSize(): ?int {
        return $this->size;
    }

    /**
     * Gets the sourceType property value. The sourceType property
     * @return SourceType|null
    */
    public function getSourceType(): ?SourceType {
        return $this->sourceType;
    }

    /**
     * Gets the subjectTitle property value. The subjectTitle property
     * @return string|null
    */
    public function getSubjectTitle(): ?string {
        return $this->subjectTitle;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBinaryContent('content', $this->content);
        $writer->writeDateTimeValue('dateTime', $this->dateTime);
        $writer->writeStringValue('extension', $this->extension);
        $writer->writeBinaryContent('extractedTextContent', $this->extractedTextContent);
        $writer->writeStringValue('mediaType', $this->mediaType);
        $writer->writeStringValue('name', $this->name);
        $writer->writeObjectValue('otherProperties', $this->otherProperties);
        $writer->writeEnumValue('processingStatus', $this->processingStatus);
        $writer->writeCollectionOfPrimitiveValues('senderOrAuthors', $this->senderOrAuthors);
        $writer->writeIntegerValue('size', $this->size);
        $writer->writeEnumValue('sourceType', $this->sourceType);
        $writer->writeStringValue('subjectTitle', $this->subjectTitle);
    }

    /**
     * Sets the content property value. The content property
     *  @param StreamInterface|null $value Value to set for the content property.
    */
    public function setContent(?StreamInterface $value ): void {
        $this->content = $value;
    }

    /**
     * Sets the dateTime property value. The dateTime property
     *  @param DateTime|null $value Value to set for the dateTime property.
    */
    public function setDateTime(?DateTime $value ): void {
        $this->dateTime = $value;
    }

    /**
     * Sets the extension property value. The extension property
     *  @param string|null $value Value to set for the extension property.
    */
    public function setExtension(?string $value ): void {
        $this->extension = $value;
    }

    /**
     * Sets the extractedTextContent property value. The extractedTextContent property
     *  @param StreamInterface|null $value Value to set for the extractedTextContent property.
    */
    public function setExtractedTextContent(?StreamInterface $value ): void {
        $this->extractedTextContent = $value;
    }

    /**
     * Sets the mediaType property value. The mediaType property
     *  @param string|null $value Value to set for the mediaType property.
    */
    public function setMediaType(?string $value ): void {
        $this->mediaType = $value;
    }

    /**
     * Sets the name property value. The name property
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the otherProperties property value. The otherProperties property
     *  @param StringValueDictionary|null $value Value to set for the otherProperties property.
    */
    public function setOtherProperties(?StringValueDictionary $value ): void {
        $this->otherProperties = $value;
    }

    /**
     * Sets the processingStatus property value. The processingStatus property
     *  @param FileProcessingStatus|null $value Value to set for the processingStatus property.
    */
    public function setProcessingStatus(?FileProcessingStatus $value ): void {
        $this->processingStatus = $value;
    }

    /**
     * Sets the senderOrAuthors property value. The senderOrAuthors property
     *  @param array<string>|null $value Value to set for the senderOrAuthors property.
    */
    public function setSenderOrAuthors(?array $value ): void {
        $this->senderOrAuthors = $value;
    }

    /**
     * Sets the size property value. The size property
     *  @param int|null $value Value to set for the size property.
    */
    public function setSize(?int $value ): void {
        $this->size = $value;
    }

    /**
     * Sets the sourceType property value. The sourceType property
     *  @param SourceType|null $value Value to set for the sourceType property.
    */
    public function setSourceType(?SourceType $value ): void {
        $this->sourceType = $value;
    }

    /**
     * Sets the subjectTitle property value. The subjectTitle property
     *  @param string|null $value Value to set for the subjectTitle property.
    */
    public function setSubjectTitle(?string $value ): void {
        $this->subjectTitle = $value;
    }

}
