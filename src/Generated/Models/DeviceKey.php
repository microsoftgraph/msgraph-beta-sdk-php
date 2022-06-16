<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class DeviceKey implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $deviceId The deviceId property */
    private ?string $deviceId = null;
    
    /** @var StreamInterface|null $keyMaterial The keyMaterial property */
    private ?StreamInterface $keyMaterial = null;
    
    /** @var string|null $keyType The keyType property */
    private ?string $keyType = null;
    
    /**
     * Instantiates a new deviceKey and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceKey
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DeviceKey {
        return new DeviceKey();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the deviceId property value. The deviceId property
     * @return string|null
    */
    public function getDeviceId(): ?string {
        return $this->deviceId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'deviceId' => function (self $o, ParseNode $n) { $o->setDeviceId($n->getStringValue()); },
            'keyMaterial' => function (self $o, ParseNode $n) { $o->setKeyMaterial($n->getBinaryContent()); },
            'keyType' => function (self $o, ParseNode $n) { $o->setKeyType($n->getStringValue()); },
        ];
    }

    /**
     * Gets the keyMaterial property value. The keyMaterial property
     * @return StreamInterface|null
    */
    public function getKeyMaterial(): ?StreamInterface {
        return $this->keyMaterial;
    }

    /**
     * Gets the keyType property value. The keyType property
     * @return string|null
    */
    public function getKeyType(): ?string {
        return $this->keyType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('deviceId', $this->deviceId);
        $writer->writeBinaryContent('keyMaterial', $this->keyMaterial);
        $writer->writeStringValue('keyType', $this->keyType);
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
     * Sets the deviceId property value. The deviceId property
     *  @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value ): void {
        $this->deviceId = $value;
    }

    /**
     * Sets the keyMaterial property value. The keyMaterial property
     *  @param StreamInterface|null $value Value to set for the keyMaterial property.
    */
    public function setKeyMaterial(?StreamInterface $value ): void {
        $this->keyMaterial = $value;
    }

    /**
     * Sets the keyType property value. The keyType property
     *  @param string|null $value Value to set for the keyType property.
    */
    public function setKeyType(?string $value ): void {
        $this->keyType = $value;
    }

}
