<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MacOSWiredNetworkConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * @var WiFiAuthenticationMethod|null $authenticationMethod Authentication Method when EAP Type is configured to PEAP or EAP-TTLS. Possible values are: certificate, usernameAndPassword, derivedCredential.
    */
    private ?WiFiAuthenticationMethod $authenticationMethod = null;
    
    /**
     * @var EapFastConfiguration|null $eapFastConfiguration EAP-FAST Configuration Option when EAP-FAST is the selected EAP Type. Possible values are: noProtectedAccessCredential, useProtectedAccessCredential, useProtectedAccessCredentialAndProvision, useProtectedAccessCredentialAndProvisionAnonymously.
    */
    private ?EapFastConfiguration $eapFastConfiguration = null;
    
    /**
     * @var EapType|null $eapType Extensible Authentication Protocol (EAP) configuration types.
    */
    private ?EapType $eapType = null;
    
    /**
     * @var string|null $enableOuterIdentityPrivacy Enable identity privacy (Outer Identity) when EAP Type is configured to EAP-TTLS, EAP-FAST or PEAP. This property masks usernames with the text you enter. For example, if you use 'anonymous', each user that authenticates with this wired network using their real username is displayed as 'anonymous'.
    */
    private ?string $enableOuterIdentityPrivacy = null;
    
    /**
     * @var MacOSCertificateProfileBase|null $identityCertificateForClientAuthentication Identity Certificate for client authentication when EAP Type is configured to EAP-TLS, EAP-TTLS (with Certificate Authentication), or PEAP (with Certificate Authentication).
    */
    private ?MacOSCertificateProfileBase $identityCertificateForClientAuthentication = null;
    
    /**
     * @var WiredNetworkInterface|null $networkInterface Apple network interface type.
    */
    private ?WiredNetworkInterface $networkInterface = null;
    
    /**
     * @var string|null $networkName Network Name
    */
    private ?string $networkName = null;
    
    /**
     * @var NonEapAuthenticationMethodForEapTtlsType|null $nonEapAuthenticationMethodForEapTtls Non-EAP Method for Authentication (Inner Identity) when EAP Type is EAP-TTLS and Authenticationmethod is Username and Password. Possible values are: unencryptedPassword, challengeHandshakeAuthenticationProtocol, microsoftChap, microsoftChapVersionTwo.
    */
    private ?NonEapAuthenticationMethodForEapTtlsType $nonEapAuthenticationMethodForEapTtls = null;
    
    /**
     * @var MacOSTrustedRootCertificate|null $rootCertificateForServerValidation Trusted Root Certificate for Server Validation when EAP Type is configured to EAP-TLS/TTLS/FAST or PEAP.
    */
    private ?MacOSTrustedRootCertificate $rootCertificateForServerValidation = null;
    
    /**
     * @var array<string>|null $trustedServerCertificateNames Trusted server certificate names when EAP Type is configured to EAP-TLS/TTLS/FAST or PEAP. This is the common name used in the certificates issued by your trusted certificate authority (CA). If you provide this information, you can bypass the dynamic trust dialog that is displayed on end users devices when they connect to this wired network.
    */
    private ?array $trustedServerCertificateNames = null;
    
    /**
     * Instantiates a new MacOSWiredNetworkConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.macOSWiredNetworkConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MacOSWiredNetworkConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MacOSWiredNetworkConfiguration {
        return new MacOSWiredNetworkConfiguration();
    }

    /**
     * Gets the authenticationMethod property value. Authentication Method when EAP Type is configured to PEAP or EAP-TTLS. Possible values are: certificate, usernameAndPassword, derivedCredential.
     * @return WiFiAuthenticationMethod|null
    */
    public function getAuthenticationMethod(): ?WiFiAuthenticationMethod {
        return $this->authenticationMethod;
    }

    /**
     * Gets the eapFastConfiguration property value. EAP-FAST Configuration Option when EAP-FAST is the selected EAP Type. Possible values are: noProtectedAccessCredential, useProtectedAccessCredential, useProtectedAccessCredentialAndProvision, useProtectedAccessCredentialAndProvisionAnonymously.
     * @return EapFastConfiguration|null
    */
    public function getEapFastConfiguration(): ?EapFastConfiguration {
        return $this->eapFastConfiguration;
    }

    /**
     * Gets the eapType property value. Extensible Authentication Protocol (EAP) configuration types.
     * @return EapType|null
    */
    public function getEapType(): ?EapType {
        return $this->eapType;
    }

    /**
     * Gets the enableOuterIdentityPrivacy property value. Enable identity privacy (Outer Identity) when EAP Type is configured to EAP-TTLS, EAP-FAST or PEAP. This property masks usernames with the text you enter. For example, if you use 'anonymous', each user that authenticates with this wired network using their real username is displayed as 'anonymous'.
     * @return string|null
    */
    public function getEnableOuterIdentityPrivacy(): ?string {
        return $this->enableOuterIdentityPrivacy;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'authenticationMethod' => function (ParseNode $n) use ($o) { $o->setAuthenticationMethod($n->getEnumValue(WiFiAuthenticationMethod::class)); },
            'eapFastConfiguration' => function (ParseNode $n) use ($o) { $o->setEapFastConfiguration($n->getEnumValue(EapFastConfiguration::class)); },
            'eapType' => function (ParseNode $n) use ($o) { $o->setEapType($n->getEnumValue(EapType::class)); },
            'enableOuterIdentityPrivacy' => function (ParseNode $n) use ($o) { $o->setEnableOuterIdentityPrivacy($n->getStringValue()); },
            'identityCertificateForClientAuthentication' => function (ParseNode $n) use ($o) { $o->setIdentityCertificateForClientAuthentication($n->getObjectValue(array(MacOSCertificateProfileBase::class, 'createFromDiscriminatorValue'))); },
            'networkInterface' => function (ParseNode $n) use ($o) { $o->setNetworkInterface($n->getEnumValue(WiredNetworkInterface::class)); },
            'networkName' => function (ParseNode $n) use ($o) { $o->setNetworkName($n->getStringValue()); },
            'nonEapAuthenticationMethodForEapTtls' => function (ParseNode $n) use ($o) { $o->setNonEapAuthenticationMethodForEapTtls($n->getEnumValue(NonEapAuthenticationMethodForEapTtlsType::class)); },
            'rootCertificateForServerValidation' => function (ParseNode $n) use ($o) { $o->setRootCertificateForServerValidation($n->getObjectValue(array(MacOSTrustedRootCertificate::class, 'createFromDiscriminatorValue'))); },
            'trustedServerCertificateNames' => function (ParseNode $n) use ($o) { $o->setTrustedServerCertificateNames($n->getCollectionOfPrimitiveValues()); },
        ]);
    }

    /**
     * Gets the identityCertificateForClientAuthentication property value. Identity Certificate for client authentication when EAP Type is configured to EAP-TLS, EAP-TTLS (with Certificate Authentication), or PEAP (with Certificate Authentication).
     * @return MacOSCertificateProfileBase|null
    */
    public function getIdentityCertificateForClientAuthentication(): ?MacOSCertificateProfileBase {
        return $this->identityCertificateForClientAuthentication;
    }

    /**
     * Gets the networkInterface property value. Apple network interface type.
     * @return WiredNetworkInterface|null
    */
    public function getNetworkInterface(): ?WiredNetworkInterface {
        return $this->networkInterface;
    }

    /**
     * Gets the networkName property value. Network Name
     * @return string|null
    */
    public function getNetworkName(): ?string {
        return $this->networkName;
    }

    /**
     * Gets the nonEapAuthenticationMethodForEapTtls property value. Non-EAP Method for Authentication (Inner Identity) when EAP Type is EAP-TTLS and Authenticationmethod is Username and Password. Possible values are: unencryptedPassword, challengeHandshakeAuthenticationProtocol, microsoftChap, microsoftChapVersionTwo.
     * @return NonEapAuthenticationMethodForEapTtlsType|null
    */
    public function getNonEapAuthenticationMethodForEapTtls(): ?NonEapAuthenticationMethodForEapTtlsType {
        return $this->nonEapAuthenticationMethodForEapTtls;
    }

    /**
     * Gets the rootCertificateForServerValidation property value. Trusted Root Certificate for Server Validation when EAP Type is configured to EAP-TLS/TTLS/FAST or PEAP.
     * @return MacOSTrustedRootCertificate|null
    */
    public function getRootCertificateForServerValidation(): ?MacOSTrustedRootCertificate {
        return $this->rootCertificateForServerValidation;
    }

    /**
     * Gets the trustedServerCertificateNames property value. Trusted server certificate names when EAP Type is configured to EAP-TLS/TTLS/FAST or PEAP. This is the common name used in the certificates issued by your trusted certificate authority (CA). If you provide this information, you can bypass the dynamic trust dialog that is displayed on end users devices when they connect to this wired network.
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
        $writer->writeEnumValue('eapFastConfiguration', $this->eapFastConfiguration);
        $writer->writeEnumValue('eapType', $this->eapType);
        $writer->writeStringValue('enableOuterIdentityPrivacy', $this->enableOuterIdentityPrivacy);
        $writer->writeObjectValue('identityCertificateForClientAuthentication', $this->identityCertificateForClientAuthentication);
        $writer->writeEnumValue('networkInterface', $this->networkInterface);
        $writer->writeStringValue('networkName', $this->networkName);
        $writer->writeEnumValue('nonEapAuthenticationMethodForEapTtls', $this->nonEapAuthenticationMethodForEapTtls);
        $writer->writeObjectValue('rootCertificateForServerValidation', $this->rootCertificateForServerValidation);
        $writer->writeCollectionOfPrimitiveValues('trustedServerCertificateNames', $this->trustedServerCertificateNames);
    }

    /**
     * Sets the authenticationMethod property value. Authentication Method when EAP Type is configured to PEAP or EAP-TTLS. Possible values are: certificate, usernameAndPassword, derivedCredential.
     *  @param WiFiAuthenticationMethod|null $value Value to set for the authenticationMethod property.
    */
    public function setAuthenticationMethod(?WiFiAuthenticationMethod $value ): void {
        $this->authenticationMethod = $value;
    }

    /**
     * Sets the eapFastConfiguration property value. EAP-FAST Configuration Option when EAP-FAST is the selected EAP Type. Possible values are: noProtectedAccessCredential, useProtectedAccessCredential, useProtectedAccessCredentialAndProvision, useProtectedAccessCredentialAndProvisionAnonymously.
     *  @param EapFastConfiguration|null $value Value to set for the eapFastConfiguration property.
    */
    public function setEapFastConfiguration(?EapFastConfiguration $value ): void {
        $this->eapFastConfiguration = $value;
    }

    /**
     * Sets the eapType property value. Extensible Authentication Protocol (EAP) configuration types.
     *  @param EapType|null $value Value to set for the eapType property.
    */
    public function setEapType(?EapType $value ): void {
        $this->eapType = $value;
    }

    /**
     * Sets the enableOuterIdentityPrivacy property value. Enable identity privacy (Outer Identity) when EAP Type is configured to EAP-TTLS, EAP-FAST or PEAP. This property masks usernames with the text you enter. For example, if you use 'anonymous', each user that authenticates with this wired network using their real username is displayed as 'anonymous'.
     *  @param string|null $value Value to set for the enableOuterIdentityPrivacy property.
    */
    public function setEnableOuterIdentityPrivacy(?string $value ): void {
        $this->enableOuterIdentityPrivacy = $value;
    }

    /**
     * Sets the identityCertificateForClientAuthentication property value. Identity Certificate for client authentication when EAP Type is configured to EAP-TLS, EAP-TTLS (with Certificate Authentication), or PEAP (with Certificate Authentication).
     *  @param MacOSCertificateProfileBase|null $value Value to set for the identityCertificateForClientAuthentication property.
    */
    public function setIdentityCertificateForClientAuthentication(?MacOSCertificateProfileBase $value ): void {
        $this->identityCertificateForClientAuthentication = $value;
    }

    /**
     * Sets the networkInterface property value. Apple network interface type.
     *  @param WiredNetworkInterface|null $value Value to set for the networkInterface property.
    */
    public function setNetworkInterface(?WiredNetworkInterface $value ): void {
        $this->networkInterface = $value;
    }

    /**
     * Sets the networkName property value. Network Name
     *  @param string|null $value Value to set for the networkName property.
    */
    public function setNetworkName(?string $value ): void {
        $this->networkName = $value;
    }

    /**
     * Sets the nonEapAuthenticationMethodForEapTtls property value. Non-EAP Method for Authentication (Inner Identity) when EAP Type is EAP-TTLS and Authenticationmethod is Username and Password. Possible values are: unencryptedPassword, challengeHandshakeAuthenticationProtocol, microsoftChap, microsoftChapVersionTwo.
     *  @param NonEapAuthenticationMethodForEapTtlsType|null $value Value to set for the nonEapAuthenticationMethodForEapTtls property.
    */
    public function setNonEapAuthenticationMethodForEapTtls(?NonEapAuthenticationMethodForEapTtlsType $value ): void {
        $this->nonEapAuthenticationMethodForEapTtls = $value;
    }

    /**
     * Sets the rootCertificateForServerValidation property value. Trusted Root Certificate for Server Validation when EAP Type is configured to EAP-TLS/TTLS/FAST or PEAP.
     *  @param MacOSTrustedRootCertificate|null $value Value to set for the rootCertificateForServerValidation property.
    */
    public function setRootCertificateForServerValidation(?MacOSTrustedRootCertificate $value ): void {
        $this->rootCertificateForServerValidation = $value;
    }

    /**
     * Sets the trustedServerCertificateNames property value. Trusted server certificate names when EAP Type is configured to EAP-TLS/TTLS/FAST or PEAP. This is the common name used in the certificates issued by your trusted certificate authority (CA). If you provide this information, you can bypass the dynamic trust dialog that is displayed on end users devices when they connect to this wired network.
     *  @param array<string>|null $value Value to set for the trustedServerCertificateNames property.
    */
    public function setTrustedServerCertificateNames(?array $value ): void {
        $this->trustedServerCertificateNames = $value;
    }

}
