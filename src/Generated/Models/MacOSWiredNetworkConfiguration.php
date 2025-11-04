<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * MacOS wired network configuration profile.
*/
class MacOSWiredNetworkConfiguration extends DeviceConfiguration implements Parsable 
{
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
        $val = $this->getBackingStore()->get('authenticationMethod');
        if (is_null($val) || $val instanceof WiFiAuthenticationMethod) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authenticationMethod'");
    }

    /**
     * Gets the deploymentChannel property value. Indicates the deployment channel type used to deploy the configuration profile. Possible values are deviceChannel, userChannel. Possible values are: deviceChannel, userChannel, unknownFutureValue.
     * @return AppleDeploymentChannel|null
    */
    public function getDeploymentChannel(): ?AppleDeploymentChannel {
        $val = $this->getBackingStore()->get('deploymentChannel');
        if (is_null($val) || $val instanceof AppleDeploymentChannel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deploymentChannel'");
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
     * Gets the enableOuterIdentityPrivacy property value. Enable identity privacy (Outer Identity) when EAP Type is configured to EAP-TTLS, EAP-FAST or PEAP. This property masks usernames with the text you enter. For example, if you use 'anonymous', each user that authenticates with this wired network using their real username is displayed as 'anonymous'.
     * @return string|null
    */
    public function getEnableOuterIdentityPrivacy(): ?string {
        $val = $this->getBackingStore()->get('enableOuterIdentityPrivacy');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enableOuterIdentityPrivacy'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'authenticationMethod' => fn(ParseNode $n) => $o->setAuthenticationMethod($n->getEnumValue(WiFiAuthenticationMethod::class)),
            'deploymentChannel' => fn(ParseNode $n) => $o->setDeploymentChannel($n->getEnumValue(AppleDeploymentChannel::class)),
            'eapFastConfiguration' => fn(ParseNode $n) => $o->setEapFastConfiguration($n->getEnumValue(EapFastConfiguration::class)),
            'eapType' => fn(ParseNode $n) => $o->setEapType($n->getEnumValue(EapType::class)),
            'enableOuterIdentityPrivacy' => fn(ParseNode $n) => $o->setEnableOuterIdentityPrivacy($n->getStringValue()),
            'identityCertificateForClientAuthentication' => fn(ParseNode $n) => $o->setIdentityCertificateForClientAuthentication($n->getObjectValue([MacOSCertificateProfileBase::class, 'createFromDiscriminatorValue'])),
            'networkInterface' => fn(ParseNode $n) => $o->setNetworkInterface($n->getEnumValue(WiredNetworkInterface::class)),
            'networkName' => fn(ParseNode $n) => $o->setNetworkName($n->getStringValue()),
            'nonEapAuthenticationMethodForEapTtls' => fn(ParseNode $n) => $o->setNonEapAuthenticationMethodForEapTtls($n->getEnumValue(NonEapAuthenticationMethodForEapTtlsType::class)),
            'rootCertificateForServerValidation' => fn(ParseNode $n) => $o->setRootCertificateForServerValidation($n->getObjectValue([MacOSTrustedRootCertificate::class, 'createFromDiscriminatorValue'])),
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
     * Gets the networkName property value. Network Name
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
     * Gets the trustedServerCertificateNames property value. Trusted server certificate names when EAP Type is configured to EAP-TLS/TTLS/FAST or PEAP. This is the common name used in the certificates issued by your trusted certificate authority (CA). If you provide this information, you can bypass the dynamic trust dialog that is displayed on end users devices when they connect to this wired network.
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
        $writer->writeEnumValue('deploymentChannel', $this->getDeploymentChannel());
        $writer->writeEnumValue('eapFastConfiguration', $this->getEapFastConfiguration());
        $writer->writeEnumValue('eapType', $this->getEapType());
        $writer->writeStringValue('enableOuterIdentityPrivacy', $this->getEnableOuterIdentityPrivacy());
        $writer->writeObjectValue('identityCertificateForClientAuthentication', $this->getIdentityCertificateForClientAuthentication());
        $writer->writeEnumValue('networkInterface', $this->getNetworkInterface());
        $writer->writeStringValue('networkName', $this->getNetworkName());
        $writer->writeEnumValue('nonEapAuthenticationMethodForEapTtls', $this->getNonEapAuthenticationMethodForEapTtls());
        $writer->writeObjectValue('rootCertificateForServerValidation', $this->getRootCertificateForServerValidation());
        $writer->writeCollectionOfPrimitiveValues('trustedServerCertificateNames', $this->getTrustedServerCertificateNames());
    }

    /**
     * Sets the authenticationMethod property value. Authentication Method when EAP Type is configured to PEAP or EAP-TTLS. Possible values are: certificate, usernameAndPassword, derivedCredential.
     * @param WiFiAuthenticationMethod|null $value Value to set for the authenticationMethod property.
    */
    public function setAuthenticationMethod(?WiFiAuthenticationMethod $value): void {
        $this->getBackingStore()->set('authenticationMethod', $value);
    }

    /**
     * Sets the deploymentChannel property value. Indicates the deployment channel type used to deploy the configuration profile. Possible values are deviceChannel, userChannel. Possible values are: deviceChannel, userChannel, unknownFutureValue.
     * @param AppleDeploymentChannel|null $value Value to set for the deploymentChannel property.
    */
    public function setDeploymentChannel(?AppleDeploymentChannel $value): void {
        $this->getBackingStore()->set('deploymentChannel', $value);
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
     * Sets the enableOuterIdentityPrivacy property value. Enable identity privacy (Outer Identity) when EAP Type is configured to EAP-TTLS, EAP-FAST or PEAP. This property masks usernames with the text you enter. For example, if you use 'anonymous', each user that authenticates with this wired network using their real username is displayed as 'anonymous'.
     * @param string|null $value Value to set for the enableOuterIdentityPrivacy property.
    */
    public function setEnableOuterIdentityPrivacy(?string $value): void {
        $this->getBackingStore()->set('enableOuterIdentityPrivacy', $value);
    }

    /**
     * Sets the identityCertificateForClientAuthentication property value. Identity Certificate for client authentication when EAP Type is configured to EAP-TLS, EAP-TTLS (with Certificate Authentication), or PEAP (with Certificate Authentication).
     * @param MacOSCertificateProfileBase|null $value Value to set for the identityCertificateForClientAuthentication property.
    */
    public function setIdentityCertificateForClientAuthentication(?MacOSCertificateProfileBase $value): void {
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
     * Sets the networkName property value. Network Name
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
     * Sets the rootCertificateForServerValidation property value. Trusted Root Certificate for Server Validation when EAP Type is configured to EAP-TLS/TTLS/FAST or PEAP.
     * @param MacOSTrustedRootCertificate|null $value Value to set for the rootCertificateForServerValidation property.
    */
    public function setRootCertificateForServerValidation(?MacOSTrustedRootCertificate $value): void {
        $this->getBackingStore()->set('rootCertificateForServerValidation', $value);
    }

    /**
     * Sets the trustedServerCertificateNames property value. Trusted server certificate names when EAP Type is configured to EAP-TLS/TTLS/FAST or PEAP. This is the common name used in the certificates issued by your trusted certificate authority (CA). If you provide this information, you can bypass the dynamic trust dialog that is displayed on end users devices when they connect to this wired network.
     * @param array<string>|null $value Value to set for the trustedServerCertificateNames property.
    */
    public function setTrustedServerCertificateNames(?array $value): void {
        $this->getBackingStore()->set('trustedServerCertificateNames', $value);
    }

}
