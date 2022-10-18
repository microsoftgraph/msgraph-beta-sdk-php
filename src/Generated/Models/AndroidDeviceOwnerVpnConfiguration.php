<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidDeviceOwnerVpnConfiguration extends VpnConfiguration implements Parsable 
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
     * @var AndroidVpnConnectionType|null $connectionType Android VPN connection type.
    */
    private ?AndroidVpnConnectionType $connectionType = null;
    
    /**
     * @var array<KeyValue>|null $customData Custom data to define key/value pairs specific to a VPN provider. This collection can contain a maximum of 25 elements.
    */
    private ?array $customData = null;
    
    /**
     * @var array<KeyValuePair>|null $customKeyValueData Custom data to define key/value pairs specific to a VPN provider. This collection can contain a maximum of 25 elements.
    */
    private ?array $customKeyValueData = null;
    
    /**
     * @var DeviceManagementDerivedCredentialSettings|null $derivedCredentialSettings Tenant level settings for the Derived Credentials to be used for authentication.
    */
    private ?DeviceManagementDerivedCredentialSettings $derivedCredentialSettings = null;
    
    /**
     * @var AndroidDeviceOwnerCertificateProfileBase|null $identityCertificate Identity certificate for client authentication when authentication method is certificate.
    */
    private ?AndroidDeviceOwnerCertificateProfileBase $identityCertificate = null;
    
    /**
     * @var string|null $microsoftTunnelSiteId Microsoft Tunnel site ID.
    */
    private ?string $microsoftTunnelSiteId = null;
    
    /**
     * @var VpnProxyServer|null $proxyServer Proxy server.
    */
    private ?VpnProxyServer $proxyServer = null;
    
    /**
     * @var array<AppListItem>|null $targetedMobileApps Targeted mobile apps. This collection can contain a maximum of 500 elements.
    */
    private ?array $targetedMobileApps = null;
    
    /**
     * @var array<string>|null $targetedPackageIds Targeted App package IDs.
    */
    private ?array $targetedPackageIds = null;
    
    /**
     * Instantiates a new AndroidDeviceOwnerVpnConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.androidDeviceOwnerVpnConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidDeviceOwnerVpnConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidDeviceOwnerVpnConfiguration {
        return new AndroidDeviceOwnerVpnConfiguration();
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
     * Gets the connectionType property value. Android VPN connection type.
     * @return AndroidVpnConnectionType|null
    */
    public function getConnectionType(): ?AndroidVpnConnectionType {
        return $this->connectionType;
    }

    /**
     * Gets the customData property value. Custom data to define key/value pairs specific to a VPN provider. This collection can contain a maximum of 25 elements.
     * @return array<KeyValue>|null
    */
    public function getCustomData(): ?array {
        return $this->customData;
    }

    /**
     * Gets the customKeyValueData property value. Custom data to define key/value pairs specific to a VPN provider. This collection can contain a maximum of 25 elements.
     * @return array<KeyValuePair>|null
    */
    public function getCustomKeyValueData(): ?array {
        return $this->customKeyValueData;
    }

    /**
     * Gets the derivedCredentialSettings property value. Tenant level settings for the Derived Credentials to be used for authentication.
     * @return DeviceManagementDerivedCredentialSettings|null
    */
    public function getDerivedCredentialSettings(): ?DeviceManagementDerivedCredentialSettings {
        return $this->derivedCredentialSettings;
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
            'connectionType' => fn(ParseNode $n) => $o->setConnectionType($n->getEnumValue(AndroidVpnConnectionType::class)),
            'customData' => fn(ParseNode $n) => $o->setCustomData($n->getCollectionOfObjectValues([KeyValue::class, 'createFromDiscriminatorValue'])),
            'customKeyValueData' => fn(ParseNode $n) => $o->setCustomKeyValueData($n->getCollectionOfObjectValues([KeyValuePair::class, 'createFromDiscriminatorValue'])),
            'derivedCredentialSettings' => fn(ParseNode $n) => $o->setDerivedCredentialSettings($n->getObjectValue([DeviceManagementDerivedCredentialSettings::class, 'createFromDiscriminatorValue'])),
            'identityCertificate' => fn(ParseNode $n) => $o->setIdentityCertificate($n->getObjectValue([AndroidDeviceOwnerCertificateProfileBase::class, 'createFromDiscriminatorValue'])),
            'microsoftTunnelSiteId' => fn(ParseNode $n) => $o->setMicrosoftTunnelSiteId($n->getStringValue()),
            'proxyServer' => fn(ParseNode $n) => $o->setProxyServer($n->getObjectValue([VpnProxyServer::class, 'createFromDiscriminatorValue'])),
            'targetedMobileApps' => fn(ParseNode $n) => $o->setTargetedMobileApps($n->getCollectionOfObjectValues([AppListItem::class, 'createFromDiscriminatorValue'])),
            'targetedPackageIds' => fn(ParseNode $n) => $o->setTargetedPackageIds($n->getCollectionOfPrimitiveValues()),
        ]);
    }

    /**
     * Gets the identityCertificate property value. Identity certificate for client authentication when authentication method is certificate.
     * @return AndroidDeviceOwnerCertificateProfileBase|null
    */
    public function getIdentityCertificate(): ?AndroidDeviceOwnerCertificateProfileBase {
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
        $writer->writeEnumValue('connectionType', $this->connectionType);
        $writer->writeCollectionOfObjectValues('customData', $this->customData);
        $writer->writeCollectionOfObjectValues('customKeyValueData', $this->customKeyValueData);
        $writer->writeObjectValue('derivedCredentialSettings', $this->derivedCredentialSettings);
        $writer->writeObjectValue('identityCertificate', $this->identityCertificate);
        $writer->writeStringValue('microsoftTunnelSiteId', $this->microsoftTunnelSiteId);
        $writer->writeObjectValue('proxyServer', $this->proxyServer);
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
     * Sets the connectionType property value. Android VPN connection type.
     *  @param AndroidVpnConnectionType|null $value Value to set for the connectionType property.
    */
    public function setConnectionType(?AndroidVpnConnectionType $value ): void {
        $this->connectionType = $value;
    }

    /**
     * Sets the customData property value. Custom data to define key/value pairs specific to a VPN provider. This collection can contain a maximum of 25 elements.
     *  @param array<KeyValue>|null $value Value to set for the customData property.
    */
    public function setCustomData(?array $value ): void {
        $this->customData = $value;
    }

    /**
     * Sets the customKeyValueData property value. Custom data to define key/value pairs specific to a VPN provider. This collection can contain a maximum of 25 elements.
     *  @param array<KeyValuePair>|null $value Value to set for the customKeyValueData property.
    */
    public function setCustomKeyValueData(?array $value ): void {
        $this->customKeyValueData = $value;
    }

    /**
     * Sets the derivedCredentialSettings property value. Tenant level settings for the Derived Credentials to be used for authentication.
     *  @param DeviceManagementDerivedCredentialSettings|null $value Value to set for the derivedCredentialSettings property.
    */
    public function setDerivedCredentialSettings(?DeviceManagementDerivedCredentialSettings $value ): void {
        $this->derivedCredentialSettings = $value;
    }

    /**
     * Sets the identityCertificate property value. Identity certificate for client authentication when authentication method is certificate.
     *  @param AndroidDeviceOwnerCertificateProfileBase|null $value Value to set for the identityCertificate property.
    */
    public function setIdentityCertificate(?AndroidDeviceOwnerCertificateProfileBase $value ): void {
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
