<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Device Configuration.
*/
class WindowsWifiConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * Instantiates a new windowsWifiConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsWifiConfiguration');
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
     * Gets the connectAutomatically property value. Specify whether the wifi connection should connect automatically when in range.
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
     * Gets the connectToPreferredNetwork property value. Specify whether the wifi connection should connect to more preferred networks when already connected to this one.  Requires ConnectAutomatically to be true.
     * @return bool|null
    */
    public function getConnectToPreferredNetwork(): ?bool {
        $val = $this->getBackingStore()->get('connectToPreferredNetwork');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'connectToPreferredNetwork'");
    }

    /**
     * Gets the connectWhenNetworkNameIsHidden property value. Specify whether the wifi connection should connect automatically even when the SSID is not broadcasting.
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
            'connectToPreferredNetwork' => fn(ParseNode $n) => $o->setConnectToPreferredNetwork($n->getBooleanValue()),
            'connectWhenNetworkNameIsHidden' => fn(ParseNode $n) => $o->setConnectWhenNetworkNameIsHidden($n->getBooleanValue()),
            'forceFIPSCompliance' => fn(ParseNode $n) => $o->setForceFIPSCompliance($n->getBooleanValue()),
            'meteredConnectionLimit' => fn(ParseNode $n) => $o->setMeteredConnectionLimit($n->getEnumValue(WindowsWifiConfiguration_meteredConnectionLimit::class)),
            'networkName' => fn(ParseNode $n) => $o->setNetworkName($n->getStringValue()),
            'preSharedKey' => fn(ParseNode $n) => $o->setPreSharedKey($n->getStringValue()),
            'proxyAutomaticConfigurationUrl' => fn(ParseNode $n) => $o->setProxyAutomaticConfigurationUrl($n->getStringValue()),
            'proxyManualAddress' => fn(ParseNode $n) => $o->setProxyManualAddress($n->getStringValue()),
            'proxyManualPort' => fn(ParseNode $n) => $o->setProxyManualPort($n->getIntegerValue()),
            'proxySetting' => fn(ParseNode $n) => $o->setProxySetting($n->getEnumValue(WindowsWifiConfiguration_proxySetting::class)),
            'ssid' => fn(ParseNode $n) => $o->setSsid($n->getStringValue()),
            'wifiSecurityType' => fn(ParseNode $n) => $o->setWifiSecurityType($n->getEnumValue(WindowsWifiConfiguration_wifiSecurityType::class)),
        ]);
    }

    /**
     * Gets the forceFIPSCompliance property value. Specify whether to force FIPS compliance.
     * @return bool|null
    */
    public function getForceFIPSCompliance(): ?bool {
        $val = $this->getBackingStore()->get('forceFIPSCompliance');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'forceFIPSCompliance'");
    }

    /**
     * Gets the meteredConnectionLimit property value. Specify the metered connection limit type for the wifi connection. Possible values are: unrestricted, fixed, variable.
     * @return WindowsWifiConfiguration_meteredConnectionLimit|null
    */
    public function getMeteredConnectionLimit(): ?WindowsWifiConfiguration_meteredConnectionLimit {
        $val = $this->getBackingStore()->get('meteredConnectionLimit');
        if (is_null($val) || $val instanceof WindowsWifiConfiguration_meteredConnectionLimit) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'meteredConnectionLimit'");
    }

    /**
     * Gets the networkName property value. Specify the network configuration name.
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
     * Gets the proxyAutomaticConfigurationUrl property value. Specify the URL for the proxy server configuration script.
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
     * Gets the proxyManualAddress property value. Specify the IP address for the proxy server.
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
     * Gets the proxyManualPort property value. Specify the port for the proxy server.
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
     * Gets the proxySetting property value. Specify the proxy setting for Wi-Fi configuration. Possible values are: none, manual, automatic.
     * @return WindowsWifiConfiguration_proxySetting|null
    */
    public function getProxySetting(): ?WindowsWifiConfiguration_proxySetting {
        $val = $this->getBackingStore()->get('proxySetting');
        if (is_null($val) || $val instanceof WindowsWifiConfiguration_proxySetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'proxySetting'");
    }

    /**
     * Gets the ssid property value. Specify the SSID of the wifi connection.
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
     * Gets the wifiSecurityType property value. Specify the Wifi Security Type. Possible values are: open, wpaPersonal, wpaEnterprise, wep, wpa2Personal, wpa2Enterprise.
     * @return WindowsWifiConfiguration_wifiSecurityType|null
    */
    public function getWifiSecurityType(): ?WindowsWifiConfiguration_wifiSecurityType {
        $val = $this->getBackingStore()->get('wifiSecurityType');
        if (is_null($val) || $val instanceof WindowsWifiConfiguration_wifiSecurityType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'wifiSecurityType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('connectAutomatically', $this->getConnectAutomatically());
        $writer->writeBooleanValue('connectToPreferredNetwork', $this->getConnectToPreferredNetwork());
        $writer->writeBooleanValue('connectWhenNetworkNameIsHidden', $this->getConnectWhenNetworkNameIsHidden());
        $writer->writeBooleanValue('forceFIPSCompliance', $this->getForceFIPSCompliance());
        $writer->writeEnumValue('meteredConnectionLimit', $this->getMeteredConnectionLimit());
        $writer->writeStringValue('networkName', $this->getNetworkName());
        $writer->writeStringValue('preSharedKey', $this->getPreSharedKey());
        $writer->writeStringValue('proxyAutomaticConfigurationUrl', $this->getProxyAutomaticConfigurationUrl());
        $writer->writeStringValue('proxyManualAddress', $this->getProxyManualAddress());
        $writer->writeIntegerValue('proxyManualPort', $this->getProxyManualPort());
        $writer->writeEnumValue('proxySetting', $this->getProxySetting());
        $writer->writeStringValue('ssid', $this->getSsid());
        $writer->writeEnumValue('wifiSecurityType', $this->getWifiSecurityType());
    }

    /**
     * Sets the connectAutomatically property value. Specify whether the wifi connection should connect automatically when in range.
     * @param bool|null $value Value to set for the connectAutomatically property.
    */
    public function setConnectAutomatically(?bool $value): void {
        $this->getBackingStore()->set('connectAutomatically', $value);
    }

    /**
     * Sets the connectToPreferredNetwork property value. Specify whether the wifi connection should connect to more preferred networks when already connected to this one.  Requires ConnectAutomatically to be true.
     * @param bool|null $value Value to set for the connectToPreferredNetwork property.
    */
    public function setConnectToPreferredNetwork(?bool $value): void {
        $this->getBackingStore()->set('connectToPreferredNetwork', $value);
    }

    /**
     * Sets the connectWhenNetworkNameIsHidden property value. Specify whether the wifi connection should connect automatically even when the SSID is not broadcasting.
     * @param bool|null $value Value to set for the connectWhenNetworkNameIsHidden property.
    */
    public function setConnectWhenNetworkNameIsHidden(?bool $value): void {
        $this->getBackingStore()->set('connectWhenNetworkNameIsHidden', $value);
    }

    /**
     * Sets the forceFIPSCompliance property value. Specify whether to force FIPS compliance.
     * @param bool|null $value Value to set for the forceFIPSCompliance property.
    */
    public function setForceFIPSCompliance(?bool $value): void {
        $this->getBackingStore()->set('forceFIPSCompliance', $value);
    }

    /**
     * Sets the meteredConnectionLimit property value. Specify the metered connection limit type for the wifi connection. Possible values are: unrestricted, fixed, variable.
     * @param WindowsWifiConfiguration_meteredConnectionLimit|null $value Value to set for the meteredConnectionLimit property.
    */
    public function setMeteredConnectionLimit(?WindowsWifiConfiguration_meteredConnectionLimit $value): void {
        $this->getBackingStore()->set('meteredConnectionLimit', $value);
    }

    /**
     * Sets the networkName property value. Specify the network configuration name.
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
     * Sets the proxyAutomaticConfigurationUrl property value. Specify the URL for the proxy server configuration script.
     * @param string|null $value Value to set for the proxyAutomaticConfigurationUrl property.
    */
    public function setProxyAutomaticConfigurationUrl(?string $value): void {
        $this->getBackingStore()->set('proxyAutomaticConfigurationUrl', $value);
    }

    /**
     * Sets the proxyManualAddress property value. Specify the IP address for the proxy server.
     * @param string|null $value Value to set for the proxyManualAddress property.
    */
    public function setProxyManualAddress(?string $value): void {
        $this->getBackingStore()->set('proxyManualAddress', $value);
    }

    /**
     * Sets the proxyManualPort property value. Specify the port for the proxy server.
     * @param int|null $value Value to set for the proxyManualPort property.
    */
    public function setProxyManualPort(?int $value): void {
        $this->getBackingStore()->set('proxyManualPort', $value);
    }

    /**
     * Sets the proxySetting property value. Specify the proxy setting for Wi-Fi configuration. Possible values are: none, manual, automatic.
     * @param WindowsWifiConfiguration_proxySetting|null $value Value to set for the proxySetting property.
    */
    public function setProxySetting(?WindowsWifiConfiguration_proxySetting $value): void {
        $this->getBackingStore()->set('proxySetting', $value);
    }

    /**
     * Sets the ssid property value. Specify the SSID of the wifi connection.
     * @param string|null $value Value to set for the ssid property.
    */
    public function setSsid(?string $value): void {
        $this->getBackingStore()->set('ssid', $value);
    }

    /**
     * Sets the wifiSecurityType property value. Specify the Wifi Security Type. Possible values are: open, wpaPersonal, wpaEnterprise, wep, wpa2Personal, wpa2Enterprise.
     * @param WindowsWifiConfiguration_wifiSecurityType|null $value Value to set for the wifiSecurityType property.
    */
    public function setWifiSecurityType(?WindowsWifiConfiguration_wifiSecurityType $value): void {
        $this->getBackingStore()->set('wifiSecurityType', $value);
    }

}
