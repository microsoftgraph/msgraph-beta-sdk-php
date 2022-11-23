<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EdiscoveryFile extends File implements Parsable 
{
    /**
     * Instantiates a new EdiscoveryFile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EdiscoveryFile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EdiscoveryFile {
        return new EdiscoveryFile();
    }

    /**
     * Gets the custodian property value. Custodians associated with the file.
     * @return EdiscoveryCustodian|null
    */
    public function getCustodian(): ?EdiscoveryCustodian {
        return $this->getBackingStore()->get('custodian');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'custodian' => fn(ParseNode $n) => $o->setCustodian($n->getObjectValue([EdiscoveryCustodian::class, 'createFromDiscriminatorValue'])),
            'tags' => fn(ParseNode $n) => $o->setTags($n->getCollectionOfObjectValues([EdiscoveryReviewTag::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the tags property value. Tags associated with the file.
     * @return array<EdiscoveryReviewTag>|null
    */
    public function getTags(): ?array {
        return $this->getBackingStore()->get('tags');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('custodian', $this->getCustodian());
        $writer->writeCollectionOfObjectValues('tags', $this->getTags());
    }

    /**
     * Sets the custodian property value. Custodians associated with the file.
     *  @param EdiscoveryCustodian|null $value Value to set for the custodian property.
    */
    public function setCustodian(?EdiscoveryCustodian $value): void {
        $this->getBackingStore()->set('custodian', $value);
    }

    /**
     * Sets the tags property value. Tags associated with the file.
     *  @param array<EdiscoveryReviewTag>|null $value Value to set for the tags property.
    */
    public function setTags(?array $value): void {
        $this->getBackingStore()->set('tags', $value);
    }

}
