<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidWorkProfileVpnConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * @var bool|null $alwaysOn Whether or not to enable always-on VPN connection.
    */
    private ?bool $alwaysOn = null;
    
    /**
     * @var bool|null $alwaysOnLockdown If always-on VPN connection is enabled, whether or not to lock network traffic when that VPN is disconnected.
    */
    private ?bool $alwaysOnLockdown = null;
    
    /**
     * @var VpnAuthenticationMethod|null $authenticationMethod Authentication method. Possible values are: certificate, usernameAndPassword, sharedSecret, derivedCredential, azureAD.
    */
    private ?VpnAuthenticationMethod $authenticationMethod = null;
    
    /**
     * @var string|null $connectionName Connection name displayed to the user.
    */
    private ?string $connectionName = null;
    
    /**
     * @var AndroidWorkProfileVpnConnectionType|null $connectionType Connection type. Possible values are: ciscoAnyConnect, pulseSecure, f5EdgeClient, dellSonicWallMobileConnect, checkPointCapsuleVpn, citrix, paloAltoGlobalProtect, microsoftTunnel, netMotionMobility, microsoftProtect.
    */
    private ?AndroidWorkProfileVpnConnectionType $connectionType = null;
    
    /**
     * @var array<KeyValue>|null $customData Custom data when connection type is set to Citrix. This collection can contain a maximum of 25 elements.
    */
    private ?array $customData = null;
    
    /**
     * @var array<KeyValuePair>|null $customKeyValueData Custom data when connection type is set to Citrix. This collection can contain a maximum of 25 elements.
    */
    private ?array $customKeyValueData = null;
    
    /**
     * @var string|null $fingerprint Fingerprint is a string that will be used to verify the VPN server can be trusted, which is only applicable when connection type is Check Point Capsule VPN.
    */
    private ?string $fingerprint = null;
    
    /**
     * @var AndroidWorkProfileCertificateProfileBase|null $identityCertificate Identity certificate for client authentication when authentication method is certificate.
    */
    private ?AndroidWorkProfileCertificateProfileBase $identityCertificate = null;
    
    /**
     * @var string|null $microsoftTunnelSiteId Microsoft Tunnel site ID.
    */
    private ?string $microsoftTunnelSiteId = null;
    
    /**
     * @var VpnProxyServer|null $proxyServer Proxy server.
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
     * @var array<VpnServer>|null $servers List of VPN Servers on the network. Make sure end users can access these network locations. This collection can contain a maximum of 500 elements.
    */
    private ?array $servers = null;
    
    /**
     * @var array<AppListItem>|null $targetedMobileApps Targeted mobile apps. This collection can contain a maximum of 500 elements.
    */
    private ?array $targetedMobileApps = null;
    
    /**
     * @var array<string>|null $targetedPackageIds Targeted App package IDs.
    */
    private ?array $targetedPackageIds = null;
    
    /**
     * Instantiates a new AndroidWorkProfileVpnConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        return $this->alwaysOn;
    }

    /**
     * Gets the alwaysOnLockdown property value. If always-on VPN connection is enabled, whether or not to lock network traffic when that VPN is disconnected.
     * @return bool|null
    */
    public function getAlwaysOnLockdown(): ?bool {
        return $this->alwaysOnLockdown;
    }

    /**
     * Gets the authenticationMethod property value. Authentication method. Possible values are: certificate, usernameAndPassword, sharedSecret, derivedCredential, azureAD.
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
     * Gets the connectionType property value. Connection type. Possible values are: ciscoAnyConnect, pulseSecure, f5EdgeClient, dellSonicWallMobileConnect, checkPointCapsuleVpn, citrix, paloAltoGlobalProtect, microsoftTunnel, netMotionMobility, microsoftProtect.
     * @return AndroidWorkProfileVpnConnectionType|null
    */
    public function getConnectionType(): ?AndroidWorkProfileVpnConnectionType {
        return $this->connectionType;
    }

    /**
     * Gets the customData property value. Custom data when connection type is set to Citrix. This collection can contain a maximum of 25 elements.
     * @return array<KeyValue>|null
    */
    public function getCustomData(): ?array {
        return $this->customData;
    }

    /**
     * Gets the customKeyValueData property value. Custom data when connection type is set to Citrix. This collection can contain a maximum of 25 elements.
     * @return array<KeyValuePair>|null
    */
    public function getCustomKeyValueData(): ?array {
        return $this->customKeyValueData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'alwaysOn' => function (ParseNode $n) use ($o) { $o->setAlwaysOn($n->getBooleanValue()); },
            'alwaysOnLockdown' => function (ParseNode $n) use ($o) { $o->setAlwaysOnLockdown($n->getBooleanValue()); },
            'authenticationMethod' => function (ParseNode $n) use ($o) { $o->setAuthenticationMethod($n->getEnumValue(VpnAuthenticationMethod::class)); },
            'connectionName' => function (ParseNode $n) use ($o) { $o->setConnectionName($n->getStringValue()); },
            'connectionType' => function (ParseNode $n) use ($o) { $o->setConnectionType($n->getEnumValue(AndroidWorkProfileVpnConnectionType::class)); },
            'customData' => function (ParseNode $n) use ($o) { $o->setCustomData($n->getCollectionOfObjectValues(array(KeyValue::class, 'createFromDiscriminatorValue'))); },
            'customKeyValueData' => function (ParseNode $n) use ($o) { $o->setCustomKeyValueData($n->getCollectionOfObjectValues(array(KeyValuePair::class, 'createFromDiscriminatorValue'))); },
            'fingerprint' => function (ParseNode $n) use ($o) { $o->setFingerprint($n->getStringValue()); },
            'identityCertificate' => function (ParseNode $n) use ($o) { $o->setIdentityCertificate($n->getObjectValue(array(AndroidWorkProfileCertificateProfileBase::class, 'createFromDiscriminatorValue'))); },
            'microsoftTunnelSiteId' => function (ParseNode $n) use ($o) { $o->setMicrosoftTunnelSiteId($n->getStringValue()); },
            'proxyServer' => function (ParseNode $n) use ($o) { $o->setProxyServer($n->getObjectValue(array(VpnProxyServer::class, 'createFromDiscriminatorValue'))); },
            'realm' => function (ParseNode $n) use ($o) { $o->setRealm($n->getStringValue()); },
            'role' => function (ParseNode $n) use ($o) { $o->setRole($n->getStringValue()); },
            'servers' => function (ParseNode $n) use ($o) { $o->setServers($n->getCollectionOfObjectValues(array(VpnServer::class, 'createFromDiscriminatorValue'))); },
            'targetedMobileApps' => function (ParseNode $n) use ($o) { $o->setTargetedMobileApps($n->getCollectionOfObjectValues(array(AppListItem::class, 'createFromDiscriminatorValue'))); },
            'targetedPackageIds' => function (ParseNode $n) use ($o) { $o->setTargetedPackageIds($n->getCollectionOfPrimitiveValues()); },
        ]);
    }

    /**
     * Gets the fingerprint property value. Fingerprint is a string that will be used to verify the VPN server can be trusted, which is only applicable when connection type is Check Point Capsule VPN.
     * @return string|null
    */
    public function getFingerprint(): ?string {
        return $this->fingerprint;
    }

    /**
     * Gets the identityCertificate property value. Identity certificate for client authentication when authentication method is certificate.
     * @return AndroidWorkProfileCertificateProfileBase|null
    */
    public function getIdentityCertificate(): ?AndroidWorkProfileCertificateProfileBase {
        return $this->identityCertificate;
    }

    /**
     * Gets the microsoftTunnelSiteId property value. Microsoft Tunnel site ID.
     * @return string|null
    */
    public function getMicrosoftTunnelSiteId(): ?string {
        return $this->microsoftTunnelSiteId;
    }

    /**
     * Gets the proxyServer property value. Proxy server.
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
     * Gets the servers property value. List of VPN Servers on the network. Make sure end users can access these network locations. This collection can contain a maximum of 500 elements.
     * @return array<VpnServer>|null
    */
    public function getServers(): ?array {
        return $this->servers;
    }

    /**
     * Gets the targetedMobileApps property value. Targeted mobile apps. This collection can contain a maximum of 500 elements.
     * @return array<AppListItem>|null
    */
    public function getTargetedMobileApps(): ?array {
        return $this->targetedMobileApps;
    }

    /**
     * Gets the targetedPackageIds property value. Targeted App package IDs.
     * @return array<string>|null
    */
    public function getTargetedPackageIds(): ?array {
        return $this->targetedPackageIds;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('alwaysOn', $this->alwaysOn);
        $writer->writeBooleanValue('alwaysOnLockdown', $this->alwaysOnLockdown);
        $writer->writeEnumValue('authenticationMethod', $this->authenticationMethod);
        $writer->writeStringValue('connectionName', $this->connectionName);
        $writer->writeEnumValue('connectionType', $this->connectionType);
        $writer->writeCollectionOfObjectValues('customData', $this->customData);
        $writer->writeCollectionOfObjectValues('customKeyValueData', $this->customKeyValueData);
        $writer->writeStringValue('fingerprint', $this->fingerprint);
        $writer->writeObjectValue('identityCertificate', $this->identityCertificate);
        $writer->writeStringValue('microsoftTunnelSiteId', $this->microsoftTunnelSiteId);
        $writer->writeObjectValue('proxyServer', $this->proxyServer);
        $writer->writeStringValue('realm', $this->realm);
        $writer->writeStringValue('role', $this->role);
        $writer->writeCollectionOfObjectValues('servers', $this->servers);
        $writer->writeCollectionOfObjectValues('targetedMobileApps', $this->targetedMobileApps);
        $writer->writeCollectionOfPrimitiveValues('targetedPackageIds', $this->targetedPackageIds);
    }

    /**
     * Sets the alwaysOn property value. Whether or not to enable always-on VPN connection.
     *  @param bool|null $value Value to set for the alwaysOn property.
    */
    public function setAlwaysOn(?bool $value ): void {
        $this->alwaysOn = $value;
    }

    /**
     * Sets the alwaysOnLockdown property value. If always-on VPN connection is enabled, whether or not to lock network traffic when that VPN is disconnected.
     *  @param bool|null $value Value to set for the alwaysOnLockdown property.
    */
    public function setAlwaysOnLockdown(?bool $value ): void {
        $this->alwaysOnLockdown = $value;
    }

    /**
     * Sets the authenticationMethod property value. Authentication method. Possible values are: certificate, usernameAndPassword, sharedSecret, derivedCredential, azureAD.
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
     * Sets the connectionType property value. Connection type. Possible values are: ciscoAnyConnect, pulseSecure, f5EdgeClient, dellSonicWallMobileConnect, checkPointCapsuleVpn, citrix, paloAltoGlobalProtect, microsoftTunnel, netMotionMobility, microsoftProtect.
     *  @param AndroidWorkProfileVpnConnectionType|null $value Value to set for the connectionType property.
    */
    public function setConnectionType(?AndroidWorkProfileVpnConnectionType $value ): void {
        $this->connectionType = $value;
    }

    /**
     * Sets the customData property value. Custom data when connection type is set to Citrix. This collection can contain a maximum of 25 elements.
     *  @param array<KeyValue>|null $value Value to set for the customData property.
    */
    public function setCustomData(?array $value ): void {
        $this->customData = $value;
    }

    /**
     * Sets the customKeyValueData property value. Custom data when connection type is set to Citrix. This collection can contain a maximum of 25 elements.
     *  @param array<KeyValuePair>|null $value Value to set for the customKeyValueData property.
    */
    public function setCustomKeyValueData(?array $value ): void {
        $this->customKeyValueData = $value;
    }

    /**
     * Sets the fingerprint property value. Fingerprint is a string that will be used to verify the VPN server can be trusted, which is only applicable when connection type is Check Point Capsule VPN.
     *  @param string|null $value Value to set for the fingerprint property.
    */
    public function setFingerprint(?string $value ): void {
        $this->fingerprint = $value;
    }

    /**
     * Sets the identityCertificate property value. Identity certificate for client authentication when authentication method is certificate.
     *  @param AndroidWorkProfileCertificateProfileBase|null $value Value to set for the identityCertificate property.
    */
    public function setIdentityCertificate(?AndroidWorkProfileCertificateProfileBase $value ): void {
        $this->identityCertificate = $value;
    }

    /**
     * Sets the microsoftTunnelSiteId property value. Microsoft Tunnel site ID.
     *  @param string|null $value Value to set for the microsoftTunnelSiteId property.
    */
    public function setMicrosoftTunnelSiteId(?string $value ): void {
        $this->microsoftTunnelSiteId = $value;
    }

    /**
     * Sets the proxyServer property value. Proxy server.
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
     * Sets the servers property value. List of VPN Servers on the network. Make sure end users can access these network locations. This collection can contain a maximum of 500 elements.
     *  @param array<VpnServer>|null $value Value to set for the servers property.
    */
    public function setServers(?array $value ): void {
        $this->servers = $value;
    }

    /**
     * Sets the targetedMobileApps property value. Targeted mobile apps. This collection can contain a maximum of 500 elements.
     *  @param array<AppListItem>|null $value Value to set for the targetedMobileApps property.
    */
    public function setTargetedMobileApps(?array $value ): void {
        $this->targetedMobileApps = $value;
    }

    /**
     * Sets the targetedPackageIds property value. Targeted App package IDs.
     *  @param array<string>|null $value Value to set for the targetedPackageIds property.
    */
    public function setTargetedPackageIds(?array $value ): void {
        $this->targetedPackageIds = $value;
    }

}
