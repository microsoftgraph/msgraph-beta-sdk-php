<?php

namespace Microsoft\Graph\Beta\Generated\TrustFramework\KeySets\Item\UploadSecret;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class UploadSecretPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new uploadSecretPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UploadSecretPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UploadSecretPostRequestBody {
        return new UploadSecretPostRequestBody();
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
     * Gets the use property value. The use property
     * @return string|null
    */
    public function getEscapedUse(): ?string {
        $val = $this->getBackingStore()->get('escapedUse');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'escapedUse'");
    }

    /**
     * Gets the exp property value. The exp property
     * @return int|null
    */
    public function getExp(): ?int {
        $val = $this->getBackingStore()->get('exp');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exp'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'use' => fn(ParseNode $n) => $o->setEscapedUse($n->getStringValue()),
            'exp' => fn(ParseNode $n) => $o->setExp($n->getIntegerValue()),
            'k' => fn(ParseNode $n) => $o->setK($n->getStringValue()),
            'nbf' => fn(ParseNode $n) => $o->setNbf($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the k property value. The k property
     * @return string|null
    */
    public function getK(): ?string {
        $val = $this->getBackingStore()->get('k');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'k'");
    }

    /**
     * Gets the nbf property value. The nbf property
     * @return int|null
    */
    public function getNbf(): ?int {
        $val = $this->getBackingStore()->get('nbf');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'nbf'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('use', $this->getEscapedUse());
        $writer->writeIntegerValue('exp', $this->getExp());
        $writer->writeStringValue('k', $this->getK());
        $writer->writeIntegerValue('nbf', $this->getNbf());
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
     * Sets the use property value. The use property
     * @param string|null $value Value to set for the use property.
    */
    public function setEscapedUse(?string $value): void {
        $this->getBackingStore()->set('escapedUse', $value);
    }

    /**
     * Sets the exp property value. The exp property
     * @param int|null $value Value to set for the exp property.
    */
    public function setExp(?int $value): void {
        $this->getBackingStore()->set('exp', $value);
    }

    /**
     * Sets the k property value. The k property
     * @param string|null $value Value to set for the k property.
    */
    public function setK(?string $value): void {
        $this->getBackingStore()->set('k', $value);
    }

    /**
     * Sets the nbf property value. The nbf property
     * @param int|null $value Value to set for the nbf property.
    */
    public function setNbf(?int $value): void {
        $this->getBackingStore()->set('nbf', $value);
    }

}
