<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * By providing the configurations in this profile you can instruct the AOSP device to connect to desired Wi-Fi endpoint. By specifying the authentication method and security types expected by Wi-Fi endpoint you can make the Wi-Fi connection seamless for end user. This profile provides limited and simpler security types than Enterprise Wi-Fi profile.
*/
class AospDeviceOwnerWiFiConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * Instantiates a new AospDeviceOwnerWiFiConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.aospDeviceOwnerWiFiConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AospDeviceOwnerWiFiConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AospDeviceOwnerWiFiConfiguration {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.aospDeviceOwnerEnterpriseWiFiConfiguration': return new AospDeviceOwnerEnterpriseWiFiConfiguration();
            }
        }
        return new AospDeviceOwnerWiFiConfiguration();
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
            'preSharedKey' => fn(ParseNode $n) => $o->setPreSharedKey($n->getStringValue()),
            'preSharedKeyIsSet' => fn(ParseNode $n) => $o->setPreSharedKeyIsSet($n->getBooleanValue()),
            'proxyAutomaticConfigurationUrl' => fn(ParseNode $n) => $o->setProxyAutomaticConfigurationUrl($n->getStringValue()),
            'proxyExclusionList' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setProxyExclusionList($val);
            },
            'proxyManualAddress' => fn(ParseNode $n) => $o->setProxyManualAddress($n->getStringValue()),
            'proxyManualPort' => fn(ParseNode $n) => $o->setProxyManualPort($n->getIntegerValue()),
            'proxySetting' => fn(ParseNode $n) => $o->setProxySetting($n->getEnumValue(WiFiProxySetting::class)),
            'ssid' => fn(ParseNode $n) => $o->setSsid($n->getStringValue()),
            'wiFiSecurityType' => fn(ParseNode $n) => $o->setWiFiSecurityType($n->getEnumValue(AospDeviceOwnerWiFiSecurityType::class)),
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
     * @return array<string>|null
    */
    public function getProxyExclusionList(): ?array {
        $val = $this->getBackingStore()->get('proxyExclusionList');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'proxyExclusionList'");
    }

    /**
     * Gets the proxyManualAddress property value. Specify the proxy server IP address. Both IPv4 and IPv6 addresses are supported. For example: 192.168.1.1.
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
     * Gets the proxySetting property value. Wi-Fi Proxy Settings.
     * @return WiFiProxySetting|null
    */
    public function getProxySetting(): ?WiFiProxySetting {
        $val = $this->getBackingStore()->get('proxySetting');
        if (is_null($val) || $val instanceof WiFiProxySetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'proxySetting'");
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
     * Gets the wiFiSecurityType property value. Wi-Fi Security Types for AOSP Device Owner.
     * @return AospDeviceOwnerWiFiSecurityType|null
    */
    public function getWiFiSecurityType(): ?AospDeviceOwnerWiFiSecurityType {
        $val = $this->getBackingStore()->get('wiFiSecurityType');
        if (is_null($val) || $val instanceof AospDeviceOwnerWiFiSecurityType) {
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
        $writer->writeCollectionOfPrimitiveValues('proxyExclusionList', $this->getProxyExclusionList());
        $writer->writeStringValue('proxyManualAddress', $this->getProxyManualAddress());
        $writer->writeIntegerValue('proxyManualPort', $this->getProxyManualPort());
        $writer->writeEnumValue('proxySetting', $this->getProxySetting());
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
     * @param array<string>|null $value Value to set for the proxyExclusionList property.
    */
    public function setProxyExclusionList(?array $value): void {
        $this->getBackingStore()->set('proxyExclusionList', $value);
    }

    /**
     * Sets the proxyManualAddress property value. Specify the proxy server IP address. Both IPv4 and IPv6 addresses are supported. For example: 192.168.1.1.
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
     * Sets the proxySetting property value. Wi-Fi Proxy Settings.
     * @param WiFiProxySetting|null $value Value to set for the proxySetting property.
    */
    public function setProxySetting(?WiFiProxySetting $value): void {
        $this->getBackingStore()->set('proxySetting', $value);
    }

    /**
     * Sets the ssid property value. This is the name of the Wi-Fi network that is broadcast to all devices.
     * @param string|null $value Value to set for the ssid property.
    */
    public function setSsid(?string $value): void {
        $this->getBackingStore()->set('ssid', $value);
    }

    /**
     * Sets the wiFiSecurityType property value. Wi-Fi Security Types for AOSP Device Owner.
     * @param AospDeviceOwnerWiFiSecurityType|null $value Value to set for the wiFiSecurityType property.
    */
    public function setWiFiSecurityType(?AospDeviceOwnerWiFiSecurityType $value): void {
        $this->getBackingStore()->set('wiFiSecurityType', $value);
    }

}
