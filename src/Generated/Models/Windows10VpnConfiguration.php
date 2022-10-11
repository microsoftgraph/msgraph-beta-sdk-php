<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class Windows10VpnConfiguration extends WindowsVpnConfiguration implements Parsable 
{
    /**
     * @var array<Windows10AssociatedApps>|null $associatedApps Associated Apps. This collection can contain a maximum of 10000 elements.
    */
    private ?array $associatedApps = null;
    
    /**
     * @var Windows10VpnAuthenticationMethod|null $authenticationMethod Windows 10 VPN connection types.
    */
    private ?Windows10VpnAuthenticationMethod $authenticationMethod = null;
    
    /**
     * @var Windows10VpnConnectionType|null $connectionType VPN connection types.
    */
    private ?Windows10VpnConnectionType $connectionType = null;
    
    /**
     * @var CryptographySuite|null $cryptographySuite Cryptography Suite security settings for IKEv2 VPN in Windows10 and above
    */
    private ?CryptographySuite $cryptographySuite = null;
    
    /**
     * @var array<VpnDnsRule>|null $dnsRules DNS rules. This collection can contain a maximum of 1000 elements.
    */
    private ?array $dnsRules = null;
    
    /**
     * @var array<string>|null $dnsSuffixes Specify DNS suffixes to add to the DNS search list to properly route short names.
    */
    private ?array $dnsSuffixes = null;
    
    /**
     * @var StreamInterface|null $eapXml Extensible Authentication Protocol (EAP) XML. (UTF8 encoded byte array)
    */
    private ?StreamInterface $eapXml = null;
    
    /**
     * @var bool|null $enableAlwaysOn Enable Always On mode.
    */
    private ?bool $enableAlwaysOn = null;
    
    /**
     * @var bool|null $enableConditionalAccess Enable conditional access.
    */
    private ?bool $enableConditionalAccess = null;
    
    /**
     * @var bool|null $enableDeviceTunnel Enable device tunnel.
    */
    private ?bool $enableDeviceTunnel = null;
    
    /**
     * @var bool|null $enableDnsRegistration Enable IP address registration with internal DNS.
    */
    private ?bool $enableDnsRegistration = null;
    
    /**
     * @var bool|null $enableSingleSignOnWithAlternateCertificate Enable single sign-on (SSO) with alternate certificate.
    */
    private ?bool $enableSingleSignOnWithAlternateCertificate = null;
    
    /**
     * @var bool|null $enableSplitTunneling Enable split tunneling.
    */
    private ?bool $enableSplitTunneling = null;
    
    /**
     * @var WindowsCertificateProfileBase|null $identityCertificate Identity certificate for client authentication when authentication method is certificate.
    */
    private ?WindowsCertificateProfileBase $identityCertificate = null;
    
    /**
     * @var string|null $microsoftTunnelSiteId ID of the Microsoft Tunnel site associated with the VPN profile.
    */
    private ?string $microsoftTunnelSiteId = null;
    
    /**
     * @var bool|null $onlyAssociatedAppsCanUseConnection Only associated Apps can use connection (per-app VPN).
    */
    private ?bool $onlyAssociatedAppsCanUseConnection = null;
    
    /**
     * @var Windows10VpnProfileTarget|null $profileTarget Profile target type. Possible values are: user, device, autoPilotDevice.
    */
    private ?Windows10VpnProfileTarget $profileTarget = null;
    
    /**
     * @var Windows10VpnProxyServer|null $proxyServer Proxy Server.
    */
    private ?Windows10VpnProxyServer $proxyServer = null;
    
    /**
     * @var bool|null $rememberUserCredentials Remember user credentials.
    */
    private ?bool $rememberUserCredentials = null;
    
    /**
     * @var array<VpnRoute>|null $routes Routes (optional for third-party providers). This collection can contain a maximum of 1000 elements.
    */
    private ?array $routes = null;
    
    /**
     * @var ExtendedKeyUsage|null $singleSignOnEku Single sign-on Extended Key Usage (EKU).
    */
    private ?ExtendedKeyUsage $singleSignOnEku = null;
    
    /**
     * @var string|null $singleSignOnIssuerHash Single sign-on issuer hash.
    */
    private ?string $singleSignOnIssuerHash = null;
    
    /**
     * @var array<VpnTrafficRule>|null $trafficRules Traffic rules. This collection can contain a maximum of 1000 elements.
    */
    private ?array $trafficRules = null;
    
    /**
     * @var array<string>|null $trustedNetworkDomains Trusted Network Domains
    */
    private ?array $trustedNetworkDomains = null;
    
    /**
     * @var string|null $windowsInformationProtectionDomain Windows Information Protection (WIP) domain to associate with this connection.
    */
    private ?string $windowsInformationProtectionDomain = null;
    
    /**
     * Instantiates a new Windows10VpnConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windows10VpnConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Windows10VpnConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Windows10VpnConfiguration {
        return new Windows10VpnConfiguration();
    }

    /**
     * Gets the associatedApps property value. Associated Apps. This collection can contain a maximum of 10000 elements.
     * @return array<Windows10AssociatedApps>|null
    */
    public function getAssociatedApps(): ?array {
        return $this->associatedApps;
    }

    /**
     * Gets the authenticationMethod property value. Windows 10 VPN connection types.
     * @return Windows10VpnAuthenticationMethod|null
    */
    public function getAuthenticationMethod(): ?Windows10VpnAuthenticationMethod {
        return $this->authenticationMethod;
    }

    /**
     * Gets the connectionType property value. VPN connection types.
     * @return Windows10VpnConnectionType|null
    */
    public function getConnectionType(): ?Windows10VpnConnectionType {
        return $this->connectionType;
    }

    /**
     * Gets the cryptographySuite property value. Cryptography Suite security settings for IKEv2 VPN in Windows10 and above
     * @return CryptographySuite|null
    */
    public function getCryptographySuite(): ?CryptographySuite {
        return $this->cryptographySuite;
    }

    /**
     * Gets the dnsRules property value. DNS rules. This collection can contain a maximum of 1000 elements.
     * @return array<VpnDnsRule>|null
    */
    public function getDnsRules(): ?array {
        return $this->dnsRules;
    }

    /**
     * Gets the dnsSuffixes property value. Specify DNS suffixes to add to the DNS search list to properly route short names.
     * @return array<string>|null
    */
    public function getDnsSuffixes(): ?array {
        return $this->dnsSuffixes;
    }

    /**
     * Gets the eapXml property value. Extensible Authentication Protocol (EAP) XML. (UTF8 encoded byte array)
     * @return StreamInterface
    */
    public function getEapXml(): StreamInterface {
        return $this->eapXml;
    }

    /**
     * Gets the enableAlwaysOn property value. Enable Always On mode.
     * @return bool|null
    */
    public function getEnableAlwaysOn(): ?bool {
        return $this->enableAlwaysOn;
    }

    /**
     * Gets the enableConditionalAccess property value. Enable conditional access.
     * @return bool|null
    */
    public function getEnableConditionalAccess(): ?bool {
        return $this->enableConditionalAccess;
    }

    /**
     * Gets the enableDeviceTunnel property value. Enable device tunnel.
     * @return bool|null
    */
    public function getEnableDeviceTunnel(): ?bool {
        return $this->enableDeviceTunnel;
    }

    /**
     * Gets the enableDnsRegistration property value. Enable IP address registration with internal DNS.
     * @return bool|null
    */
    public function getEnableDnsRegistration(): ?bool {
        return $this->enableDnsRegistration;
    }

    /**
     * Gets the enableSingleSignOnWithAlternateCertificate property value. Enable single sign-on (SSO) with alternate certificate.
     * @return bool|null
    */
    public function getEnableSingleSignOnWithAlternateCertificate(): ?bool {
        return $this->enableSingleSignOnWithAlternateCertificate;
    }

    /**
     * Gets the enableSplitTunneling property value. Enable split tunneling.
     * @return bool|null
    */
    public function getEnableSplitTunneling(): ?bool {
        return $this->enableSplitTunneling;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'associatedApps' => function (ParseNode $n) use ($o) { $o->setAssociatedApps($n->getCollectionOfObjectValues(array(Windows10AssociatedApps::class, 'createFromDiscriminatorValue'))); },
            'authenticationMethod' => function (ParseNode $n) use ($o) { $o->setAuthenticationMethod($n->getEnumValue(Windows10VpnAuthenticationMethod::class)); },
            'connectionType' => function (ParseNode $n) use ($o) { $o->setConnectionType($n->getEnumValue(Windows10VpnConnectionType::class)); },
            'cryptographySuite' => function (ParseNode $n) use ($o) { $o->setCryptographySuite($n->getObjectValue(array(CryptographySuite::class, 'createFromDiscriminatorValue'))); },
            'dnsRules' => function (ParseNode $n) use ($o) { $o->setDnsRules($n->getCollectionOfObjectValues(array(VpnDnsRule::class, 'createFromDiscriminatorValue'))); },
            'dnsSuffixes' => function (ParseNode $n) use ($o) { $o->setDnsSuffixes($n->getCollectionOfPrimitiveValues()); },
            'eapXml' => function (ParseNode $n) use ($o) { $o->setEapXml($n->getBinaryContent()); },
            'enableAlwaysOn' => function (ParseNode $n) use ($o) { $o->setEnableAlwaysOn($n->getBooleanValue()); },
            'enableConditionalAccess' => function (ParseNode $n) use ($o) { $o->setEnableConditionalAccess($n->getBooleanValue()); },
            'enableDeviceTunnel' => function (ParseNode $n) use ($o) { $o->setEnableDeviceTunnel($n->getBooleanValue()); },
            'enableDnsRegistration' => function (ParseNode $n) use ($o) { $o->setEnableDnsRegistration($n->getBooleanValue()); },
            'enableSingleSignOnWithAlternateCertificate' => function (ParseNode $n) use ($o) { $o->setEnableSingleSignOnWithAlternateCertificate($n->getBooleanValue()); },
            'enableSplitTunneling' => function (ParseNode $n) use ($o) { $o->setEnableSplitTunneling($n->getBooleanValue()); },
            'identityCertificate' => function (ParseNode $n) use ($o) { $o->setIdentityCertificate($n->getObjectValue(array(WindowsCertificateProfileBase::class, 'createFromDiscriminatorValue'))); },
            'microsoftTunnelSiteId' => function (ParseNode $n) use ($o) { $o->setMicrosoftTunnelSiteId($n->getStringValue()); },
            'onlyAssociatedAppsCanUseConnection' => function (ParseNode $n) use ($o) { $o->setOnlyAssociatedAppsCanUseConnection($n->getBooleanValue()); },
            'profileTarget' => function (ParseNode $n) use ($o) { $o->setProfileTarget($n->getEnumValue(Windows10VpnProfileTarget::class)); },
            'proxyServer' => function (ParseNode $n) use ($o) { $o->setProxyServer($n->getObjectValue(array(Windows10VpnProxyServer::class, 'createFromDiscriminatorValue'))); },
            'rememberUserCredentials' => function (ParseNode $n) use ($o) { $o->setRememberUserCredentials($n->getBooleanValue()); },
            'routes' => function (ParseNode $n) use ($o) { $o->setRoutes($n->getCollectionOfObjectValues(array(VpnRoute::class, 'createFromDiscriminatorValue'))); },
            'singleSignOnEku' => function (ParseNode $n) use ($o) { $o->setSingleSignOnEku($n->getObjectValue(array(ExtendedKeyUsage::class, 'createFromDiscriminatorValue'))); },
            'singleSignOnIssuerHash' => function (ParseNode $n) use ($o) { $o->setSingleSignOnIssuerHash($n->getStringValue()); },
            'trafficRules' => function (ParseNode $n) use ($o) { $o->setTrafficRules($n->getCollectionOfObjectValues(array(VpnTrafficRule::class, 'createFromDiscriminatorValue'))); },
            'trustedNetworkDomains' => function (ParseNode $n) use ($o) { $o->setTrustedNetworkDomains($n->getCollectionOfPrimitiveValues()); },
            'windowsInformationProtectionDomain' => function (ParseNode $n) use ($o) { $o->setWindowsInformationProtectionDomain($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the identityCertificate property value. Identity certificate for client authentication when authentication method is certificate.
     * @return WindowsCertificateProfileBase|null
    */
    public function getIdentityCertificate(): ?WindowsCertificateProfileBase {
        return $this->identityCertificate;
    }

    /**
     * Gets the microsoftTunnelSiteId property value. ID of the Microsoft Tunnel site associated with the VPN profile.
     * @return string|null
    */
    public function getMicrosoftTunnelSiteId(): ?string {
        return $this->microsoftTunnelSiteId;
    }

    /**
     * Gets the onlyAssociatedAppsCanUseConnection property value. Only associated Apps can use connection (per-app VPN).
     * @return bool|null
    */
    public function getOnlyAssociatedAppsCanUseConnection(): ?bool {
        return $this->onlyAssociatedAppsCanUseConnection;
    }

    /**
     * Gets the profileTarget property value. Profile target type. Possible values are: user, device, autoPilotDevice.
     * @return Windows10VpnProfileTarget|null
    */
    public function getProfileTarget(): ?Windows10VpnProfileTarget {
        return $this->profileTarget;
    }

    /**
     * Gets the proxyServer property value. Proxy Server.
     * @return Windows10VpnProxyServer|null
    */
    public function getProxyServer(): ?Windows10VpnProxyServer {
        return $this->proxyServer;
    }

    /**
     * Gets the rememberUserCredentials property value. Remember user credentials.
     * @return bool|null
    */
    public function getRememberUserCredentials(): ?bool {
        return $this->rememberUserCredentials;
    }

    /**
     * Gets the routes property value. Routes (optional for third-party providers). This collection can contain a maximum of 1000 elements.
     * @return array<VpnRoute>|null
    */
    public function getRoutes(): ?array {
        return $this->routes;
    }

    /**
     * Gets the singleSignOnEku property value. Single sign-on Extended Key Usage (EKU).
     * @return ExtendedKeyUsage|null
    */
    public function getSingleSignOnEku(): ?ExtendedKeyUsage {
        return $this->singleSignOnEku;
    }

    /**
     * Gets the singleSignOnIssuerHash property value. Single sign-on issuer hash.
     * @return string|null
    */
    public function getSingleSignOnIssuerHash(): ?string {
        return $this->singleSignOnIssuerHash;
    }

    /**
     * Gets the trafficRules property value. Traffic rules. This collection can contain a maximum of 1000 elements.
     * @return array<VpnTrafficRule>|null
    */
    public function getTrafficRules(): ?array {
        return $this->trafficRules;
    }

    /**
     * Gets the trustedNetworkDomains property value. Trusted Network Domains
     * @return array<string>|null
    */
    public function getTrustedNetworkDomains(): ?array {
        return $this->trustedNetworkDomains;
    }

    /**
     * Gets the windowsInformationProtectionDomain property value. Windows Information Protection (WIP) domain to associate with this connection.
     * @return string|null
    */
    public function getWindowsInformationProtectionDomain(): ?string {
        return $this->windowsInformationProtectionDomain;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('associatedApps', $this->associatedApps);
        $writer->writeEnumValue('authenticationMethod', $this->authenticationMethod);
        $writer->writeEnumValue('connectionType', $this->connectionType);
        $writer->writeObjectValue('cryptographySuite', $this->cryptographySuite);
        $writer->writeCollectionOfObjectValues('dnsRules', $this->dnsRules);
        $writer->writeCollectionOfPrimitiveValues('dnsSuffixes', $this->dnsSuffixes);
        $writer->writeBinaryContent('eapXml', $this->eapXml);
        $writer->writeBooleanValue('enableAlwaysOn', $this->enableAlwaysOn);
        $writer->writeBooleanValue('enableConditionalAccess', $this->enableConditionalAccess);
        $writer->writeBooleanValue('enableDeviceTunnel', $this->enableDeviceTunnel);
        $writer->writeBooleanValue('enableDnsRegistration', $this->enableDnsRegistration);
        $writer->writeBooleanValue('enableSingleSignOnWithAlternateCertificate', $this->enableSingleSignOnWithAlternateCertificate);
        $writer->writeBooleanValue('enableSplitTunneling', $this->enableSplitTunneling);
        $writer->writeObjectValue('identityCertificate', $this->identityCertificate);
        $writer->writeStringValue('microsoftTunnelSiteId', $this->microsoftTunnelSiteId);
        $writer->writeBooleanValue('onlyAssociatedAppsCanUseConnection', $this->onlyAssociatedAppsCanUseConnection);
        $writer->writeEnumValue('profileTarget', $this->profileTarget);
        $writer->writeObjectValue('proxyServer', $this->proxyServer);
        $writer->writeBooleanValue('rememberUserCredentials', $this->rememberUserCredentials);
        $writer->writeCollectionOfObjectValues('routes', $this->routes);
        $writer->writeObjectValue('singleSignOnEku', $this->singleSignOnEku);
        $writer->writeStringValue('singleSignOnIssuerHash', $this->singleSignOnIssuerHash);
        $writer->writeCollectionOfObjectValues('trafficRules', $this->trafficRules);
        $writer->writeCollectionOfPrimitiveValues('trustedNetworkDomains', $this->trustedNetworkDomains);
        $writer->writeStringValue('windowsInformationProtectionDomain', $this->windowsInformationProtectionDomain);
    }

    /**
     * Sets the associatedApps property value. Associated Apps. This collection can contain a maximum of 10000 elements.
     *  @param array<Windows10AssociatedApps>|null $value Value to set for the associatedApps property.
    */
    public function setAssociatedApps(?array $value ): void {
        $this->associatedApps = $value;
    }

    /**
     * Sets the authenticationMethod property value. Windows 10 VPN connection types.
     *  @param Windows10VpnAuthenticationMethod|null $value Value to set for the authenticationMethod property.
    */
    public function setAuthenticationMethod(?Windows10VpnAuthenticationMethod $value ): void {
        $this->authenticationMethod = $value;
    }

    /**
     * Sets the connectionType property value. VPN connection types.
     *  @param Windows10VpnConnectionType|null $value Value to set for the connectionType property.
    */
    public function setConnectionType(?Windows10VpnConnectionType $value ): void {
        $this->connectionType = $value;
    }

    /**
     * Sets the cryptographySuite property value. Cryptography Suite security settings for IKEv2 VPN in Windows10 and above
     *  @param CryptographySuite|null $value Value to set for the cryptographySuite property.
    */
    public function setCryptographySuite(?CryptographySuite $value ): void {
        $this->cryptographySuite = $value;
    }

    /**
     * Sets the dnsRules property value. DNS rules. This collection can contain a maximum of 1000 elements.
     *  @param array<VpnDnsRule>|null $value Value to set for the dnsRules property.
    */
    public function setDnsRules(?array $value ): void {
        $this->dnsRules = $value;
    }

    /**
     * Sets the dnsSuffixes property value. Specify DNS suffixes to add to the DNS search list to properly route short names.
     *  @param array<string>|null $value Value to set for the dnsSuffixes property.
    */
    public function setDnsSuffixes(?array $value ): void {
        $this->dnsSuffixes = $value;
    }

    /**
     * Sets the eapXml property value. Extensible Authentication Protocol (EAP) XML. (UTF8 encoded byte array)
     *  @param StreamInterface|null $value Value to set for the eapXml property.
    */
    public function setEapXml(?StreamInterface $value ): void {
        $this->eapXml = $value;
    }

    /**
     * Sets the enableAlwaysOn property value. Enable Always On mode.
     *  @param bool|null $value Value to set for the enableAlwaysOn property.
    */
    public function setEnableAlwaysOn(?bool $value ): void {
        $this->enableAlwaysOn = $value;
    }

    /**
     * Sets the enableConditionalAccess property value. Enable conditional access.
     *  @param bool|null $value Value to set for the enableConditionalAccess property.
    */
    public function setEnableConditionalAccess(?bool $value ): void {
        $this->enableConditionalAccess = $value;
    }

    /**
     * Sets the enableDeviceTunnel property value. Enable device tunnel.
     *  @param bool|null $value Value to set for the enableDeviceTunnel property.
    */
    public function setEnableDeviceTunnel(?bool $value ): void {
        $this->enableDeviceTunnel = $value;
    }

    /**
     * Sets the enableDnsRegistration property value. Enable IP address registration with internal DNS.
     *  @param bool|null $value Value to set for the enableDnsRegistration property.
    */
    public function setEnableDnsRegistration(?bool $value ): void {
        $this->enableDnsRegistration = $value;
    }

    /**
     * Sets the enableSingleSignOnWithAlternateCertificate property value. Enable single sign-on (SSO) with alternate certificate.
     *  @param bool|null $value Value to set for the enableSingleSignOnWithAlternateCertificate property.
    */
    public function setEnableSingleSignOnWithAlternateCertificate(?bool $value ): void {
        $this->enableSingleSignOnWithAlternateCertificate = $value;
    }

    /**
     * Sets the enableSplitTunneling property value. Enable split tunneling.
     *  @param bool|null $value Value to set for the enableSplitTunneling property.
    */
    public function setEnableSplitTunneling(?bool $value ): void {
        $this->enableSplitTunneling = $value;
    }

    /**
     * Sets the identityCertificate property value. Identity certificate for client authentication when authentication method is certificate.
     *  @param WindowsCertificateProfileBase|null $value Value to set for the identityCertificate property.
    */
    public function setIdentityCertificate(?WindowsCertificateProfileBase $value ): void {
        $this->identityCertificate = $value;
    }

    /**
     * Sets the microsoftTunnelSiteId property value. ID of the Microsoft Tunnel site associated with the VPN profile.
     *  @param string|null $value Value to set for the microsoftTunnelSiteId property.
    */
    public function setMicrosoftTunnelSiteId(?string $value ): void {
        $this->microsoftTunnelSiteId = $value;
    }

    /**
     * Sets the onlyAssociatedAppsCanUseConnection property value. Only associated Apps can use connection (per-app VPN).
     *  @param bool|null $value Value to set for the onlyAssociatedAppsCanUseConnection property.
    */
    public function setOnlyAssociatedAppsCanUseConnection(?bool $value ): void {
        $this->onlyAssociatedAppsCanUseConnection = $value;
    }

    /**
     * Sets the profileTarget property value. Profile target type. Possible values are: user, device, autoPilotDevice.
     *  @param Windows10VpnProfileTarget|null $value Value to set for the profileTarget property.
    */
    public function setProfileTarget(?Windows10VpnProfileTarget $value ): void {
        $this->profileTarget = $value;
    }

    /**
     * Sets the proxyServer property value. Proxy Server.
     *  @param Windows10VpnProxyServer|null $value Value to set for the proxyServer property.
    */
    public function setProxyServer(?Windows10VpnProxyServer $value ): void {
        $this->proxyServer = $value;
    }

    /**
     * Sets the rememberUserCredentials property value. Remember user credentials.
     *  @param bool|null $value Value to set for the rememberUserCredentials property.
    */
    public function setRememberUserCredentials(?bool $value ): void {
        $this->rememberUserCredentials = $value;
    }

    /**
     * Sets the routes property value. Routes (optional for third-party providers). This collection can contain a maximum of 1000 elements.
     *  @param array<VpnRoute>|null $value Value to set for the routes property.
    */
    public function setRoutes(?array $value ): void {
        $this->routes = $value;
    }

    /**
     * Sets the singleSignOnEku property value. Single sign-on Extended Key Usage (EKU).
     *  @param ExtendedKeyUsage|null $value Value to set for the singleSignOnEku property.
    */
    public function setSingleSignOnEku(?ExtendedKeyUsage $value ): void {
        $this->singleSignOnEku = $value;
    }

    /**
     * Sets the singleSignOnIssuerHash property value. Single sign-on issuer hash.
     *  @param string|null $value Value to set for the singleSignOnIssuerHash property.
    */
    public function setSingleSignOnIssuerHash(?string $value ): void {
        $this->singleSignOnIssuerHash = $value;
    }

    /**
     * Sets the trafficRules property value. Traffic rules. This collection can contain a maximum of 1000 elements.
     *  @param array<VpnTrafficRule>|null $value Value to set for the trafficRules property.
    */
    public function setTrafficRules(?array $value ): void {
        $this->trafficRules = $value;
    }

    /**
     * Sets the trustedNetworkDomains property value. Trusted Network Domains
     *  @param array<string>|null $value Value to set for the trustedNetworkDomains property.
    */
    public function setTrustedNetworkDomains(?array $value ): void {
        $this->trustedNetworkDomains = $value;
    }

    /**
     * Sets the windowsInformationProtectionDomain property value. Windows Information Protection (WIP) domain to associate with this connection.
     *  @param string|null $value Value to set for the windowsInformationProtectionDomain property.
    */
    public function setWindowsInformationProtectionDomain(?string $value ): void {
        $this->windowsInformationProtectionDomain = $value;
    }

}
