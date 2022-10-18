<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AppleVpnConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * @var array<string>|null $associatedDomains Associated Domains
    */
    private ?array $associatedDomains = null;
    
    /**
     * @var VpnAuthenticationMethod|null $authenticationMethod VPN Authentication Method.
    */
    private ?VpnAuthenticationMethod $authenticationMethod = null;
    
    /**
     * @var string|null $connectionName Connection name displayed to the user.
    */
    private ?string $connectionName = null;
    
    /**
     * @var AppleVpnConnectionType|null $connectionType Apple VPN connection type.
    */
    private ?AppleVpnConnectionType $connectionType = null;
    
    /**
     * @var array<KeyValue>|null $customData Custom data when connection type is set to Custom VPN. Use this field to enable functionality not supported by Intune, but available in your VPN solution. Contact your VPN vendor to learn how to add these key/value pairs. This collection can contain a maximum of 25 elements.
    */
    private ?array $customData = null;
    
    /**
     * @var array<KeyValuePair>|null $customKeyValueData Custom data when connection type is set to Custom VPN. Use this field to enable functionality not supported by Intune, but available in your VPN solution. Contact your VPN vendor to learn how to add these key/value pairs. This collection can contain a maximum of 25 elements.
    */
    private ?array $customKeyValueData = null;
    
    /**
     * @var bool|null $disableOnDemandUserOverride Toggle to prevent user from disabling automatic VPN in the Settings app
    */
    private ?bool $disableOnDemandUserOverride = null;
    
    /**
     * @var bool|null $disconnectOnIdle Whether to disconnect after on-demand connection idles
    */
    private ?bool $disconnectOnIdle = null;
    
    /**
     * @var int|null $disconnectOnIdleTimerInSeconds The length of time in seconds to wait before disconnecting an on-demand connection. Valid values 0 to 65535
    */
    private ?int $disconnectOnIdleTimerInSeconds = null;
    
    /**
     * @var bool|null $enablePerApp Setting this to true creates Per-App VPN payload which can later be associated with Apps that can trigger this VPN conneciton on the end user's iOS device.
    */
    private ?bool $enablePerApp = null;
    
    /**
     * @var bool|null $enableSplitTunneling Send all network traffic through VPN.
    */
    private ?bool $enableSplitTunneling = null;
    
    /**
     * @var array<string>|null $excludedDomains Domains that are accessed through the public internet instead of through VPN, even when per-app VPN is activated
    */
    private ?array $excludedDomains = null;
    
    /**
     * @var string|null $identifier Identifier provided by VPN vendor when connection type is set to Custom VPN. For example: Cisco AnyConnect uses an identifier of the form com.cisco.anyconnect.applevpn.plugin
    */
    private ?string $identifier = null;
    
    /**
     * @var string|null $loginGroupOrDomain Login group or domain when connection type is set to Dell SonicWALL Mobile Connection.
    */
    private ?string $loginGroupOrDomain = null;
    
    /**
     * @var array<VpnOnDemandRule>|null $onDemandRules On-Demand Rules. This collection can contain a maximum of 500 elements.
    */
    private ?array $onDemandRules = null;
    
    /**
     * @var bool|null $optInToDeviceIdSharing Opt-In to sharing the device's Id to third-party vpn clients for use during network access control validation.
    */
    private ?bool $optInToDeviceIdSharing = null;
    
    /**
     * @var VpnProviderType|null $providerType Provider type for per-app VPN. Possible values are: notConfigured, appProxy, packetTunnel.
    */
    private ?VpnProviderType $providerType = null;
    
    /**
     * @var VpnProxyServer|null $proxyServer Proxy Server.
    */
    private ?VpnProxyServer $proxyServer = null;
    
    /**
     * @var string|null $realm Realm when connection type is set to Pulse Secure.
    */
    private ?string $realm = null;
    
    /**
     * @var string|null $role Role when connection type is set to Pulse Secure.
    */
    private ?string $role = null;
    
    /**
     * @var array<string>|null $safariDomains Safari domains when this VPN per App setting is enabled. In addition to the apps associated with this VPN, Safari domains specified here will also be able to trigger this VPN connection.
    */
    private ?array $safariDomains = null;
    
    /**
     * @var VpnServer|null $server VPN Server definition.
    */
    private ?VpnServer $server = null;
    
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
        return $this->associatedDomains;
    }

    /**
     * Gets the authenticationMethod property value. VPN Authentication Method.
     * @return VpnAuthenticationMethod|null
    */
    public function getAuthenticationMethod(): ?VpnAuthenticationMethod {
        return $this->authenticationMethod;
    }

    /**
     * Gets the connectionName property value. Connection name displayed to the user.
     * @return string|null
    */
    public function getConnectionName(): ?string {
        return $this->connectionName;
    }

    /**
     * Gets the connectionType property value. Apple VPN connection type.
     * @return AppleVpnConnectionType|null
    */
    public function getConnectionType(): ?AppleVpnConnectionType {
        return $this->connectionType;
    }

    /**
     * Gets the customData property value. Custom data when connection type is set to Custom VPN. Use this field to enable functionality not supported by Intune, but available in your VPN solution. Contact your VPN vendor to learn how to add these key/value pairs. This collection can contain a maximum of 25 elements.
     * @return array<KeyValue>|null
    */
    public function getCustomData(): ?array {
        return $this->customData;
    }

    /**
     * Gets the customKeyValueData property value. Custom data when connection type is set to Custom VPN. Use this field to enable functionality not supported by Intune, but available in your VPN solution. Contact your VPN vendor to learn how to add these key/value pairs. This collection can contain a maximum of 25 elements.
     * @return array<KeyValuePair>|null
    */
    public function getCustomKeyValueData(): ?array {
        return $this->customKeyValueData;
    }

    /**
     * Gets the disableOnDemandUserOverride property value. Toggle to prevent user from disabling automatic VPN in the Settings app
     * @return bool|null
    */
    public function getDisableOnDemandUserOverride(): ?bool {
        return $this->disableOnDemandUserOverride;
    }

    /**
     * Gets the disconnectOnIdle property value. Whether to disconnect after on-demand connection idles
     * @return bool|null
    */
    public function getDisconnectOnIdle(): ?bool {
        return $this->disconnectOnIdle;
    }

    /**
     * Gets the disconnectOnIdleTimerInSeconds property value. The length of time in seconds to wait before disconnecting an on-demand connection. Valid values 0 to 65535
     * @return int|null
    */
    public function getDisconnectOnIdleTimerInSeconds(): ?int {
        return $this->disconnectOnIdleTimerInSeconds;
    }

    /**
     * Gets the enablePerApp property value. Setting this to true creates Per-App VPN payload which can later be associated with Apps that can trigger this VPN conneciton on the end user's iOS device.
     * @return bool|null
    */
    public function getEnablePerApp(): ?bool {
        return $this->enablePerApp;
    }

    /**
     * Gets the enableSplitTunneling property value. Send all network traffic through VPN.
     * @return bool|null
    */
    public function getEnableSplitTunneling(): ?bool {
        return $this->enableSplitTunneling;
    }

    /**
     * Gets the excludedDomains property value. Domains that are accessed through the public internet instead of through VPN, even when per-app VPN is activated
     * @return array<string>|null
    */
    public function getExcludedDomains(): ?array {
        return $this->excludedDomains;
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
        return $this->identifier;
    }

    /**
     * Gets the loginGroupOrDomain property value. Login group or domain when connection type is set to Dell SonicWALL Mobile Connection.
     * @return string|null
    */
    public function getLoginGroupOrDomain(): ?string {
        return $this->loginGroupOrDomain;
    }

    /**
     * Gets the onDemandRules property value. On-Demand Rules. This collection can contain a maximum of 500 elements.
     * @return array<VpnOnDemandRule>|null
    */
    public function getOnDemandRules(): ?array {
        return $this->onDemandRules;
    }

    /**
     * Gets the optInToDeviceIdSharing property value. Opt-In to sharing the device's Id to third-party vpn clients for use during network access control validation.
     * @return bool|null
    */
    public function getOptInToDeviceIdSharing(): ?bool {
        return $this->optInToDeviceIdSharing;
    }

    /**
     * Gets the providerType property value. Provider type for per-app VPN. Possible values are: notConfigured, appProxy, packetTunnel.
     * @return VpnProviderType|null
    */
    public function getProviderType(): ?VpnProviderType {
        return $this->providerType;
    }

    /**
     * Gets the proxyServer property value. Proxy Server.
     * @return VpnProxyServer|null
    */
    public function getProxyServer(): ?VpnProxyServer {
        return $this->proxyServer;
    }

    /**
     * Gets the realm property value. Realm when connection type is set to Pulse Secure.
     * @return string|null
    */
    public function getRealm(): ?string {
        return $this->realm;
    }

    /**
     * Gets the role property value. Role when connection type is set to Pulse Secure.
     * @return string|null
    */
    public function getRole(): ?string {
        return $this->role;
    }

    /**
     * Gets the safariDomains property value. Safari domains when this VPN per App setting is enabled. In addition to the apps associated with this VPN, Safari domains specified here will also be able to trigger this VPN connection.
     * @return array<string>|null
    */
    public function getSafariDomains(): ?array {
        return $this->safariDomains;
    }

    /**
     * Gets the server property value. VPN Server definition.
     * @return VpnServer|null
    */
    public function getServer(): ?VpnServer {
        return $this->server;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('associatedDomains', $this->associatedDomains);
        $writer->writeEnumValue('authenticationMethod', $this->authenticationMethod);
        $writer->writeStringValue('connectionName', $this->connectionName);
        $writer->writeEnumValue('connectionType', $this->connectionType);
        $writer->writeCollectionOfObjectValues('customData', $this->customData);
        $writer->writeCollectionOfObjectValues('customKeyValueData', $this->customKeyValueData);
        $writer->writeBooleanValue('disableOnDemandUserOverride', $this->disableOnDemandUserOverride);
        $writer->writeBooleanValue('disconnectOnIdle', $this->disconnectOnIdle);
        $writer->writeIntegerValue('disconnectOnIdleTimerInSeconds', $this->disconnectOnIdleTimerInSeconds);
        $writer->writeBooleanValue('enablePerApp', $this->enablePerApp);
        $writer->writeBooleanValue('enableSplitTunneling', $this->enableSplitTunneling);
        $writer->writeCollectionOfPrimitiveValues('excludedDomains', $this->excludedDomains);
        $writer->writeStringValue('identifier', $this->identifier);
        $writer->writeStringValue('loginGroupOrDomain', $this->loginGroupOrDomain);
        $writer->writeCollectionOfObjectValues('onDemandRules', $this->onDemandRules);
        $writer->writeBooleanValue('optInToDeviceIdSharing', $this->optInToDeviceIdSharing);
        $writer->writeEnumValue('providerType', $this->providerType);
        $writer->writeObjectValue('proxyServer', $this->proxyServer);
        $writer->writeStringValue('realm', $this->realm);
        $writer->writeStringValue('role', $this->role);
        $writer->writeCollectionOfPrimitiveValues('safariDomains', $this->safariDomains);
        $writer->writeObjectValue('server', $this->server);
    }

    /**
     * Sets the associatedDomains property value. Associated Domains
     *  @param array<string>|null $value Value to set for the associatedDomains property.
    */
    public function setAssociatedDomains(?array $value ): void {
        $this->associatedDomains = $value;
    }

    /**
     * Sets the authenticationMethod property value. VPN Authentication Method.
     *  @param VpnAuthenticationMethod|null $value Value to set for the authenticationMethod property.
    */
    public function setAuthenticationMethod(?VpnAuthenticationMethod $value ): void {
        $this->authenticationMethod = $value;
    }

    /**
     * Sets the connectionName property value. Connection name displayed to the user.
     *  @param string|null $value Value to set for the connectionName property.
    */
    public function setConnectionName(?string $value ): void {
        $this->connectionName = $value;
    }

    /**
     * Sets the connectionType property value. Apple VPN connection type.
     *  @param AppleVpnConnectionType|null $value Value to set for the connectionType property.
    */
    public function setConnectionType(?AppleVpnConnectionType $value ): void {
        $this->connectionType = $value;
    }

    /**
     * Sets the customData property value. Custom data when connection type is set to Custom VPN. Use this field to enable functionality not supported by Intune, but available in your VPN solution. Contact your VPN vendor to learn how to add these key/value pairs. This collection can contain a maximum of 25 elements.
     *  @param array<KeyValue>|null $value Value to set for the customData property.
    */
    public function setCustomData(?array $value ): void {
        $this->customData = $value;
    }

    /**
     * Sets the customKeyValueData property value. Custom data when connection type is set to Custom VPN. Use this field to enable functionality not supported by Intune, but available in your VPN solution. Contact your VPN vendor to learn how to add these key/value pairs. This collection can contain a maximum of 25 elements.
     *  @param array<KeyValuePair>|null $value Value to set for the customKeyValueData property.
    */
    public function setCustomKeyValueData(?array $value ): void {
        $this->customKeyValueData = $value;
    }

    /**
     * Sets the disableOnDemandUserOverride property value. Toggle to prevent user from disabling automatic VPN in the Settings app
     *  @param bool|null $value Value to set for the disableOnDemandUserOverride property.
    */
    public function setDisableOnDemandUserOverride(?bool $value ): void {
        $this->disableOnDemandUserOverride = $value;
    }

    /**
     * Sets the disconnectOnIdle property value. Whether to disconnect after on-demand connection idles
     *  @param bool|null $value Value to set for the disconnectOnIdle property.
    */
    public function setDisconnectOnIdle(?bool $value ): void {
        $this->disconnectOnIdle = $value;
    }

    /**
     * Sets the disconnectOnIdleTimerInSeconds property value. The length of time in seconds to wait before disconnecting an on-demand connection. Valid values 0 to 65535
     *  @param int|null $value Value to set for the disconnectOnIdleTimerInSeconds property.
    */
    public function setDisconnectOnIdleTimerInSeconds(?int $value ): void {
        $this->disconnectOnIdleTimerInSeconds = $value;
    }

    /**
     * Sets the enablePerApp property value. Setting this to true creates Per-App VPN payload which can later be associated with Apps that can trigger this VPN conneciton on the end user's iOS device.
     *  @param bool|null $value Value to set for the enablePerApp property.
    */
    public function setEnablePerApp(?bool $value ): void {
        $this->enablePerApp = $value;
    }

    /**
     * Sets the enableSplitTunneling property value. Send all network traffic through VPN.
     *  @param bool|null $value Value to set for the enableSplitTunneling property.
    */
    public function setEnableSplitTunneling(?bool $value ): void {
        $this->enableSplitTunneling = $value;
    }

    /**
     * Sets the excludedDomains property value. Domains that are accessed through the public internet instead of through VPN, even when per-app VPN is activated
     *  @param array<string>|null $value Value to set for the excludedDomains property.
    */
    public function setExcludedDomains(?array $value ): void {
        $this->excludedDomains = $value;
    }

    /**
     * Sets the identifier property value. Identifier provided by VPN vendor when connection type is set to Custom VPN. For example: Cisco AnyConnect uses an identifier of the form com.cisco.anyconnect.applevpn.plugin
     *  @param string|null $value Value to set for the identifier property.
    */
    public function setIdentifier(?string $value ): void {
        $this->identifier = $value;
    }

    /**
     * Sets the loginGroupOrDomain property value. Login group or domain when connection type is set to Dell SonicWALL Mobile Connection.
     *  @param string|null $value Value to set for the loginGroupOrDomain property.
    */
    public function setLoginGroupOrDomain(?string $value ): void {
        $this->loginGroupOrDomain = $value;
    }

    /**
     * Sets the onDemandRules property value. On-Demand Rules. This collection can contain a maximum of 500 elements.
     *  @param array<VpnOnDemandRule>|null $value Value to set for the onDemandRules property.
    */
    public function setOnDemandRules(?array $value ): void {
        $this->onDemandRules = $value;
    }

    /**
     * Sets the optInToDeviceIdSharing property value. Opt-In to sharing the device's Id to third-party vpn clients for use during network access control validation.
     *  @param bool|null $value Value to set for the optInToDeviceIdSharing property.
    */
    public function setOptInToDeviceIdSharing(?bool $value ): void {
        $this->optInToDeviceIdSharing = $value;
    }

    /**
     * Sets the providerType property value. Provider type for per-app VPN. Possible values are: notConfigured, appProxy, packetTunnel.
     *  @param VpnProviderType|null $value Value to set for the providerType property.
    */
    public function setProviderType(?VpnProviderType $value ): void {
        $this->providerType = $value;
    }

    /**
     * Sets the proxyServer property value. Proxy Server.
     *  @param VpnProxyServer|null $value Value to set for the proxyServer property.
    */
    public function setProxyServer(?VpnProxyServer $value ): void {
        $this->proxyServer = $value;
    }

    /**
     * Sets the realm property value. Realm when connection type is set to Pulse Secure.
     *  @param string|null $value Value to set for the realm property.
    */
    public function setRealm(?string $value ): void {
        $this->realm = $value;
    }

    /**
     * Sets the role property value. Role when connection type is set to Pulse Secure.
     *  @param string|null $value Value to set for the role property.
    */
    public function setRole(?string $value ): void {
        $this->role = $value;
    }

    /**
     * Sets the safariDomains property value. Safari domains when this VPN per App setting is enabled. In addition to the apps associated with this VPN, Safari domains specified here will also be able to trigger this VPN connection.
     *  @param array<string>|null $value Value to set for the safariDomains property.
    */
    public function setSafariDomains(?array $value ): void {
        $this->safariDomains = $value;
    }

    /**
     * Sets the server property value. VPN Server definition.
     *  @param VpnServer|null $value Value to set for the server property.
    */
    public function setServer(?VpnServer $value ): void {
        $this->server = $value;
    }

}
