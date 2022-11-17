<?php

namespace Microsoft\Graph\Beta\Generated\InformationProtection\VerifySignature;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Psr\Http\Message\StreamInterface;

class VerifySignaturePostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new verifySignaturePostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VerifySignaturePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VerifySignaturePostRequestBody {
        return new VerifySignaturePostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
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
     * Gets the digest property value. The digest property
     * @return StreamInterface|null
    */
    public function getDigest(): ?StreamInterface {
        return $this->getBackingStore()->get('digest');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'digest' => fn(ParseNode $n) => $o->setDigest($n->getBinaryContent()),
            'signature' => fn(ParseNode $n) => $o->setSignature($n->getBinaryContent()),
            'signingKeyId' => fn(ParseNode $n) => $o->setSigningKeyId($n->getStringValue()),
        ];
    }

    /**
     * Gets the signature property value. The signature property
     * @return StreamInterface|null
    */
    public function getSignature(): ?StreamInterface {
        return $this->getBackingStore()->get('signature');
    }

    /**
     * Gets the signingKeyId property value. The signingKeyId property
     * @return string|null
    */
    public function getSigningKeyId(): ?string {
        return $this->getBackingStore()->get('signingKeyId');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBinaryContent('digest', $this->getDigest());
        $writer->writeBinaryContent('signature', $this->getSignature());
        $writer->writeStringValue('signingKeyId', $this->getSigningKeyId());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the digest property value. The digest property
     *  @param StreamInterface|null $value Value to set for the digest property.
    */
    public function setDigest(?StreamInterface $value): void {
        $this->getBackingStore()->set('digest', $value);
    }

    /**
     * Sets the signature property value. The signature property
     *  @param StreamInterface|null $value Value to set for the signature property.
    */
    public function setSignature(?StreamInterface $value): void {
        $this->getBackingStore()->set('signature', $value);
    }

    /**
     * Sets the signingKeyId property value. The signingKeyId property
     *  @param string|null $value Value to set for the signingKeyId property.
    */
    public function setSigningKeyId(?string $value): void {
        $this->getBackingStore()->set('signingKeyId', $value);
    }

}
