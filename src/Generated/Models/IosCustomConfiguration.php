<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class IosCustomConfiguration extends DeviceConfiguration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var StreamInterface|null $payload Payload. (UTF8 encoded byte array)
    */
    private ?StreamInterface $payload = null;
    
    /**
     * @var string|null $payloadFileName Payload file name (.mobileconfig
    */
    private ?string $payloadFileName = null;
    
    /**
     * @var string|null $payloadName Name that is displayed to the user.
    */
    private ?string $payloadName = null;
    
    /**
     * Instantiates a new IosCustomConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosCustomConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosCustomConfiguration {
        return new IosCustomConfiguration();
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
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'payload' => function (ParseNode $n) use ($o) { $o->setPayload($n->getBinaryContent()); },
            'payloadFileName' => function (ParseNode $n) use ($o) { $o->setPayloadFileName($n->getStringValue()); },
            'payloadName' => function (ParseNode $n) use ($o) { $o->setPayloadName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the payload property value. Payload. (UTF8 encoded byte array)
     * @return StreamInterface|null
    */
    public function getPayload(): ?StreamInterface {
        return $this->payload;
    }

    /**
     * Gets the payloadFileName property value. Payload file name (.mobileconfig
     * @return string|null
    */
    public function getPayloadFileName(): ?string {
        return $this->payloadFileName;
    }

    /**
     * Gets the payloadName property value. Name that is displayed to the user.
     * @return string|null
    */
    public function getPayloadName(): ?string {
        return $this->payloadName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBinaryContent('payload', $this->payload);
        $writer->writeStringValue('payloadFileName', $this->payloadFileName);
        $writer->writeStringValue('payloadName', $this->payloadName);
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
     * Sets the payload property value. Payload. (UTF8 encoded byte array)
     *  @param StreamInterface|null $value Value to set for the payload property.
    */
    public function setPayload(?StreamInterface $value ): void {
        $this->payload = $value;
    }

    /**
     * Sets the payloadFileName property value. Payload file name (.mobileconfig
     *  @param string|null $value Value to set for the payloadFileName property.
    */
    public function setPayloadFileName(?string $value ): void {
        $this->payloadFileName = $value;
    }

    /**
     * Sets the payloadName property value. Name that is displayed to the user.
     *  @param string|null $value Value to set for the payloadName property.
    */
    public function setPayloadName(?string $value ): void {
        $this->payloadName = $value;
    }

}
