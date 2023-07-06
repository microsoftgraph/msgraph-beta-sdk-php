<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class MacOSCustomConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * Instantiates a new MacOSCustomConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.macOSCustomConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MacOSCustomConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MacOSCustomConfiguration {
        return new MacOSCustomConfiguration();
    }

    /**
     * Gets the deploymentChannel property value. Indicates the channel used to deploy the configuration profile. Available choices are DeviceChannel, UserChannel
     * @return AppleDeploymentChannel|null
    */
    public function getDeploymentChannel(): ?AppleDeploymentChannel {
        $val = $this->getBackingStore()->get('deploymentChannel');
        if (is_null($val) || $val instanceof AppleDeploymentChannel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deploymentChannel'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deploymentChannel' => fn(ParseNode $n) => $o->setDeploymentChannel($n->getEnumValue(AppleDeploymentChannel::class)),
            'payload' => fn(ParseNode $n) => $o->setPayload($n->getBinaryContent()),
            'payloadFileName' => fn(ParseNode $n) => $o->setPayloadFileName($n->getStringValue()),
            'payloadName' => fn(ParseNode $n) => $o->setPayloadName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the payload property value. Payload. (UTF8 encoded byte array)
     * @return StreamInterface|null
    */
    public function getPayload(): ?StreamInterface {
        $val = $this->getBackingStore()->get('payload');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'payload'");
    }

    /**
     * Gets the payloadFileName property value. Payload file name (.mobileconfig
     * @return string|null
    */
    public function getPayloadFileName(): ?string {
        $val = $this->getBackingStore()->get('payloadFileName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'payloadFileName'");
    }

    /**
     * Gets the payloadName property value. Name that is displayed to the user.
     * @return string|null
    */
    public function getPayloadName(): ?string {
        $val = $this->getBackingStore()->get('payloadName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'payloadName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('deploymentChannel', $this->getDeploymentChannel());
        $writer->writeBinaryContent('payload', $this->getPayload());
        $writer->writeStringValue('payloadFileName', $this->getPayloadFileName());
        $writer->writeStringValue('payloadName', $this->getPayloadName());
    }

    /**
     * Sets the deploymentChannel property value. Indicates the channel used to deploy the configuration profile. Available choices are DeviceChannel, UserChannel
     * @param AppleDeploymentChannel|null $value Value to set for the deploymentChannel property.
    */
    public function setDeploymentChannel(?AppleDeploymentChannel $value): void {
        $this->getBackingStore()->set('deploymentChannel', $value);
    }

    /**
     * Sets the payload property value. Payload. (UTF8 encoded byte array)
     * @param StreamInterface|null $value Value to set for the payload property.
    */
    public function setPayload(?StreamInterface $value): void {
        $this->getBackingStore()->set('payload', $value);
    }

    /**
     * Sets the payloadFileName property value. Payload file name (.mobileconfig
     * @param string|null $value Value to set for the payloadFileName property.
    */
    public function setPayloadFileName(?string $value): void {
        $this->getBackingStore()->set('payloadFileName', $value);
    }

    /**
     * Sets the payloadName property value. Name that is displayed to the user.
     * @param string|null $value Value to set for the payloadName property.
    */
    public function setPayloadName(?string $value): void {
        $this->getBackingStore()->set('payloadName', $value);
    }

}
