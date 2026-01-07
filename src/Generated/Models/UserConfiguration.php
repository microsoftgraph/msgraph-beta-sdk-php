<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;
use Psr\Http\Message\StreamInterface;

class UserConfiguration extends Entity implements Parsable 
{
    /**
     * Instantiates a new UserConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserConfiguration {
        return new UserConfiguration();
    }

    /**
     * Gets the binaryData property value. Arbitrary binary data.
     * @return StreamInterface|null
    */
    public function getBinaryData(): ?StreamInterface {
        $val = $this->getBackingStore()->get('binaryData');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'binaryData'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'binaryData' => fn(ParseNode $n) => $o->setBinaryData($n->getBinaryContent()),
            'structuredData' => fn(ParseNode $n) => $o->setStructuredData($n->getCollectionOfObjectValues([StructuredDataEntry::class, 'createFromDiscriminatorValue'])),
            'xmlData' => fn(ParseNode $n) => $o->setXmlData($n->getBinaryContent()),
        ]);
    }

    /**
     * Gets the structuredData property value. Key-value pairs of supported data types.
     * @return array<StructuredDataEntry>|null
    */
    public function getStructuredData(): ?array {
        $val = $this->getBackingStore()->get('structuredData');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, StructuredDataEntry::class);
            /** @var array<StructuredDataEntry>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'structuredData'");
    }

    /**
     * Gets the xmlData property value. Binary data for storing serialized XML.
     * @return StreamInterface|null
    */
    public function getXmlData(): ?StreamInterface {
        $val = $this->getBackingStore()->get('xmlData');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'xmlData'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBinaryContent('binaryData', $this->getBinaryData());
        $writer->writeCollectionOfObjectValues('structuredData', $this->getStructuredData());
        $writer->writeBinaryContent('xmlData', $this->getXmlData());
    }

    /**
     * Sets the binaryData property value. Arbitrary binary data.
     * @param StreamInterface|null $value Value to set for the binaryData property.
    */
    public function setBinaryData(?StreamInterface $value): void {
        $this->getBackingStore()->set('binaryData', $value);
    }

    /**
     * Sets the structuredData property value. Key-value pairs of supported data types.
     * @param array<StructuredDataEntry>|null $value Value to set for the structuredData property.
    */
    public function setStructuredData(?array $value): void {
        $this->getBackingStore()->set('structuredData', $value);
    }

    /**
     * Sets the xmlData property value. Binary data for storing serialized XML.
     * @param StreamInterface|null $value Value to set for the xmlData property.
    */
    public function setXmlData(?StreamInterface $value): void {
        $this->getBackingStore()->set('xmlData', $value);
    }

}
