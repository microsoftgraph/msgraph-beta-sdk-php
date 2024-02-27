<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * By providing the configurations in this profile you can instruct the iOS device to connect to desired Wi-Fi endpoint. By specifying the authentication method and security types expected by Wi-Fi endpoint you can make the Wi-Fi connection seamless for end user. This profile provides limited and simpler security types than Enterprise Wi-Fi profile.
*/
class IosWiFiConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * Instantiates a new IosWiFiConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.iosWiFiConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosWiFiConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosWiFiConfiguration {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.iosEnterpriseWiFiConfiguration': return new IosEnterpriseWiFiConfiguration();
            }
        }
        return new IosWiFiConfiguration();
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
     * Gets the connectWhenNetworkNameIsHidden property value. Connect when the network is not broadcasting its name (SSID). When set to true, this profile forces the device to connect to a network that doesn't broadcast its SSID to all devices.
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
     * Gets the disableMacAddressRandomization property value. If set to true, forces devices connecting using this Wi-Fi profile to present their actual Wi-Fi MAC address instead of a random MAC address. Applies to iOS 14 and later.
     * @return bool|null
    */
    public function getDisableMacAddressRandomization(): ?bool {
        $val = $this->getBackingStore()->get('disableMacAddressRandomization');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'disableMacAddressRandomization'");
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
            'disableMacAddressRandomization' => fn(ParseNode $n) => $o->setDisableMacAddressRandomization($n->getBooleanValue()),
            'networkName' => fn(ParseNode $n) => $o->setNetworkName($n->getStringValue()),
            'preSharedKey' => fn(ParseNode $n) => $o->setPreSharedKey($n->getStringValue()),
            'proxyAutomaticConfigurationUrl' => fn(ParseNode $n) => $o->setProxyAutomaticConfigurationUrl($n->getStringValue()),
            'proxyManualAddress' => fn(ParseNode $n) => $o->setProxyManualAddress($n->getStringValue()),
            'proxyManualPort' => fn(ParseNode $n) => $o->setProxyManualPort($n->getIntegerValue()),
            'proxySettings' => fn(ParseNode $n) => $o->setProxySettings($n->getEnumValue(WiFiProxySetting::class)),
            'ssid' => fn(ParseNode $n) => $o->setSsid($n->getStringValue()),
            'wiFiSecurityType' => fn(ParseNode $n) => $o->setWiFiSecurityType($n->getEnumValue(WiFiSecurityType::class)),
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
     * Gets the proxyAutomaticConfigurationUrl property value. URL of the proxy server automatic configuration script when automatic configuration is selected. This URL is typically the location of PAC (Proxy Auto Configuration) file.
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
     * Gets the proxyManualAddress property value. IP Address or DNS hostname of the proxy server when manual configuration is selected.
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
     * Gets the proxyManualPort property value. Port of the proxy server when manual configuration is selected.
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
     * Gets the wiFiSecurityType property value. Wi-Fi Security Types.
     * @return WiFiSecurityType|null
    */
    public function getWiFiSecurityType(): ?WiFiSecurityType {
        $val = $this->getBackingStore()->get('wiFiSecurityType');
        if (is_null($val) || $val instanceof WiFiSecurityType) {
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
        $writer->writeBooleanValue('disableMacAddressRandomization', $this->getDisableMacAddressRandomization());
        $writer->writeStringValue('networkName', $this->getNetworkName());
        $writer->writeStringValue('preSharedKey', $this->getPreSharedKey());
        $writer->writeStringValue('proxyAutomaticConfigurationUrl', $this->getProxyAutomaticConfigurationUrl());
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
     * Sets the connectWhenNetworkNameIsHidden property value. Connect when the network is not broadcasting its name (SSID). When set to true, this profile forces the device to connect to a network that doesn't broadcast its SSID to all devices.
     * @param bool|null $value Value to set for the connectWhenNetworkNameIsHidden property.
    */
    public function setConnectWhenNetworkNameIsHidden(?bool $value): void {
        $this->getBackingStore()->set('connectWhenNetworkNameIsHidden', $value);
    }

    /**
     * Sets the disableMacAddressRandomization property value. If set to true, forces devices connecting using this Wi-Fi profile to present their actual Wi-Fi MAC address instead of a random MAC address. Applies to iOS 14 and later.
     * @param bool|null $value Value to set for the disableMacAddressRandomization property.
    */
    public function setDisableMacAddressRandomization(?bool $value): void {
        $this->getBackingStore()->set('disableMacAddressRandomization', $value);
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
     * Sets the proxyAutomaticConfigurationUrl property value. URL of the proxy server automatic configuration script when automatic configuration is selected. This URL is typically the location of PAC (Proxy Auto Configuration) file.
     * @param string|null $value Value to set for the proxyAutomaticConfigurationUrl property.
    */
    public function setProxyAutomaticConfigurationUrl(?string $value): void {
        $this->getBackingStore()->set('proxyAutomaticConfigurationUrl', $value);
    }

    /**
     * Sets the proxyManualAddress property value. IP Address or DNS hostname of the proxy server when manual configuration is selected.
     * @param string|null $value Value to set for the proxyManualAddress property.
    */
    public function setProxyManualAddress(?string $value): void {
        $this->getBackingStore()->set('proxyManualAddress', $value);
    }

    /**
     * Sets the proxyManualPort property value. Port of the proxy server when manual configuration is selected.
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
     * Sets the wiFiSecurityType property value. Wi-Fi Security Types.
     * @param WiFiSecurityType|null $value Value to set for the wiFiSecurityType property.
    */
    public function setWiFiSecurityType(?WiFiSecurityType $value): void {
        $this->getBackingStore()->set('wiFiSecurityType', $value);
    }

}
