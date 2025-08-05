<?php

namespace Microsoft\Graph\Beta\Generated\Models\Networkaccess;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RelatedToken extends RelatedResource implements Parsable 
{
    /**
     * Instantiates a new RelatedToken and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.networkaccess.relatedToken');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RelatedToken
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RelatedToken {
        return new RelatedToken();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'uniqueTokenIdentifier' => fn(ParseNode $n) => $o->setUniqueTokenIdentifier($n->getStringValue()),
        ]);
    }

    /**
     * Gets the uniqueTokenIdentifier property value. Unique identifier of the token. Required.
     * @return string|null
    */
    public function getUniqueTokenIdentifier(): ?string {
        $val = $this->getBackingStore()->get('uniqueTokenIdentifier');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'uniqueTokenIdentifier'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('uniqueTokenIdentifier', $this->getUniqueTokenIdentifier());
    }

    /**
     * Sets the uniqueTokenIdentifier property value. Unique identifier of the token. Required.
     * @param string|null $value Value to set for the uniqueTokenIdentifier property.
    */
    public function setUniqueTokenIdentifier(?string $value): void {
        $this->getBackingStore()->set('uniqueTokenIdentifier', $value);
    }

}
