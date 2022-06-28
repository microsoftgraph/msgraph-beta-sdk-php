<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IosEnterpriseWiFiConfiguration extends IosWiFiConfiguration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var WiFiAuthenticationMethod|null $authenticationMethod Authentication Method when EAP Type is configured to PEAP or EAP-TTLS. Possible values are: certificate, usernameAndPassword, derivedCredential.
    */
    private ?WiFiAuthenticationMethod $authenticationMethod = null;
    
    /**
     * @var DeviceManagementDerivedCredentialSettings|null $derivedCredentialSettings Tenant level settings for the Derived Credentials to be used for authentication.
    */
    private ?DeviceManagementDerivedCredentialSettings $derivedCredentialSettings = null;
    
    /**
     * @var EapFastConfiguration|null $eapFastConfiguration EAP-FAST Configuration Option when EAP-FAST is the selected EAP Type. Possible values are: noProtectedAccessCredential, useProtectedAccessCredential, useProtectedAccessCredentialAndProvision, useProtectedAccessCredentialAndProvisionAnonymously.
    */
    private ?EapFastConfiguration $eapFastConfiguration = null;
    
    /**
     * @var EapType|null $eapType Extensible Authentication Protocol (EAP). Indicates the type of EAP protocol set on the Wi-Fi endpoint (router). Possible values are: eapTls, leap, eapSim, eapTtls, peap, eapFast, teap.
    */
    private ?EapType $eapType = null;
    
    /**
     * @var IosCertificateProfileBase|null $identityCertificateForClientAuthentication Identity Certificate for client authentication when EAP Type is configured to EAP-TLS, EAP-TTLS (with Certificate Authentication), or PEAP (with Certificate Authentication).
    */
    private ?IosCertificateProfileBase $identityCertificateForClientAuthentication = null;
    
    /**
     * @var NonEapAuthenticationMethodForEapTtlsType|null $innerAuthenticationProtocolForEapTtls Non-EAP Method for Authentication when EAP Type is EAP-TTLS and Authenticationmethod is Username and Password. Possible values are: unencryptedPassword, challengeHandshakeAuthenticationProtocol, microsoftChap, microsoftChapVersionTwo.
    */
    private ?NonEapAuthenticationMethodForEapTtlsType $innerAuthenticationProtocolForEapTtls = null;
    
    /**
     * @var string|null $outerIdentityPrivacyTemporaryValue Enable identity privacy (Outer Identity) when EAP Type is configured to EAP - TTLS, EAP - FAST or PEAP. This property masks usernames with the text you enter. For example, if you use 'anonymous', each user that authenticates with this Wi-Fi connection using their real username is displayed as 'anonymous'.
    */
    private ?string $outerIdentityPrivacyTemporaryValue = null;
    
    /**
     * @var string|null $passwordFormatString Password format string used to build the password to connect to wifi
    */
    private ?string $passwordFormatString = null;
    
    /**
     * @var array<IosTrustedRootCertificate>|null $rootCertificatesForServerValidation Trusted Root Certificates for Server Validation when EAP Type is configured to EAP-TLS/TTLS/FAST or PEAP. If you provide this value you do not need to provide trustedServerCertificateNames, and vice versa. This collection can contain a maximum of 500 elements.
    */
    private ?array $rootCertificatesForServerValidation = null;
    
    /**
     * @var array<string>|null $trustedServerCertificateNames Trusted server certificate names when EAP Type is configured to EAP-TLS/TTLS/FAST or PEAP. This is the common name used in the certificates issued by your trusted certificate authority (CA). If you provide this information, you can bypass the dynamic trust dialog that is displayed on end users' devices when they connect to this Wi-Fi network.
    */
    private ?array $trustedServerCertificateNames = null;
    
    /**
     * @var string|null $usernameFormatString Username format string used to build the username to connect to wifi
    */
    private ?string $usernameFormatString = null;
    
    /**
     * Instantiates a new IosEnterpriseWiFiConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosEnterpriseWiFiConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosEnterpriseWiFiConfiguration {
        return new IosEnterpriseWiFiConfiguration();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the authenticationMethod property value. Authentication Method when EAP Type is configured to PEAP or EAP-TTLS. Possible values are: certificate, usernameAndPassword, derivedCredential.
     * @return WiFiAuthenticationMethod|null
    */
    public function getAuthenticationMethod(): ?WiFiAuthenticationMethod {
        return $this->authenticationMethod;
    }

    /**
     * Gets the derivedCredentialSettings property value. Tenant level settings for the Derived Credentials to be used for authentication.
     * @return DeviceManagementDerivedCredentialSettings|null
    */
    public function getDerivedCredentialSettings(): ?DeviceManagementDerivedCredentialSettings {
        return $this->derivedCredentialSettings;
    }

    /**
     * Gets the eapFastConfiguration property value. EAP-FAST Configuration Option when EAP-FAST is the selected EAP Type. Possible values are: noProtectedAccessCredential, useProtectedAccessCredential, useProtectedAccessCredentialAndProvision, useProtectedAccessCredentialAndProvisionAnonymously.
     * @return EapFastConfiguration|null
    */
    public function getEapFastConfiguration(): ?EapFastConfiguration {
        return $this->eapFastConfiguration;
    }

    /**
     * Gets the eapType property value. Extensible Authentication Protocol (EAP). Indicates the type of EAP protocol set on the Wi-Fi endpoint (router). Possible values are: eapTls, leap, eapSim, eapTtls, peap, eapFast, teap.
     * @return EapType|null
    */
    public function getEapType(): ?EapType {
        return $this->eapType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'authenticationMethod' => function (ParseNode $n) use ($o) { $o->setAuthenticationMethod($n->getEnumValue(WiFiAuthenticationMethod::class)); },
            'derivedCredentialSettings' => function (ParseNode $n) use ($o) { $o->setDerivedCredentialSettings($n->getObjectValue(array(DeviceManagementDerivedCredentialSettings::class, 'createFromDiscriminatorValue'))); },
            'eapFastConfiguration' => function (ParseNode $n) use ($o) { $o->setEapFastConfiguration($n->getEnumValue(EapFastConfiguration::class)); },
            'eapType' => function (ParseNode $n) use ($o) { $o->setEapType($n->getEnumValue(EapType::class)); },
            'identityCertificateForClientAuthentication' => function (ParseNode $n) use ($o) { $o->setIdentityCertificateForClientAuthentication($n->getObjectValue(array(IosCertificateProfileBase::class, 'createFromDiscriminatorValue'))); },
            'innerAuthenticationProtocolForEapTtls' => function (ParseNode $n) use ($o) { $o->setInnerAuthenticationProtocolForEapTtls($n->getEnumValue(NonEapAuthenticationMethodForEapTtlsType::class)); },
            'outerIdentityPrivacyTemporaryValue' => function (ParseNode $n) use ($o) { $o->setOuterIdentityPrivacyTemporaryValue($n->getStringValue()); },
            'passwordFormatString' => function (ParseNode $n) use ($o) { $o->setPasswordFormatString($n->getStringValue()); },
            'rootCertificatesForServerValidation' => function (ParseNode $n) use ($o) { $o->setRootCertificatesForServerValidation($n->getCollectionOfObjectValues(array(IosTrustedRootCertificate::class, 'createFromDiscriminatorValue'))); },
            'trustedServerCertificateNames' => function (ParseNode $n) use ($o) { $o->setTrustedServerCertificateNames($n->getCollectionOfPrimitiveValues()); },
            'usernameFormatString' => function (ParseNode $n) use ($o) { $o->setUsernameFormatString($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the identityCertificateForClientAuthentication property value. Identity Certificate for client authentication when EAP Type is configured to EAP-TLS, EAP-TTLS (with Certificate Authentication), or PEAP (with Certificate Authentication).
     * @return IosCertificateProfileBase|null
    */
    public function getIdentityCertificateForClientAuthentication(): ?IosCertificateProfileBase {
        return $this->identityCertificateForClientAuthentication;
    }

    /**
     * Gets the innerAuthenticationProtocolForEapTtls property value. Non-EAP Method for Authentication when EAP Type is EAP-TTLS and Authenticationmethod is Username and Password. Possible values are: unencryptedPassword, challengeHandshakeAuthenticationProtocol, microsoftChap, microsoftChapVersionTwo.
     * @return NonEapAuthenticationMethodForEapTtlsType|null
    */
    public function getInnerAuthenticationProtocolForEapTtls(): ?NonEapAuthenticationMethodForEapTtlsType {
        return $this->innerAuthenticationProtocolForEapTtls;
    }

    /**
     * Gets the outerIdentityPrivacyTemporaryValue property value. Enable identity privacy (Outer Identity) when EAP Type is configured to EAP - TTLS, EAP - FAST or PEAP. This property masks usernames with the text you enter. For example, if you use 'anonymous', each user that authenticates with this Wi-Fi connection using their real username is displayed as 'anonymous'.
     * @return string|null
    */
    public function getOuterIdentityPrivacyTemporaryValue(): ?string {
        return $this->outerIdentityPrivacyTemporaryValue;
    }

    /**
     * Gets the passwordFormatString property value. Password format string used to build the password to connect to wifi
     * @return string|null
    */
    public function getPasswordFormatString(): ?string {
        return $this->passwordFormatString;
    }

    /**
     * Gets the rootCertificatesForServerValidation property value. Trusted Root Certificates for Server Validation when EAP Type is configured to EAP-TLS/TTLS/FAST or PEAP. If you provide this value you do not need to provide trustedServerCertificateNames, and vice versa. This collection can contain a maximum of 500 elements.
     * @return array<IosTrustedRootCertificate>|null
    */
    public function getRootCertificatesForServerValidation(): ?array {
        return $this->rootCertificatesForServerValidation;
    }

    /**
     * Gets the trustedServerCertificateNames property value. Trusted server certificate names when EAP Type is configured to EAP-TLS/TTLS/FAST or PEAP. This is the common name used in the certificates issued by your trusted certificate authority (CA). If you provide this information, you can bypass the dynamic trust dialog that is displayed on end users' devices when they connect to this Wi-Fi network.
     * @return array<string>|null
    */
    public function getTrustedServerCertificateNames(): ?array {
        return $this->trustedServerCertificateNames;
    }

    /**
     * Gets the usernameFormatString property value. Username format string used to build the username to connect to wifi
     * @return string|null
    */
    public function getUsernameFormatString(): ?string {
        return $this->usernameFormatString;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('authenticationMethod', $this->authenticationMethod);
        $writer->writeObjectValue('derivedCredentialSettings', $this->derivedCredentialSettings);
        $writer->writeEnumValue('eapFastConfiguration', $this->eapFastConfiguration);
        $writer->writeEnumValue('eapType', $this->eapType);
        $writer->writeObjectValue('identityCertificateForClientAuthentication', $this->identityCertificateForClientAuthentication);
        $writer->writeEnumValue('innerAuthenticationProtocolForEapTtls', $this->innerAuthenticationProtocolForEapTtls);
        $writer->writeStringValue('outerIdentityPrivacyTemporaryValue', $this->outerIdentityPrivacyTemporaryValue);
        $writer->writeStringValue('passwordFormatString', $this->passwordFormatString);
        $writer->writeCollectionOfObjectValues('rootCertificatesForServerValidation', $this->rootCertificatesForServerValidation);
        $writer->writeCollectionOfPrimitiveValues('trustedServerCertificateNames', $this->trustedServerCertificateNames);
        $writer->writeStringValue('usernameFormatString', $this->usernameFormatString);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the authenticationMethod property value. Authentication Method when EAP Type is configured to PEAP or EAP-TTLS. Possible values are: certificate, usernameAndPassword, derivedCredential.
     *  @param WiFiAuthenticationMethod|null $value Value to set for the authenticationMethod property.
    */
    public function setAuthenticationMethod(?WiFiAuthenticationMethod $value ): void {
        $this->authenticationMethod = $value;
    }

    /**
     * Sets the derivedCredentialSettings property value. Tenant level settings for the Derived Credentials to be used for authentication.
     *  @param DeviceManagementDerivedCredentialSettings|null $value Value to set for the derivedCredentialSettings property.
    */
    public function setDerivedCredentialSettings(?DeviceManagementDerivedCredentialSettings $value ): void {
        $this->derivedCredentialSettings = $value;
    }

    /**
     * Sets the eapFastConfiguration property value. EAP-FAST Configuration Option when EAP-FAST is the selected EAP Type. Possible values are: noProtectedAccessCredential, useProtectedAccessCredential, useProtectedAccessCredentialAndProvision, useProtectedAccessCredentialAndProvisionAnonymously.
     *  @param EapFastConfiguration|null $value Value to set for the eapFastConfiguration property.
    */
    public function setEapFastConfiguration(?EapFastConfiguration $value ): void {
        $this->eapFastConfiguration = $value;
    }

    /**
     * Sets the eapType property value. Extensible Authentication Protocol (EAP). Indicates the type of EAP protocol set on the Wi-Fi endpoint (router). Possible values are: eapTls, leap, eapSim, eapTtls, peap, eapFast, teap.
     *  @param EapType|null $value Value to set for the eapType property.
    */
    public function setEapType(?EapType $value ): void {
        $this->eapType = $value;
    }

    /**
     * Sets the identityCertificateForClientAuthentication property value. Identity Certificate for client authentication when EAP Type is configured to EAP-TLS, EAP-TTLS (with Certificate Authentication), or PEAP (with Certificate Authentication).
     *  @param IosCertificateProfileBase|null $value Value to set for the identityCertificateForClientAuthentication property.
    */
    public function setIdentityCertificateForClientAuthentication(?IosCertificateProfileBase $value ): void {
        $this->identityCertificateForClientAuthentication = $value;
    }

    /**
     * Sets the innerAuthenticationProtocolForEapTtls property value. Non-EAP Method for Authentication when EAP Type is EAP-TTLS and Authenticationmethod is Username and Password. Possible values are: unencryptedPassword, challengeHandshakeAuthenticationProtocol, microsoftChap, microsoftChapVersionTwo.
     *  @param NonEapAuthenticationMethodForEapTtlsType|null $value Value to set for the innerAuthenticationProtocolForEapTtls property.
    */
    public function setInnerAuthenticationProtocolForEapTtls(?NonEapAuthenticationMethodForEapTtlsType $value ): void {
        $this->innerAuthenticationProtocolForEapTtls = $value;
    }

    /**
     * Sets the outerIdentityPrivacyTemporaryValue property value. Enable identity privacy (Outer Identity) when EAP Type is configured to EAP - TTLS, EAP - FAST or PEAP. This property masks usernames with the text you enter. For example, if you use 'anonymous', each user that authenticates with this Wi-Fi connection using their real username is displayed as 'anonymous'.
     *  @param string|null $value Value to set for the outerIdentityPrivacyTemporaryValue property.
    */
    public function setOuterIdentityPrivacyTemporaryValue(?string $value ): void {
        $this->outerIdentityPrivacyTemporaryValue = $value;
    }

    /**
     * Sets the passwordFormatString property value. Password format string used to build the password to connect to wifi
     *  @param string|null $value Value to set for the passwordFormatString property.
    */
    public function setPasswordFormatString(?string $value ): void {
        $this->passwordFormatString = $value;
    }

    /**
     * Sets the rootCertificatesForServerValidation property value. Trusted Root Certificates for Server Validation when EAP Type is configured to EAP-TLS/TTLS/FAST or PEAP. If you provide this value you do not need to provide trustedServerCertificateNames, and vice versa. This collection can contain a maximum of 500 elements.
     *  @param array<IosTrustedRootCertificate>|null $value Value to set for the rootCertificatesForServerValidation property.
    */
    public function setRootCertificatesForServerValidation(?array $value ): void {
        $this->rootCertificatesForServerValidation = $value;
    }

    /**
     * Sets the trustedServerCertificateNames property value. Trusted server certificate names when EAP Type is configured to EAP-TLS/TTLS/FAST or PEAP. This is the common name used in the certificates issued by your trusted certificate authority (CA). If you provide this information, you can bypass the dynamic trust dialog that is displayed on end users' devices when they connect to this Wi-Fi network.
     *  @param array<string>|null $value Value to set for the trustedServerCertificateNames property.
    */
    public function setTrustedServerCertificateNames(?array $value ): void {
        $this->trustedServerCertificateNames = $value;
    }

    /**
     * Sets the usernameFormatString property value. Username format string used to build the username to connect to wifi
     *  @param string|null $value Value to set for the usernameFormatString property.
    */
    public function setUsernameFormatString(?string $value ): void {
        $this->usernameFormatString = $value;
    }

}
