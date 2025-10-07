<?php

namespace Microsoft\\Graph\\Beta\\Generated\Users\Item\Authentication\QrCodePinMethod\Pin\UpdatePin;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class UpdatePinPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new UpdatePinPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdatePinPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdatePinPostRequestBody {
        return new UpdatePinPostRequestBody();
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
     * Gets the currentPin property value. The currentPin property
     * @return string|null
    */
    public function getCurrentPin(): ?string {
        $val = $this->getBackingStore()->get('currentPin');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'currentPin'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'currentPin' => fn(ParseNode $n) => $o->setCurrentPin($n->getStringValue()),
            'newPin' => fn(ParseNode $n) => $o->setNewPin($n->getStringValue()),
        ];
    }

    /**
     * Gets the newPin property value. The newPin property
     * @return string|null
    */
    public function getNewPin(): ?string {
        $val = $this->getBackingStore()->get('newPin');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'newPin'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('currentPin', $this->getCurrentPin());
        $writer->writeStringValue('newPin', $this->getNewPin());
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
     * Sets the currentPin property value. The currentPin property
     * @param string|null $value Value to set for the currentPin property.
    */
    public function setCurrentPin(?string $value): void {
        $this->getBackingStore()->set('currentPin', $value);
    }

    /**
     * Sets the newPin property value. The newPin property
     * @param string|null $value Value to set for the newPin property.
    */
    public function setNewPin(?string $value): void {
        $this->getBackingStore()->set('newPin', $value);
    }

}
