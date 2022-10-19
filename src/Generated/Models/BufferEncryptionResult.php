<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class BufferEncryptionResult implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var StreamInterface|null $encryptedBuffer The encryptedBuffer property
    */
    private ?StreamInterface $encryptedBuffer = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var StreamInterface|null $publishingLicense The publishingLicense property
    */
    private ?StreamInterface $publishingLicense = null;
    
    /**
     * Instantiates a new bufferEncryptionResult and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.bufferEncryptionResult');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BufferEncryptionResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BufferEncryptionResult {
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
     * Gets the encryptedBuffer property value. The encryptedBuffer property
     * @return StreamInterface
    */
    public function getEncryptedBuffer(): StreamInterface {
        return $this->encryptedBuffer;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'encryptedBuffer' => fn(ParseNode $n) => $o->setEncryptedBuffer($n->getBinaryContent()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'publishingLicense' => fn(ParseNode $n) => $o->setPublishingLicense($n->getBinaryContent()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the publishingLicense property value. The publishingLicense property
     * @return StreamInterface
    */
    public function getPublishingLicense(): StreamInterface {
        return $this->publishingLicense;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBinaryContent('encryptedBuffer', $this->encryptedBuffer);
        $writer->writeStringValue('@odata.type', $this->odataType);
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
     * Sets the encryptedBuffer property value. The encryptedBuffer property
     *  @param StreamInterface|null $value Value to set for the encryptedBuffer property.
    */
    public function setEncryptedBuffer(?StreamInterface $value ): void {
        $this->encryptedBuffer = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the publishingLicense property value. The publishingLicense property
     *  @param StreamInterface|null $value Value to set for the publishingLicense property.
    */
    public function setPublishingLicense(?StreamInterface $value ): void {
        $this->publishingLicense = $value;
    }

}
