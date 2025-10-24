<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

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
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'keys' => fn(ParseNode $n) => $o->setKeys($n->getCollectionOfObjectValues([TrustFrameworkKey::class, 'createFromDiscriminatorValue'])),
            'keys_v2' => fn(ParseNode $n) => $o->setKeysV2($n->getCollectionOfObjectValues([TrustFrameworkKey_v2::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the keys property value. A collection of the keys.
     * @return array<TrustFrameworkKey>|null
    */
    public function getKeys(): ?array {
        $val = $this->getBackingStore()->get('keys');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TrustFrameworkKey::class);
            /** @var array<TrustFrameworkKey>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'keys'");
    }

    /**
     * Gets the keys_v2 property value. A collection of the keys.
     * @return array<TrustFrameworkKey_v2>|null
    */
    public function getKeysV2(): ?array {
        $val = $this->getBackingStore()->get('keys_v2');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TrustFrameworkKey_v2::class);
            /** @var array<TrustFrameworkKey_v2>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'keys_v2'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('keys', $this->getKeys());
        $writer->writeCollectionOfObjectValues('keys_v2', $this->getKeysV2());
    }

    /**
     * Sets the keys property value. A collection of the keys.
     * @param array<TrustFrameworkKey>|null $value Value to set for the keys property.
    */
    public function setKeys(?array $value): void {
        $this->getBackingStore()->set('keys', $value);
    }

    /**
     * Sets the keys_v2 property value. A collection of the keys.
     * @param array<TrustFrameworkKey_v2>|null $value Value to set for the keys_v2 property.
    */
    public function setKeysV2(?array $value): void {
        $this->getBackingStore()->set('keys_v2', $value);
    }

}
