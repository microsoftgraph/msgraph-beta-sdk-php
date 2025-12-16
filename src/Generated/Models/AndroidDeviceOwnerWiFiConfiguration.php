<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * By providing the configurations in this profile you can instruct the Android device to connect to desired Wi-Fi endpoint. By specifying the authentication method and security types expected by Wi-Fi endpoint you can make the Wi-Fi connection seamless for end user. This profile provides limited and simpler security types than Enterprise Wi-Fi profile.
*/
class AndroidDeviceOwnerWiFiConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * Instantiates a new AndroidDeviceOwnerWiFiConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.androidDeviceOwnerWiFiConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidDeviceOwnerWiFiConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidDeviceOwnerWiFiConfiguration {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.androidDeviceOwnerEnterpriseWiFiConfiguration': return new AndroidDeviceOwnerEnterpriseWiFiConfiguration();
            }
        }
        return new AndroidDeviceOwnerWiFiConfiguration();
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
            'macAddressRandomizationMode' => fn(ParseNode $n) => $o->setMacAddressRandomizationMode($n->getEnumValue(MacAddressRandomizationMode::class)),
            'networkName' => fn(ParseNode $n) => $o->setNetworkName($n->getStringValue()),
            'preSharedKey' => fn(ParseNode $n) => $o->setPreSharedKey($n->getStringValue()),
            'preSharedKeyIsSet' => fn(ParseNode $n) => $o->setPreSharedKeyIsSet($n->getBooleanValue()),
            'proxyAutomaticConfigurationUrl' => fn(ParseNode $n) => $o->setProxyAutomaticConfigurationUrl($n->getStringValue()),
            'proxyExclusionList' => fn(ParseNode $n) => $o->setProxyExclusionList($n->getStringValue()),
            'proxyManualAddress' => fn(ParseNode $n) => $o->setProxyManualAddress($n->getStringValue()),
            'proxyManualPort' => fn(ParseNode $n) => $o->setProxyManualPort($n->getIntegerValue()),
            'proxySettings' => fn(ParseNode $n) => $o->setProxySettings($n->getEnumValue(WiFiProxySetting::class)),
            'ssid' => fn(ParseNode $n) => $o->setSsid($n->getStringValue()),
            'wiFiSecurityType' => fn(ParseNode $n) => $o->setWiFiSecurityType($n->getEnumValue(AndroidDeviceOwnerWiFiSecurityType::class)),
        ]);
    }

    /**
     * Gets the macAddressRandomizationMode property value. The MAC address randomization mode for Android device Wi-Fi configuration. Possible values include automatic and hardware. Default value is automatic. The possible values are: automatic, hardware, unknownFutureValue.
     * @return MacAddressRandomizationMode|null
    */
    public function getMacAddressRandomizationMode(): ?MacAddressRandomizationMode {
        $val = $this->getBackingStore()->get('macAddressRandomizationMode');
        if (is_null($val) || $val instanceof MacAddressRandomizationMode) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'macAddressRandomizationMode'");
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
     * Gets the preSharedKey property value. This is the pre-shared key for WPA Personal Wi-Fi network.
     * @return string|null
    */
    public function getPreSharedKey(): ?string {
        $val = $this->getBackingStore()->get('preSharedKey');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'preSharedKey'");
    }

    /**
     * Gets the preSharedKeyIsSet property value. This is the pre-shared key for WPA Personal Wi-Fi network.
     * @return bool|null
    */
    public function getPreSharedKeyIsSet(): ?bool {
        $val = $this->getBackingStore()->get('preSharedKeyIsSet');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'preSharedKeyIsSet'");
    }

    /**
     * Gets the proxyAutomaticConfigurationUrl property value. Specify the proxy server configuration script URL.
     * @return string|null
    */
    public function getProxyAutomaticConfigurationUrl(): ?string {
        $val = $this->getBackingStore()->get('proxyAutomaticConfigurationUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'proxyAutomaticConfigurationUrl'");
    }

    /**
     * Gets the proxyExclusionList property value. List of hosts to exclude using the proxy on connections for. These hosts can use wildcards such as .example.com.
     * @return string|null
    */
    public function getProxyExclusionList(): ?string {
        $val = $this->getBackingStore()->get('proxyExclusionList');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'proxyExclusionList'");
    }

    /**
     * Gets the proxyManualAddress property value. Specify the proxy server IP address. Android documentation does not specify IPv4 or IPv6. For example: 192.168.1.1.
     * @return string|null
    */
    public function getProxyManualAddress(): ?string {
        $val = $this->getBackingStore()->get('proxyManualAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'proxyManualAddress'");
    }

    /**
     * Gets the proxyManualPort property value. Specify the proxy server port.
     * @return int|null
    */
    public function getProxyManualPort(): ?int {
        $val = $this->getBackingStore()->get('proxyManualPort');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'proxyManualPort'");
    }

    /**
     * Gets the proxySettings property value. Wi-Fi Proxy Settings.
     * @return WiFiProxySetting|null
    */
    public function getProxySettings(): ?WiFiProxySetting {
        $val = $this->getBackingStore()->get('proxySettings');
        if (is_null($val) || $val instanceof WiFiProxySetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'proxySettings'");
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
     * Gets the wiFiSecurityType property value. Wi-Fi Security Types for Android Device Owner.
     * @return AndroidDeviceOwnerWiFiSecurityType|null
    */
    public function getWiFiSecurityType(): ?AndroidDeviceOwnerWiFiSecurityType {
        $val = $this->getBackingStore()->get('wiFiSecurityType');
        if (is_null($val) || $val instanceof AndroidDeviceOwnerWiFiSecurityType) {
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
        $writer->writeEnumValue('macAddressRandomizationMode', $this->getMacAddressRandomizationMode());
        $writer->writeStringValue('networkName', $this->getNetworkName());
        $writer->writeStringValue('preSharedKey', $this->getPreSharedKey());
        $writer->writeBooleanValue('preSharedKeyIsSet', $this->getPreSharedKeyIsSet());
        $writer->writeStringValue('proxyAutomaticConfigurationUrl', $this->getProxyAutomaticConfigurationUrl());
        $writer->writeStringValue('proxyExclusionList', $this->getProxyExclusionList());
        $writer->writeStringValue('proxyManualAddress', $this->getProxyManualAddress());
        $writer->writeIntegerValue('proxyManualPort', $this->getProxyManualPort());
        $writer->writeEnumValue('proxySettings', $this->getProxySettings());
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
     * Sets the macAddressRandomizationMode property value. The MAC address randomization mode for Android device Wi-Fi configuration. Possible values include automatic and hardware. Default value is automatic. The possible values are: automatic, hardware, unknownFutureValue.
     * @param MacAddressRandomizationMode|null $value Value to set for the macAddressRandomizationMode property.
    */
    public function setMacAddressRandomizationMode(?MacAddressRandomizationMode $value): void {
        $this->getBackingStore()->set('macAddressRandomizationMode', $value);
    }

    /**
     * Sets the networkName property value. Network Name
     * @param string|null $value Value to set for the networkName property.
    */
    public function setNetworkName(?string $value): void {
        $this->getBackingStore()->set('networkName', $value);
    }

    /**
     * Sets the preSharedKey property value. This is the pre-shared key for WPA Personal Wi-Fi network.
     * @param string|null $value Value to set for the preSharedKey property.
    */
    public function setPreSharedKey(?string $value): void {
        $this->getBackingStore()->set('preSharedKey', $value);
    }

    /**
     * Sets the preSharedKeyIsSet property value. This is the pre-shared key for WPA Personal Wi-Fi network.
     * @param bool|null $value Value to set for the preSharedKeyIsSet property.
    */
    public function setPreSharedKeyIsSet(?bool $value): void {
        $this->getBackingStore()->set('preSharedKeyIsSet', $value);
    }

    /**
     * Sets the proxyAutomaticConfigurationUrl property value. Specify the proxy server configuration script URL.
     * @param string|null $value Value to set for the proxyAutomaticConfigurationUrl property.
    */
    public function setProxyAutomaticConfigurationUrl(?string $value): void {
        $this->getBackingStore()->set('proxyAutomaticConfigurationUrl', $value);
    }

    /**
     * Sets the proxyExclusionList property value. List of hosts to exclude using the proxy on connections for. These hosts can use wildcards such as .example.com.
     * @param string|null $value Value to set for the proxyExclusionList property.
    */
    public function setProxyExclusionList(?string $value): void {
        $this->getBackingStore()->set('proxyExclusionList', $value);
    }

    /**
     * Sets the proxyManualAddress property value. Specify the proxy server IP address. Android documentation does not specify IPv4 or IPv6. For example: 192.168.1.1.
     * @param string|null $value Value to set for the proxyManualAddress property.
    */
    public function setProxyManualAddress(?string $value): void {
        $this->getBackingStore()->set('proxyManualAddress', $value);
    }

    /**
     * Sets the proxyManualPort property value. Specify the proxy server port.
     * @param int|null $value Value to set for the proxyManualPort property.
    */
    public function setProxyManualPort(?int $value): void {
        $this->getBackingStore()->set('proxyManualPort', $value);
    }

    /**
     * Sets the proxySettings property value. Wi-Fi Proxy Settings.
     * @param WiFiProxySetting|null $value Value to set for the proxySettings property.
    */
    public function setProxySettings(?WiFiProxySetting $value): void {
        $this->getBackingStore()->set('proxySettings', $value);
    }

    /**
     * Sets the ssid property value. This is the name of the Wi-Fi network that is broadcast to all devices.
     * @param string|null $value Value to set for the ssid property.
    */
    public function setSsid(?string $value): void {
        $this->getBackingStore()->set('ssid', $value);
    }

    /**
     * Sets the wiFiSecurityType property value. Wi-Fi Security Types for Android Device Owner.
     * @param AndroidDeviceOwnerWiFiSecurityType|null $value Value to set for the wiFiSecurityType property.
    */
    public function setWiFiSecurityType(?AndroidDeviceOwnerWiFiSecurityType $value): void {
        $this->getBackingStore()->set('wiFiSecurityType', $value);
    }

}
