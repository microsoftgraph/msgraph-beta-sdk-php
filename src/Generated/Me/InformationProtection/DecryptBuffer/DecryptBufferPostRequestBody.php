<?php

namespace Microsoft\Graph\Beta\Generated\Me\InformationProtection\DecryptBuffer;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Psr\Http\Message\StreamInterface;

class DecryptBufferPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new decryptBufferPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DecryptBufferPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DecryptBufferPostRequestBody {
        return new DecryptBufferPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the encryptedBuffer property value. The encryptedBuffer property
     * @return StreamInterface|null
    */
    public function getEncryptedBuffer(): ?StreamInterface {
        return $this->getBackingStore()->get('encryptedBuffer');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'encryptedBuffer' => fn(ParseNode $n) => $o->setEncryptedBuffer($n->getBinaryContent()),
            'publishingLicense' => fn(ParseNode $n) => $o->setPublishingLicense($n->getBinaryContent()),
        ];
    }

    /**
     * Gets the publishingLicense property value. The publishingLicense property
     * @return StreamInterface|null
    */
    public function getPublishingLicense(): ?StreamInterface {
        return $this->getBackingStore()->get('publishingLicense');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBinaryContent('encryptedBuffer', $this->getEncryptedBuffer());
        $writer->writeBinaryContent('publishingLicense', $this->getPublishingLicense());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the encryptedBuffer property value. The encryptedBuffer property
     * @param StreamInterface|null $value Value to set for the encryptedBuffer property.
    */
    public function setEncryptedBuffer(?StreamInterface $value): void {
        $this->getBackingStore()->set('encryptedBuffer', $value);
    }

    /**
     * Sets the publishingLicense property value. The publishingLicense property
     * @param StreamInterface|null $value Value to set for the publishingLicense property.
    */
    public function setPublishingLicense(?StreamInterface $value): void {
        $this->getBackingStore()->set('publishingLicense', $value);
    }

}
