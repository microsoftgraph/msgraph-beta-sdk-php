<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * Always On VPN configuration for MacOS and iOS IKEv2
*/
class AppleVpnAlwaysOnConfiguration implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AppleVpnAlwaysOnConfiguration and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AppleVpnAlwaysOnConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AppleVpnAlwaysOnConfiguration {
        return new AppleVpnAlwaysOnConfiguration();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the airPrintExceptionAction property value. Determine whether AirPrint service will be exempt from the always-on VPN connection. The possible values are: forceTrafficViaVPN, allowTrafficOutside, dropTraffic.
     * @return VpnServiceExceptionAction|null
    */
    public function getAirPrintExceptionAction(): ?VpnServiceExceptionAction {
        $val = $this->getBackingStore()->get('airPrintExceptionAction');
        if (is_null($val) || $val instanceof VpnServiceExceptionAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'airPrintExceptionAction'");
    }

    /**
     * Gets the allowAllCaptiveNetworkPlugins property value. Specifies whether traffic from all captive network plugins should be allowed outside the vpn
     * @return bool|null
    */
    public function getAllowAllCaptiveNetworkPlugins(): ?bool {
        $val = $this->getBackingStore()->get('allowAllCaptiveNetworkPlugins');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowAllCaptiveNetworkPlugins'");
    }

    /**
     * Gets the allowCaptiveWebSheet property value. Determines whether traffic from the Websheet app is allowed outside of the VPN
     * @return bool|null
    */
    public function getAllowCaptiveWebSheet(): ?bool {
        $val = $this->getBackingStore()->get('allowCaptiveWebSheet');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowCaptiveWebSheet'");
    }

    /**
     * Gets the allowedCaptiveNetworkPlugins property value. Determines whether all, some, or no non-native captive networking apps are allowed
     * @return SpecifiedCaptiveNetworkPlugins|null
    */
    public function getAllowedCaptiveNetworkPlugins(): ?SpecifiedCaptiveNetworkPlugins {
        $val = $this->getBackingStore()->get('allowedCaptiveNetworkPlugins');
        if (is_null($val) || $val instanceof SpecifiedCaptiveNetworkPlugins) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowedCaptiveNetworkPlugins'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the cellularExceptionAction property value. Determine whether Cellular service will be exempt from the always-on VPN connection. The possible values are: forceTrafficViaVPN, allowTrafficOutside, dropTraffic.
     * @return VpnServiceExceptionAction|null
    */
    public function getCellularExceptionAction(): ?VpnServiceExceptionAction {
        $val = $this->getBackingStore()->get('cellularExceptionAction');
        if (is_null($val) || $val instanceof VpnServiceExceptionAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cellularExceptionAction'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'airPrintExceptionAction' => fn(ParseNode $n) => $o->setAirPrintExceptionAction($n->getEnumValue(VpnServiceExceptionAction::class)),
            'allowAllCaptiveNetworkPlugins' => fn(ParseNode $n) => $o->setAllowAllCaptiveNetworkPlugins($n->getBooleanValue()),
            'allowCaptiveWebSheet' => fn(ParseNode $n) => $o->setAllowCaptiveWebSheet($n->getBooleanValue()),
            'allowedCaptiveNetworkPlugins' => fn(ParseNode $n) => $o->setAllowedCaptiveNetworkPlugins($n->getObjectValue([SpecifiedCaptiveNetworkPlugins::class, 'createFromDiscriminatorValue'])),
            'cellularExceptionAction' => fn(ParseNode $n) => $o->setCellularExceptionAction($n->getEnumValue(VpnServiceExceptionAction::class)),
            'natKeepAliveIntervalInSeconds' => fn(ParseNode $n) => $o->setNatKeepAliveIntervalInSeconds($n->getIntegerValue()),
            'natKeepAliveOffloadEnable' => fn(ParseNode $n) => $o->setNatKeepAliveOffloadEnable($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'tunnelConfiguration' => fn(ParseNode $n) => $o->setTunnelConfiguration($n->getEnumValue(VpnTunnelConfigurationType::class)),
            'userToggleEnabled' => fn(ParseNode $n) => $o->setUserToggleEnabled($n->getBooleanValue()),
            'voicemailExceptionAction' => fn(ParseNode $n) => $o->setVoicemailExceptionAction($n->getEnumValue(VpnServiceExceptionAction::class)),
        ];
    }

    /**
     * Gets the natKeepAliveIntervalInSeconds property value. Specifies how often in seconds to send a network address translation keepalive package through the VPN
     * @return int|null
    */
    public function getNatKeepAliveIntervalInSeconds(): ?int {
        $val = $this->getBackingStore()->get('natKeepAliveIntervalInSeconds');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'natKeepAliveIntervalInSeconds'");
    }

    /**
     * Gets the natKeepAliveOffloadEnable property value. Enable hardware offloading of NAT keepalive signals when the device is asleep
     * @return bool|null
    */
    public function getNatKeepAliveOffloadEnable(): ?bool {
        $val = $this->getBackingStore()->get('natKeepAliveOffloadEnable');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'natKeepAliveOffloadEnable'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the tunnelConfiguration property value. The type of tunnels that will be present to the VPN client for configuration
     * @return VpnTunnelConfigurationType|null
    */
    public function getTunnelConfiguration(): ?VpnTunnelConfigurationType {
        $val = $this->getBackingStore()->get('tunnelConfiguration');
        if (is_null($val) || $val instanceof VpnTunnelConfigurationType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tunnelConfiguration'");
    }

    /**
     * Gets the userToggleEnabled property value. Allow the user to toggle the VPN configuration using the UI
     * @return bool|null
    */
    public function getUserToggleEnabled(): ?bool {
        $val = $this->getBackingStore()->get('userToggleEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userToggleEnabled'");
    }

    /**
     * Gets the voicemailExceptionAction property value. Determine whether voicemail service will be exempt from the always-on VPN connection. The possible values are: forceTrafficViaVPN, allowTrafficOutside, dropTraffic.
     * @return VpnServiceExceptionAction|null
    */
    public function getVoicemailExceptionAction(): ?VpnServiceExceptionAction {
        $val = $this->getBackingStore()->get('voicemailExceptionAction');
        if (is_null($val) || $val instanceof VpnServiceExceptionAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'voicemailExceptionAction'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('airPrintExceptionAction', $this->getAirPrintExceptionAction());
        $writer->writeBooleanValue('allowAllCaptiveNetworkPlugins', $this->getAllowAllCaptiveNetworkPlugins());
        $writer->writeBooleanValue('allowCaptiveWebSheet', $this->getAllowCaptiveWebSheet());
        $writer->writeObjectValue('allowedCaptiveNetworkPlugins', $this->getAllowedCaptiveNetworkPlugins());
        $writer->writeEnumValue('cellularExceptionAction', $this->getCellularExceptionAction());
        $writer->writeIntegerValue('natKeepAliveIntervalInSeconds', $this->getNatKeepAliveIntervalInSeconds());
        $writer->writeBooleanValue('natKeepAliveOffloadEnable', $this->getNatKeepAliveOffloadEnable());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('tunnelConfiguration', $this->getTunnelConfiguration());
        $writer->writeBooleanValue('userToggleEnabled', $this->getUserToggleEnabled());
        $writer->writeEnumValue('voicemailExceptionAction', $this->getVoicemailExceptionAction());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the airPrintExceptionAction property value. Determine whether AirPrint service will be exempt from the always-on VPN connection. The possible values are: forceTrafficViaVPN, allowTrafficOutside, dropTraffic.
     * @param VpnServiceExceptionAction|null $value Value to set for the airPrintExceptionAction property.
    */
    public function setAirPrintExceptionAction(?VpnServiceExceptionAction $value): void {
        $this->getBackingStore()->set('airPrintExceptionAction', $value);
    }

    /**
     * Sets the allowAllCaptiveNetworkPlugins property value. Specifies whether traffic from all captive network plugins should be allowed outside the vpn
     * @param bool|null $value Value to set for the allowAllCaptiveNetworkPlugins property.
    */
    public function setAllowAllCaptiveNetworkPlugins(?bool $value): void {
        $this->getBackingStore()->set('allowAllCaptiveNetworkPlugins', $value);
    }

    /**
     * Sets the allowCaptiveWebSheet property value. Determines whether traffic from the Websheet app is allowed outside of the VPN
     * @param bool|null $value Value to set for the allowCaptiveWebSheet property.
    */
    public function setAllowCaptiveWebSheet(?bool $value): void {
        $this->getBackingStore()->set('allowCaptiveWebSheet', $value);
    }

    /**
     * Sets the allowedCaptiveNetworkPlugins property value. Determines whether all, some, or no non-native captive networking apps are allowed
     * @param SpecifiedCaptiveNetworkPlugins|null $value Value to set for the allowedCaptiveNetworkPlugins property.
    */
    public function setAllowedCaptiveNetworkPlugins(?SpecifiedCaptiveNetworkPlugins $value): void {
        $this->getBackingStore()->set('allowedCaptiveNetworkPlugins', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the cellularExceptionAction property value. Determine whether Cellular service will be exempt from the always-on VPN connection. The possible values are: forceTrafficViaVPN, allowTrafficOutside, dropTraffic.
     * @param VpnServiceExceptionAction|null $value Value to set for the cellularExceptionAction property.
    */
    public function setCellularExceptionAction(?VpnServiceExceptionAction $value): void {
        $this->getBackingStore()->set('cellularExceptionAction', $value);
    }

    /**
     * Sets the natKeepAliveIntervalInSeconds property value. Specifies how often in seconds to send a network address translation keepalive package through the VPN
     * @param int|null $value Value to set for the natKeepAliveIntervalInSeconds property.
    */
    public function setNatKeepAliveIntervalInSeconds(?int $value): void {
        $this->getBackingStore()->set('natKeepAliveIntervalInSeconds', $value);
    }

    /**
     * Sets the natKeepAliveOffloadEnable property value. Enable hardware offloading of NAT keepalive signals when the device is asleep
     * @param bool|null $value Value to set for the natKeepAliveOffloadEnable property.
    */
    public function setNatKeepAliveOffloadEnable(?bool $value): void {
        $this->getBackingStore()->set('natKeepAliveOffloadEnable', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the tunnelConfiguration property value. The type of tunnels that will be present to the VPN client for configuration
     * @param VpnTunnelConfigurationType|null $value Value to set for the tunnelConfiguration property.
    */
    public function setTunnelConfiguration(?VpnTunnelConfigurationType $value): void {
        $this->getBackingStore()->set('tunnelConfiguration', $value);
    }

    /**
     * Sets the userToggleEnabled property value. Allow the user to toggle the VPN configuration using the UI
     * @param bool|null $value Value to set for the userToggleEnabled property.
    */
    public function setUserToggleEnabled(?bool $value): void {
        $this->getBackingStore()->set('userToggleEnabled', $value);
    }

    /**
     * Sets the voicemailExceptionAction property value. Determine whether voicemail service will be exempt from the always-on VPN connection. The possible values are: forceTrafficViaVPN, allowTrafficOutside, dropTraffic.
     * @param VpnServiceExceptionAction|null $value Value to set for the voicemailExceptionAction property.
    */
    public function setVoicemailExceptionAction(?VpnServiceExceptionAction $value): void {
        $this->getBackingStore()->set('voicemailExceptionAction', $value);
    }

}
