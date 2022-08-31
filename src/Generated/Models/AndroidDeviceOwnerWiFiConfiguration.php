<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidDeviceOwnerWiFiConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * @var bool|null $connectAutomatically Connect automatically when this network is in range. Setting this to true will skip the user prompt and automatically connect the device to Wi-Fi network.
    */
    private ?bool $connectAutomatically = null;
    
    /**
     * @var bool|null $connectWhenNetworkNameIsHidden When set to true, this profile forces the device to connect to a network that doesn't broadcast its SSID to all devices.
    */
    private ?bool $connectWhenNetworkNameIsHidden = null;
    
    /**
     * @var string|null $networkName Network Name
    */
    private ?string $networkName = null;
    
    /**
     * @var string|null $preSharedKey This is the pre-shared key for WPA Personal Wi-Fi network.
    */
    private ?string $preSharedKey = null;
    
    /**
     * @var bool|null $preSharedKeyIsSet This is the pre-shared key for WPA Personal Wi-Fi network.
    */
    private ?bool $preSharedKeyIsSet = null;
    
    /**
     * @var string|null $proxyAutomaticConfigurationUrl Specify the proxy server configuration script URL.
    */
    private ?string $proxyAutomaticConfigurationUrl = null;
    
    /**
     * @var string|null $proxyExclusionList List of hosts to exclude using the proxy on connections for. These hosts can use wildcards such as .example.com.
    */
    private ?string $proxyExclusionList = null;
    
    /**
     * @var string|null $proxyManualAddress Specify the proxy server IP address. Android documentation does not specify IPv4 or IPv6. For example: 192.168.1.1.
    */
    private ?string $proxyManualAddress = null;
    
    /**
     * @var int|null $proxyManualPort Specify the proxy server port.
    */
    private ?int $proxyManualPort = null;
    
    /**
     * @var WiFiProxySetting|null $proxySettings Wi-Fi Proxy Settings.
    */
    private ?WiFiProxySetting $proxySettings = null;
    
    /**
     * @var string|null $ssid This is the name of the Wi-Fi network that is broadcast to all devices.
    */
    private ?string $ssid = null;
    
    /**
     * @var AndroidDeviceOwnerWiFiSecurityType|null $wiFiSecurityType Wi-Fi Security Types for Android Device Owner.
    */
    private ?AndroidDeviceOwnerWiFiSecurityType $wiFiSecurityType = null;
    
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
        return $this->connectAutomatically;
    }

    /**
     * Gets the connectWhenNetworkNameIsHidden property value. When set to true, this profile forces the device to connect to a network that doesn't broadcast its SSID to all devices.
     * @return bool|null
    */
    public function getConnectWhenNetworkNameIsHidden(): ?bool {
        return $this->connectWhenNetworkNameIsHidden;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'connectAutomatically' => function (ParseNode $n) use ($o) { $o->setConnectAutomatically($n->getBooleanValue()); },
            'connectWhenNetworkNameIsHidden' => function (ParseNode $n) use ($o) { $o->setConnectWhenNetworkNameIsHidden($n->getBooleanValue()); },
            'networkName' => function (ParseNode $n) use ($o) { $o->setNetworkName($n->getStringValue()); },
            'preSharedKey' => function (ParseNode $n) use ($o) { $o->setPreSharedKey($n->getStringValue()); },
            'preSharedKeyIsSet' => function (ParseNode $n) use ($o) { $o->setPreSharedKeyIsSet($n->getBooleanValue()); },
            'proxyAutomaticConfigurationUrl' => function (ParseNode $n) use ($o) { $o->setProxyAutomaticConfigurationUrl($n->getStringValue()); },
            'proxyExclusionList' => function (ParseNode $n) use ($o) { $o->setProxyExclusionList($n->getStringValue()); },
            'proxyManualAddress' => function (ParseNode $n) use ($o) { $o->setProxyManualAddress($n->getStringValue()); },
            'proxyManualPort' => function (ParseNode $n) use ($o) { $o->setProxyManualPort($n->getIntegerValue()); },
            'proxySettings' => function (ParseNode $n) use ($o) { $o->setProxySettings($n->getEnumValue(WiFiProxySetting::class)); },
            'ssid' => function (ParseNode $n) use ($o) { $o->setSsid($n->getStringValue()); },
            'wiFiSecurityType' => function (ParseNode $n) use ($o) { $o->setWiFiSecurityType($n->getEnumValue(AndroidDeviceOwnerWiFiSecurityType::class)); },
        ]);
    }

    /**
     * Gets the networkName property value. Network Name
     * @return string|null
    */
    public function getNetworkName(): ?string {
        return $this->networkName;
    }

    /**
     * Gets the preSharedKey property value. This is the pre-shared key for WPA Personal Wi-Fi network.
     * @return string|null
    */
    public function getPreSharedKey(): ?string {
        return $this->preSharedKey;
    }

    /**
     * Gets the preSharedKeyIsSet property value. This is the pre-shared key for WPA Personal Wi-Fi network.
     * @return bool|null
    */
    public function getPreSharedKeyIsSet(): ?bool {
        return $this->preSharedKeyIsSet;
    }

    /**
     * Gets the proxyAutomaticConfigurationUrl property value. Specify the proxy server configuration script URL.
     * @return string|null
    */
    public function getProxyAutomaticConfigurationUrl(): ?string {
        return $this->proxyAutomaticConfigurationUrl;
    }

    /**
     * Gets the proxyExclusionList property value. List of hosts to exclude using the proxy on connections for. These hosts can use wildcards such as .example.com.
     * @return string|null
    */
    public function getProxyExclusionList(): ?string {
        return $this->proxyExclusionList;
    }

    /**
     * Gets the proxyManualAddress property value. Specify the proxy server IP address. Android documentation does not specify IPv4 or IPv6. For example: 192.168.1.1.
     * @return string|null
    */
    public function getProxyManualAddress(): ?string {
        return $this->proxyManualAddress;
    }

    /**
     * Gets the proxyManualPort property value. Specify the proxy server port.
     * @return int|null
    */
    public function getProxyManualPort(): ?int {
        return $this->proxyManualPort;
    }

    /**
     * Gets the proxySettings property value. Wi-Fi Proxy Settings.
     * @return WiFiProxySetting|null
    */
    public function getProxySettings(): ?WiFiProxySetting {
        return $this->proxySettings;
    }

    /**
     * Gets the ssid property value. This is the name of the Wi-Fi network that is broadcast to all devices.
     * @return string|null
    */
    public function getSsid(): ?string {
        return $this->ssid;
    }

    /**
     * Gets the wiFiSecurityType property value. Wi-Fi Security Types for Android Device Owner.
     * @return AndroidDeviceOwnerWiFiSecurityType|null
    */
    public function getWiFiSecurityType(): ?AndroidDeviceOwnerWiFiSecurityType {
        return $this->wiFiSecurityType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('connectAutomatically', $this->connectAutomatically);
        $writer->writeBooleanValue('connectWhenNetworkNameIsHidden', $this->connectWhenNetworkNameIsHidden);
        $writer->writeStringValue('networkName', $this->networkName);
        $writer->writeStringValue('preSharedKey', $this->preSharedKey);
        $writer->writeBooleanValue('preSharedKeyIsSet', $this->preSharedKeyIsSet);
        $writer->writeStringValue('proxyAutomaticConfigurationUrl', $this->proxyAutomaticConfigurationUrl);
        $writer->writeStringValue('proxyExclusionList', $this->proxyExclusionList);
        $writer->writeStringValue('proxyManualAddress', $this->proxyManualAddress);
        $writer->writeIntegerValue('proxyManualPort', $this->proxyManualPort);
        $writer->writeEnumValue('proxySettings', $this->proxySettings);
        $writer->writeStringValue('ssid', $this->ssid);
        $writer->writeEnumValue('wiFiSecurityType', $this->wiFiSecurityType);
    }

    /**
     * Sets the connectAutomatically property value. Connect automatically when this network is in range. Setting this to true will skip the user prompt and automatically connect the device to Wi-Fi network.
     *  @param bool|null $value Value to set for the connectAutomatically property.
    */
    public function setConnectAutomatically(?bool $value ): void {
        $this->connectAutomatically = $value;
    }

    /**
     * Sets the connectWhenNetworkNameIsHidden property value. When set to true, this profile forces the device to connect to a network that doesn't broadcast its SSID to all devices.
     *  @param bool|null $value Value to set for the connectWhenNetworkNameIsHidden property.
    */
    public function setConnectWhenNetworkNameIsHidden(?bool $value ): void {
        $this->connectWhenNetworkNameIsHidden = $value;
    }

    /**
     * Sets the networkName property value. Network Name
     *  @param string|null $value Value to set for the networkName property.
    */
    public function setNetworkName(?string $value ): void {
        $this->networkName = $value;
    }

    /**
     * Sets the preSharedKey property value. This is the pre-shared key for WPA Personal Wi-Fi network.
     *  @param string|null $value Value to set for the preSharedKey property.
    */
    public function setPreSharedKey(?string $value ): void {
        $this->preSharedKey = $value;
    }

    /**
     * Sets the preSharedKeyIsSet property value. This is the pre-shared key for WPA Personal Wi-Fi network.
     *  @param bool|null $value Value to set for the preSharedKeyIsSet property.
    */
    public function setPreSharedKeyIsSet(?bool $value ): void {
        $this->preSharedKeyIsSet = $value;
    }

    /**
     * Sets the proxyAutomaticConfigurationUrl property value. Specify the proxy server configuration script URL.
     *  @param string|null $value Value to set for the proxyAutomaticConfigurationUrl property.
    */
    public function setProxyAutomaticConfigurationUrl(?string $value ): void {
        $this->proxyAutomaticConfigurationUrl = $value;
    }

    /**
     * Sets the proxyExclusionList property value. List of hosts to exclude using the proxy on connections for. These hosts can use wildcards such as .example.com.
     *  @param string|null $value Value to set for the proxyExclusionList property.
    */
    public function setProxyExclusionList(?string $value ): void {
        $this->proxyExclusionList = $value;
    }

    /**
     * Sets the proxyManualAddress property value. Specify the proxy server IP address. Android documentation does not specify IPv4 or IPv6. For example: 192.168.1.1.
     *  @param string|null $value Value to set for the proxyManualAddress property.
    */
    public function setProxyManualAddress(?string $value ): void {
        $this->proxyManualAddress = $value;
    }

    /**
     * Sets the proxyManualPort property value. Specify the proxy server port.
     *  @param int|null $value Value to set for the proxyManualPort property.
    */
    public function setProxyManualPort(?int $value ): void {
        $this->proxyManualPort = $value;
    }

    /**
     * Sets the proxySettings property value. Wi-Fi Proxy Settings.
     *  @param WiFiProxySetting|null $value Value to set for the proxySettings property.
    */
    public function setProxySettings(?WiFiProxySetting $value ): void {
        $this->proxySettings = $value;
    }

    /**
     * Sets the ssid property value. This is the name of the Wi-Fi network that is broadcast to all devices.
     *  @param string|null $value Value to set for the ssid property.
    */
    public function setSsid(?string $value ): void {
        $this->ssid = $value;
    }

    /**
     * Sets the wiFiSecurityType property value. Wi-Fi Security Types for Android Device Owner.
     *  @param AndroidDeviceOwnerWiFiSecurityType|null $value Value to set for the wiFiSecurityType property.
    */
    public function setWiFiSecurityType(?AndroidDeviceOwnerWiFiSecurityType $value ): void {
        $this->wiFiSecurityType = $value;
    }

}
