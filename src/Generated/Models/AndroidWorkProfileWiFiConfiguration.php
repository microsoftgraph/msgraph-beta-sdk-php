<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * By providing the configurations in this profile you can instruct the Android Work Profile device to connect to desired Wi-Fi endpoint. By specifying the authentication method and security types expected by Wi-Fi endpoint you can make the Wi-Fi connection seamless for end user. This profile provides limited and simpler security types than Enterprise Wi-Fi profile.
*/
class AndroidWorkProfileWiFiConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new androidWorkProfileWiFiConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.androidWorkProfileWiFiConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidWorkProfileWiFiConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidWorkProfileWiFiConfiguration {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.androidWorkProfileEnterpriseWiFiConfiguration': return new AndroidWorkProfileEnterpriseWiFiConfiguration();
            }
        }
        return new AndroidWorkProfileWiFiConfiguration();
    }

    /**
     * Gets the connectAutomatically property value. Connect automatically when this network is in range. Setting this to true will skip the user prompt and automatically connect the device to Wi-Fi network.
     * @return bool|null
    */
    public function getConnectAutomatically(): ?bool {
        $val = $this->getBackingStore()->get('connectAutomatically');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'connectAutomatically'");
    }

    /**
     * Gets the connectWhenNetworkNameIsHidden property value. When set to true, this profile forces the device to connect to a network that doesn't broadcast its SSID to all devices.
     * @return bool|null
    */
    public function getConnectWhenNetworkNameIsHidden(): ?bool {
        $val = $this->getBackingStore()->get('connectWhenNetworkNameIsHidden');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'connectWhenNetworkNameIsHidden'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'connectAutomatically' => fn(ParseNode $n) => $o->setConnectAutomatically($n->getBooleanValue()),
            'connectWhenNetworkNameIsHidden' => fn(ParseNode $n) => $o->setConnectWhenNetworkNameIsHidden($n->getBooleanValue()),
            'networkName' => fn(ParseNode $n) => $o->setNetworkName($n->getStringValue()),
            'ssid' => fn(ParseNode $n) => $o->setSsid($n->getStringValue()),
            'wiFiSecurityType' => fn(ParseNode $n) => $o->setWiFiSecurityType($n->getEnumValue(AndroidWiFiSecurityType::class)),
        ]);
    }

    /**
     * Gets the networkName property value. Network Name
     * @return string|null
    */
    public function getNetworkName(): ?string {
        $val = $this->getBackingStore()->get('networkName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'networkName'");
    }

    /**
     * Gets the ssid property value. This is the name of the Wi-Fi network that is broadcast to all devices.
     * @return string|null
    */
    public function getSsid(): ?string {
        $val = $this->getBackingStore()->get('ssid');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ssid'");
    }

    /**
     * Gets the wiFiSecurityType property value. Wi-Fi Security Types for Android.
     * @return AndroidWiFiSecurityType|null
    */
    public function getWiFiSecurityType(): ?AndroidWiFiSecurityType {
        $val = $this->getBackingStore()->get('wiFiSecurityType');
        if (is_null($val) || $val instanceof AndroidWiFiSecurityType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'wiFiSecurityType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('connectAutomatically', $this->getConnectAutomatically());
        $writer->writeBooleanValue('connectWhenNetworkNameIsHidden', $this->getConnectWhenNetworkNameIsHidden());
        $writer->writeStringValue('networkName', $this->getNetworkName());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('ssid', $this->getSsid());
        $writer->writeEnumValue('wiFiSecurityType', $this->getWiFiSecurityType());
    }

    /**
     * Sets the connectAutomatically property value. Connect automatically when this network is in range. Setting this to true will skip the user prompt and automatically connect the device to Wi-Fi network.
     * @param bool|null $value Value to set for the connectAutomatically property.
    */
    public function setConnectAutomatically(?bool $value): void {
        $this->getBackingStore()->set('connectAutomatically', $value);
    }

    /**
     * Sets the connectWhenNetworkNameIsHidden property value. When set to true, this profile forces the device to connect to a network that doesn't broadcast its SSID to all devices.
     * @param bool|null $value Value to set for the connectWhenNetworkNameIsHidden property.
    */
    public function setConnectWhenNetworkNameIsHidden(?bool $value): void {
        $this->getBackingStore()->set('connectWhenNetworkNameIsHidden', $value);
    }

    /**
     * Sets the networkName property value. Network Name
     * @param string|null $value Value to set for the networkName property.
    */
    public function setNetworkName(?string $value): void {
        $this->getBackingStore()->set('networkName', $value);
    }

    /**
     * Sets the ssid property value. This is the name of the Wi-Fi network that is broadcast to all devices.
     * @param string|null $value Value to set for the ssid property.
    */
    public function setSsid(?string $value): void {
        $this->getBackingStore()->set('ssid', $value);
    }

    /**
     * Sets the wiFiSecurityType property value. Wi-Fi Security Types for Android.
     * @param AndroidWiFiSecurityType|null $value Value to set for the wiFiSecurityType property.
    */
    public function setWiFiSecurityType(?AndroidWiFiSecurityType $value): void {
        $this->getBackingStore()->set('wiFiSecurityType', $value);
    }

}
