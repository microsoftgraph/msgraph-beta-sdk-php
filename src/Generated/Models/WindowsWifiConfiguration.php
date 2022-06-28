<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsWifiConfiguration extends DeviceConfiguration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $connectAutomatically Specify whether the wifi connection should connect automatically when in range.
    */
    private ?bool $connectAutomatically = null;
    
    /**
     * @var bool|null $connectToPreferredNetwork Specify whether the wifi connection should connect to more preferred networks when already connected to this one.  Requires ConnectAutomatically to be true.
    */
    private ?bool $connectToPreferredNetwork = null;
    
    /**
     * @var bool|null $connectWhenNetworkNameIsHidden Specify whether the wifi connection should connect automatically even when the SSID is not broadcasting.
    */
    private ?bool $connectWhenNetworkNameIsHidden = null;
    
    /**
     * @var bool|null $forceFIPSCompliance Specify whether to force FIPS compliance.
    */
    private ?bool $forceFIPSCompliance = null;
    
    /**
     * @var MeteredConnectionLimitType|null $meteredConnectionLimit Specify the metered connection limit type for the wifi connection. Possible values are: unrestricted, fixed, variable.
    */
    private ?MeteredConnectionLimitType $meteredConnectionLimit = null;
    
    /**
     * @var string|null $networkName Specify the network configuration name.
    */
    private ?string $networkName = null;
    
    /**
     * @var string|null $preSharedKey This is the pre-shared key for WPA Personal Wi-Fi network.
    */
    private ?string $preSharedKey = null;
    
    /**
     * @var string|null $proxyAutomaticConfigurationUrl Specify the URL for the proxy server configuration script.
    */
    private ?string $proxyAutomaticConfigurationUrl = null;
    
    /**
     * @var string|null $proxyManualAddress Specify the IP address for the proxy server.
    */
    private ?string $proxyManualAddress = null;
    
    /**
     * @var int|null $proxyManualPort Specify the port for the proxy server.
    */
    private ?int $proxyManualPort = null;
    
    /**
     * @var WiFiProxySetting|null $proxySetting Specify the proxy setting for Wi-Fi configuration. Possible values are: none, manual, automatic.
    */
    private ?WiFiProxySetting $proxySetting = null;
    
    /**
     * @var string|null $ssid Specify the SSID of the wifi connection.
    */
    private ?string $ssid = null;
    
    /**
     * @var WiFiSecurityType|null $wifiSecurityType Specify the Wifi Security Type. Possible values are: open, wpaPersonal, wpaEnterprise, wep, wpa2Personal, wpa2Enterprise.
    */
    private ?WiFiSecurityType $wifiSecurityType = null;
    
    /**
     * Instantiates a new WindowsWifiConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsWifiConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsWifiConfiguration {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.windowsWifiEnterpriseEAPConfiguration': return new WindowsWifiEnterpriseEAPConfiguration();
            }
        }
        return new WindowsWifiConfiguration();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the connectAutomatically property value. Specify whether the wifi connection should connect automatically when in range.
     * @return bool|null
    */
    public function getConnectAutomatically(): ?bool {
        return $this->connectAutomatically;
    }

    /**
     * Gets the connectToPreferredNetwork property value. Specify whether the wifi connection should connect to more preferred networks when already connected to this one.  Requires ConnectAutomatically to be true.
     * @return bool|null
    */
    public function getConnectToPreferredNetwork(): ?bool {
        return $this->connectToPreferredNetwork;
    }

    /**
     * Gets the connectWhenNetworkNameIsHidden property value. Specify whether the wifi connection should connect automatically even when the SSID is not broadcasting.
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
            'connectToPreferredNetwork' => function (ParseNode $n) use ($o) { $o->setConnectToPreferredNetwork($n->getBooleanValue()); },
            'connectWhenNetworkNameIsHidden' => function (ParseNode $n) use ($o) { $o->setConnectWhenNetworkNameIsHidden($n->getBooleanValue()); },
            'forceFIPSCompliance' => function (ParseNode $n) use ($o) { $o->setForceFIPSCompliance($n->getBooleanValue()); },
            'meteredConnectionLimit' => function (ParseNode $n) use ($o) { $o->setMeteredConnectionLimit($n->getEnumValue(MeteredConnectionLimitType::class)); },
            'networkName' => function (ParseNode $n) use ($o) { $o->setNetworkName($n->getStringValue()); },
            'preSharedKey' => function (ParseNode $n) use ($o) { $o->setPreSharedKey($n->getStringValue()); },
            'proxyAutomaticConfigurationUrl' => function (ParseNode $n) use ($o) { $o->setProxyAutomaticConfigurationUrl($n->getStringValue()); },
            'proxyManualAddress' => function (ParseNode $n) use ($o) { $o->setProxyManualAddress($n->getStringValue()); },
            'proxyManualPort' => function (ParseNode $n) use ($o) { $o->setProxyManualPort($n->getIntegerValue()); },
            'proxySetting' => function (ParseNode $n) use ($o) { $o->setProxySetting($n->getEnumValue(WiFiProxySetting::class)); },
            'ssid' => function (ParseNode $n) use ($o) { $o->setSsid($n->getStringValue()); },
            'wifiSecurityType' => function (ParseNode $n) use ($o) { $o->setWifiSecurityType($n->getEnumValue(WiFiSecurityType::class)); },
        ]);
    }

    /**
     * Gets the forceFIPSCompliance property value. Specify whether to force FIPS compliance.
     * @return bool|null
    */
    public function getForceFIPSCompliance(): ?bool {
        return $this->forceFIPSCompliance;
    }

    /**
     * Gets the meteredConnectionLimit property value. Specify the metered connection limit type for the wifi connection. Possible values are: unrestricted, fixed, variable.
     * @return MeteredConnectionLimitType|null
    */
    public function getMeteredConnectionLimit(): ?MeteredConnectionLimitType {
        return $this->meteredConnectionLimit;
    }

    /**
     * Gets the networkName property value. Specify the network configuration name.
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
     * Gets the proxyAutomaticConfigurationUrl property value. Specify the URL for the proxy server configuration script.
     * @return string|null
    */
    public function getProxyAutomaticConfigurationUrl(): ?string {
        return $this->proxyAutomaticConfigurationUrl;
    }

    /**
     * Gets the proxyManualAddress property value. Specify the IP address for the proxy server.
     * @return string|null
    */
    public function getProxyManualAddress(): ?string {
        return $this->proxyManualAddress;
    }

    /**
     * Gets the proxyManualPort property value. Specify the port for the proxy server.
     * @return int|null
    */
    public function getProxyManualPort(): ?int {
        return $this->proxyManualPort;
    }

    /**
     * Gets the proxySetting property value. Specify the proxy setting for Wi-Fi configuration. Possible values are: none, manual, automatic.
     * @return WiFiProxySetting|null
    */
    public function getProxySetting(): ?WiFiProxySetting {
        return $this->proxySetting;
    }

    /**
     * Gets the ssid property value. Specify the SSID of the wifi connection.
     * @return string|null
    */
    public function getSsid(): ?string {
        return $this->ssid;
    }

    /**
     * Gets the wifiSecurityType property value. Specify the Wifi Security Type. Possible values are: open, wpaPersonal, wpaEnterprise, wep, wpa2Personal, wpa2Enterprise.
     * @return WiFiSecurityType|null
    */
    public function getWifiSecurityType(): ?WiFiSecurityType {
        return $this->wifiSecurityType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('connectAutomatically', $this->connectAutomatically);
        $writer->writeBooleanValue('connectToPreferredNetwork', $this->connectToPreferredNetwork);
        $writer->writeBooleanValue('connectWhenNetworkNameIsHidden', $this->connectWhenNetworkNameIsHidden);
        $writer->writeBooleanValue('forceFIPSCompliance', $this->forceFIPSCompliance);
        $writer->writeEnumValue('meteredConnectionLimit', $this->meteredConnectionLimit);
        $writer->writeStringValue('networkName', $this->networkName);
        $writer->writeStringValue('preSharedKey', $this->preSharedKey);
        $writer->writeStringValue('proxyAutomaticConfigurationUrl', $this->proxyAutomaticConfigurationUrl);
        $writer->writeStringValue('proxyManualAddress', $this->proxyManualAddress);
        $writer->writeIntegerValue('proxyManualPort', $this->proxyManualPort);
        $writer->writeEnumValue('proxySetting', $this->proxySetting);
        $writer->writeStringValue('ssid', $this->ssid);
        $writer->writeEnumValue('wifiSecurityType', $this->wifiSecurityType);
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
     * Sets the connectAutomatically property value. Specify whether the wifi connection should connect automatically when in range.
     *  @param bool|null $value Value to set for the connectAutomatically property.
    */
    public function setConnectAutomatically(?bool $value ): void {
        $this->connectAutomatically = $value;
    }

    /**
     * Sets the connectToPreferredNetwork property value. Specify whether the wifi connection should connect to more preferred networks when already connected to this one.  Requires ConnectAutomatically to be true.
     *  @param bool|null $value Value to set for the connectToPreferredNetwork property.
    */
    public function setConnectToPreferredNetwork(?bool $value ): void {
        $this->connectToPreferredNetwork = $value;
    }

    /**
     * Sets the connectWhenNetworkNameIsHidden property value. Specify whether the wifi connection should connect automatically even when the SSID is not broadcasting.
     *  @param bool|null $value Value to set for the connectWhenNetworkNameIsHidden property.
    */
    public function setConnectWhenNetworkNameIsHidden(?bool $value ): void {
        $this->connectWhenNetworkNameIsHidden = $value;
    }

    /**
     * Sets the forceFIPSCompliance property value. Specify whether to force FIPS compliance.
     *  @param bool|null $value Value to set for the forceFIPSCompliance property.
    */
    public function setForceFIPSCompliance(?bool $value ): void {
        $this->forceFIPSCompliance = $value;
    }

    /**
     * Sets the meteredConnectionLimit property value. Specify the metered connection limit type for the wifi connection. Possible values are: unrestricted, fixed, variable.
     *  @param MeteredConnectionLimitType|null $value Value to set for the meteredConnectionLimit property.
    */
    public function setMeteredConnectionLimit(?MeteredConnectionLimitType $value ): void {
        $this->meteredConnectionLimit = $value;
    }

    /**
     * Sets the networkName property value. Specify the network configuration name.
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
     * Sets the proxyAutomaticConfigurationUrl property value. Specify the URL for the proxy server configuration script.
     *  @param string|null $value Value to set for the proxyAutomaticConfigurationUrl property.
    */
    public function setProxyAutomaticConfigurationUrl(?string $value ): void {
        $this->proxyAutomaticConfigurationUrl = $value;
    }

    /**
     * Sets the proxyManualAddress property value. Specify the IP address for the proxy server.
     *  @param string|null $value Value to set for the proxyManualAddress property.
    */
    public function setProxyManualAddress(?string $value ): void {
        $this->proxyManualAddress = $value;
    }

    /**
     * Sets the proxyManualPort property value. Specify the port for the proxy server.
     *  @param int|null $value Value to set for the proxyManualPort property.
    */
    public function setProxyManualPort(?int $value ): void {
        $this->proxyManualPort = $value;
    }

    /**
     * Sets the proxySetting property value. Specify the proxy setting for Wi-Fi configuration. Possible values are: none, manual, automatic.
     *  @param WiFiProxySetting|null $value Value to set for the proxySetting property.
    */
    public function setProxySetting(?WiFiProxySetting $value ): void {
        $this->proxySetting = $value;
    }

    /**
     * Sets the ssid property value. Specify the SSID of the wifi connection.
     *  @param string|null $value Value to set for the ssid property.
    */
    public function setSsid(?string $value ): void {
        $this->ssid = $value;
    }

    /**
     * Sets the wifiSecurityType property value. Specify the Wifi Security Type. Possible values are: open, wpaPersonal, wpaEnterprise, wep, wpa2Personal, wpa2Enterprise.
     *  @param WiFiSecurityType|null $value Value to set for the wifiSecurityType property.
    */
    public function setWifiSecurityType(?WiFiSecurityType $value ): void {
        $this->wifiSecurityType = $value;
    }

}
