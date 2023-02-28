<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidWorkProfileVpnConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * Instantiates a new AndroidWorkProfileVpnConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.androidWorkProfileVpnConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidWorkProfileVpnConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidWorkProfileVpnConfiguration {
        return new AndroidWorkProfileVpnConfiguration();
    }

    /**
     * Gets the alwaysOn property value. Whether or not to enable always-on VPN connection.
     * @return bool|null
    */
    public function getAlwaysOn(): ?bool {
        return $this->getBackingStore()->get('alwaysOn');
    }

    /**
     * Gets the alwaysOnLockdown property value. If always-on VPN connection is enabled, whether or not to lock network traffic when that VPN is disconnected.
     * @return bool|null
    */
    public function getAlwaysOnLockdown(): ?bool {
        return $this->getBackingStore()->get('alwaysOnLockdown');
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
     * Gets the connectionType property value. Android Work Profile VPN connection type.
     * @return AndroidWorkProfileVpnConnectionType|null
    */
    public function getConnectionType(): ?AndroidWorkProfileVpnConnectionType {
        return $this->getBackingStore()->get('connectionType');
    }

    /**
     * Gets the customData property value. Custom data when connection type is set to Citrix. This collection can contain a maximum of 25 elements.
     * @return array<KeyValue>|null
    */
    public function getCustomData(): ?array {
        return $this->getBackingStore()->get('customData');
    }

    /**
     * Gets the customKeyValueData property value. Custom data when connection type is set to Citrix. This collection can contain a maximum of 25 elements.
     * @return array<KeyValuePair>|null
    */
    public function getCustomKeyValueData(): ?array {
        return $this->getBackingStore()->get('customKeyValueData');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'alwaysOn' => fn(ParseNode $n) => $o->setAlwaysOn($n->getBooleanValue()),
            'alwaysOnLockdown' => fn(ParseNode $n) => $o->setAlwaysOnLockdown($n->getBooleanValue()),
            'authenticationMethod' => fn(ParseNode $n) => $o->setAuthenticationMethod($n->getEnumValue(VpnAuthenticationMethod::class)),
            'connectionName' => fn(ParseNode $n) => $o->setConnectionName($n->getStringValue()),
            'connectionType' => fn(ParseNode $n) => $o->setConnectionType($n->getEnumValue(AndroidWorkProfileVpnConnectionType::class)),
            'customData' => fn(ParseNode $n) => $o->setCustomData($n->getCollectionOfObjectValues([KeyValue::class, 'createFromDiscriminatorValue'])),
            'customKeyValueData' => fn(ParseNode $n) => $o->setCustomKeyValueData($n->getCollectionOfObjectValues([KeyValuePair::class, 'createFromDiscriminatorValue'])),
            'fingerprint' => fn(ParseNode $n) => $o->setFingerprint($n->getStringValue()),
            'identityCertificate' => fn(ParseNode $n) => $o->setIdentityCertificate($n->getObjectValue([AndroidWorkProfileCertificateProfileBase::class, 'createFromDiscriminatorValue'])),
            'microsoftTunnelSiteId' => fn(ParseNode $n) => $o->setMicrosoftTunnelSiteId($n->getStringValue()),
            'proxyServer' => fn(ParseNode $n) => $o->setProxyServer($n->getObjectValue([VpnProxyServer::class, 'createFromDiscriminatorValue'])),
            'realm' => fn(ParseNode $n) => $o->setRealm($n->getStringValue()),
            'role' => fn(ParseNode $n) => $o->setRole($n->getStringValue()),
            'servers' => fn(ParseNode $n) => $o->setServers($n->getCollectionOfObjectValues([VpnServer::class, 'createFromDiscriminatorValue'])),
            'targetedMobileApps' => fn(ParseNode $n) => $o->setTargetedMobileApps($n->getCollectionOfObjectValues([AppListItem::class, 'createFromDiscriminatorValue'])),
            'targetedPackageIds' => fn(ParseNode $n) => $o->setTargetedPackageIds($n->getCollectionOfPrimitiveValues()),
        ]);
    }

    /**
     * Gets the fingerprint property value. Fingerprint is a string that will be used to verify the VPN server can be trusted, which is only applicable when connection type is Check Point Capsule VPN.
     * @return string|null
    */
    public function getFingerprint(): ?string {
        return $this->getBackingStore()->get('fingerprint');
    }

    /**
     * Gets the identityCertificate property value. Identity certificate for client authentication when authentication method is certificate.
     * @return AndroidWorkProfileCertificateProfileBase|null
    */
    public function getIdentityCertificate(): ?AndroidWorkProfileCertificateProfileBase {
        return $this->getBackingStore()->get('identityCertificate');
    }

    /**
     * Gets the microsoftTunnelSiteId property value. Microsoft Tunnel site ID.
     * @return string|null
    */
    public function getMicrosoftTunnelSiteId(): ?string {
        return $this->getBackingStore()->get('microsoftTunnelSiteId');
    }

    /**
     * Gets the proxyServer property value. Proxy server.
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
     * Gets the servers property value. List of VPN Servers on the network. Make sure end users can access these network locations. This collection can contain a maximum of 500 elements.
     * @return array<VpnServer>|null
    */
    public function getServers(): ?array {
        return $this->getBackingStore()->get('servers');
    }

    /**
     * Gets the targetedMobileApps property value. Targeted mobile apps. This collection can contain a maximum of 500 elements.
     * @return array<AppListItem>|null
    */
    public function getTargetedMobileApps(): ?array {
        return $this->getBackingStore()->get('targetedMobileApps');
    }

    /**
     * Gets the targetedPackageIds property value. Targeted App package IDs.
     * @return array<string>|null
    */
    public function getTargetedPackageIds(): ?array {
        return $this->getBackingStore()->get('targetedPackageIds');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('alwaysOn', $this->getAlwaysOn());
        $writer->writeBooleanValue('alwaysOnLockdown', $this->getAlwaysOnLockdown());
        $writer->writeEnumValue('authenticationMethod', $this->getAuthenticationMethod());
        $writer->writeStringValue('connectionName', $this->getConnectionName());
        $writer->writeEnumValue('connectionType', $this->getConnectionType());
        $writer->writeCollectionOfObjectValues('customData', $this->getCustomData());
        $writer->writeCollectionOfObjectValues('customKeyValueData', $this->getCustomKeyValueData());
        $writer->writeStringValue('fingerprint', $this->getFingerprint());
        $writer->writeObjectValue('identityCertificate', $this->getIdentityCertificate());
        $writer->writeStringValue('microsoftTunnelSiteId', $this->getMicrosoftTunnelSiteId());
        $writer->writeObjectValue('proxyServer', $this->getProxyServer());
        $writer->writeStringValue('realm', $this->getRealm());
        $writer->writeStringValue('role', $this->getRole());
        $writer->writeCollectionOfObjectValues('servers', $this->getServers());
        $writer->writeCollectionOfObjectValues('targetedMobileApps', $this->getTargetedMobileApps());
        $writer->writeCollectionOfPrimitiveValues('targetedPackageIds', $this->getTargetedPackageIds());
    }

    /**
     * Sets the alwaysOn property value. Whether or not to enable always-on VPN connection.
     * @param bool|null $value Value to set for the alwaysOn property.
    */
    public function setAlwaysOn(?bool $value): void {
        $this->getBackingStore()->set('alwaysOn', $value);
    }

    /**
     * Sets the alwaysOnLockdown property value. If always-on VPN connection is enabled, whether or not to lock network traffic when that VPN is disconnected.
     * @param bool|null $value Value to set for the alwaysOnLockdown property.
    */
    public function setAlwaysOnLockdown(?bool $value): void {
        $this->getBackingStore()->set('alwaysOnLockdown', $value);
    }

    /**
     * Sets the authenticationMethod property value. VPN Authentication Method.
     * @param VpnAuthenticationMethod|null $value Value to set for the authenticationMethod property.
    */
    public function setAuthenticationMethod(?VpnAuthenticationMethod $value): void {
        $this->getBackingStore()->set('authenticationMethod', $value);
    }

    /**
     * Sets the connectionName property value. Connection name displayed to the user.
     * @param string|null $value Value to set for the connectionName property.
    */
    public function setConnectionName(?string $value): void {
        $this->getBackingStore()->set('connectionName', $value);
    }

    /**
     * Sets the connectionType property value. Android Work Profile VPN connection type.
     * @param AndroidWorkProfileVpnConnectionType|null $value Value to set for the connectionType property.
    */
    public function setConnectionType(?AndroidWorkProfileVpnConnectionType $value): void {
        $this->getBackingStore()->set('connectionType', $value);
    }

    /**
     * Sets the customData property value. Custom data when connection type is set to Citrix. This collection can contain a maximum of 25 elements.
     * @param array<KeyValue>|null $value Value to set for the customData property.
    */
    public function setCustomData(?array $value): void {
        $this->getBackingStore()->set('customData', $value);
    }

    /**
     * Sets the customKeyValueData property value. Custom data when connection type is set to Citrix. This collection can contain a maximum of 25 elements.
     * @param array<KeyValuePair>|null $value Value to set for the customKeyValueData property.
    */
    public function setCustomKeyValueData(?array $value): void {
        $this->getBackingStore()->set('customKeyValueData', $value);
    }

    /**
     * Sets the fingerprint property value. Fingerprint is a string that will be used to verify the VPN server can be trusted, which is only applicable when connection type is Check Point Capsule VPN.
     * @param string|null $value Value to set for the fingerprint property.
    */
    public function setFingerprint(?string $value): void {
        $this->getBackingStore()->set('fingerprint', $value);
    }

    /**
     * Sets the identityCertificate property value. Identity certificate for client authentication when authentication method is certificate.
     * @param AndroidWorkProfileCertificateProfileBase|null $value Value to set for the identityCertificate property.
    */
    public function setIdentityCertificate(?AndroidWorkProfileCertificateProfileBase $value): void {
        $this->getBackingStore()->set('identityCertificate', $value);
    }

    /**
     * Sets the microsoftTunnelSiteId property value. Microsoft Tunnel site ID.
     * @param string|null $value Value to set for the microsoftTunnelSiteId property.
    */
    public function setMicrosoftTunnelSiteId(?string $value): void {
        $this->getBackingStore()->set('microsoftTunnelSiteId', $value);
    }

    /**
     * Sets the proxyServer property value. Proxy server.
     * @param VpnProxyServer|null $value Value to set for the proxyServer property.
    */
    public function setProxyServer(?VpnProxyServer $value): void {
        $this->getBackingStore()->set('proxyServer', $value);
    }

    /**
     * Sets the realm property value. Realm when connection type is set to Pulse Secure.
     * @param string|null $value Value to set for the realm property.
    */
    public function setRealm(?string $value): void {
        $this->getBackingStore()->set('realm', $value);
    }

    /**
     * Sets the role property value. Role when connection type is set to Pulse Secure.
     * @param string|null $value Value to set for the role property.
    */
    public function setRole(?string $value): void {
        $this->getBackingStore()->set('role', $value);
    }

    /**
     * Sets the servers property value. List of VPN Servers on the network. Make sure end users can access these network locations. This collection can contain a maximum of 500 elements.
     * @param array<VpnServer>|null $value Value to set for the servers property.
    */
    public function setServers(?array $value): void {
        $this->getBackingStore()->set('servers', $value);
    }

    /**
     * Sets the targetedMobileApps property value. Targeted mobile apps. This collection can contain a maximum of 500 elements.
     * @param array<AppListItem>|null $value Value to set for the targetedMobileApps property.
    */
    public function setTargetedMobileApps(?array $value): void {
        $this->getBackingStore()->set('targetedMobileApps', $value);
    }

    /**
     * Sets the targetedPackageIds property value. Targeted App package IDs.
     * @param array<string>|null $value Value to set for the targetedPackageIds property.
    */
    public function setTargetedPackageIds(?array $value): void {
        $this->getBackingStore()->set('targetedPackageIds', $value);
    }

}
