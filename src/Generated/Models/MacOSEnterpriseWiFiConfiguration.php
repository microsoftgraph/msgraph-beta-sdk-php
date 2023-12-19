<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * MacOS Wi-Fi WPA-Enterprise/WPA2-Enterprise configuration profile.
*/
class MacOSEnterpriseWiFiConfiguration extends MacOSWiFiConfiguration implements Parsable 
{
    /**
     * Instantiates a new macOSEnterpriseWiFiConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.macOSEnterpriseWiFiConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MacOSEnterpriseWiFiConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MacOSEnterpriseWiFiConfiguration {
        return new MacOSEnterpriseWiFiConfiguration();
    }

    /**
     * Gets the authenticationMethod property value. Authentication Method when EAP Type is configured to PEAP or EAP-TTLS. Possible values are: certificate, usernameAndPassword, derivedCredential.
     * @return MacOSEnterpriseWiFiConfiguration_authenticationMethod|null
    */
    public function getAuthenticationMethod(): ?MacOSEnterpriseWiFiConfiguration_authenticationMethod {
        $val = $this->getBackingStore()->get('authenticationMethod');
        if (is_null($val) || $val instanceof MacOSEnterpriseWiFiConfiguration_authenticationMethod) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authenticationMethod'");
    }

    /**
     * Gets the eapFastConfiguration property value. EAP-FAST Configuration Option when EAP-FAST is the selected EAP Type. Possible values are: noProtectedAccessCredential, useProtectedAccessCredential, useProtectedAccessCredentialAndProvision, useProtectedAccessCredentialAndProvisionAnonymously.
     * @return MacOSEnterpriseWiFiConfiguration_eapFastConfiguration|null
    */
    public function getEapFastConfiguration(): ?MacOSEnterpriseWiFiConfiguration_eapFastConfiguration {
        $val = $this->getBackingStore()->get('eapFastConfiguration');
        if (is_null($val) || $val instanceof MacOSEnterpriseWiFiConfiguration_eapFastConfiguration) {
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
            'authenticationMethod' => fn(ParseNode $n) => $o->setAuthenticationMethod($n->getEnumValue(MacOSEnterpriseWiFiConfiguration_authenticationMethod::class)),
            'eapFastConfiguration' => fn(ParseNode $n) => $o->setEapFastConfiguration($n->getEnumValue(MacOSEnterpriseWiFiConfiguration_eapFastConfiguration::class)),
            'eapType' => fn(ParseNode $n) => $o->setEapType($n->getEnumValue(EapType::class)),
            'identityCertificateForClientAuthentication' => fn(ParseNode $n) => $o->setIdentityCertificateForClientAuthentication($n->getObjectValue([MacOSCertificateProfileBase::class, 'createFromDiscriminatorValue'])),
            'innerAuthenticationProtocolForEapTtls' => fn(ParseNode $n) => $o->setInnerAuthenticationProtocolForEapTtls($n->getEnumValue(MacOSEnterpriseWiFiConfiguration_innerAuthenticationProtocolForEapTtls::class)),
            'outerIdentityPrivacyTemporaryValue' => fn(ParseNode $n) => $o->setOuterIdentityPrivacyTemporaryValue($n->getStringValue()),
            'rootCertificateForServerValidation' => fn(ParseNode $n) => $o->setRootCertificateForServerValidation($n->getObjectValue([MacOSTrustedRootCertificate::class, 'createFromDiscriminatorValue'])),
            'rootCertificatesForServerValidation' => fn(ParseNode $n) => $o->setRootCertificatesForServerValidation($n->getCollectionOfObjectValues([MacOSTrustedRootCertificate::class, 'createFromDiscriminatorValue'])),
            'trustedServerCertificateNames' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setTrustedServerCertificateNames($val);
            },
        ]);
    }

    /**
     * Gets the identityCertificateForClientAuthentication property value. Identity Certificate for client authentication when EAP Type is configured to EAP-TLS, EAP-TTLS (with Certificate Authentication), or PEAP (with Certificate Authentication).
     * @return MacOSCertificateProfileBase|null
    */
    public function getIdentityCertificateForClientAuthentication(): ?MacOSCertificateProfileBase {
        $val = $this->getBackingStore()->get('identityCertificateForClientAuthentication');
        if (is_null($val) || $val instanceof MacOSCertificateProfileBase) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'identityCertificateForClientAuthentication'");
    }

    /**
     * Gets the innerAuthenticationProtocolForEapTtls property value. Non-EAP Method for Authentication (Inner Identity) when EAP Type is EAP-TTLS and Authenticationmethod is Username and Password. Possible values are: unencryptedPassword, challengeHandshakeAuthenticationProtocol, microsoftChap, microsoftChapVersionTwo.
     * @return MacOSEnterpriseWiFiConfiguration_innerAuthenticationProtocolForEapTtls|null
    */
    public function getInnerAuthenticationProtocolForEapTtls(): ?MacOSEnterpriseWiFiConfiguration_innerAuthenticationProtocolForEapTtls {
        $val = $this->getBackingStore()->get('innerAuthenticationProtocolForEapTtls');
        if (is_null($val) || $val instanceof MacOSEnterpriseWiFiConfiguration_innerAuthenticationProtocolForEapTtls) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'innerAuthenticationProtocolForEapTtls'");
    }

    /**
     * Gets the outerIdentityPrivacyTemporaryValue property value. Enable identity privacy (Outer Identity) when EAP Type is configured to EAP-TTLS, EAP-FAST or PEAP. This property masks usernames with the text you enter. For example, if you use 'anonymous', each user that authenticates with this Wi-Fi connection using their real username is displayed as 'anonymous'.
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
     * Gets the rootCertificateForServerValidation property value. Trusted Root Certificate for Server Validation when EAP Type is configured to EAP-TLS/TTLS/FAST or PEAP.
     * @return MacOSTrustedRootCertificate|null
    */
    public function getRootCertificateForServerValidation(): ?MacOSTrustedRootCertificate {
        $val = $this->getBackingStore()->get('rootCertificateForServerValidation');
        if (is_null($val) || $val instanceof MacOSTrustedRootCertificate) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'rootCertificateForServerValidation'");
    }

    /**
     * Gets the rootCertificatesForServerValidation property value. Trusted Root Certificates for Server Validation when EAP Type is configured to EAP-TLS/TTLS/FAST or PEAP. If you provide this value you do not need to provide trustedServerCertificateNames, and vice versa. This collection can contain a maximum of 500 elements.
     * @return array<MacOSTrustedRootCertificate>|null
    */
    public function getRootCertificatesForServerValidation(): ?array {
        $val = $this->getBackingStore()->get('rootCertificatesForServerValidation');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MacOSTrustedRootCertificate::class);
            /** @var array<MacOSTrustedRootCertificate>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'rootCertificatesForServerValidation'");
    }

    /**
     * Gets the trustedServerCertificateNames property value. Trusted server certificate names when EAP Type is configured to EAP-TLS/TTLS/FAST or PEAP. This is the common name used in the certificates issued by your trusted certificate authority (CA). If you provide this information, you can bypass the dynamic trust dialog that is displayed on end users devices when they connect to this Wi-Fi network.
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('authenticationMethod', $this->getAuthenticationMethod());
        $writer->writeEnumValue('eapFastConfiguration', $this->getEapFastConfiguration());
        $writer->writeEnumValue('eapType', $this->getEapType());
        $writer->writeObjectValue('identityCertificateForClientAuthentication', $this->getIdentityCertificateForClientAuthentication());
        $writer->writeEnumValue('innerAuthenticationProtocolForEapTtls', $this->getInnerAuthenticationProtocolForEapTtls());
        $writer->writeStringValue('outerIdentityPrivacyTemporaryValue', $this->getOuterIdentityPrivacyTemporaryValue());
        $writer->writeObjectValue('rootCertificateForServerValidation', $this->getRootCertificateForServerValidation());
        $writer->writeCollectionOfObjectValues('rootCertificatesForServerValidation', $this->getRootCertificatesForServerValidation());
        $writer->writeCollectionOfPrimitiveValues('trustedServerCertificateNames', $this->getTrustedServerCertificateNames());
    }

    /**
     * Sets the authenticationMethod property value. Authentication Method when EAP Type is configured to PEAP or EAP-TTLS. Possible values are: certificate, usernameAndPassword, derivedCredential.
     * @param MacOSEnterpriseWiFiConfiguration_authenticationMethod|null $value Value to set for the authenticationMethod property.
    */
    public function setAuthenticationMethod(?MacOSEnterpriseWiFiConfiguration_authenticationMethod $value): void {
        $this->getBackingStore()->set('authenticationMethod', $value);
    }

    /**
     * Sets the eapFastConfiguration property value. EAP-FAST Configuration Option when EAP-FAST is the selected EAP Type. Possible values are: noProtectedAccessCredential, useProtectedAccessCredential, useProtectedAccessCredentialAndProvision, useProtectedAccessCredentialAndProvisionAnonymously.
     * @param MacOSEnterpriseWiFiConfiguration_eapFastConfiguration|null $value Value to set for the eapFastConfiguration property.
    */
    public function setEapFastConfiguration(?MacOSEnterpriseWiFiConfiguration_eapFastConfiguration $value): void {
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
     * @param MacOSCertificateProfileBase|null $value Value to set for the identityCertificateForClientAuthentication property.
    */
    public function setIdentityCertificateForClientAuthentication(?MacOSCertificateProfileBase $value): void {
        $this->getBackingStore()->set('identityCertificateForClientAuthentication', $value);
    }

    /**
     * Sets the innerAuthenticationProtocolForEapTtls property value. Non-EAP Method for Authentication (Inner Identity) when EAP Type is EAP-TTLS and Authenticationmethod is Username and Password. Possible values are: unencryptedPassword, challengeHandshakeAuthenticationProtocol, microsoftChap, microsoftChapVersionTwo.
     * @param MacOSEnterpriseWiFiConfiguration_innerAuthenticationProtocolForEapTtls|null $value Value to set for the innerAuthenticationProtocolForEapTtls property.
    */
    public function setInnerAuthenticationProtocolForEapTtls(?MacOSEnterpriseWiFiConfiguration_innerAuthenticationProtocolForEapTtls $value): void {
        $this->getBackingStore()->set('innerAuthenticationProtocolForEapTtls', $value);
    }

    /**
     * Sets the outerIdentityPrivacyTemporaryValue property value. Enable identity privacy (Outer Identity) when EAP Type is configured to EAP-TTLS, EAP-FAST or PEAP. This property masks usernames with the text you enter. For example, if you use 'anonymous', each user that authenticates with this Wi-Fi connection using their real username is displayed as 'anonymous'.
     * @param string|null $value Value to set for the outerIdentityPrivacyTemporaryValue property.
    */
    public function setOuterIdentityPrivacyTemporaryValue(?string $value): void {
        $this->getBackingStore()->set('outerIdentityPrivacyTemporaryValue', $value);
    }

    /**
     * Sets the rootCertificateForServerValidation property value. Trusted Root Certificate for Server Validation when EAP Type is configured to EAP-TLS/TTLS/FAST or PEAP.
     * @param MacOSTrustedRootCertificate|null $value Value to set for the rootCertificateForServerValidation property.
    */
    public function setRootCertificateForServerValidation(?MacOSTrustedRootCertificate $value): void {
        $this->getBackingStore()->set('rootCertificateForServerValidation', $value);
    }

    /**
     * Sets the rootCertificatesForServerValidation property value. Trusted Root Certificates for Server Validation when EAP Type is configured to EAP-TLS/TTLS/FAST or PEAP. If you provide this value you do not need to provide trustedServerCertificateNames, and vice versa. This collection can contain a maximum of 500 elements.
     * @param array<MacOSTrustedRootCertificate>|null $value Value to set for the rootCertificatesForServerValidation property.
    */
    public function setRootCertificatesForServerValidation(?array $value): void {
        $this->getBackingStore()->set('rootCertificatesForServerValidation', $value);
    }

    /**
     * Sets the trustedServerCertificateNames property value. Trusted server certificate names when EAP Type is configured to EAP-TLS/TTLS/FAST or PEAP. This is the common name used in the certificates issued by your trusted certificate authority (CA). If you provide this information, you can bypass the dynamic trust dialog that is displayed on end users devices when they connect to this Wi-Fi network.
     * @param array<string>|null $value Value to set for the trustedServerCertificateNames property.
    */
    public function setTrustedServerCertificateNames(?array $value): void {
        $this->getBackingStore()->set('trustedServerCertificateNames', $value);
    }

}
