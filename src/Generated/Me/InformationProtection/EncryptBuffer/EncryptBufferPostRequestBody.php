<?php

namespace Microsoft\Graph\Beta\Generated\Me\InformationProtection\EncryptBuffer;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class EncryptBufferPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var StreamInterface|null $buffer The buffer property
    */
    private ?StreamInterface $buffer = null;
    
    /**
     * @var string|null $labelId The labelId property
    */
    private ?string $labelId = null;
    
    /**
     * Instantiates a new encryptBufferPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EncryptBufferPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EncryptBufferPostRequestBody {
        return new EncryptBufferPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the buffer property value. The buffer property
     * @return StreamInterface
    */
    public function getBuffer(): StreamInterface {
        return $this->buffer;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'buffer' => fn(ParseNode $n) => $o->setBuffer($n->getBinaryContent()),
            'labelId' => fn(ParseNode $n) => $o->setLabelId($n->getStringValue()),
        ];
    }

    /**
     * Gets the labelId property value. The labelId property
     * @return string|null
    */
    public function getLabelId(): ?string {
        return $this->labelId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBinaryContent('buffer', $this->buffer);
        $writer->writeStringValue('labelId', $this->labelId);
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
     * Sets the buffer property value. The buffer property
     *  @param StreamInterface|null $value Value to set for the buffer property.
    */
    public function setBuffer(?StreamInterface $value ): void {
        $this->buffer = $value;
    }

    /**
     * Sets the labelId property value. The labelId property
     *  @param string|null $value Value to set for the labelId property.
    */
    public function setLabelId(?string $value ): void {
        $this->labelId = $value;
    }

}
