<?php

namespace Microsoft\Graph\Beta\Generated\Models\Networkaccess;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RelatedFile extends RelatedResource implements Parsable 
{
    /**
     * Instantiates a new RelatedFile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.networkaccess.relatedFile');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RelatedFile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RelatedFile {
        return new RelatedFile();
    }

    /**
     * Gets the directory property value. Directory path of the file. Required.
     * @return string|null
    */
    public function getDirectory(): ?string {
        $val = $this->getBackingStore()->get('directory');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'directory'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'directory' => fn(ParseNode $n) => $o->setDirectory($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'sizeInBytes' => fn(ParseNode $n) => $o->setSizeInBytes($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the name property value. Name of the file. Required.
     * @return string|null
    */
    public function getName(): ?string {
        $val = $this->getBackingStore()->get('name');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'name'");
    }

    /**
     * Gets the sizeInBytes property value. Size of the file in bytes. Required.
     * @return int|null
    */
    public function getSizeInBytes(): ?int {
        $val = $this->getBackingStore()->get('sizeInBytes');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sizeInBytes'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('directory', $this->getDirectory());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeIntegerValue('sizeInBytes', $this->getSizeInBytes());
    }

    /**
     * Sets the directory property value. Directory path of the file. Required.
     * @param string|null $value Value to set for the directory property.
    */
    public function setDirectory(?string $value): void {
        $this->getBackingStore()->set('directory', $value);
    }

    /**
     * Sets the name property value. Name of the file. Required.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the sizeInBytes property value. Size of the file in bytes. Required.
     * @param int|null $value Value to set for the sizeInBytes property.
    */
    public function setSizeInBytes(?int $value): void {
        $this->getBackingStore()->set('sizeInBytes', $value);
    }

}
