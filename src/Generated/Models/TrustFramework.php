<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class TrustFramework implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new TrustFramework and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TrustFramework
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TrustFramework {
        return new TrustFramework();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'keySets' => fn(ParseNode $n) => $o->setKeySets($n->getCollectionOfObjectValues([TrustFrameworkKeySet::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'policies' => fn(ParseNode $n) => $o->setPolicies($n->getCollectionOfObjectValues([TrustFrameworkPolicy::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the keySets property value. The keySets property
     * @return array<TrustFrameworkKeySet>|null
    */
    public function getKeySets(): ?array {
        $val = $this->getBackingStore()->get('keySets');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TrustFrameworkKeySet::class);
            /** @var array<TrustFrameworkKeySet>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'keySets'");
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
     * Gets the policies property value. The policies property
     * @return array<TrustFrameworkPolicy>|null
    */
    public function getPolicies(): ?array {
        $val = $this->getBackingStore()->get('policies');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TrustFrameworkPolicy::class);
            /** @var array<TrustFrameworkPolicy>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policies'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('keySets', $this->getKeySets());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('policies', $this->getPolicies());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the keySets property value. The keySets property
     * @param array<TrustFrameworkKeySet>|null $value Value to set for the keySets property.
    */
    public function setKeySets(?array $value): void {
        $this->getBackingStore()->set('keySets', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the policies property value. The policies property
     * @param array<TrustFrameworkPolicy>|null $value Value to set for the policies property.
    */
    public function setPolicies(?array $value): void {
        $this->getBackingStore()->set('policies', $value);
    }

}
