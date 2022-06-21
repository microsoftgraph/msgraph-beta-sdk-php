<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class SigningResult implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var StreamInterface|null $signature The signature property */
    private ?StreamInterface $signature = null;
    
    /** @var string|null $signingKeyId The signingKeyId property */
    private ?string $signingKeyId = null;
    
    /**
     * Instantiates a new signingResult and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SigningResult
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): SigningResult {
        return new SigningResult();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'signature' => function (self $o, ParseNode $n) { $o->setSignature($n->getBinaryContent()); },
            'signingKeyId' => function (self $o, ParseNode $n) { $o->setSigningKeyId($n->getStringValue()); },
        ];
    }

    /**
     * Gets the signature property value. The signature property
     * @return StreamInterface|null
    */
    public function getSignature(): ?StreamInterface {
        return $this->signature;
    }

    /**
     * Gets the signingKeyId property value. The signingKeyId property
     * @return string|null
    */
    public function getSigningKeyId(): ?string {
        return $this->signingKeyId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBinaryContent('signature', $this->signature);
        $writer->writeStringValue('signingKeyId', $this->signingKeyId);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the signature property value. The signature property
     *  @param StreamInterface|null $value Value to set for the signature property.
    */
    public function setSignature(?StreamInterface $value ): void {
        $this->signature = $value;
    }

    /**
     * Sets the signingKeyId property value. The signingKeyId property
     *  @param string|null $value Value to set for the signingKeyId property.
    */
    public function setSigningKeyId(?string $value ): void {
        $this->signingKeyId = $value;
    }

}
