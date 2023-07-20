<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;
use Psr\Http\Message\StreamInterface;

/**
 * By providing the configurations in this profile you can instruct the Windows 10 device (desktop or mobile) to connect to desired VPN endpoint. By specifying the authentication method and security types expected by VPN endpoint you can make the VPN connection seamless for end user.
*/
class Windows10VpnConfiguration extends WindowsVpnConfiguration implements Parsable 
{
    /**
     * Instantiates a new windows10VpnConfiguration and sets the default values.
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
        $val = $this->getBackingStore()->get('associatedApps');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Windows10AssociatedApps::class);
            /** @var array<Windows10AssociatedApps>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'associatedApps'");
    }

    /**
     * Gets the authenticationMethod property value. Windows 10 VPN connection types.
     * @return Windows10VpnAuthenticationMethod|null
    */
    public function getAuthenticationMethod(): ?Windows10VpnAuthenticationMethod {
        $val = $this->getBackingStore()->get('authenticationMethod');
        if (is_null($val) || $val instanceof Windows10VpnAuthenticationMethod) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authenticationMethod'");
    }

    /**
     * Gets the connectionType property value. VPN connection types.
     * @return Windows10VpnConnectionType|null
    */
    public function getConnectionType(): ?Windows10VpnConnectionType {
        $val = $this->getBackingStore()->get('connectionType');
        if (is_null($val) || $val instanceof Windows10VpnConnectionType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'connectionType'");
    }

    /**
     * Gets the cryptographySuite property value. Cryptography Suite security settings for IKEv2 VPN in Windows10 and above
     * @return CryptographySuite|null
    */
    public function getCryptographySuite(): ?CryptographySuite {
        $val = $this->getBackingStore()->get('cryptographySuite');
        if (is_null($val) || $val instanceof CryptographySuite) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cryptographySuite'");
    }

    /**
     * Gets the dnsRules property value. DNS rules. This collection can contain a maximum of 1000 elements.
     * @return array<VpnDnsRule>|null
    */
    public function getDnsRules(): ?array {
        $val = $this->getBackingStore()->get('dnsRules');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, VpnDnsRule::class);
            /** @var array<VpnDnsRule>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dnsRules'");
    }

    /**
     * Gets the dnsSuffixes property value. Specify DNS suffixes to add to the DNS search list to properly route short names.
     * @return array<string>|null
    */
    public function getDnsSuffixes(): ?array {
        $val = $this->getBackingStore()->get('dnsSuffixes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dnsSuffixes'");
    }

    /**
     * Gets the eapXml property value. Extensible Authentication Protocol (EAP) XML. (UTF8 encoded byte array)
     * @return StreamInterface|null
    */
    public function getEapXml(): ?StreamInterface {
        $val = $this->getBackingStore()->get('eapXml');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'eapXml'");
    }

    /**
     * Gets the enableAlwaysOn property value. Enable Always On mode.
     * @return bool|null
    */
    public function getEnableAlwaysOn(): ?bool {
        $val = $this->getBackingStore()->get('enableAlwaysOn');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enableAlwaysOn'");
    }

    /**
     * Gets the enableConditionalAccess property value. Enable conditional access.
     * @return bool|null
    */
    public function getEnableConditionalAccess(): ?bool {
        $val = $this->getBackingStore()->get('enableConditionalAccess');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enableConditionalAccess'");
    }

    /**
     * Gets the enableDeviceTunnel property value. Enable device tunnel.
     * @return bool|null
    */
    public function getEnableDeviceTunnel(): ?bool {
        $val = $this->getBackingStore()->get('enableDeviceTunnel');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enableDeviceTunnel'");
    }

    /**
     * Gets the enableDnsRegistration property value. Enable IP address registration with internal DNS.
     * @return bool|null
    */
    public function getEnableDnsRegistration(): ?bool {
        $val = $this->getBackingStore()->get('enableDnsRegistration');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enableDnsRegistration'");
    }

    /**
     * Gets the enableSingleSignOnWithAlternateCertificate property value. Enable single sign-on (SSO) with alternate certificate.
     * @return bool|null
    */
    public function getEnableSingleSignOnWithAlternateCertificate(): ?bool {
        $val = $this->getBackingStore()->get('enableSingleSignOnWithAlternateCertificate');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enableSingleSignOnWithAlternateCertificate'");
    }

    /**
     * Gets the enableSplitTunneling property value. Enable split tunneling.
     * @return bool|null
    */
    public function getEnableSplitTunneling(): ?bool {
        $val = $this->getBackingStore()->get('enableSplitTunneling');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enableSplitTunneling'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'associatedApps' => fn(ParseNode $n) => $o->setAssociatedApps($n->getCollectionOfObjectValues([Windows10AssociatedApps::class, 'createFromDiscriminatorValue'])),
            'authenticationMethod' => fn(ParseNode $n) => $o->setAuthenticationMethod($n->getEnumValue(Windows10VpnAuthenticationMethod::class)),
            'connectionType' => fn(ParseNode $n) => $o->setConnectionType($n->getEnumValue(Windows10VpnConnectionType::class)),
            'cryptographySuite' => fn(ParseNode $n) => $o->setCryptographySuite($n->getObjectValue([CryptographySuite::class, 'createFromDiscriminatorValue'])),
            'dnsRules' => fn(ParseNode $n) => $o->setDnsRules($n->getCollectionOfObjectValues([VpnDnsRule::class, 'createFromDiscriminatorValue'])),
            'dnsSuffixes' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setDnsSuffixes($val);
            },
            'eapXml' => fn(ParseNode $n) => $o->setEapXml($n->getBinaryContent()),
            'enableAlwaysOn' => fn(ParseNode $n) => $o->setEnableAlwaysOn($n->getBooleanValue()),
            'enableConditionalAccess' => fn(ParseNode $n) => $o->setEnableConditionalAccess($n->getBooleanValue()),
            'enableDeviceTunnel' => fn(ParseNode $n) => $o->setEnableDeviceTunnel($n->getBooleanValue()),
            'enableDnsRegistration' => fn(ParseNode $n) => $o->setEnableDnsRegistration($n->getBooleanValue()),
            'enableSingleSignOnWithAlternateCertificate' => fn(ParseNode $n) => $o->setEnableSingleSignOnWithAlternateCertificate($n->getBooleanValue()),
            'enableSplitTunneling' => fn(ParseNode $n) => $o->setEnableSplitTunneling($n->getBooleanValue()),
            'identityCertificate' => fn(ParseNode $n) => $o->setIdentityCertificate($n->getObjectValue([WindowsCertificateProfileBase::class, 'createFromDiscriminatorValue'])),
            'microsoftTunnelSiteId' => fn(ParseNode $n) => $o->setMicrosoftTunnelSiteId($n->getStringValue()),
            'onlyAssociatedAppsCanUseConnection' => fn(ParseNode $n) => $o->setOnlyAssociatedAppsCanUseConnection($n->getBooleanValue()),
            'profileTarget' => fn(ParseNode $n) => $o->setProfileTarget($n->getEnumValue(Windows10VpnProfileTarget::class)),
            'proxyServer' => fn(ParseNode $n) => $o->setProxyServer($n->getObjectValue([Windows10VpnProxyServer::class, 'createFromDiscriminatorValue'])),
            'rememberUserCredentials' => fn(ParseNode $n) => $o->setRememberUserCredentials($n->getBooleanValue()),
            'routes' => fn(ParseNode $n) => $o->setRoutes($n->getCollectionOfObjectValues([VpnRoute::class, 'createFromDiscriminatorValue'])),
            'singleSignOnEku' => fn(ParseNode $n) => $o->setSingleSignOnEku($n->getObjectValue([ExtendedKeyUsage::class, 'createFromDiscriminatorValue'])),
            'singleSignOnIssuerHash' => fn(ParseNode $n) => $o->setSingleSignOnIssuerHash($n->getStringValue()),
            'trafficRules' => fn(ParseNode $n) => $o->setTrafficRules($n->getCollectionOfObjectValues([VpnTrafficRule::class, 'createFromDiscriminatorValue'])),
            'trustedNetworkDomains' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setTrustedNetworkDomains($val);
            },
            'windowsInformationProtectionDomain' => fn(ParseNode $n) => $o->setWindowsInformationProtectionDomain($n->getStringValue()),
        ]);
    }

    /**
     * Gets the identityCertificate property value. Identity certificate for client authentication when authentication method is certificate.
     * @return WindowsCertificateProfileBase|null
    */
    public function getIdentityCertificate(): ?WindowsCertificateProfileBase {
        $val = $this->getBackingStore()->get('identityCertificate');
        if (is_null($val) || $val instanceof WindowsCertificateProfileBase) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'identityCertificate'");
    }

    /**
     * Gets the microsoftTunnelSiteId property value. ID of the Microsoft Tunnel site associated with the VPN profile.
     * @return string|null
    */
    public function getMicrosoftTunnelSiteId(): ?string {
        $val = $this->getBackingStore()->get('microsoftTunnelSiteId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'microsoftTunnelSiteId'");
    }

    /**
     * Gets the onlyAssociatedAppsCanUseConnection property value. Only associated Apps can use connection (per-app VPN).
     * @return bool|null
    */
    public function getOnlyAssociatedAppsCanUseConnection(): ?bool {
        $val = $this->getBackingStore()->get('onlyAssociatedAppsCanUseConnection');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onlyAssociatedAppsCanUseConnection'");
    }

    /**
     * Gets the profileTarget property value. Profile target type. Possible values are: user, device, autoPilotDevice.
     * @return Windows10VpnProfileTarget|null
    */
    public function getProfileTarget(): ?Windows10VpnProfileTarget {
        $val = $this->getBackingStore()->get('profileTarget');
        if (is_null($val) || $val instanceof Windows10VpnProfileTarget) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'profileTarget'");
    }

    /**
     * Gets the proxyServer property value. Proxy Server.
     * @return Windows10VpnProxyServer|null
    */
    public function getProxyServer(): ?Windows10VpnProxyServer {
        $val = $this->getBackingStore()->get('proxyServer');
        if (is_null($val) || $val instanceof Windows10VpnProxyServer) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'proxyServer'");
    }

    /**
     * Gets the rememberUserCredentials property value. Remember user credentials.
     * @return bool|null
    */
    public function getRememberUserCredentials(): ?bool {
        $val = $this->getBackingStore()->get('rememberUserCredentials');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'rememberUserCredentials'");
    }

    /**
     * Gets the routes property value. Routes (optional for third-party providers). This collection can contain a maximum of 1000 elements.
     * @return array<VpnRoute>|null
    */
    public function getRoutes(): ?array {
        $val = $this->getBackingStore()->get('routes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, VpnRoute::class);
            /** @var array<VpnRoute>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'routes'");
    }

    /**
     * Gets the singleSignOnEku property value. Single sign-on Extended Key Usage (EKU).
     * @return ExtendedKeyUsage|null
    */
    public function getSingleSignOnEku(): ?ExtendedKeyUsage {
        $val = $this->getBackingStore()->get('singleSignOnEku');
        if (is_null($val) || $val instanceof ExtendedKeyUsage) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'singleSignOnEku'");
    }

    /**
     * Gets the singleSignOnIssuerHash property value. Single sign-on issuer hash.
     * @return string|null
    */
    public function getSingleSignOnIssuerHash(): ?string {
        $val = $this->getBackingStore()->get('singleSignOnIssuerHash');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'singleSignOnIssuerHash'");
    }

    /**
     * Gets the trafficRules property value. Traffic rules. This collection can contain a maximum of 1000 elements.
     * @return array<VpnTrafficRule>|null
    */
    public function getTrafficRules(): ?array {
        $val = $this->getBackingStore()->get('trafficRules');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, VpnTrafficRule::class);
            /** @var array<VpnTrafficRule>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'trafficRules'");
    }

    /**
     * Gets the trustedNetworkDomains property value. Trusted Network Domains
     * @return array<string>|null
    */
    public function getTrustedNetworkDomains(): ?array {
        $val = $this->getBackingStore()->get('trustedNetworkDomains');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'trustedNetworkDomains'");
    }

    /**
     * Gets the windowsInformationProtectionDomain property value. Windows Information Protection (WIP) domain to associate with this connection.
     * @return string|null
    */
    public function getWindowsInformationProtectionDomain(): ?string {
        $val = $this->getBackingStore()->get('windowsInformationProtectionDomain');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsInformationProtectionDomain'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('associatedApps', $this->getAssociatedApps());
        $writer->writeEnumValue('authenticationMethod', $this->getAuthenticationMethod());
        $writer->writeEnumValue('connectionType', $this->getConnectionType());
        $writer->writeObjectValue('cryptographySuite', $this->getCryptographySuite());
        $writer->writeCollectionOfObjectValues('dnsRules', $this->getDnsRules());
        $writer->writeCollectionOfPrimitiveValues('dnsSuffixes', $this->getDnsSuffixes());
        $writer->writeBinaryContent('eapXml', $this->getEapXml());
        $writer->writeBooleanValue('enableAlwaysOn', $this->getEnableAlwaysOn());
        $writer->writeBooleanValue('enableConditionalAccess', $this->getEnableConditionalAccess());
        $writer->writeBooleanValue('enableDeviceTunnel', $this->getEnableDeviceTunnel());
        $writer->writeBooleanValue('enableDnsRegistration', $this->getEnableDnsRegistration());
        $writer->writeBooleanValue('enableSingleSignOnWithAlternateCertificate', $this->getEnableSingleSignOnWithAlternateCertificate());
        $writer->writeBooleanValue('enableSplitTunneling', $this->getEnableSplitTunneling());
        $writer->writeObjectValue('identityCertificate', $this->getIdentityCertificate());
        $writer->writeStringValue('microsoftTunnelSiteId', $this->getMicrosoftTunnelSiteId());
        $writer->writeBooleanValue('onlyAssociatedAppsCanUseConnection', $this->getOnlyAssociatedAppsCanUseConnection());
        $writer->writeEnumValue('profileTarget', $this->getProfileTarget());
        $writer->writeObjectValue('proxyServer', $this->getProxyServer());
        $writer->writeBooleanValue('rememberUserCredentials', $this->getRememberUserCredentials());
        $writer->writeCollectionOfObjectValues('routes', $this->getRoutes());
        $writer->writeObjectValue('singleSignOnEku', $this->getSingleSignOnEku());
        $writer->writeStringValue('singleSignOnIssuerHash', $this->getSingleSignOnIssuerHash());
        $writer->writeCollectionOfObjectValues('trafficRules', $this->getTrafficRules());
        $writer->writeCollectionOfPrimitiveValues('trustedNetworkDomains', $this->getTrustedNetworkDomains());
        $writer->writeStringValue('windowsInformationProtectionDomain', $this->getWindowsInformationProtectionDomain());
    }

    /**
     * Sets the associatedApps property value. Associated Apps. This collection can contain a maximum of 10000 elements.
     * @param array<Windows10AssociatedApps>|null $value Value to set for the associatedApps property.
    */
    public function setAssociatedApps(?array $value): void {
        $this->getBackingStore()->set('associatedApps', $value);
    }

    /**
     * Sets the authenticationMethod property value. Windows 10 VPN connection types.
     * @param Windows10VpnAuthenticationMethod|null $value Value to set for the authenticationMethod property.
    */
    public function setAuthenticationMethod(?Windows10VpnAuthenticationMethod $value): void {
        $this->getBackingStore()->set('authenticationMethod', $value);
    }

    /**
     * Sets the connectionType property value. VPN connection types.
     * @param Windows10VpnConnectionType|null $value Value to set for the connectionType property.
    */
    public function setConnectionType(?Windows10VpnConnectionType $value): void {
        $this->getBackingStore()->set('connectionType', $value);
    }

    /**
     * Sets the cryptographySuite property value. Cryptography Suite security settings for IKEv2 VPN in Windows10 and above
     * @param CryptographySuite|null $value Value to set for the cryptographySuite property.
    */
    public function setCryptographySuite(?CryptographySuite $value): void {
        $this->getBackingStore()->set('cryptographySuite', $value);
    }

    /**
     * Sets the dnsRules property value. DNS rules. This collection can contain a maximum of 1000 elements.
     * @param array<VpnDnsRule>|null $value Value to set for the dnsRules property.
    */
    public function setDnsRules(?array $value): void {
        $this->getBackingStore()->set('dnsRules', $value);
    }

    /**
     * Sets the dnsSuffixes property value. Specify DNS suffixes to add to the DNS search list to properly route short names.
     * @param array<string>|null $value Value to set for the dnsSuffixes property.
    */
    public function setDnsSuffixes(?array $value): void {
        $this->getBackingStore()->set('dnsSuffixes', $value);
    }

    /**
     * Sets the eapXml property value. Extensible Authentication Protocol (EAP) XML. (UTF8 encoded byte array)
     * @param StreamInterface|null $value Value to set for the eapXml property.
    */
    public function setEapXml(?StreamInterface $value): void {
        $this->getBackingStore()->set('eapXml', $value);
    }

    /**
     * Sets the enableAlwaysOn property value. Enable Always On mode.
     * @param bool|null $value Value to set for the enableAlwaysOn property.
    */
    public function setEnableAlwaysOn(?bool $value): void {
        $this->getBackingStore()->set('enableAlwaysOn', $value);
    }

    /**
     * Sets the enableConditionalAccess property value. Enable conditional access.
     * @param bool|null $value Value to set for the enableConditionalAccess property.
    */
    public function setEnableConditionalAccess(?bool $value): void {
        $this->getBackingStore()->set('enableConditionalAccess', $value);
    }

    /**
     * Sets the enableDeviceTunnel property value. Enable device tunnel.
     * @param bool|null $value Value to set for the enableDeviceTunnel property.
    */
    public function setEnableDeviceTunnel(?bool $value): void {
        $this->getBackingStore()->set('enableDeviceTunnel', $value);
    }

    /**
     * Sets the enableDnsRegistration property value. Enable IP address registration with internal DNS.
     * @param bool|null $value Value to set for the enableDnsRegistration property.
    */
    public function setEnableDnsRegistration(?bool $value): void {
        $this->getBackingStore()->set('enableDnsRegistration', $value);
    }

    /**
     * Sets the enableSingleSignOnWithAlternateCertificate property value. Enable single sign-on (SSO) with alternate certificate.
     * @param bool|null $value Value to set for the enableSingleSignOnWithAlternateCertificate property.
    */
    public function setEnableSingleSignOnWithAlternateCertificate(?bool $value): void {
        $this->getBackingStore()->set('enableSingleSignOnWithAlternateCertificate', $value);
    }

    /**
     * Sets the enableSplitTunneling property value. Enable split tunneling.
     * @param bool|null $value Value to set for the enableSplitTunneling property.
    */
    public function setEnableSplitTunneling(?bool $value): void {
        $this->getBackingStore()->set('enableSplitTunneling', $value);
    }

    /**
     * Sets the identityCertificate property value. Identity certificate for client authentication when authentication method is certificate.
     * @param WindowsCertificateProfileBase|null $value Value to set for the identityCertificate property.
    */
    public function setIdentityCertificate(?WindowsCertificateProfileBase $value): void {
        $this->getBackingStore()->set('identityCertificate', $value);
    }

    /**
     * Sets the microsoftTunnelSiteId property value. ID of the Microsoft Tunnel site associated with the VPN profile.
     * @param string|null $value Value to set for the microsoftTunnelSiteId property.
    */
    public function setMicrosoftTunnelSiteId(?string $value): void {
        $this->getBackingStore()->set('microsoftTunnelSiteId', $value);
    }

    /**
     * Sets the onlyAssociatedAppsCanUseConnection property value. Only associated Apps can use connection (per-app VPN).
     * @param bool|null $value Value to set for the onlyAssociatedAppsCanUseConnection property.
    */
    public function setOnlyAssociatedAppsCanUseConnection(?bool $value): void {
        $this->getBackingStore()->set('onlyAssociatedAppsCanUseConnection', $value);
    }

    /**
     * Sets the profileTarget property value. Profile target type. Possible values are: user, device, autoPilotDevice.
     * @param Windows10VpnProfileTarget|null $value Value to set for the profileTarget property.
    */
    public function setProfileTarget(?Windows10VpnProfileTarget $value): void {
        $this->getBackingStore()->set('profileTarget', $value);
    }

    /**
     * Sets the proxyServer property value. Proxy Server.
     * @param Windows10VpnProxyServer|null $value Value to set for the proxyServer property.
    */
    public function setProxyServer(?Windows10VpnProxyServer $value): void {
        $this->getBackingStore()->set('proxyServer', $value);
    }

    /**
     * Sets the rememberUserCredentials property value. Remember user credentials.
     * @param bool|null $value Value to set for the rememberUserCredentials property.
    */
    public function setRememberUserCredentials(?bool $value): void {
        $this->getBackingStore()->set('rememberUserCredentials', $value);
    }

    /**
     * Sets the routes property value. Routes (optional for third-party providers). This collection can contain a maximum of 1000 elements.
     * @param array<VpnRoute>|null $value Value to set for the routes property.
    */
    public function setRoutes(?array $value): void {
        $this->getBackingStore()->set('routes', $value);
    }

    /**
     * Sets the singleSignOnEku property value. Single sign-on Extended Key Usage (EKU).
     * @param ExtendedKeyUsage|null $value Value to set for the singleSignOnEku property.
    */
    public function setSingleSignOnEku(?ExtendedKeyUsage $value): void {
        $this->getBackingStore()->set('singleSignOnEku', $value);
    }

    /**
     * Sets the singleSignOnIssuerHash property value. Single sign-on issuer hash.
     * @param string|null $value Value to set for the singleSignOnIssuerHash property.
    */
    public function setSingleSignOnIssuerHash(?string $value): void {
        $this->getBackingStore()->set('singleSignOnIssuerHash', $value);
    }

    /**
     * Sets the trafficRules property value. Traffic rules. This collection can contain a maximum of 1000 elements.
     * @param array<VpnTrafficRule>|null $value Value to set for the trafficRules property.
    */
    public function setTrafficRules(?array $value): void {
        $this->getBackingStore()->set('trafficRules', $value);
    }

    /**
     * Sets the trustedNetworkDomains property value. Trusted Network Domains
     * @param array<string>|null $value Value to set for the trustedNetworkDomains property.
    */
    public function setTrustedNetworkDomains(?array $value): void {
        $this->getBackingStore()->set('trustedNetworkDomains', $value);
    }

    /**
     * Sets the windowsInformationProtectionDomain property value. Windows Information Protection (WIP) domain to associate with this connection.
     * @param string|null $value Value to set for the windowsInformationProtectionDomain property.
    */
    public function setWindowsInformationProtectionDomain(?string $value): void {
        $this->getBackingStore()->set('windowsInformationProtectionDomain', $value);
    }

}
