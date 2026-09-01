<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\CaseManagement;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class Attachment extends CaseManagementEntity implements Parsable 
{
    /**
     * Instantiates a new Attachment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.caseManagement.attachment');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Attachment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Attachment {
        return new Attachment();
    }

    /**
     * Gets the content property value. The binary content stream for the attachment. Use the Upload content and Download content methods to access it.
     * @return StreamInterface|null
    */
    public function getContent(): ?StreamInterface {
        $val = $this->getBackingStore()->get('content');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'content'");
    }

    /**
     * Gets the description property value. The description of the attachment.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. The display name of the attachment.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'content' => fn(ParseNode $n) => $o->setContent($n->getBinaryContent()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'fileExtension' => fn(ParseNode $n) => $o->setFileExtension($n->getStringValue()),
            'fileSize' => fn(ParseNode $n) => $o->setFileSize($n->getIntegerValue()),
            'origin' => fn(ParseNode $n) => $o->setOrigin($n->getObjectValue([AttachmentOrigin::class, 'createFromDiscriminatorValue'])),
            'scanResult' => fn(ParseNode $n) => $o->setScanResult($n->getEnumValue(AttachmentScanResult::class)),
        ]);
    }

    /**
     * Gets the fileExtension property value. The file extension of the attachment. The service normalizes the value to include a leading period.
     * @return string|null
    */
    public function getFileExtension(): ?string {
        $val = $this->getBackingStore()->get('fileExtension');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileExtension'");
    }

    /**
     * Gets the fileSize property value. The size of the attachment in bytes. The maximum file size is 100 MB.
     * @return int|null
    */
    public function getFileSize(): ?int {
        $val = $this->getBackingStore()->get('fileSize');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileSize'");
    }

    /**
     * Gets the origin property value. The origin reference for the attachment.
     * @return AttachmentOrigin|null
    */
    public function getOrigin(): ?AttachmentOrigin {
        $val = $this->getBackingStore()->get('origin');
        if (is_null($val) || $val instanceof AttachmentOrigin) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'origin'");
    }

    /**
     * Gets the scanResult property value. The scanResult property
     * @return AttachmentScanResult|null
    */
    public function getScanResult(): ?AttachmentScanResult {
        $val = $this->getBackingStore()->get('scanResult');
        if (is_null($val) || $val instanceof AttachmentScanResult) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scanResult'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBinaryContent('content', $this->getContent());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('fileExtension', $this->getFileExtension());
        $writer->writeIntegerValue('fileSize', $this->getFileSize());
        $writer->writeObjectValue('origin', $this->getOrigin());
        $writer->writeEnumValue('scanResult', $this->getScanResult());
    }

    /**
     * Sets the content property value. The binary content stream for the attachment. Use the Upload content and Download content methods to access it.
     * @param StreamInterface|null $value Value to set for the content property.
    */
    public function setContent(?StreamInterface $value): void {
        $this->getBackingStore()->set('content', $value);
    }

    /**
     * Sets the description property value. The description of the attachment.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The display name of the attachment.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the fileExtension property value. The file extension of the attachment. The service normalizes the value to include a leading period.
     * @param string|null $value Value to set for the fileExtension property.
    */
    public function setFileExtension(?string $value): void {
        $this->getBackingStore()->set('fileExtension', $value);
    }

    /**
     * Sets the fileSize property value. The size of the attachment in bytes. The maximum file size is 100 MB.
     * @param int|null $value Value to set for the fileSize property.
    */
    public function setFileSize(?int $value): void {
        $this->getBackingStore()->set('fileSize', $value);
    }

    /**
     * Sets the origin property value. The origin reference for the attachment.
     * @param AttachmentOrigin|null $value Value to set for the origin property.
    */
    public function setOrigin(?AttachmentOrigin $value): void {
        $this->getBackingStore()->set('origin', $value);
    }

    /**
     * Sets the scanResult property value. The scanResult property
     * @param AttachmentScanResult|null $value Value to set for the scanResult property.
    */
    public function setScanResult(?AttachmentScanResult $value): void {
        $this->getBackingStore()->set('scanResult', $value);
    }

}
