<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AndroidForWorkEnterpriseWiFiConfiguration extends AndroidForWorkWiFiConfiguration implements Parsable 
{
    /**
     * Instantiates a new AndroidForWorkEnterpriseWiFiConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.androidForWorkEnterpriseWiFiConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidForWorkEnterpriseWiFiConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidForWorkEnterpriseWiFiConfiguration {
        return new AndroidForWorkEnterpriseWiFiConfiguration();
    }

    /**
     * Gets the authenticationMethod property value. Indicates the Authentication Method the client (device) needs to use when the EAP Type is configured to PEAP or EAP-TTLS. Possible values are: certificate, usernameAndPassword, derivedCredential.
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
     * Gets the eapType property value. Extensible Authentication Protocol (EAP) Configuration Types.
     * @return AndroidEapType|null
    */
    public function getEapType(): ?AndroidEapType {
        $val = $this->getBackingStore()->get('eapType');
        if (is_null($val) || $val instanceof AndroidEapType) {
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
            'eapType' => fn(ParseNode $n) => $o->setEapType($n->getEnumValue(AndroidEapType::class)),
            'identityCertificateForClientAuthentication' => fn(ParseNode $n) => $o->setIdentityCertificateForClientAuthentication($n->getObjectValue([AndroidForWorkCertificateProfileBase::class, 'createFromDiscriminatorValue'])),
            'innerAuthenticationProtocolForEapTtls' => fn(ParseNode $n) => $o->setInnerAuthenticationProtocolForEapTtls($n->getEnumValue(NonEapAuthenticationMethodForEapTtlsType::class)),
            'innerAuthenticationProtocolForPeap' => fn(ParseNode $n) => $o->setInnerAuthenticationProtocolForPeap($n->getEnumValue(NonEapAuthenticationMethodForPeap::class)),
            'outerIdentityPrivacyTemporaryValue' => fn(ParseNode $n) => $o->setOuterIdentityPrivacyTemporaryValue($n->getStringValue()),
            'rootCertificateForServerValidation' => fn(ParseNode $n) => $o->setRootCertificateForServerValidation($n->getObjectValue([AndroidForWorkTrustedRootCertificate::class, 'createFromDiscriminatorValue'])),
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
     * Gets the identityCertificateForClientAuthentication property value. Identity Certificate for client authentication when EAP Type is configured to EAP-TLS, EAP-TTLS (with Certificate Authentication), or PEAP (with Certificate Authentication). This is the certificate presented by client to the Wi-Fi endpoint. The authentication server sitting behind the Wi-Fi endpoint must accept this certificate to successfully establish a Wi-Fi connection.
     * @return AndroidForWorkCertificateProfileBase|null
    */
    public function getIdentityCertificateForClientAuthentication(): ?AndroidForWorkCertificateProfileBase {
        $val = $this->getBackingStore()->get('identityCertificateForClientAuthentication');
        if (is_null($val) || $val instanceof AndroidForWorkCertificateProfileBase) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'identityCertificateForClientAuthentication'");
    }

    /**
     * Gets the innerAuthenticationProtocolForEapTtls property value. Non-EAP Method for Authentication (Inner Identity) when EAP Type is EAP-TTLS and Authenticationmethod is Username and Password. Possible values are: unencryptedPassword, challengeHandshakeAuthenticationProtocol, microsoftChap, microsoftChapVersionTwo.
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
     * Gets the innerAuthenticationProtocolForPeap property value. Non-EAP Method for Authentication (Inner Identity) when EAP Type is PEAP and Authenticationmethod is Username and Password. Possible values are: none, microsoftChapVersionTwo.
     * @return NonEapAuthenticationMethodForPeap|null
    */
    public function getInnerAuthenticationProtocolForPeap(): ?NonEapAuthenticationMethodForPeap {
        $val = $this->getBackingStore()->get('innerAuthenticationProtocolForPeap');
        if (is_null($val) || $val instanceof NonEapAuthenticationMethodForPeap) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'innerAuthenticationProtocolForPeap'");
    }

    /**
     * Gets the outerIdentityPrivacyTemporaryValue property value. Enable identity privacy (Outer Identity) when EAP Type is configured to EAP-TTLS or PEAP. The String provided here is used to mask the username of individual users when they attempt to connect to Wi-Fi network.
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
     * Gets the rootCertificateForServerValidation property value. Trusted Root Certificate for Server Validation when EAP Type is configured to EAP-TLS, EAP-TTLS or PEAP. This is the certificate presented by the Wi-Fi endpoint when the device attempts to connect to Wi-Fi endpoint. The device (or user) must accept this certificate to continue the connection attempt.
     * @return AndroidForWorkTrustedRootCertificate|null
    */
    public function getRootCertificateForServerValidation(): ?AndroidForWorkTrustedRootCertificate {
        $val = $this->getBackingStore()->get('rootCertificateForServerValidation');
        if (is_null($val) || $val instanceof AndroidForWorkTrustedRootCertificate) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'rootCertificateForServerValidation'");
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('authenticationMethod', $this->getAuthenticationMethod());
        $writer->writeEnumValue('eapType', $this->getEapType());
        $writer->writeObjectValue('identityCertificateForClientAuthentication', $this->getIdentityCertificateForClientAuthentication());
        $writer->writeEnumValue('innerAuthenticationProtocolForEapTtls', $this->getInnerAuthenticationProtocolForEapTtls());
        $writer->writeEnumValue('innerAuthenticationProtocolForPeap', $this->getInnerAuthenticationProtocolForPeap());
        $writer->writeStringValue('outerIdentityPrivacyTemporaryValue', $this->getOuterIdentityPrivacyTemporaryValue());
        $writer->writeObjectValue('rootCertificateForServerValidation', $this->getRootCertificateForServerValidation());
        $writer->writeCollectionOfPrimitiveValues('trustedServerCertificateNames', $this->getTrustedServerCertificateNames());
    }

    /**
     * Sets the authenticationMethod property value. Indicates the Authentication Method the client (device) needs to use when the EAP Type is configured to PEAP or EAP-TTLS. Possible values are: certificate, usernameAndPassword, derivedCredential.
     * @param WiFiAuthenticationMethod|null $value Value to set for the authenticationMethod property.
    */
    public function setAuthenticationMethod(?WiFiAuthenticationMethod $value): void {
        $this->getBackingStore()->set('authenticationMethod', $value);
    }

    /**
     * Sets the eapType property value. Extensible Authentication Protocol (EAP) Configuration Types.
     * @param AndroidEapType|null $value Value to set for the eapType property.
    */
    public function setEapType(?AndroidEapType $value): void {
        $this->getBackingStore()->set('eapType', $value);
    }

    /**
     * Sets the identityCertificateForClientAuthentication property value. Identity Certificate for client authentication when EAP Type is configured to EAP-TLS, EAP-TTLS (with Certificate Authentication), or PEAP (with Certificate Authentication). This is the certificate presented by client to the Wi-Fi endpoint. The authentication server sitting behind the Wi-Fi endpoint must accept this certificate to successfully establish a Wi-Fi connection.
     * @param AndroidForWorkCertificateProfileBase|null $value Value to set for the identityCertificateForClientAuthentication property.
    */
    public function setIdentityCertificateForClientAuthentication(?AndroidForWorkCertificateProfileBase $value): void {
        $this->getBackingStore()->set('identityCertificateForClientAuthentication', $value);
    }

    /**
     * Sets the innerAuthenticationProtocolForEapTtls property value. Non-EAP Method for Authentication (Inner Identity) when EAP Type is EAP-TTLS and Authenticationmethod is Username and Password. Possible values are: unencryptedPassword, challengeHandshakeAuthenticationProtocol, microsoftChap, microsoftChapVersionTwo.
     * @param NonEapAuthenticationMethodForEapTtlsType|null $value Value to set for the innerAuthenticationProtocolForEapTtls property.
    */
    public function setInnerAuthenticationProtocolForEapTtls(?NonEapAuthenticationMethodForEapTtlsType $value): void {
        $this->getBackingStore()->set('innerAuthenticationProtocolForEapTtls', $value);
    }

    /**
     * Sets the innerAuthenticationProtocolForPeap property value. Non-EAP Method for Authentication (Inner Identity) when EAP Type is PEAP and Authenticationmethod is Username and Password. Possible values are: none, microsoftChapVersionTwo.
     * @param NonEapAuthenticationMethodForPeap|null $value Value to set for the innerAuthenticationProtocolForPeap property.
    */
    public function setInnerAuthenticationProtocolForPeap(?NonEapAuthenticationMethodForPeap $value): void {
        $this->getBackingStore()->set('innerAuthenticationProtocolForPeap', $value);
    }

    /**
     * Sets the outerIdentityPrivacyTemporaryValue property value. Enable identity privacy (Outer Identity) when EAP Type is configured to EAP-TTLS or PEAP. The String provided here is used to mask the username of individual users when they attempt to connect to Wi-Fi network.
     * @param string|null $value Value to set for the outerIdentityPrivacyTemporaryValue property.
    */
    public function setOuterIdentityPrivacyTemporaryValue(?string $value): void {
        $this->getBackingStore()->set('outerIdentityPrivacyTemporaryValue', $value);
    }

    /**
     * Sets the rootCertificateForServerValidation property value. Trusted Root Certificate for Server Validation when EAP Type is configured to EAP-TLS, EAP-TTLS or PEAP. This is the certificate presented by the Wi-Fi endpoint when the device attempts to connect to Wi-Fi endpoint. The device (or user) must accept this certificate to continue the connection attempt.
     * @param AndroidForWorkTrustedRootCertificate|null $value Value to set for the rootCertificateForServerValidation property.
    */
    public function setRootCertificateForServerValidation(?AndroidForWorkTrustedRootCertificate $value): void {
        $this->getBackingStore()->set('rootCertificateForServerValidation', $value);
    }

    /**
     * Sets the trustedServerCertificateNames property value. Trusted server certificate names when EAP Type is configured to EAP-TLS/TTLS/FAST or PEAP. This is the common name used in the certificates issued by your trusted certificate authority (CA). If you provide this information, you can bypass the dynamic trust dialog that is displayed on end users' devices when they connect to this Wi-Fi network.
     * @param array<string>|null $value Value to set for the trustedServerCertificateNames property.
    */
    public function setTrustedServerCertificateNames(?array $value): void {
        $this->getBackingStore()->set('trustedServerCertificateNames', $value);
    }

}
