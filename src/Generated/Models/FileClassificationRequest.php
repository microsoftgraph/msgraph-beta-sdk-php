<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class FileClassificationRequest extends Entity implements Parsable 
{
    /**
     * Instantiates a new FileClassificationRequest and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.fileClassificationRequest');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FileClassificationRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FileClassificationRequest {
        return new FileClassificationRequest();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'file' => fn(ParseNode $n) => $o->setFile($n->getBinaryContent()),
            'sensitiveTypeIds' => fn(ParseNode $n) => $o->setSensitiveTypeIds($n->getCollectionOfPrimitiveValues()),
        ]);
    }

    /**
     * Gets the file property value. The file property
     * @return StreamInterface|null
    */
    public function getFile(): ?StreamInterface {
        return $this->getBackingStore()->get('file');
    }

    /**
     * Gets the sensitiveTypeIds property value. The sensitiveTypeIds property
     * @return array<string>|null
    */
    public function getSensitiveTypeIds(): ?array {
        return $this->getBackingStore()->get('sensitiveTypeIds');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBinaryContent('file', $this->getFile());
        $writer->writeCollectionOfPrimitiveValues('sensitiveTypeIds', $this->getSensitiveTypeIds());
    }

    /**
     * Sets the file property value. The file property
     *  @param StreamInterface|null $value Value to set for the file property.
    */
    public function setFile(?StreamInterface $value): void {
        $this->getBackingStore()->set('file', $value);
    }

    /**
     * Sets the sensitiveTypeIds property value. The sensitiveTypeIds property
     *  @param array<string>|null $value Value to set for the sensitiveTypeIds property.
    */
    public function setSensitiveTypeIds(?array $value): void {
        $this->getBackingStore()->set('sensitiveTypeIds', $value);
    }

}
