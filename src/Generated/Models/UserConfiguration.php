<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
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
     * Gets the binaryData property value. The binaryData property
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
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBinaryContent('binaryData', $this->getBinaryData());
    }

    /**
     * Sets the binaryData property value. The binaryData property
     * @param StreamInterface|null $value Value to set for the binaryData property.
    */
    public function setBinaryData(?StreamInterface $value): void {
        $this->getBackingStore()->set('binaryData', $value);
    }

}
