<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class PolicyFile extends Entity implements Parsable 
{
    /**
     * Instantiates a new PolicyFile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PolicyFile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PolicyFile {
        return new PolicyFile();
    }

    /**
     * Gets the content property value. The content property
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'content' => fn(ParseNode $n) => $o->setContent($n->getBinaryContent()),
            'fileType' => fn(ParseNode $n) => $o->setFileType($n->getEnumValue(PolicyFileType::class)),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(PolicyFileStatus::class)),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getStringValue()),
        ]);
    }

    /**
     * Gets the fileType property value. The fileType property
     * @return PolicyFileType|null
    */
    public function getFileType(): ?PolicyFileType {
        $val = $this->getBackingStore()->get('fileType');
        if (is_null($val) || $val instanceof PolicyFileType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileType'");
    }

    /**
     * Gets the status property value. The status property
     * @return PolicyFileStatus|null
    */
    public function getStatus(): ?PolicyFileStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof PolicyFileStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the version property value. The version property
     * @return string|null
    */
    public function getVersion(): ?string {
        $val = $this->getBackingStore()->get('version');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'version'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBinaryContent('content', $this->getContent());
        $writer->writeEnumValue('fileType', $this->getFileType());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('version', $this->getVersion());
    }

    /**
     * Sets the content property value. The content property
     * @param StreamInterface|null $value Value to set for the content property.
    */
    public function setContent(?StreamInterface $value): void {
        $this->getBackingStore()->set('content', $value);
    }

    /**
     * Sets the fileType property value. The fileType property
     * @param PolicyFileType|null $value Value to set for the fileType property.
    */
    public function setFileType(?PolicyFileType $value): void {
        $this->getBackingStore()->set('fileType', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param PolicyFileStatus|null $value Value to set for the status property.
    */
    public function setStatus(?PolicyFileStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the version property value. The version property
     * @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value): void {
        $this->getBackingStore()->set('version', $value);
    }

}
