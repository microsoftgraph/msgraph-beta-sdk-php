<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

/**
 * Windows 8.1+ Wi-Fi import configuration. By configuring this profile you can instruct Windows 8.1 (and later) devices to connect to desired Wi-Fi endpoint. Connect a Windows 8.1 device to the desired Wi-Fi network and extract the XML from that device to later embed into this Wi-Fi profile.
*/
class Windows81WifiImportConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * Instantiates a new Windows81WifiImportConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windows81WifiImportConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Windows81WifiImportConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Windows81WifiImportConfiguration {
        return new Windows81WifiImportConfiguration();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'payload' => fn(ParseNode $n) => $o->setPayload($n->getBinaryContent()),
            'payloadFileName' => fn(ParseNode $n) => $o->setPayloadFileName($n->getStringValue()),
            'profileName' => fn(ParseNode $n) => $o->setProfileName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the payload property value. Payload. (UTF8 encoded byte array). This is the XML file saved on the device you used to connect to the Wi-Fi endpoint.
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
     * Gets the payloadFileName property value. Payload file name (.xml).
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
     * Gets the profileName property value. Profile name displayed in the UI.
     * @return string|null
    */
    public function getProfileName(): ?string {
        $val = $this->getBackingStore()->get('profileName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'profileName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBinaryContent('payload', $this->getPayload());
        $writer->writeStringValue('payloadFileName', $this->getPayloadFileName());
        $writer->writeStringValue('profileName', $this->getProfileName());
    }

    /**
     * Sets the payload property value. Payload. (UTF8 encoded byte array). This is the XML file saved on the device you used to connect to the Wi-Fi endpoint.
     * @param StreamInterface|null $value Value to set for the payload property.
    */
    public function setPayload(?StreamInterface $value): void {
        $this->getBackingStore()->set('payload', $value);
    }

    /**
     * Sets the payloadFileName property value. Payload file name (.xml).
     * @param string|null $value Value to set for the payloadFileName property.
    */
    public function setPayloadFileName(?string $value): void {
        $this->getBackingStore()->set('payloadFileName', $value);
    }

    /**
     * Sets the profileName property value. Profile name displayed in the UI.
     * @param string|null $value Value to set for the profileName property.
    */
    public function setProfileName(?string $value): void {
        $this->getBackingStore()->set('profileName', $value);
    }

}
