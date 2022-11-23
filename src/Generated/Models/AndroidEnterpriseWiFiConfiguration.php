<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidEnterpriseWiFiConfiguration extends AndroidWiFiConfiguration implements Parsable 
{
    /**
     * Instantiates a new AndroidEnterpriseWiFiConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.androidEnterpriseWiFiConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidEnterpriseWiFiConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidEnterpriseWiFiConfiguration {
        return new AndroidEnterpriseWiFiConfiguration();
    }

    /**
     * Gets the authenticationMethod property value. Indicates the Authentication Method the client (device) needs to use when the EAP Type is configured to PEAP or EAP-TTLS. Possible values are: certificate, usernameAndPassword, derivedCredential.
     * @return WiFiAuthenticationMethod|null
    */
    public function getAuthenticationMethod(): ?WiFiAuthenticationMethod {
        return $this->getBackingStore()->get('authenticationMethod');
    }

    /**
     * Gets the eapType property value. Extensible Authentication Protocol (EAP) Configuration Types.
     * @return AndroidEapType|null
    */
    public function getEapType(): ?AndroidEapType {
        return $this->getBackingStore()->get('eapType');
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
            'identityCertificateForClientAuthentication' => fn(ParseNode $n) => $o->setIdentityCertificateForClientAuthentication($n->getObjectValue([AndroidCertificateProfileBase::class, 'createFromDiscriminatorValue'])),
            'innerAuthenticationProtocolForEapTtls' => fn(ParseNode $n) => $o->setInnerAuthenticationProtocolForEapTtls($n->getEnumValue(NonEapAuthenticationMethodForEapTtlsType::class)),
            'innerAuthenticationProtocolForPeap' => fn(ParseNode $n) => $o->setInnerAuthenticationProtocolForPeap($n->getEnumValue(NonEapAuthenticationMethodForPeap::class)),
            'outerIdentityPrivacyTemporaryValue' => fn(ParseNode $n) => $o->setOuterIdentityPrivacyTemporaryValue($n->getStringValue()),
            'passwordFormatString' => fn(ParseNode $n) => $o->setPasswordFormatString($n->getStringValue()),
            'preSharedKey' => fn(ParseNode $n) => $o->setPreSharedKey($n->getStringValue()),
            'rootCertificateForServerValidation' => fn(ParseNode $n) => $o->setRootCertificateForServerValidation($n->getObjectValue([AndroidTrustedRootCertificate::class, 'createFromDiscriminatorValue'])),
            'trustedServerCertificateNames' => fn(ParseNode $n) => $o->setTrustedServerCertificateNames($n->getCollectionOfPrimitiveValues()),
            'usernameFormatString' => fn(ParseNode $n) => $o->setUsernameFormatString($n->getStringValue()),
        ]);
    }

    /**
     * Gets the identityCertificateForClientAuthentication property value. Identity Certificate for client authentication when EAP Type is configured to EAP-TLS, EAP-TTLS (with Certificate Authentication), or PEAP (with Certificate Authentication). This is the certificate presented by client to the Wi-Fi endpoint. The authentication server sitting behind the Wi-Fi endpoint must accept this certificate to successfully establish a Wi-Fi connection.
     * @return AndroidCertificateProfileBase|null
    */
    public function getIdentityCertificateForClientAuthentication(): ?AndroidCertificateProfileBase {
        return $this->getBackingStore()->get('identityCertificateForClientAuthentication');
    }

    /**
     * Gets the innerAuthenticationProtocolForEapTtls property value. Non-EAP Method for Authentication (Inner Identity) when EAP Type is EAP-TTLS and Authenticationmethod is Username and Password. Possible values are: unencryptedPassword, challengeHandshakeAuthenticationProtocol, microsoftChap, microsoftChapVersionTwo.
     * @return NonEapAuthenticationMethodForEapTtlsType|null
    */
    public function getInnerAuthenticationProtocolForEapTtls(): ?NonEapAuthenticationMethodForEapTtlsType {
        return $this->getBackingStore()->get('innerAuthenticationProtocolForEapTtls');
    }

    /**
     * Gets the innerAuthenticationProtocolForPeap property value. Non-EAP Method for Authentication (Inner Identity) when EAP Type is PEAP and Authenticationmethod is Username and Password. Possible values are: none, microsoftChapVersionTwo.
     * @return NonEapAuthenticationMethodForPeap|null
    */
    public function getInnerAuthenticationProtocolForPeap(): ?NonEapAuthenticationMethodForPeap {
        return $this->getBackingStore()->get('innerAuthenticationProtocolForPeap');
    }

    /**
     * Gets the outerIdentityPrivacyTemporaryValue property value. Enable identity privacy (Outer Identity) when EAP Type is configured to EAP-TTLS or PEAP. The String provided here is used to mask the username of individual users when they attempt to connect to Wi-Fi network.
     * @return string|null
    */
    public function getOuterIdentityPrivacyTemporaryValue(): ?string {
        return $this->getBackingStore()->get('outerIdentityPrivacyTemporaryValue');
    }

    /**
     * Gets the passwordFormatString property value. Password format string used to build the password to connect to wifi
     * @return string|null
    */
    public function getPasswordFormatString(): ?string {
        return $this->getBackingStore()->get('passwordFormatString');
    }

    /**
     * Gets the preSharedKey property value. PreSharedKey used to build the password to connect to wifi
     * @return string|null
    */
    public function getPreSharedKey(): ?string {
        return $this->getBackingStore()->get('preSharedKey');
    }

    /**
     * Gets the rootCertificateForServerValidation property value. Trusted Root Certificate for Server Validation when EAP Type is configured to EAP-TLS, EAP-TTLS or PEAP. This is the certificate presented by the Wi-Fi endpoint when the device attempts to connect to Wi-Fi endpoint. The device (or user) must accept this certificate to continue the connection attempt.
     * @return AndroidTrustedRootCertificate|null
    */
    public function getRootCertificateForServerValidation(): ?AndroidTrustedRootCertificate {
        return $this->getBackingStore()->get('rootCertificateForServerValidation');
    }

    /**
     * Gets the trustedServerCertificateNames property value. Trusted server certificate names when EAP Type is configured to EAP-TLS/TTLS/FAST or PEAP. This is the common name used in the certificates issued by your trusted certificate authority (CA). If you provide this information, you can bypass the dynamic trust dialog that is displayed on end users' devices when they connect to this Wi-Fi network.
     * @return array<string>|null
    */
    public function getTrustedServerCertificateNames(): ?array {
        return $this->getBackingStore()->get('trustedServerCertificateNames');
    }

    /**
     * Gets the usernameFormatString property value. Username format string used to build the username to connect to wifi
     * @return string|null
    */
    public function getUsernameFormatString(): ?string {
        return $this->getBackingStore()->get('usernameFormatString');
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
        $writer->writeStringValue('passwordFormatString', $this->getPasswordFormatString());
        $writer->writeStringValue('preSharedKey', $this->getPreSharedKey());
        $writer->writeObjectValue('rootCertificateForServerValidation', $this->getRootCertificateForServerValidation());
        $writer->writeCollectionOfPrimitiveValues('trustedServerCertificateNames', $this->getTrustedServerCertificateNames());
        $writer->writeStringValue('usernameFormatString', $this->getUsernameFormatString());
    }

    /**
     * Sets the authenticationMethod property value. Indicates the Authentication Method the client (device) needs to use when the EAP Type is configured to PEAP or EAP-TTLS. Possible values are: certificate, usernameAndPassword, derivedCredential.
     *  @param WiFiAuthenticationMethod|null $value Value to set for the authenticationMethod property.
    */
    public function setAuthenticationMethod(?WiFiAuthenticationMethod $value): void {
        $this->getBackingStore()->set('authenticationMethod', $value);
    }

    /**
     * Sets the eapType property value. Extensible Authentication Protocol (EAP) Configuration Types.
     *  @param AndroidEapType|null $value Value to set for the eapType property.
    */
    public function setEapType(?AndroidEapType $value): void {
        $this->getBackingStore()->set('eapType', $value);
    }

    /**
     * Sets the identityCertificateForClientAuthentication property value. Identity Certificate for client authentication when EAP Type is configured to EAP-TLS, EAP-TTLS (with Certificate Authentication), or PEAP (with Certificate Authentication). This is the certificate presented by client to the Wi-Fi endpoint. The authentication server sitting behind the Wi-Fi endpoint must accept this certificate to successfully establish a Wi-Fi connection.
     *  @param AndroidCertificateProfileBase|null $value Value to set for the identityCertificateForClientAuthentication property.
    */
    public function setIdentityCertificateForClientAuthentication(?AndroidCertificateProfileBase $value): void {
        $this->getBackingStore()->set('identityCertificateForClientAuthentication', $value);
    }

    /**
     * Sets the innerAuthenticationProtocolForEapTtls property value. Non-EAP Method for Authentication (Inner Identity) when EAP Type is EAP-TTLS and Authenticationmethod is Username and Password. Possible values are: unencryptedPassword, challengeHandshakeAuthenticationProtocol, microsoftChap, microsoftChapVersionTwo.
     *  @param NonEapAuthenticationMethodForEapTtlsType|null $value Value to set for the innerAuthenticationProtocolForEapTtls property.
    */
    public function setInnerAuthenticationProtocolForEapTtls(?NonEapAuthenticationMethodForEapTtlsType $value): void {
        $this->getBackingStore()->set('innerAuthenticationProtocolForEapTtls', $value);
    }

    /**
     * Sets the innerAuthenticationProtocolForPeap property value. Non-EAP Method for Authentication (Inner Identity) when EAP Type is PEAP and Authenticationmethod is Username and Password. Possible values are: none, microsoftChapVersionTwo.
     *  @param NonEapAuthenticationMethodForPeap|null $value Value to set for the innerAuthenticationProtocolForPeap property.
    */
    public function setInnerAuthenticationProtocolForPeap(?NonEapAuthenticationMethodForPeap $value): void {
        $this->getBackingStore()->set('innerAuthenticationProtocolForPeap', $value);
    }

    /**
     * Sets the outerIdentityPrivacyTemporaryValue property value. Enable identity privacy (Outer Identity) when EAP Type is configured to EAP-TTLS or PEAP. The String provided here is used to mask the username of individual users when they attempt to connect to Wi-Fi network.
     *  @param string|null $value Value to set for the outerIdentityPrivacyTemporaryValue property.
    */
    public function setOuterIdentityPrivacyTemporaryValue(?string $value): void {
        $this->getBackingStore()->set('outerIdentityPrivacyTemporaryValue', $value);
    }

    /**
     * Sets the passwordFormatString property value. Password format string used to build the password to connect to wifi
     *  @param string|null $value Value to set for the passwordFormatString property.
    */
    public function setPasswordFormatString(?string $value): void {
        $this->getBackingStore()->set('passwordFormatString', $value);
    }

    /**
     * Sets the preSharedKey property value. PreSharedKey used to build the password to connect to wifi
     *  @param string|null $value Value to set for the preSharedKey property.
    */
    public function setPreSharedKey(?string $value): void {
        $this->getBackingStore()->set('preSharedKey', $value);
    }

    /**
     * Sets the rootCertificateForServerValidation property value. Trusted Root Certificate for Server Validation when EAP Type is configured to EAP-TLS, EAP-TTLS or PEAP. This is the certificate presented by the Wi-Fi endpoint when the device attempts to connect to Wi-Fi endpoint. The device (or user) must accept this certificate to continue the connection attempt.
     *  @param AndroidTrustedRootCertificate|null $value Value to set for the rootCertificateForServerValidation property.
    */
    public function setRootCertificateForServerValidation(?AndroidTrustedRootCertificate $value): void {
        $this->getBackingStore()->set('rootCertificateForServerValidation', $value);
    }

    /**
     * Sets the trustedServerCertificateNames property value. Trusted server certificate names when EAP Type is configured to EAP-TLS/TTLS/FAST or PEAP. This is the common name used in the certificates issued by your trusted certificate authority (CA). If you provide this information, you can bypass the dynamic trust dialog that is displayed on end users' devices when they connect to this Wi-Fi network.
     *  @param array<string>|null $value Value to set for the trustedServerCertificateNames property.
    */
    public function setTrustedServerCertificateNames(?array $value): void {
        $this->getBackingStore()->set('trustedServerCertificateNames', $value);
    }

    /**
     * Sets the usernameFormatString property value. Username format string used to build the username to connect to wifi
     *  @param string|null $value Value to set for the usernameFormatString property.
    */
    public function setUsernameFormatString(?string $value): void {
        $this->getBackingStore()->set('usernameFormatString', $value);
    }

}
