<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * IOS wired network configuration profile.
*/
class IosWiredNetworkConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * Instantiates a new IosWiredNetworkConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.iosWiredNetworkConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosWiredNetworkConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosWiredNetworkConfiguration {
        return new IosWiredNetworkConfiguration();
    }

    /**
     * Gets the authenticationMethod property value. Authentication Method when EAP Type is configured to PEAP or EAP-TTLS. Possible values are: certificate, usernameAndPassword, derivedCredential, unknownFutureValue.
     * @return WiredNetworkAuthenticationMethod|null
    */
    public function getAuthenticationMethod(): ?WiredNetworkAuthenticationMethod {
        $val = $this->getBackingStore()->get('authenticationMethod');
        if (is_null($val) || $val instanceof WiredNetworkAuthenticationMethod) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authenticationMethod'");
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
     * @return IosWiredNetworkEapType|null
    */
    public function getEapType(): ?IosWiredNetworkEapType {
        $val = $this->getBackingStore()->get('eapType');
        if (is_null($val) || $val instanceof IosWiredNetworkEapType) {
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
            'authenticationMethod' => fn(ParseNode $n) => $o->setAuthenticationMethod($n->getEnumValue(WiredNetworkAuthenticationMethod::class)),
            'eapFastConfiguration' => fn(ParseNode $n) => $o->setEapFastConfiguration($n->getEnumValue(EapFastConfiguration::class)),
            'eapType' => fn(ParseNode $n) => $o->setEapType($n->getEnumValue(IosWiredNetworkEapType::class)),
            'identityCertificateForClientAuthentication' => fn(ParseNode $n) => $o->setIdentityCertificateForClientAuthentication($n->getObjectValue([IosCertificateProfileBase::class, 'createFromDiscriminatorValue'])),
            'networkInterface' => fn(ParseNode $n) => $o->setNetworkInterface($n->getEnumValue(WiredNetworkInterface::class)),
            'networkName' => fn(ParseNode $n) => $o->setNetworkName($n->getStringValue()),
            'nonEapAuthenticationMethodForEapTtls' => fn(ParseNode $n) => $o->setNonEapAuthenticationMethodForEapTtls($n->getEnumValue(NonEapAuthenticationMethodForEapTtlsType::class)),
            'outerIdentityPrivacyMaskValue' => fn(ParseNode $n) => $o->setOuterIdentityPrivacyMaskValue($n->getStringValue()),
            'rootCertificateForServerValidation' => fn(ParseNode $n) => $o->setRootCertificateForServerValidation($n->getObjectValue([IosTrustedRootCertificate::class, 'createFromDiscriminatorValue'])),
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
     * Gets the networkInterface property value. Apple network interface type.
     * @return WiredNetworkInterface|null
    */
    public function getNetworkInterface(): ?WiredNetworkInterface {
        $val = $this->getBackingStore()->get('networkInterface');
        if (is_null($val) || $val instanceof WiredNetworkInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'networkInterface'");
    }

    /**
     * Gets the networkName property value. Network Name.
     * @return string|null
    */
    public function getNetworkName(): ?string {
        $val = $this->getBackingStore()->get('networkName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'networkName'");
    }

    /**
     * Gets the nonEapAuthenticationMethodForEapTtls property value. Non-EAP Method for Authentication (Inner Identity) when EAP Type is EAP-TTLS and Authenticationmethod is Username and Password. Possible values are: unencryptedPassword, challengeHandshakeAuthenticationProtocol, microsoftChap, microsoftChapVersionTwo.
     * @return NonEapAuthenticationMethodForEapTtlsType|null
    */
    public function getNonEapAuthenticationMethodForEapTtls(): ?NonEapAuthenticationMethodForEapTtlsType {
        $val = $this->getBackingStore()->get('nonEapAuthenticationMethodForEapTtls');
        if (is_null($val) || $val instanceof NonEapAuthenticationMethodForEapTtlsType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'nonEapAuthenticationMethodForEapTtls'");
    }

    /**
     * Gets the outerIdentityPrivacyMaskValue property value. Enable identity privacy (Outer Identity) when EAP Type is configured to EAP-TLS, EAP-TTLS or PEAP. This property masks usernames with the text you enter. For example, if you use 'anonymous', each user that authenticates with this wired network using their real username is displayed as 'anonymous'.
     * @return string|null
    */
    public function getOuterIdentityPrivacyMaskValue(): ?string {
        $val = $this->getBackingStore()->get('outerIdentityPrivacyMaskValue');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'outerIdentityPrivacyMaskValue'");
    }

    /**
     * Gets the rootCertificateForServerValidation property value. Trusted Root Certificate for Server Validation when EAP Type is configured to EAP-TLS/TTLS or PEAP.
     * @return IosTrustedRootCertificate|null
    */
    public function getRootCertificateForServerValidation(): ?IosTrustedRootCertificate {
        $val = $this->getBackingStore()->get('rootCertificateForServerValidation');
        if (is_null($val) || $val instanceof IosTrustedRootCertificate) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'rootCertificateForServerValidation'");
    }

    /**
     * Gets the trustedServerCertificateNames property value. Trusted server certificate names when EAP Type is configured to EAP-TLS/TTLS or PEAP. This is the common name used in the certificates issued by your trusted certificate authority (CA). If you provide this information, you can bypass the dynamic trust dialog that is displayed on end users devices when they connect to this wired network.
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
        $writer->writeEnumValue('networkInterface', $this->getNetworkInterface());
        $writer->writeStringValue('networkName', $this->getNetworkName());
        $writer->writeEnumValue('nonEapAuthenticationMethodForEapTtls', $this->getNonEapAuthenticationMethodForEapTtls());
        $writer->writeStringValue('outerIdentityPrivacyMaskValue', $this->getOuterIdentityPrivacyMaskValue());
        $writer->writeObjectValue('rootCertificateForServerValidation', $this->getRootCertificateForServerValidation());
        $writer->writeCollectionOfPrimitiveValues('trustedServerCertificateNames', $this->getTrustedServerCertificateNames());
    }

    /**
     * Sets the authenticationMethod property value. Authentication Method when EAP Type is configured to PEAP or EAP-TTLS. Possible values are: certificate, usernameAndPassword, derivedCredential, unknownFutureValue.
     * @param WiredNetworkAuthenticationMethod|null $value Value to set for the authenticationMethod property.
    */
    public function setAuthenticationMethod(?WiredNetworkAuthenticationMethod $value): void {
        $this->getBackingStore()->set('authenticationMethod', $value);
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
     * @param IosWiredNetworkEapType|null $value Value to set for the eapType property.
    */
    public function setEapType(?IosWiredNetworkEapType $value): void {
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
     * Sets the networkInterface property value. Apple network interface type.
     * @param WiredNetworkInterface|null $value Value to set for the networkInterface property.
    */
    public function setNetworkInterface(?WiredNetworkInterface $value): void {
        $this->getBackingStore()->set('networkInterface', $value);
    }

    /**
     * Sets the networkName property value. Network Name.
     * @param string|null $value Value to set for the networkName property.
    */
    public function setNetworkName(?string $value): void {
        $this->getBackingStore()->set('networkName', $value);
    }

    /**
     * Sets the nonEapAuthenticationMethodForEapTtls property value. Non-EAP Method for Authentication (Inner Identity) when EAP Type is EAP-TTLS and Authenticationmethod is Username and Password. Possible values are: unencryptedPassword, challengeHandshakeAuthenticationProtocol, microsoftChap, microsoftChapVersionTwo.
     * @param NonEapAuthenticationMethodForEapTtlsType|null $value Value to set for the nonEapAuthenticationMethodForEapTtls property.
    */
    public function setNonEapAuthenticationMethodForEapTtls(?NonEapAuthenticationMethodForEapTtlsType $value): void {
        $this->getBackingStore()->set('nonEapAuthenticationMethodForEapTtls', $value);
    }

    /**
     * Sets the outerIdentityPrivacyMaskValue property value. Enable identity privacy (Outer Identity) when EAP Type is configured to EAP-TLS, EAP-TTLS or PEAP. This property masks usernames with the text you enter. For example, if you use 'anonymous', each user that authenticates with this wired network using their real username is displayed as 'anonymous'.
     * @param string|null $value Value to set for the outerIdentityPrivacyMaskValue property.
    */
    public function setOuterIdentityPrivacyMaskValue(?string $value): void {
        $this->getBackingStore()->set('outerIdentityPrivacyMaskValue', $value);
    }

    /**
     * Sets the rootCertificateForServerValidation property value. Trusted Root Certificate for Server Validation when EAP Type is configured to EAP-TLS/TTLS or PEAP.
     * @param IosTrustedRootCertificate|null $value Value to set for the rootCertificateForServerValidation property.
    */
    public function setRootCertificateForServerValidation(?IosTrustedRootCertificate $value): void {
        $this->getBackingStore()->set('rootCertificateForServerValidation', $value);
    }

    /**
     * Sets the trustedServerCertificateNames property value. Trusted server certificate names when EAP Type is configured to EAP-TLS/TTLS or PEAP. This is the common name used in the certificates issued by your trusted certificate authority (CA). If you provide this information, you can bypass the dynamic trust dialog that is displayed on end users devices when they connect to this wired network.
     * @param array<string>|null $value Value to set for the trustedServerCertificateNames property.
    */
    public function setTrustedServerCertificateNames(?array $value): void {
        $this->getBackingStore()->set('trustedServerCertificateNames', $value);
    }

}
