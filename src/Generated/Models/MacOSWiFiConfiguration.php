<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MacOSWiFiConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * @var bool|null $connectAutomatically Connect automatically when this network is in range. Setting this to true will skip the user prompt and automatically connect the device to Wi-Fi network.
    */
    private ?bool $connectAutomatically = null;
    
    /**
     * @var bool|null $connectWhenNetworkNameIsHidden Connect when the network is not broadcasting its name (SSID). When set to true, this profile forces the device to connect to a network that doesn't broadcast its SSID to all devices.
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
     * @var string|null $proxyAutomaticConfigurationUrl URL of the proxy server automatic configuration script when automatic configuration is selected. This URL is typically the location of PAC (Proxy Auto Configuration) file.
    */
    private ?string $proxyAutomaticConfigurationUrl = null;
    
    /**
     * @var string|null $proxyManualAddress IP Address or DNS hostname of the proxy server when manual configuration is selected.
    */
    private ?string $proxyManualAddress = null;
    
    /**
     * @var int|null $proxyManualPort Port of the proxy server when manual configuration is selected.
    */
    private ?int $proxyManualPort = null;
    
    /**
     * @var WiFiProxySetting|null $proxySettings Proxy Type for this Wi-Fi connection. Possible values are: none, manual, automatic.
    */
    private ?WiFiProxySetting $proxySettings = null;
    
    /**
     * @var string|null $ssid This is the name of the Wi-Fi network that is broadcast to all devices.
    */
    private ?string $ssid = null;
    
    /**
     * @var WiFiSecurityType|null $wiFiSecurityType Indicates whether Wi-Fi endpoint uses an EAP based security type. Possible values are: open, wpaPersonal, wpaEnterprise, wep, wpa2Personal, wpa2Enterprise.
    */
    private ?WiFiSecurityType $wiFiSecurityType = null;
    
    /**
     * Instantiates a new MacOSWiFiConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MacOSWiFiConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MacOSWiFiConfiguration {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.macOSEnterpriseWiFiConfiguration': return new MacOSEnterpriseWiFiConfiguration();
            }
        }
        return new MacOSWiFiConfiguration();
    }

    /**
     * Gets the connectAutomatically property value. Connect automatically when this network is in range. Setting this to true will skip the user prompt and automatically connect the device to Wi-Fi network.
     * @return bool|null
    */
    public function getConnectAutomatically(): ?bool {
        return $this->connectAutomatically;
    }

    /**
     * Gets the connectWhenNetworkNameIsHidden property value. Connect when the network is not broadcasting its name (SSID). When set to true, this profile forces the device to connect to a network that doesn't broadcast its SSID to all devices.
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
            'proxyAutomaticConfigurationUrl' => function (ParseNode $n) use ($o) { $o->setProxyAutomaticConfigurationUrl($n->getStringValue()); },
            'proxyManualAddress' => function (ParseNode $n) use ($o) { $o->setProxyManualAddress($n->getStringValue()); },
            'proxyManualPort' => function (ParseNode $n) use ($o) { $o->setProxyManualPort($n->getIntegerValue()); },
            'proxySettings' => function (ParseNode $n) use ($o) { $o->setProxySettings($n->getEnumValue(WiFiProxySetting::class)); },
            'ssid' => function (ParseNode $n) use ($o) { $o->setSsid($n->getStringValue()); },
            'wiFiSecurityType' => function (ParseNode $n) use ($o) { $o->setWiFiSecurityType($n->getEnumValue(WiFiSecurityType::class)); },
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
     * Gets the proxyAutomaticConfigurationUrl property value. URL of the proxy server automatic configuration script when automatic configuration is selected. This URL is typically the location of PAC (Proxy Auto Configuration) file.
     * @return string|null
    */
    public function getProxyAutomaticConfigurationUrl(): ?string {
        return $this->proxyAutomaticConfigurationUrl;
    }

    /**
     * Gets the proxyManualAddress property value. IP Address or DNS hostname of the proxy server when manual configuration is selected.
     * @return string|null
    */
    public function getProxyManualAddress(): ?string {
        return $this->proxyManualAddress;
    }

    /**
     * Gets the proxyManualPort property value. Port of the proxy server when manual configuration is selected.
     * @return int|null
    */
    public function getProxyManualPort(): ?int {
        return $this->proxyManualPort;
    }

    /**
     * Gets the proxySettings property value. Proxy Type for this Wi-Fi connection. Possible values are: none, manual, automatic.
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
     * Gets the wiFiSecurityType property value. Indicates whether Wi-Fi endpoint uses an EAP based security type. Possible values are: open, wpaPersonal, wpaEnterprise, wep, wpa2Personal, wpa2Enterprise.
     * @return WiFiSecurityType|null
    */
    public function getWiFiSecurityType(): ?WiFiSecurityType {
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
        $writer->writeStringValue('proxyAutomaticConfigurationUrl', $this->proxyAutomaticConfigurationUrl);
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
     * Sets the connectWhenNetworkNameIsHidden property value. Connect when the network is not broadcasting its name (SSID). When set to true, this profile forces the device to connect to a network that doesn't broadcast its SSID to all devices.
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
     * Sets the proxyAutomaticConfigurationUrl property value. URL of the proxy server automatic configuration script when automatic configuration is selected. This URL is typically the location of PAC (Proxy Auto Configuration) file.
     *  @param string|null $value Value to set for the proxyAutomaticConfigurationUrl property.
    */
    public function setProxyAutomaticConfigurationUrl(?string $value ): void {
        $this->proxyAutomaticConfigurationUrl = $value;
    }

    /**
     * Sets the proxyManualAddress property value. IP Address or DNS hostname of the proxy server when manual configuration is selected.
     *  @param string|null $value Value to set for the proxyManualAddress property.
    */
    public function setProxyManualAddress(?string $value ): void {
        $this->proxyManualAddress = $value;
    }

    /**
     * Sets the proxyManualPort property value. Port of the proxy server when manual configuration is selected.
     *  @param int|null $value Value to set for the proxyManualPort property.
    */
    public function setProxyManualPort(?int $value ): void {
        $this->proxyManualPort = $value;
    }

    /**
     * Sets the proxySettings property value. Proxy Type for this Wi-Fi connection. Possible values are: none, manual, automatic.
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
     * Sets the wiFiSecurityType property value. Indicates whether Wi-Fi endpoint uses an EAP based security type. Possible values are: open, wpaPersonal, wpaEnterprise, wep, wpa2Personal, wpa2Enterprise.
     *  @param WiFiSecurityType|null $value Value to set for the wiFiSecurityType property.
    */
    public function setWiFiSecurityType(?WiFiSecurityType $value ): void {
        $this->wiFiSecurityType = $value;
    }

}
