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
     * Instantiates a new file and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.file');
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
        return $this->getBackingStore()->get('content');
    }

    /**
     * Gets the dateTime property value. The dateTime property
     * @return DateTime|null
    */
    public function getDateTime(): ?DateTime {
        return $this->getBackingStore()->get('dateTime');
    }

    /**
     * Gets the extension property value. The extension property
     * @return string|null
    */
    public function getExtension(): ?string {
        return $this->getBackingStore()->get('extension');
    }

    /**
     * Gets the extractedTextContent property value. The extractedTextContent property
     * @return StreamInterface|null
    */
    public function getExtractedTextContent(): ?StreamInterface {
        return $this->getBackingStore()->get('extractedTextContent');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'content' => fn(ParseNode $n) => $o->setContent($n->getBinaryContent()),
            'dateTime' => fn(ParseNode $n) => $o->setDateTime($n->getDateTimeValue()),
            'extension' => fn(ParseNode $n) => $o->setExtension($n->getStringValue()),
            'extractedTextContent' => fn(ParseNode $n) => $o->setExtractedTextContent($n->getBinaryContent()),
            'mediaType' => fn(ParseNode $n) => $o->setMediaType($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'otherProperties' => fn(ParseNode $n) => $o->setOtherProperties($n->getObjectValue([StringValueDictionary::class, 'createFromDiscriminatorValue'])),
            'processingStatus' => fn(ParseNode $n) => $o->setProcessingStatus($n->getEnumValue(FileProcessingStatus::class)),
            'senderOrAuthors' => fn(ParseNode $n) => $o->setSenderOrAuthors($n->getCollectionOfPrimitiveValues()),
            'size' => fn(ParseNode $n) => $o->setSize($n->getIntegerValue()),
            'sourceType' => fn(ParseNode $n) => $o->setSourceType($n->getEnumValue(SourceType::class)),
            'subjectTitle' => fn(ParseNode $n) => $o->setSubjectTitle($n->getStringValue()),
        ]);
    }

    /**
     * Gets the mediaType property value. The mediaType property
     * @return string|null
    */
    public function getMediaType(): ?string {
        return $this->getBackingStore()->get('mediaType');
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->getBackingStore()->get('name');
    }

    /**
     * Gets the otherProperties property value. The otherProperties property
     * @return StringValueDictionary|null
    */
    public function getOtherProperties(): ?StringValueDictionary {
        return $this->getBackingStore()->get('otherProperties');
    }

    /**
     * Gets the processingStatus property value. The processingStatus property
     * @return FileProcessingStatus|null
    */
    public function getProcessingStatus(): ?FileProcessingStatus {
        return $this->getBackingStore()->get('processingStatus');
    }

    /**
     * Gets the senderOrAuthors property value. The senderOrAuthors property
     * @return array<string>|null
    */
    public function getSenderOrAuthors(): ?array {
        return $this->getBackingStore()->get('senderOrAuthors');
    }

    /**
     * Gets the size property value. The size property
     * @return int|null
    */
    public function getSize(): ?int {
        return $this->getBackingStore()->get('size');
    }

    /**
     * Gets the sourceType property value. The sourceType property
     * @return SourceType|null
    */
    public function getSourceType(): ?SourceType {
        return $this->getBackingStore()->get('sourceType');
    }

    /**
     * Gets the subjectTitle property value. The subjectTitle property
     * @return string|null
    */
    public function getSubjectTitle(): ?string {
        return $this->getBackingStore()->get('subjectTitle');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBinaryContent('content', $this->getContent());
        $writer->writeDateTimeValue('dateTime', $this->getDateTime());
        $writer->writeStringValue('extension', $this->getExtension());
        $writer->writeBinaryContent('extractedTextContent', $this->getExtractedTextContent());
        $writer->writeStringValue('mediaType', $this->getMediaType());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeObjectValue('otherProperties', $this->getOtherProperties());
        $writer->writeEnumValue('processingStatus', $this->getProcessingStatus());
        $writer->writeCollectionOfPrimitiveValues('senderOrAuthors', $this->getSenderOrAuthors());
        $writer->writeIntegerValue('size', $this->getSize());
        $writer->writeEnumValue('sourceType', $this->getSourceType());
        $writer->writeStringValue('subjectTitle', $this->getSubjectTitle());
    }

    /**
     * Sets the content property value. The content property
     *  @param StreamInterface|null $value Value to set for the content property.
    */
    public function setContent(?StreamInterface $value): void {
        $this->getBackingStore()->set('content', $value);
    }

    /**
     * Sets the dateTime property value. The dateTime property
     *  @param DateTime|null $value Value to set for the dateTime property.
    */
    public function setDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('dateTime', $value);
    }

    /**
     * Sets the extension property value. The extension property
     *  @param string|null $value Value to set for the extension property.
    */
    public function setExtension(?string $value): void {
        $this->getBackingStore()->set('extension', $value);
    }

    /**
     * Sets the extractedTextContent property value. The extractedTextContent property
     *  @param StreamInterface|null $value Value to set for the extractedTextContent property.
    */
    public function setExtractedTextContent(?StreamInterface $value): void {
        $this->getBackingStore()->set('extractedTextContent', $value);
    }

    /**
     * Sets the mediaType property value. The mediaType property
     *  @param string|null $value Value to set for the mediaType property.
    */
    public function setMediaType(?string $value): void {
        $this->getBackingStore()->set('mediaType', $value);
    }

    /**
     * Sets the name property value. The name property
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the otherProperties property value. The otherProperties property
     *  @param StringValueDictionary|null $value Value to set for the otherProperties property.
    */
    public function setOtherProperties(?StringValueDictionary $value): void {
        $this->getBackingStore()->set('otherProperties', $value);
    }

    /**
     * Sets the processingStatus property value. The processingStatus property
     *  @param FileProcessingStatus|null $value Value to set for the processingStatus property.
    */
    public function setProcessingStatus(?FileProcessingStatus $value): void {
        $this->getBackingStore()->set('processingStatus', $value);
    }

    /**
     * Sets the senderOrAuthors property value. The senderOrAuthors property
     *  @param array<string>|null $value Value to set for the senderOrAuthors property.
    */
    public function setSenderOrAuthors(?array $value): void {
        $this->getBackingStore()->set('senderOrAuthors', $value);
    }

    /**
     * Sets the size property value. The size property
     *  @param int|null $value Value to set for the size property.
    */
    public function setSize(?int $value): void {
        $this->getBackingStore()->set('size', $value);
    }

    /**
     * Sets the sourceType property value. The sourceType property
     *  @param SourceType|null $value Value to set for the sourceType property.
    */
    public function setSourceType(?SourceType $value): void {
        $this->getBackingStore()->set('sourceType', $value);
    }

    /**
     * Sets the subjectTitle property value. The subjectTitle property
     *  @param string|null $value Value to set for the subjectTitle property.
    */
    public function setSubjectTitle(?string $value): void {
        $this->getBackingStore()->set('subjectTitle', $value);
    }

}
