<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class TrustFrameworkKeySet extends Entity implements Parsable 
{
    /**
     * Instantiates a new trustFrameworkKeySet and sets the default values.
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
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
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
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('keys', $this->getKeys());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the keys property value. A collection of the keys.
     * @param array<TrustFrameworkKey>|null $value Value to set for the keys property.
    */
    public function setKeys(?array $value): void {
        $this->getBackingStore()->set('keys', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
