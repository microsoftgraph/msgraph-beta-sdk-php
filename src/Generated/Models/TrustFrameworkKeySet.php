<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TrustFrameworkKeySet extends Entity implements Parsable 
{
    /**
     * Instantiates a new TrustFrameworkKeySet and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TrustFrameworkKeySet
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TrustFrameworkKeySet {
        return new TrustFrameworkKeySet();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'keys' => fn(ParseNode $n) => $o->setKeys($n->getCollectionOfObjectValues([TrustFrameworkKey::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the keys property value. A collection of the keys.
     * @return array<TrustFrameworkKey>|null
    */
    public function getKeys(): ?array {
        return $this->getBackingStore()->get('keys');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('keys', $this->getKeys());
    }

    /**
     * Sets the keys property value. A collection of the keys.
     * @param array<TrustFrameworkKey>|null $value Value to set for the keys property.
    */
    public function setKeys(?array $value): void {
        $this->getBackingStore()->set('keys', $value);
    }

}
