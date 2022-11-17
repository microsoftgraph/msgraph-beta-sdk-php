<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AppleVpnConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * Instantiates a new AppleVpnConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.appleVpnConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AppleVpnConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AppleVpnConfiguration {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.iosikEv2VpnConfiguration': return new IosikEv2VpnConfiguration();
                case '#microsoft.graph.iosVpnConfiguration': return new IosVpnConfiguration();
                case '#microsoft.graph.macOSVpnConfiguration': return new MacOSVpnConfiguration();
            }
        }
        return new AppleVpnConfiguration();
    }

    /**
     * Gets the associatedDomains property value. Associated Domains
     * @return array<string>|null
    */
    public function getAssociatedDomains(): ?array {
        return $this->getBackingStore()->get('associatedDomains');
    }

    /**
     * Gets the authenticationMethod property value. VPN Authentication Method.
     * @return VpnAuthenticationMethod|null
    */
    public function getAuthenticationMethod(): ?VpnAuthenticationMethod {
        return $this->getBackingStore()->get('authenticationMethod');
    }

    /**
     * Gets the connectionName property value. Connection name displayed to the user.
     * @return string|null
    */
    public function getConnectionName(): ?string {
        return $this->getBackingStore()->get('connectionName');
    }

    /**
     * Gets the connectionType property value. Apple VPN connection type.
     * @return AppleVpnConnectionType|null
    */
    public function getConnectionType(): ?AppleVpnConnectionType {
        return $this->getBackingStore()->get('connectionType');
    }

    /**
     * Gets the customData property value. Custom data when connection type is set to Custom VPN. Use this field to enable functionality not supported by Intune, but available in your VPN solution. Contact your VPN vendor to learn how to add these key/value pairs. This collection can contain a maximum of 25 elements.
     * @return array<KeyValue>|null
    */
    public function getCustomData(): ?array {
        return $this->getBackingStore()->get('customData');
    }

    /**
     * Gets the customKeyValueData property value. Custom data when connection type is set to Custom VPN. Use this field to enable functionality not supported by Intune, but available in your VPN solution. Contact your VPN vendor to learn how to add these key/value pairs. This collection can contain a maximum of 25 elements.
     * @return array<KeyValuePair>|null
    */
    public function getCustomKeyValueData(): ?array {
        return $this->getBackingStore()->get('customKeyValueData');
    }

    /**
     * Gets the disableOnDemandUserOverride property value. Toggle to prevent user from disabling automatic VPN in the Settings app
     * @return bool|null
    */
    public function getDisableOnDemandUserOverride(): ?bool {
        return $this->getBackingStore()->get('disableOnDemandUserOverride');
    }

    /**
     * Gets the disconnectOnIdle property value. Whether to disconnect after on-demand connection idles
     * @return bool|null
    */
    public function getDisconnectOnIdle(): ?bool {
        return $this->getBackingStore()->get('disconnectOnIdle');
    }

    /**
     * Gets the disconnectOnIdleTimerInSeconds property value. The length of time in seconds to wait before disconnecting an on-demand connection. Valid values 0 to 65535
     * @return int|null
    */
    public function getDisconnectOnIdleTimerInSeconds(): ?int {
        return $this->getBackingStore()->get('disconnectOnIdleTimerInSeconds');
    }

    /**
     * Gets the enablePerApp property value. Setting this to true creates Per-App VPN payload which can later be associated with Apps that can trigger this VPN conneciton on the end user's iOS device.
     * @return bool|null
    */
    public function getEnablePerApp(): ?bool {
        return $this->getBackingStore()->get('enablePerApp');
    }

    /**
     * Gets the enableSplitTunneling property value. Send all network traffic through VPN.
     * @return bool|null
    */
    public function getEnableSplitTunneling(): ?bool {
        return $this->getBackingStore()->get('enableSplitTunneling');
    }

    /**
     * Gets the excludedDomains property value. Domains that are accessed through the public internet instead of through VPN, even when per-app VPN is activated
     * @return array<string>|null
    */
    public function getExcludedDomains(): ?array {
        return $this->getBackingStore()->get('excludedDomains');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'associatedDomains' => fn(ParseNode $n) => $o->setAssociatedDomains($n->getCollectionOfPrimitiveValues()),
            'authenticationMethod' => fn(ParseNode $n) => $o->setAuthenticationMethod($n->getEnumValue(VpnAuthenticationMethod::class)),
            'connectionName' => fn(ParseNode $n) => $o->setConnectionName($n->getStringValue()),
            'connectionType' => fn(ParseNode $n) => $o->setConnectionType($n->getEnumValue(AppleVpnConnectionType::class)),
            'customData' => fn(ParseNode $n) => $o->setCustomData($n->getCollectionOfObjectValues([KeyValue::class, 'createFromDiscriminatorValue'])),
            'customKeyValueData' => fn(ParseNode $n) => $o->setCustomKeyValueData($n->getCollectionOfObjectValues([KeyValuePair::class, 'createFromDiscriminatorValue'])),
            'disableOnDemandUserOverride' => fn(ParseNode $n) => $o->setDisableOnDemandUserOverride($n->getBooleanValue()),
            'disconnectOnIdle' => fn(ParseNode $n) => $o->setDisconnectOnIdle($n->getBooleanValue()),
            'disconnectOnIdleTimerInSeconds' => fn(ParseNode $n) => $o->setDisconnectOnIdleTimerInSeconds($n->getIntegerValue()),
            'enablePerApp' => fn(ParseNode $n) => $o->setEnablePerApp($n->getBooleanValue()),
            'enableSplitTunneling' => fn(ParseNode $n) => $o->setEnableSplitTunneling($n->getBooleanValue()),
            'excludedDomains' => fn(ParseNode $n) => $o->setExcludedDomains($n->getCollectionOfPrimitiveValues()),
            'identifier' => fn(ParseNode $n) => $o->setIdentifier($n->getStringValue()),
            'loginGroupOrDomain' => fn(ParseNode $n) => $o->setLoginGroupOrDomain($n->getStringValue()),
            'onDemandRules' => fn(ParseNode $n) => $o->setOnDemandRules($n->getCollectionOfObjectValues([VpnOnDemandRule::class, 'createFromDiscriminatorValue'])),
            'optInToDeviceIdSharing' => fn(ParseNode $n) => $o->setOptInToDeviceIdSharing($n->getBooleanValue()),
            'providerType' => fn(ParseNode $n) => $o->setProviderType($n->getEnumValue(VpnProviderType::class)),
            'proxyServer' => fn(ParseNode $n) => $o->setProxyServer($n->getObjectValue([VpnProxyServer::class, 'createFromDiscriminatorValue'])),
            'realm' => fn(ParseNode $n) => $o->setRealm($n->getStringValue()),
            'role' => fn(ParseNode $n) => $o->setRole($n->getStringValue()),
            'safariDomains' => fn(ParseNode $n) => $o->setSafariDomains($n->getCollectionOfPrimitiveValues()),
            'server' => fn(ParseNode $n) => $o->setServer($n->getObjectValue([VpnServer::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the identifier property value. Identifier provided by VPN vendor when connection type is set to Custom VPN. For example: Cisco AnyConnect uses an identifier of the form com.cisco.anyconnect.applevpn.plugin
     * @return string|null
    */
    public function getIdentifier(): ?string {
        return $this->getBackingStore()->get('identifier');
    }

    /**
     * Gets the loginGroupOrDomain property value. Login group or domain when connection type is set to Dell SonicWALL Mobile Connection.
     * @return string|null
    */
    public function getLoginGroupOrDomain(): ?string {
        return $this->getBackingStore()->get('loginGroupOrDomain');
    }

    /**
     * Gets the onDemandRules property value. On-Demand Rules. This collection can contain a maximum of 500 elements.
     * @return array<VpnOnDemandRule>|null
    */
    public function getOnDemandRules(): ?array {
        return $this->getBackingStore()->get('onDemandRules');
    }

    /**
     * Gets the optInToDeviceIdSharing property value. Opt-In to sharing the device's Id to third-party vpn clients for use during network access control validation.
     * @return bool|null
    */
    public function getOptInToDeviceIdSharing(): ?bool {
        return $this->getBackingStore()->get('optInToDeviceIdSharing');
    }

    /**
     * Gets the providerType property value. Provider type for per-app VPN. Possible values are: notConfigured, appProxy, packetTunnel.
     * @return VpnProviderType|null
    */
    public function getProviderType(): ?VpnProviderType {
        return $this->getBackingStore()->get('providerType');
    }

    /**
     * Gets the proxyServer property value. Proxy Server.
     * @return VpnProxyServer|null
    */
    public function getProxyServer(): ?VpnProxyServer {
        return $this->getBackingStore()->get('proxyServer');
    }

    /**
     * Gets the realm property value. Realm when connection type is set to Pulse Secure.
     * @return string|null
    */
    public function getRealm(): ?string {
        return $this->getBackingStore()->get('realm');
    }

    /**
     * Gets the role property value. Role when connection type is set to Pulse Secure.
     * @return string|null
    */
    public function getRole(): ?string {
        return $this->getBackingStore()->get('role');
    }

    /**
     * Gets the safariDomains property value. Safari domains when this VPN per App setting is enabled. In addition to the apps associated with this VPN, Safari domains specified here will also be able to trigger this VPN connection.
     * @return array<string>|null
    */
    public function getSafariDomains(): ?array {
        return $this->getBackingStore()->get('safariDomains');
    }

    /**
     * Gets the server property value. VPN Server definition.
     * @return VpnServer|null
    */
    public function getServer(): ?VpnServer {
        return $this->getBackingStore()->get('server');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('associatedDomains', $this->getAssociatedDomains());
        $writer->writeEnumValue('authenticationMethod', $this->getAuthenticationMethod());
        $writer->writeStringValue('connectionName', $this->getConnectionName());
        $writer->writeEnumValue('connectionType', $this->getConnectionType());
        $writer->writeCollectionOfObjectValues('customData', $this->getCustomData());
        $writer->writeCollectionOfObjectValues('customKeyValueData', $this->getCustomKeyValueData());
        $writer->writeBooleanValue('disableOnDemandUserOverride', $this->getDisableOnDemandUserOverride());
        $writer->writeBooleanValue('disconnectOnIdle', $this->getDisconnectOnIdle());
        $writer->writeIntegerValue('disconnectOnIdleTimerInSeconds', $this->getDisconnectOnIdleTimerInSeconds());
        $writer->writeBooleanValue('enablePerApp', $this->getEnablePerApp());
        $writer->writeBooleanValue('enableSplitTunneling', $this->getEnableSplitTunneling());
        $writer->writeCollectionOfPrimitiveValues('excludedDomains', $this->getExcludedDomains());
        $writer->writeStringValue('identifier', $this->getIdentifier());
        $writer->writeStringValue('loginGroupOrDomain', $this->getLoginGroupOrDomain());
        $writer->writeCollectionOfObjectValues('onDemandRules', $this->getOnDemandRules());
        $writer->writeBooleanValue('optInToDeviceIdSharing', $this->getOptInToDeviceIdSharing());
        $writer->writeEnumValue('providerType', $this->getProviderType());
        $writer->writeObjectValue('proxyServer', $this->getProxyServer());
        $writer->writeStringValue('realm', $this->getRealm());
        $writer->writeStringValue('role', $this->getRole());
        $writer->writeCollectionOfPrimitiveValues('safariDomains', $this->getSafariDomains());
        $writer->writeObjectValue('server', $this->getServer());
    }

    /**
     * Sets the associatedDomains property value. Associated Domains
     *  @param array<string>|null $value Value to set for the associatedDomains property.
    */
    public function setAssociatedDomains(?array $value): void {
        $this->getBackingStore()->set('associatedDomains', $value);
    }

    /**
     * Sets the authenticationMethod property value. VPN Authentication Method.
     *  @param VpnAuthenticationMethod|null $value Value to set for the authenticationMethod property.
    */
    public function setAuthenticationMethod(?VpnAuthenticationMethod $value): void {
        $this->getBackingStore()->set('authenticationMethod', $value);
    }

    /**
     * Sets the connectionName property value. Connection name displayed to the user.
     *  @param string|null $value Value to set for the connectionName property.
    */
    public function setConnectionName(?string $value): void {
        $this->getBackingStore()->set('connectionName', $value);
    }

    /**
     * Sets the connectionType property value. Apple VPN connection type.
     *  @param AppleVpnConnectionType|null $value Value to set for the connectionType property.
    */
    public function setConnectionType(?AppleVpnConnectionType $value): void {
        $this->getBackingStore()->set('connectionType', $value);
    }

    /**
     * Sets the customData property value. Custom data when connection type is set to Custom VPN. Use this field to enable functionality not supported by Intune, but available in your VPN solution. Contact your VPN vendor to learn how to add these key/value pairs. This collection can contain a maximum of 25 elements.
     *  @param array<KeyValue>|null $value Value to set for the customData property.
    */
    public function setCustomData(?array $value): void {
        $this->getBackingStore()->set('customData', $value);
    }

    /**
     * Sets the customKeyValueData property value. Custom data when connection type is set to Custom VPN. Use this field to enable functionality not supported by Intune, but available in your VPN solution. Contact your VPN vendor to learn how to add these key/value pairs. This collection can contain a maximum of 25 elements.
     *  @param array<KeyValuePair>|null $value Value to set for the customKeyValueData property.
    */
    public function setCustomKeyValueData(?array $value): void {
        $this->getBackingStore()->set('customKeyValueData', $value);
    }

    /**
     * Sets the disableOnDemandUserOverride property value. Toggle to prevent user from disabling automatic VPN in the Settings app
     *  @param bool|null $value Value to set for the disableOnDemandUserOverride property.
    */
    public function setDisableOnDemandUserOverride(?bool $value): void {
        $this->getBackingStore()->set('disableOnDemandUserOverride', $value);
    }

    /**
     * Sets the disconnectOnIdle property value. Whether to disconnect after on-demand connection idles
     *  @param bool|null $value Value to set for the disconnectOnIdle property.
    */
    public function setDisconnectOnIdle(?bool $value): void {
        $this->getBackingStore()->set('disconnectOnIdle', $value);
    }

    /**
     * Sets the disconnectOnIdleTimerInSeconds property value. The length of time in seconds to wait before disconnecting an on-demand connection. Valid values 0 to 65535
     *  @param int|null $value Value to set for the disconnectOnIdleTimerInSeconds property.
    */
    public function setDisconnectOnIdleTimerInSeconds(?int $value): void {
        $this->getBackingStore()->set('disconnectOnIdleTimerInSeconds', $value);
    }

    /**
     * Sets the enablePerApp property value. Setting this to true creates Per-App VPN payload which can later be associated with Apps that can trigger this VPN conneciton on the end user's iOS device.
     *  @param bool|null $value Value to set for the enablePerApp property.
    */
    public function setEnablePerApp(?bool $value): void {
        $this->getBackingStore()->set('enablePerApp', $value);
    }

    /**
     * Sets the enableSplitTunneling property value. Send all network traffic through VPN.
     *  @param bool|null $value Value to set for the enableSplitTunneling property.
    */
    public function setEnableSplitTunneling(?bool $value): void {
        $this->getBackingStore()->set('enableSplitTunneling', $value);
    }

    /**
     * Sets the excludedDomains property value. Domains that are accessed through the public internet instead of through VPN, even when per-app VPN is activated
     *  @param array<string>|null $value Value to set for the excludedDomains property.
    */
    public function setExcludedDomains(?array $value): void {
        $this->getBackingStore()->set('excludedDomains', $value);
    }

    /**
     * Sets the identifier property value. Identifier provided by VPN vendor when connection type is set to Custom VPN. For example: Cisco AnyConnect uses an identifier of the form com.cisco.anyconnect.applevpn.plugin
     *  @param string|null $value Value to set for the identifier property.
    */
    public function setIdentifier(?string $value): void {
        $this->getBackingStore()->set('identifier', $value);
    }

    /**
     * Sets the loginGroupOrDomain property value. Login group or domain when connection type is set to Dell SonicWALL Mobile Connection.
     *  @param string|null $value Value to set for the loginGroupOrDomain property.
    */
    public function setLoginGroupOrDomain(?string $value): void {
        $this->getBackingStore()->set('loginGroupOrDomain', $value);
    }

    /**
     * Sets the onDemandRules property value. On-Demand Rules. This collection can contain a maximum of 500 elements.
     *  @param array<VpnOnDemandRule>|null $value Value to set for the onDemandRules property.
    */
    public function setOnDemandRules(?array $value): void {
        $this->getBackingStore()->set('onDemandRules', $value);
    }

    /**
     * Sets the optInToDeviceIdSharing property value. Opt-In to sharing the device's Id to third-party vpn clients for use during network access control validation.
     *  @param bool|null $value Value to set for the optInToDeviceIdSharing property.
    */
    public function setOptInToDeviceIdSharing(?bool $value): void {
        $this->getBackingStore()->set('optInToDeviceIdSharing', $value);
    }

    /**
     * Sets the providerType property value. Provider type for per-app VPN. Possible values are: notConfigured, appProxy, packetTunnel.
     *  @param VpnProviderType|null $value Value to set for the providerType property.
    */
    public function setProviderType(?VpnProviderType $value): void {
        $this->getBackingStore()->set('providerType', $value);
    }

    /**
     * Sets the proxyServer property value. Proxy Server.
     *  @param VpnProxyServer|null $value Value to set for the proxyServer property.
    */
    public function setProxyServer(?VpnProxyServer $value): void {
        $this->getBackingStore()->set('proxyServer', $value);
    }

    /**
     * Sets the realm property value. Realm when connection type is set to Pulse Secure.
     *  @param string|null $value Value to set for the realm property.
    */
    public function setRealm(?string $value): void {
        $this->getBackingStore()->set('realm', $value);
    }

    /**
     * Sets the role property value. Role when connection type is set to Pulse Secure.
     *  @param string|null $value Value to set for the role property.
    */
    public function setRole(?string $value): void {
        $this->getBackingStore()->set('role', $value);
    }

    /**
     * Sets the safariDomains property value. Safari domains when this VPN per App setting is enabled. In addition to the apps associated with this VPN, Safari domains specified here will also be able to trigger this VPN connection.
     *  @param array<string>|null $value Value to set for the safariDomains property.
    */
    public function setSafariDomains(?array $value): void {
        $this->getBackingStore()->set('safariDomains', $value);
    }

    /**
     * Sets the server property value. VPN Server definition.
     *  @param VpnServer|null $value Value to set for the server property.
    */
    public function setServer(?VpnServer $value): void {
        $this->getBackingStore()->set('server', $value);
    }

}
