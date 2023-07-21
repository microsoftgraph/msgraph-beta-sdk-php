<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;
use Psr\Http\Message\StreamInterface;

class FileClassificationRequest extends Entity implements Parsable 
{
    /**
     * Instantiates a new fileClassificationRequest and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'file' => fn(ParseNode $n) => $o->setFile($n->getBinaryContent()),
            'sensitiveTypeIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSensitiveTypeIds($val);
            },
        ]);
    }

    /**
     * Gets the file property value. The file property
     * @return StreamInterface|null
    */
    public function getFile(): ?StreamInterface {
        $val = $this->getBackingStore()->get('file');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'file'");
    }

    /**
     * Gets the sensitiveTypeIds property value. The sensitiveTypeIds property
     * @return array<string>|null
    */
    public function getSensitiveTypeIds(): ?array {
        $val = $this->getBackingStore()->get('sensitiveTypeIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sensitiveTypeIds'");
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
     * @param StreamInterface|null $value Value to set for the file property.
    */
    public function setFile(?StreamInterface $value): void {
        $this->getBackingStore()->set('file', $value);
    }

    /**
     * Sets the sensitiveTypeIds property value. The sensitiveTypeIds property
     * @param array<string>|null $value Value to set for the sensitiveTypeIds property.
    */
    public function setSensitiveTypeIds(?array $value): void {
        $this->getBackingStore()->set('sensitiveTypeIds', $value);
    }

}
