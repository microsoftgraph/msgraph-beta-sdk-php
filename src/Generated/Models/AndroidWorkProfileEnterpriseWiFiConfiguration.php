<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidWorkProfileEnterpriseWiFiConfiguration extends AndroidWorkProfileWiFiConfiguration implements Parsable 
{
    /**
     * @var WiFiAuthenticationMethod|null $authenticationMethod Indicates the Authentication Method the client (device) needs to use when the EAP Type is configured to PEAP or EAP-TTLS. Possible values are: certificate, usernameAndPassword, derivedCredential.
    */
    private ?WiFiAuthenticationMethod $authenticationMethod = null;
    
    /**
     * @var AndroidEapType|null $eapType Extensible Authentication Protocol (EAP) Configuration Types.
    */
    private ?AndroidEapType $eapType = null;
    
    /**
     * @var AndroidWorkProfileCertificateProfileBase|null $identityCertificateForClientAuthentication Identity Certificate for client authentication when EAP Type is configured to EAP-TLS, EAP-TTLS (with Certificate Authentication), or PEAP (with Certificate Authentication). This is the certificate presented by client to the Wi-Fi endpoint. The authentication server sitting behind the Wi-Fi endpoint must accept this certificate to successfully establish a Wi-Fi connection.
    */
    private ?AndroidWorkProfileCertificateProfileBase $identityCertificateForClientAuthentication = null;
    
    /**
     * @var NonEapAuthenticationMethodForEapTtlsType|null $innerAuthenticationProtocolForEapTtls Non-EAP Method for Authentication (Inner Identity) when EAP Type is EAP-TTLS and Authenticationmethod is Username and Password. Possible values are: unencryptedPassword, challengeHandshakeAuthenticationProtocol, microsoftChap, microsoftChapVersionTwo.
    */
    private ?NonEapAuthenticationMethodForEapTtlsType $innerAuthenticationProtocolForEapTtls = null;
    
    /**
     * @var NonEapAuthenticationMethodForPeap|null $innerAuthenticationProtocolForPeap Non-EAP Method for Authentication (Inner Identity) when EAP Type is PEAP and Authenticationmethod is Username and Password. Possible values are: none, microsoftChapVersionTwo.
    */
    private ?NonEapAuthenticationMethodForPeap $innerAuthenticationProtocolForPeap = null;
    
    /**
     * @var string|null $outerIdentityPrivacyTemporaryValue Enable identity privacy (Outer Identity) when EAP Type is configured to EAP-TTLS or PEAP. The String provided here is used to mask the username of individual users when they attempt to connect to Wi-Fi network.
    */
    private ?string $outerIdentityPrivacyTemporaryValue = null;
    
    /**
     * @var string|null $proxyAutomaticConfigurationUrl URL of the proxy server automatic configuration script when automatic configuration is selected. This URL is typically the location of PAC (Proxy Auto Configuration) file.
    */
    private ?string $proxyAutomaticConfigurationUrl = null;
    
    /**
     * @var WiFiProxySetting|null $proxySettings Wi-Fi Proxy Settings.
    */
    private ?WiFiProxySetting $proxySettings = null;
    
    /**
     * @var AndroidWorkProfileTrustedRootCertificate|null $rootCertificateForServerValidation Trusted Root Certificate for Server Validation when EAP Type is configured to EAP-TLS, EAP-TTLS or PEAP. This is the certificate presented by the Wi-Fi endpoint when the device attempts to connect to Wi-Fi endpoint. The device (or user) must accept this certificate to continue the connection attempt.
    */
    private ?AndroidWorkProfileTrustedRootCertificate $rootCertificateForServerValidation = null;
    
    /**
     * @var array<string>|null $trustedServerCertificateNames Trusted server certificate names when EAP Type is configured to EAP-TLS/TTLS/FAST or PEAP. This is the common name used in the certificates issued by your trusted certificate authority (CA). If you provide this information, you can bypass the dynamic trust dialog that is displayed on end users' devices when they connect to this Wi-Fi network.
    */
    private ?array $trustedServerCertificateNames = null;
    
    /**
     * Instantiates a new AndroidWorkProfileEnterpriseWiFiConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.androidWorkProfileEnterpriseWiFiConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidWorkProfileEnterpriseWiFiConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidWorkProfileEnterpriseWiFiConfiguration {
        return new AndroidWorkProfileEnterpriseWiFiConfiguration();
    }

    /**
     * Gets the authenticationMethod property value. Indicates the Authentication Method the client (device) needs to use when the EAP Type is configured to PEAP or EAP-TTLS. Possible values are: certificate, usernameAndPassword, derivedCredential.
     * @return WiFiAuthenticationMethod|null
    */
    public function getAuthenticationMethod(): ?WiFiAuthenticationMethod {
        return $this->authenticationMethod;
    }

    /**
     * Gets the eapType property value. Extensible Authentication Protocol (EAP) Configuration Types.
     * @return AndroidEapType|null
    */
    public function getEapType(): ?AndroidEapType {
        return $this->eapType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'authenticationMethod' => fn(ParseNode $n) => $o->setAuthenticationMethod($n->getEnumValue(WiFiAuthenticationMethod::class)),
            'eapType' => fn(ParseNode $n) => $o->setEapType($n->getEnumValue(AndroidEapType::class)),
            'identityCertificateForClientAuthentication' => fn(ParseNode $n) => $o->setIdentityCertificateForClientAuthentication($n->getObjectValue([AndroidWorkProfileCertificateProfileBase::class, 'createFromDiscriminatorValue'])),
            'innerAuthenticationProtocolForEapTtls' => fn(ParseNode $n) => $o->setInnerAuthenticationProtocolForEapTtls($n->getEnumValue(NonEapAuthenticationMethodForEapTtlsType::class)),
            'innerAuthenticationProtocolForPeap' => fn(ParseNode $n) => $o->setInnerAuthenticationProtocolForPeap($n->getEnumValue(NonEapAuthenticationMethodForPeap::class)),
            'outerIdentityPrivacyTemporaryValue' => fn(ParseNode $n) => $o->setOuterIdentityPrivacyTemporaryValue($n->getStringValue()),
            'proxyAutomaticConfigurationUrl' => fn(ParseNode $n) => $o->setProxyAutomaticConfigurationUrl($n->getStringValue()),
            'proxySettings' => fn(ParseNode $n) => $o->setProxySettings($n->getEnumValue(WiFiProxySetting::class)),
            'rootCertificateForServerValidation' => fn(ParseNode $n) => $o->setRootCertificateForServerValidation($n->getObjectValue([AndroidWorkProfileTrustedRootCertificate::class, 'createFromDiscriminatorValue'])),
            'trustedServerCertificateNames' => fn(ParseNode $n) => $o->setTrustedServerCertificateNames($n->getCollectionOfPrimitiveValues()),
        ]);
    }

    /**
     * Gets the identityCertificateForClientAuthentication property value. Identity Certificate for client authentication when EAP Type is configured to EAP-TLS, EAP-TTLS (with Certificate Authentication), or PEAP (with Certificate Authentication). This is the certificate presented by client to the Wi-Fi endpoint. The authentication server sitting behind the Wi-Fi endpoint must accept this certificate to successfully establish a Wi-Fi connection.
     * @return AndroidWorkProfileCertificateProfileBase|null
    */
    public function getIdentityCertificateForClientAuthentication(): ?AndroidWorkProfileCertificateProfileBase {
        return $this->identityCertificateForClientAuthentication;
    }

    /**
     * Gets the innerAuthenticationProtocolForEapTtls property value. Non-EAP Method for Authentication (Inner Identity) when EAP Type is EAP-TTLS and Authenticationmethod is Username and Password. Possible values are: unencryptedPassword, challengeHandshakeAuthenticationProtocol, microsoftChap, microsoftChapVersionTwo.
     * @return NonEapAuthenticationMethodForEapTtlsType|null
    */
    public function getInnerAuthenticationProtocolForEapTtls(): ?NonEapAuthenticationMethodForEapTtlsType {
        return $this->innerAuthenticationProtocolForEapTtls;
    }

    /**
     * Gets the innerAuthenticationProtocolForPeap property value. Non-EAP Method for Authentication (Inner Identity) when EAP Type is PEAP and Authenticationmethod is Username and Password. Possible values are: none, microsoftChapVersionTwo.
     * @return NonEapAuthenticationMethodForPeap|null
    */
    public function getInnerAuthenticationProtocolForPeap(): ?NonEapAuthenticationMethodForPeap {
        return $this->innerAuthenticationProtocolForPeap;
    }

    /**
     * Gets the outerIdentityPrivacyTemporaryValue property value. Enable identity privacy (Outer Identity) when EAP Type is configured to EAP-TTLS or PEAP. The String provided here is used to mask the username of individual users when they attempt to connect to Wi-Fi network.
     * @return string|null
    */
    public function getOuterIdentityPrivacyTemporaryValue(): ?string {
        return $this->outerIdentityPrivacyTemporaryValue;
    }

    /**
     * Gets the proxyAutomaticConfigurationUrl property value. URL of the proxy server automatic configuration script when automatic configuration is selected. This URL is typically the location of PAC (Proxy Auto Configuration) file.
     * @return string|null
    */
    public function getProxyAutomaticConfigurationUrl(): ?string {
        return $this->proxyAutomaticConfigurationUrl;
    }

    /**
     * Gets the proxySettings property value. Wi-Fi Proxy Settings.
     * @return WiFiProxySetting|null
    */
    public function getProxySettings(): ?WiFiProxySetting {
        return $this->proxySettings;
    }

    /**
     * Gets the rootCertificateForServerValidation property value. Trusted Root Certificate for Server Validation when EAP Type is configured to EAP-TLS, EAP-TTLS or PEAP. This is the certificate presented by the Wi-Fi endpoint when the device attempts to connect to Wi-Fi endpoint. The device (or user) must accept this certificate to continue the connection attempt.
     * @return AndroidWorkProfileTrustedRootCertificate|null
    */
    public function getRootCertificateForServerValidation(): ?AndroidWorkProfileTrustedRootCertificate {
        return $this->rootCertificateForServerValidation;
    }

    /**
     * Gets the trustedServerCertificateNames property value. Trusted server certificate names when EAP Type is configured to EAP-TLS/TTLS/FAST or PEAP. This is the common name used in the certificates issued by your trusted certificate authority (CA). If you provide this information, you can bypass the dynamic trust dialog that is displayed on end users' devices when they connect to this Wi-Fi network.
     * @return array<string>|null
    */
    public function getTrustedServerCertificateNames(): ?array {
        return $this->trustedServerCertificateNames;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('authenticationMethod', $this->authenticationMethod);
        $writer->writeEnumValue('eapType', $this->eapType);
        $writer->writeObjectValue('identityCertificateForClientAuthentication', $this->identityCertificateForClientAuthentication);
        $writer->writeEnumValue('innerAuthenticationProtocolForEapTtls', $this->innerAuthenticationProtocolForEapTtls);
        $writer->writeEnumValue('innerAuthenticationProtocolForPeap', $this->innerAuthenticationProtocolForPeap);
        $writer->writeStringValue('outerIdentityPrivacyTemporaryValue', $this->outerIdentityPrivacyTemporaryValue);
        $writer->writeStringValue('proxyAutomaticConfigurationUrl', $this->proxyAutomaticConfigurationUrl);
        $writer->writeEnumValue('proxySettings', $this->proxySettings);
        $writer->writeObjectValue('rootCertificateForServerValidation', $this->rootCertificateForServerValidation);
        $writer->writeCollectionOfPrimitiveValues('trustedServerCertificateNames', $this->trustedServerCertificateNames);
    }

    /**
     * Sets the authenticationMethod property value. Indicates the Authentication Method the client (device) needs to use when the EAP Type is configured to PEAP or EAP-TTLS. Possible values are: certificate, usernameAndPassword, derivedCredential.
     *  @param WiFiAuthenticationMethod|null $value Value to set for the authenticationMethod property.
    */
    public function setAuthenticationMethod(?WiFiAuthenticationMethod $value ): void {
        $this->authenticationMethod = $value;
    }

    /**
     * Sets the eapType property value. Extensible Authentication Protocol (EAP) Configuration Types.
     *  @param AndroidEapType|null $value Value to set for the eapType property.
    */
    public function setEapType(?AndroidEapType $value ): void {
        $this->eapType = $value;
    }

    /**
     * Sets the identityCertificateForClientAuthentication property value. Identity Certificate for client authentication when EAP Type is configured to EAP-TLS, EAP-TTLS (with Certificate Authentication), or PEAP (with Certificate Authentication). This is the certificate presented by client to the Wi-Fi endpoint. The authentication server sitting behind the Wi-Fi endpoint must accept this certificate to successfully establish a Wi-Fi connection.
     *  @param AndroidWorkProfileCertificateProfileBase|null $value Value to set for the identityCertificateForClientAuthentication property.
    */
    public function setIdentityCertificateForClientAuthentication(?AndroidWorkProfileCertificateProfileBase $value ): void {
        $this->identityCertificateForClientAuthentication = $value;
    }

    /**
     * Sets the innerAuthenticationProtocolForEapTtls property value. Non-EAP Method for Authentication (Inner Identity) when EAP Type is EAP-TTLS and Authenticationmethod is Username and Password. Possible values are: unencryptedPassword, challengeHandshakeAuthenticationProtocol, microsoftChap, microsoftChapVersionTwo.
     *  @param NonEapAuthenticationMethodForEapTtlsType|null $value Value to set for the innerAuthenticationProtocolForEapTtls property.
    */
    public function setInnerAuthenticationProtocolForEapTtls(?NonEapAuthenticationMethodForEapTtlsType $value ): void {
        $this->innerAuthenticationProtocolForEapTtls = $value;
    }

    /**
     * Sets the innerAuthenticationProtocolForPeap property value. Non-EAP Method for Authentication (Inner Identity) when EAP Type is PEAP and Authenticationmethod is Username and Password. Possible values are: none, microsoftChapVersionTwo.
     *  @param NonEapAuthenticationMethodForPeap|null $value Value to set for the innerAuthenticationProtocolForPeap property.
    */
    public function setInnerAuthenticationProtocolForPeap(?NonEapAuthenticationMethodForPeap $value ): void {
        $this->innerAuthenticationProtocolForPeap = $value;
    }

    /**
     * Sets the outerIdentityPrivacyTemporaryValue property value. Enable identity privacy (Outer Identity) when EAP Type is configured to EAP-TTLS or PEAP. The String provided here is used to mask the username of individual users when they attempt to connect to Wi-Fi network.
     *  @param string|null $value Value to set for the outerIdentityPrivacyTemporaryValue property.
    */
    public function setOuterIdentityPrivacyTemporaryValue(?string $value ): void {
        $this->outerIdentityPrivacyTemporaryValue = $value;
    }

    /**
     * Sets the proxyAutomaticConfigurationUrl property value. URL of the proxy server automatic configuration script when automatic configuration is selected. This URL is typically the location of PAC (Proxy Auto Configuration) file.
     *  @param string|null $value Value to set for the proxyAutomaticConfigurationUrl property.
    */
    public function setProxyAutomaticConfigurationUrl(?string $value ): void {
        $this->proxyAutomaticConfigurationUrl = $value;
    }

    /**
     * Sets the proxySettings property value. Wi-Fi Proxy Settings.
     *  @param WiFiProxySetting|null $value Value to set for the proxySettings property.
    */
    public function setProxySettings(?WiFiProxySetting $value ): void {
        $this->proxySettings = $value;
    }

    /**
     * Sets the rootCertificateForServerValidation property value. Trusted Root Certificate for Server Validation when EAP Type is configured to EAP-TLS, EAP-TTLS or PEAP. This is the certificate presented by the Wi-Fi endpoint when the device attempts to connect to Wi-Fi endpoint. The device (or user) must accept this certificate to continue the connection attempt.
     *  @param AndroidWorkProfileTrustedRootCertificate|null $value Value to set for the rootCertificateForServerValidation property.
    */
    public function setRootCertificateForServerValidation(?AndroidWorkProfileTrustedRootCertificate $value ): void {
        $this->rootCertificateForServerValidation = $value;
    }

    /**
     * Sets the trustedServerCertificateNames property value. Trusted server certificate names when EAP Type is configured to EAP-TLS/TTLS/FAST or PEAP. This is the common name used in the certificates issued by your trusted certificate authority (CA). If you provide this information, you can bypass the dynamic trust dialog that is displayed on end users' devices when they connect to this Wi-Fi network.
     *  @param array<string>|null $value Value to set for the trustedServerCertificateNames property.
    */
    public function setTrustedServerCertificateNames(?array $value ): void {
        $this->trustedServerCertificateNames = $value;
    }

}
