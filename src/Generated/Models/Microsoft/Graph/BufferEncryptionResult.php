<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class BufferEncryptionResult implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var StreamInterface|null $encryptedBuffer  */
    private ?StreamInterface $encryptedBuffer = null;
    
    /** @var StreamInterface|null $publishingLicense  */
    private ?StreamInterface $publishingLicense = null;
    
    /**
     * Instantiates a new bufferEncryptionResult and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BufferEncryptionResult
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): BufferEncryptionResult {
        return new BufferEncryptionResult();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the encryptedBuffer property value. 
     * @return StreamInterface|null
    */
    public function getEncryptedBuffer(): ?StreamInterface {
        return $this->encryptedBuffer;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'encryptedBuffer' => function (self $o, ParseNode $n) { $o->setEncryptedBuffer($n->getBinaryContent()); },
            'publishingLicense' => function (self $o, ParseNode $n) { $o->setPublishingLicense($n->getBinaryContent()); },
        ];
    }

    /**
     * Gets the publishingLicense property value. 
     * @return StreamInterface|null
    */
    public function getPublishingLicense(): ?StreamInterface {
        return $this->publishingLicense;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBinaryContent('encryptedBuffer', $this->encryptedBuffer);
        $writer->writeBinaryContent('publishingLicense', $this->publishingLicense);
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
     * Sets the encryptedBuffer property value. 
     *  @param StreamInterface|null $value Value to set for the encryptedBuffer property.
    */
    public function setEncryptedBuffer(?StreamInterface $value ): void {
        $this->encryptedBuffer = $value;
    }

    /**
     * Sets the publishingLicense property value. 
     *  @param StreamInterface|null $value Value to set for the publishingLicense property.
    */
    public function setPublishingLicense(?StreamInterface $value ): void {
        $this->publishingLicense = $value;
    }

}
