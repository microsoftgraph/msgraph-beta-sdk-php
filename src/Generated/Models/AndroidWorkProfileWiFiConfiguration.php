<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * By providing the configurations in this profile you can instruct the Android Work Profile device to connect to desired Wi-Fi endpoint. By specifying the authentication method and security types expected by Wi-Fi endpoint you can make the Wi-Fi connection seamless for end user. This profile provides limited and simpler security types than Enterprise Wi-Fi profile.
*/
class AndroidWorkProfileWiFiConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * Instantiates a new AndroidWorkProfileWiFiConfiguration and sets the default values.
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
     * Gets the connectAutomatically property value. When set to true, device will connect automatically to the Wi-Fi network when in range, skipping the user prompt. When false, user will need to connect manually through Settings on the Android device. Default value is false.
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
     * Gets the connectWhenNetworkNameIsHidden property value. When set to true, this profile forces the device to connect to a network that doesn't broadcast its SSID to all devices. When false, device will not automatically connect to hidden networks. Default value is false.
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
            'preSharedKey' => fn(ParseNode $n) => $o->setPreSharedKey($n->getStringValue()),
            'preSharedKeyIsSet' => fn(ParseNode $n) => $o->setPreSharedKeyIsSet($n->getBooleanValue()),
            'proxyAutomaticConfigurationUrl' => fn(ParseNode $n) => $o->setProxyAutomaticConfigurationUrl($n->getStringValue()),
            'proxySettings' => fn(ParseNode $n) => $o->setProxySettings($n->getEnumValue(WiFiProxySetting::class)),
            'ssid' => fn(ParseNode $n) => $o->setSsid($n->getStringValue()),
            'wiFiSecurityType' => fn(ParseNode $n) => $o->setWiFiSecurityType($n->getEnumValue(AndroidWiFiSecurityType::class)),
        ]);
    }

    /**
     * Gets the networkName property value. The name of the Wi-Fi network.
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
     * Gets the preSharedKey property value. Specify the pre-shared key for a WEP or WPA personal Wi-Fi network. Restrictions depend on the value set for wiFiSecurityType. If WEP type security is used, then preSharedKey must be a valid passphrase (5 or 13 characters) or a valid HEX key (10 or 26 hexidecimal characters). If WPA security type is used, then preSharedKey can be any string between 8 and 64 characters long.
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
     * Gets the preSharedKeyIsSet property value. When set to true, indicates that the pre-shared key is configured. When set to false, indicates that pre-shared key is not configured (any values set for preSharedKey will be ignored). Default value is false.
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
     * Gets the wiFiSecurityType property value. The possible security types for Android Wi-Fi profiles. Default value 'Open', indicates no authentication required for the network. The security protocols supported are WEP, WPA and WPA2. 'WpaEnterprise' and 'Wpa2Enterprise' options are available for Enterprise Wi-Fi profiles. 'Wep' and 'WpaPersonal' (supports WPA and WPA2) options are available for Basic Wi-Fi profiles.
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
        $writer->writeStringValue('preSharedKey', $this->getPreSharedKey());
        $writer->writeBooleanValue('preSharedKeyIsSet', $this->getPreSharedKeyIsSet());
        $writer->writeStringValue('proxyAutomaticConfigurationUrl', $this->getProxyAutomaticConfigurationUrl());
        $writer->writeEnumValue('proxySettings', $this->getProxySettings());
        $writer->writeStringValue('ssid', $this->getSsid());
        $writer->writeEnumValue('wiFiSecurityType', $this->getWiFiSecurityType());
    }

    /**
     * Sets the connectAutomatically property value. When set to true, device will connect automatically to the Wi-Fi network when in range, skipping the user prompt. When false, user will need to connect manually through Settings on the Android device. Default value is false.
     * @param bool|null $value Value to set for the connectAutomatically property.
    */
    public function setConnectAutomatically(?bool $value): void {
        $this->getBackingStore()->set('connectAutomatically', $value);
    }

    /**
     * Sets the connectWhenNetworkNameIsHidden property value. When set to true, this profile forces the device to connect to a network that doesn't broadcast its SSID to all devices. When false, device will not automatically connect to hidden networks. Default value is false.
     * @param bool|null $value Value to set for the connectWhenNetworkNameIsHidden property.
    */
    public function setConnectWhenNetworkNameIsHidden(?bool $value): void {
        $this->getBackingStore()->set('connectWhenNetworkNameIsHidden', $value);
    }

    /**
     * Sets the networkName property value. The name of the Wi-Fi network.
     * @param string|null $value Value to set for the networkName property.
    */
    public function setNetworkName(?string $value): void {
        $this->getBackingStore()->set('networkName', $value);
    }

    /**
     * Sets the preSharedKey property value. Specify the pre-shared key for a WEP or WPA personal Wi-Fi network. Restrictions depend on the value set for wiFiSecurityType. If WEP type security is used, then preSharedKey must be a valid passphrase (5 or 13 characters) or a valid HEX key (10 or 26 hexidecimal characters). If WPA security type is used, then preSharedKey can be any string between 8 and 64 characters long.
     * @param string|null $value Value to set for the preSharedKey property.
    */
    public function setPreSharedKey(?string $value): void {
        $this->getBackingStore()->set('preSharedKey', $value);
    }

    /**
     * Sets the preSharedKeyIsSet property value. When set to true, indicates that the pre-shared key is configured. When set to false, indicates that pre-shared key is not configured (any values set for preSharedKey will be ignored). Default value is false.
     * @param bool|null $value Value to set for the preSharedKeyIsSet property.
    */
    public function setPreSharedKeyIsSet(?bool $value): void {
        $this->getBackingStore()->set('preSharedKeyIsSet', $value);
    }

    /**
     * Sets the proxyAutomaticConfigurationUrl property value. URL of the proxy server automatic configuration script when automatic configuration is selected. This URL is typically the location of PAC (Proxy Auto Configuration) file.
     * @param string|null $value Value to set for the proxyAutomaticConfigurationUrl property.
    */
    public function setProxyAutomaticConfigurationUrl(?string $value): void {
        $this->getBackingStore()->set('proxyAutomaticConfigurationUrl', $value);
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
     * Sets the wiFiSecurityType property value. The possible security types for Android Wi-Fi profiles. Default value 'Open', indicates no authentication required for the network. The security protocols supported are WEP, WPA and WPA2. 'WpaEnterprise' and 'Wpa2Enterprise' options are available for Enterprise Wi-Fi profiles. 'Wep' and 'WpaPersonal' (supports WPA and WPA2) options are available for Basic Wi-Fi profiles.
     * @param AndroidWiFiSecurityType|null $value Value to set for the wiFiSecurityType property.
    */
    public function setWiFiSecurityType(?AndroidWiFiSecurityType $value): void {
        $this->getBackingStore()->set('wiFiSecurityType', $value);
    }

}
