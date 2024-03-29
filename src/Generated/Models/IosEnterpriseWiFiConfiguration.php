<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * By providing the configurations in this profile you can instruct the iOS device to connect to desired Wi-Fi endpoint. By specifying the authentication method and security types expected by Wi-Fi endpoint you can make the Wi-Fi connection seamless for end user.
*/
class IosEnterpriseWiFiConfiguration extends IosWiFiConfiguration implements Parsable 
{
    /**
     * Instantiates a new IosEnterpriseWiFiConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.iosEnterpriseWiFiConfiguration');
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
     * Gets the authenticationMethod property value. Authentication Method when EAP Type is configured to PEAP or EAP-TTLS. Possible values are: certificate, usernameAndPassword, derivedCredential.
     * @return WiFiAuthenticationMethod|null
    */
    public function getAuthenticationMethod(): ?WiFiAuthenticationMethod {
        $val = $this->getBackingStore()->get('authenticationMethod');
        if (is_null($val) || $val instanceof WiFiAuthenticationMethod) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authenticationMethod'");
    }

    /**
     * Gets the derivedCredentialSettings property value. Tenant level settings for the Derived Credentials to be used for authentication.
     * @return DeviceManagementDerivedCredentialSettings|null
    */
    public function getDerivedCredentialSettings(): ?DeviceManagementDerivedCredentialSettings {
        $val = $this->getBackingStore()->get('derivedCredentialSettings');
        if (is_null($val) || $val instanceof DeviceManagementDerivedCredentialSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'derivedCredentialSettings'");
    }

    /**
     * Gets the eapFastConfiguration property value. EAP-FAST Configuration Option when EAP-FAST is the selected EAP Type. Possible values are: noProtectedAccessCredential, useProtectedAccessCredential, useProtectedAccessCredentialAndProvision, useProtectedAccessCredentialAndProvisionAnonymously.
     * @return EapFastConfiguration|null
    */
    public function getEapFastConfiguration(): ?EapFastConfiguration {
        $val = $this->getBackingStore()->get('eapFastConfiguration');
        if (is_null($val) || $val instanceof EapFastConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'eapFastConfiguration'");
    }

    /**
     * Gets the eapType property value. Extensible Authentication Protocol (EAP) configuration types.
     * @return EapType|null
    */
    public function getEapType(): ?EapType {
        $val = $this->getBackingStore()->get('eapType');
        if (is_null($val) || $val instanceof EapType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'eapType'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'authenticationMethod' => fn(ParseNode $n) => $o->setAuthenticationMethod($n->getEnumValue(WiFiAuthenticationMethod::class)),
            'derivedCredentialSettings' => fn(ParseNode $n) => $o->setDerivedCredentialSettings($n->getObjectValue([DeviceManagementDerivedCredentialSettings::class, 'createFromDiscriminatorValue'])),
            'eapFastConfiguration' => fn(ParseNode $n) => $o->setEapFastConfiguration($n->getEnumValue(EapFastConfiguration::class)),
            'eapType' => fn(ParseNode $n) => $o->setEapType($n->getEnumValue(EapType::class)),
            'identityCertificateForClientAuthentication' => fn(ParseNode $n) => $o->setIdentityCertificateForClientAuthentication($n->getObjectValue([IosCertificateProfileBase::class, 'createFromDiscriminatorValue'])),
            'innerAuthenticationProtocolForEapTtls' => fn(ParseNode $n) => $o->setInnerAuthenticationProtocolForEapTtls($n->getEnumValue(NonEapAuthenticationMethodForEapTtlsType::class)),
            'outerIdentityPrivacyTemporaryValue' => fn(ParseNode $n) => $o->setOuterIdentityPrivacyTemporaryValue($n->getStringValue()),
            'passwordFormatString' => fn(ParseNode $n) => $o->setPasswordFormatString($n->getStringValue()),
            'rootCertificatesForServerValidation' => fn(ParseNode $n) => $o->setRootCertificatesForServerValidation($n->getCollectionOfObjectValues([IosTrustedRootCertificate::class, 'createFromDiscriminatorValue'])),
            'trustedServerCertificateNames' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setTrustedServerCertificateNames($val);
            },
            'usernameFormatString' => fn(ParseNode $n) => $o->setUsernameFormatString($n->getStringValue()),
        ]);
    }

    /**
     * Gets the identityCertificateForClientAuthentication property value. Identity Certificate for client authentication when EAP Type is configured to EAP-TLS, EAP-TTLS (with Certificate Authentication), or PEAP (with Certificate Authentication).
     * @return IosCertificateProfileBase|null
    */
    public function getIdentityCertificateForClientAuthentication(): ?IosCertificateProfileBase {
        $val = $this->getBackingStore()->get('identityCertificateForClientAuthentication');
        if (is_null($val) || $val instanceof IosCertificateProfileBase) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'identityCertificateForClientAuthentication'");
    }

    /**
     * Gets the innerAuthenticationProtocolForEapTtls property value. Non-EAP Method for Authentication when EAP Type is EAP-TTLS and Authenticationmethod is Username and Password. Possible values are: unencryptedPassword, challengeHandshakeAuthenticationProtocol, microsoftChap, microsoftChapVersionTwo.
     * @return NonEapAuthenticationMethodForEapTtlsType|null
    */
    public function getInnerAuthenticationProtocolForEapTtls(): ?NonEapAuthenticationMethodForEapTtlsType {
        $val = $this->getBackingStore()->get('innerAuthenticationProtocolForEapTtls');
        if (is_null($val) || $val instanceof NonEapAuthenticationMethodForEapTtlsType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'innerAuthenticationProtocolForEapTtls'");
    }

    /**
     * Gets the outerIdentityPrivacyTemporaryValue property value. Enable identity privacy (Outer Identity) when EAP Type is configured to EAP - TTLS, EAP - FAST or PEAP. This property masks usernames with the text you enter. For example, if you use 'anonymous', each user that authenticates with this Wi-Fi connection using their real username is displayed as 'anonymous'.
     * @return string|null
    */
    public function getOuterIdentityPrivacyTemporaryValue(): ?string {
        $val = $this->getBackingStore()->get('outerIdentityPrivacyTemporaryValue');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'outerIdentityPrivacyTemporaryValue'");
    }

    /**
     * Gets the passwordFormatString property value. Password format string used to build the password to connect to wifi
     * @return string|null
    */
    public function getPasswordFormatString(): ?string {
        $val = $this->getBackingStore()->get('passwordFormatString');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordFormatString'");
    }

    /**
     * Gets the rootCertificatesForServerValidation property value. Trusted Root Certificates for Server Validation when EAP Type is configured to EAP-TLS/TTLS/FAST or PEAP. If you provide this value you do not need to provide trustedServerCertificateNames, and vice versa. This collection can contain a maximum of 500 elements.
     * @return array<IosTrustedRootCertificate>|null
    */
    public function getRootCertificatesForServerValidation(): ?array {
        $val = $this->getBackingStore()->get('rootCertificatesForServerValidation');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, IosTrustedRootCertificate::class);
            /** @var array<IosTrustedRootCertificate>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'rootCertificatesForServerValidation'");
    }

    /**
     * Gets the trustedServerCertificateNames property value. Trusted server certificate names when EAP Type is configured to EAP-TLS/TTLS/FAST or PEAP. This is the common name used in the certificates issued by your trusted certificate authority (CA). If you provide this information, you can bypass the dynamic trust dialog that is displayed on end users' devices when they connect to this Wi-Fi network.
     * @return array<string>|null
    */
    public function getTrustedServerCertificateNames(): ?array {
        $val = $this->getBackingStore()->get('trustedServerCertificateNames');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'trustedServerCertificateNames'");
    }

    /**
     * Gets the usernameFormatString property value. Username format string used to build the username to connect to wifi
     * @return string|null
    */
    public function getUsernameFormatString(): ?string {
        $val = $this->getBackingStore()->get('usernameFormatString');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'usernameFormatString'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('authenticationMethod', $this->getAuthenticationMethod());
        $writer->writeObjectValue('derivedCredentialSettings', $this->getDerivedCredentialSettings());
        $writer->writeEnumValue('eapFastConfiguration', $this->getEapFastConfiguration());
        $writer->writeEnumValue('eapType', $this->getEapType());
        $writer->writeObjectValue('identityCertificateForClientAuthentication', $this->getIdentityCertificateForClientAuthentication());
        $writer->writeEnumValue('innerAuthenticationProtocolForEapTtls', $this->getInnerAuthenticationProtocolForEapTtls());
        $writer->writeStringValue('outerIdentityPrivacyTemporaryValue', $this->getOuterIdentityPrivacyTemporaryValue());
        $writer->writeStringValue('passwordFormatString', $this->getPasswordFormatString());
        $writer->writeCollectionOfObjectValues('rootCertificatesForServerValidation', $this->getRootCertificatesForServerValidation());
        $writer->writeCollectionOfPrimitiveValues('trustedServerCertificateNames', $this->getTrustedServerCertificateNames());
        $writer->writeStringValue('usernameFormatString', $this->getUsernameFormatString());
    }

    /**
     * Sets the authenticationMethod property value. Authentication Method when EAP Type is configured to PEAP or EAP-TTLS. Possible values are: certificate, usernameAndPassword, derivedCredential.
     * @param WiFiAuthenticationMethod|null $value Value to set for the authenticationMethod property.
    */
    public function setAuthenticationMethod(?WiFiAuthenticationMethod $value): void {
        $this->getBackingStore()->set('authenticationMethod', $value);
    }

    /**
     * Sets the derivedCredentialSettings property value. Tenant level settings for the Derived Credentials to be used for authentication.
     * @param DeviceManagementDerivedCredentialSettings|null $value Value to set for the derivedCredentialSettings property.
    */
    public function setDerivedCredentialSettings(?DeviceManagementDerivedCredentialSettings $value): void {
        $this->getBackingStore()->set('derivedCredentialSettings', $value);
    }

    /**
     * Sets the eapFastConfiguration property value. EAP-FAST Configuration Option when EAP-FAST is the selected EAP Type. Possible values are: noProtectedAccessCredential, useProtectedAccessCredential, useProtectedAccessCredentialAndProvision, useProtectedAccessCredentialAndProvisionAnonymously.
     * @param EapFastConfiguration|null $value Value to set for the eapFastConfiguration property.
    */
    public function setEapFastConfiguration(?EapFastConfiguration $value): void {
        $this->getBackingStore()->set('eapFastConfiguration', $value);
    }

    /**
     * Sets the eapType property value. Extensible Authentication Protocol (EAP) configuration types.
     * @param EapType|null $value Value to set for the eapType property.
    */
    public function setEapType(?EapType $value): void {
        $this->getBackingStore()->set('eapType', $value);
    }

    /**
     * Sets the identityCertificateForClientAuthentication property value. Identity Certificate for client authentication when EAP Type is configured to EAP-TLS, EAP-TTLS (with Certificate Authentication), or PEAP (with Certificate Authentication).
     * @param IosCertificateProfileBase|null $value Value to set for the identityCertificateForClientAuthentication property.
    */
    public function setIdentityCertificateForClientAuthentication(?IosCertificateProfileBase $value): void {
        $this->getBackingStore()->set('identityCertificateForClientAuthentication', $value);
    }

    /**
     * Sets the innerAuthenticationProtocolForEapTtls property value. Non-EAP Method for Authentication when EAP Type is EAP-TTLS and Authenticationmethod is Username and Password. Possible values are: unencryptedPassword, challengeHandshakeAuthenticationProtocol, microsoftChap, microsoftChapVersionTwo.
     * @param NonEapAuthenticationMethodForEapTtlsType|null $value Value to set for the innerAuthenticationProtocolForEapTtls property.
    */
    public function setInnerAuthenticationProtocolForEapTtls(?NonEapAuthenticationMethodForEapTtlsType $value): void {
        $this->getBackingStore()->set('innerAuthenticationProtocolForEapTtls', $value);
    }

    /**
     * Sets the outerIdentityPrivacyTemporaryValue property value. Enable identity privacy (Outer Identity) when EAP Type is configured to EAP - TTLS, EAP - FAST or PEAP. This property masks usernames with the text you enter. For example, if you use 'anonymous', each user that authenticates with this Wi-Fi connection using their real username is displayed as 'anonymous'.
     * @param string|null $value Value to set for the outerIdentityPrivacyTemporaryValue property.
    */
    public function setOuterIdentityPrivacyTemporaryValue(?string $value): void {
        $this->getBackingStore()->set('outerIdentityPrivacyTemporaryValue', $value);
    }

    /**
     * Sets the passwordFormatString property value. Password format string used to build the password to connect to wifi
     * @param string|null $value Value to set for the passwordFormatString property.
    */
    public function setPasswordFormatString(?string $value): void {
        $this->getBackingStore()->set('passwordFormatString', $value);
    }

    /**
     * Sets the rootCertificatesForServerValidation property value. Trusted Root Certificates for Server Validation when EAP Type is configured to EAP-TLS/TTLS/FAST or PEAP. If you provide this value you do not need to provide trustedServerCertificateNames, and vice versa. This collection can contain a maximum of 500 elements.
     * @param array<IosTrustedRootCertificate>|null $value Value to set for the rootCertificatesForServerValidation property.
    */
    public function setRootCertificatesForServerValidation(?array $value): void {
        $this->getBackingStore()->set('rootCertificatesForServerValidation', $value);
    }

    /**
     * Sets the trustedServerCertificateNames property value. Trusted server certificate names when EAP Type is configured to EAP-TLS/TTLS/FAST or PEAP. This is the common name used in the certificates issued by your trusted certificate authority (CA). If you provide this information, you can bypass the dynamic trust dialog that is displayed on end users' devices when they connect to this Wi-Fi network.
     * @param array<string>|null $value Value to set for the trustedServerCertificateNames property.
    */
    public function setTrustedServerCertificateNames(?array $value): void {
        $this->getBackingStore()->set('trustedServerCertificateNames', $value);
    }

    /**
     * Sets the usernameFormatString property value. Username format string used to build the username to connect to wifi
     * @param string|null $value Value to set for the usernameFormatString property.
    */
    public function setUsernameFormatString(?string $value): void {
        $this->getBackingStore()->set('usernameFormatString', $value);
    }

}
