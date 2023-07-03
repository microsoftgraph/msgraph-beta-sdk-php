<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class WindowsWiredNetworkConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * Instantiates a new WindowsWiredNetworkConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsWiredNetworkConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsWiredNetworkConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsWiredNetworkConfiguration {
        return new WindowsWiredNetworkConfiguration();
    }

    /**
     * Gets the authenticationBlockPeriodInMinutes property value. Specify the duration for which automatic authentication attempts will be blocked from occuring after a failed authentication attempt.
     * @return int|null
    */
    public function getAuthenticationBlockPeriodInMinutes(): ?int {
        $val = $this->getBackingStore()->get('authenticationBlockPeriodInMinutes');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authenticationBlockPeriodInMinutes'");
    }

    /**
     * Gets the authenticationMethod property value. Specify the authentication method. Possible values are: certificate, usernameAndPassword, derivedCredential. Possible values are: certificate, usernameAndPassword, derivedCredential, unknownFutureValue.
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
     * Gets the authenticationPeriodInSeconds property value. Specify the number of seconds for the client to wait after an authentication attempt before failing. Valid range 1-3600.
     * @return int|null
    */
    public function getAuthenticationPeriodInSeconds(): ?int {
        $val = $this->getBackingStore()->get('authenticationPeriodInSeconds');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authenticationPeriodInSeconds'");
    }

    /**
     * Gets the authenticationRetryDelayPeriodInSeconds property value. Specify the number of seconds between a failed authentication and the next authentication attempt. Valid range 1-3600.
     * @return int|null
    */
    public function getAuthenticationRetryDelayPeriodInSeconds(): ?int {
        $val = $this->getBackingStore()->get('authenticationRetryDelayPeriodInSeconds');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authenticationRetryDelayPeriodInSeconds'");
    }

    /**
     * Gets the authenticationType property value. Specify whether to authenticate the user, the device, either, or to use guest authentication (none). If you're using certificate authentication, make sure the certificate type matches the authentication type. Possible values are: none, user, machine, machineOrUser, guest. Possible values are: none, user, machine, machineOrUser, guest, unknownFutureValue.
     * @return WiredNetworkAuthenticationType|null
    */
    public function getAuthenticationType(): ?WiredNetworkAuthenticationType {
        $val = $this->getBackingStore()->get('authenticationType');
        if (is_null($val) || $val instanceof WiredNetworkAuthenticationType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authenticationType'");
    }

    /**
     * Gets the cacheCredentials property value. When TRUE, caches user credentials on the device so that users don't need to keep entering them each time they connect. When FALSE, do not cache credentials. Default value is FALSE.
     * @return bool|null
    */
    public function getCacheCredentials(): ?bool {
        $val = $this->getBackingStore()->get('cacheCredentials');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cacheCredentials'");
    }

    /**
     * Gets the disableUserPromptForServerValidation property value. When TRUE, prevents the user from being prompted to authorize new servers for trusted certification authorities when EAP type is selected as PEAP. When FALSE, does not prevent the user from being prompted. Default value is FALSE.
     * @return bool|null
    */
    public function getDisableUserPromptForServerValidation(): ?bool {
        $val = $this->getBackingStore()->get('disableUserPromptForServerValidation');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'disableUserPromptForServerValidation'");
    }

    /**
     * Gets the eapolStartPeriodInSeconds property value. Specify the number of seconds to wait before sending an EAPOL (Extensible Authentication Protocol over LAN) Start message. Valid range 1-3600.
     * @return int|null
    */
    public function getEapolStartPeriodInSeconds(): ?int {
        $val = $this->getBackingStore()->get('eapolStartPeriodInSeconds');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'eapolStartPeriodInSeconds'");
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
     * Gets the enforce8021X property value. When TRUE, the automatic configuration service for wired networks requires the use of 802.1X for port authentication. When FALSE, 802.1X is not required. Default value is FALSE.
     * @return bool|null
    */
    public function getEnforce8021X(): ?bool {
        $val = $this->getBackingStore()->get('enforce8021X');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enforce8021X'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'authenticationBlockPeriodInMinutes' => fn(ParseNode $n) => $o->setAuthenticationBlockPeriodInMinutes($n->getIntegerValue()),
            'authenticationMethod' => fn(ParseNode $n) => $o->setAuthenticationMethod($n->getEnumValue(WiredNetworkAuthenticationMethod::class)),
            'authenticationPeriodInSeconds' => fn(ParseNode $n) => $o->setAuthenticationPeriodInSeconds($n->getIntegerValue()),
            'authenticationRetryDelayPeriodInSeconds' => fn(ParseNode $n) => $o->setAuthenticationRetryDelayPeriodInSeconds($n->getIntegerValue()),
            'authenticationType' => fn(ParseNode $n) => $o->setAuthenticationType($n->getEnumValue(WiredNetworkAuthenticationType::class)),
            'cacheCredentials' => fn(ParseNode $n) => $o->setCacheCredentials($n->getBooleanValue()),
            'disableUserPromptForServerValidation' => fn(ParseNode $n) => $o->setDisableUserPromptForServerValidation($n->getBooleanValue()),
            'eapolStartPeriodInSeconds' => fn(ParseNode $n) => $o->setEapolStartPeriodInSeconds($n->getIntegerValue()),
            'eapType' => fn(ParseNode $n) => $o->setEapType($n->getEnumValue(EapType::class)),
            'enforce8021X' => fn(ParseNode $n) => $o->setEnforce8021X($n->getBooleanValue()),
            'forceFIPSCompliance' => fn(ParseNode $n) => $o->setForceFIPSCompliance($n->getBooleanValue()),
            'identityCertificateForClientAuthentication' => fn(ParseNode $n) => $o->setIdentityCertificateForClientAuthentication($n->getObjectValue([WindowsCertificateProfileBase::class, 'createFromDiscriminatorValue'])),
            'innerAuthenticationProtocolForEAPTTLS' => fn(ParseNode $n) => $o->setInnerAuthenticationProtocolForEAPTTLS($n->getEnumValue(NonEapAuthenticationMethodForEapTtlsType::class)),
            'maximumAuthenticationFailures' => fn(ParseNode $n) => $o->setMaximumAuthenticationFailures($n->getIntegerValue()),
            'maximumEAPOLStartMessages' => fn(ParseNode $n) => $o->setMaximumEAPOLStartMessages($n->getIntegerValue()),
            'outerIdentityPrivacyTemporaryValue' => fn(ParseNode $n) => $o->setOuterIdentityPrivacyTemporaryValue($n->getStringValue()),
            'performServerValidation' => fn(ParseNode $n) => $o->setPerformServerValidation($n->getBooleanValue()),
            'requireCryptographicBinding' => fn(ParseNode $n) => $o->setRequireCryptographicBinding($n->getBooleanValue()),
            'rootCertificateForClientValidation' => fn(ParseNode $n) => $o->setRootCertificateForClientValidation($n->getObjectValue([Windows81TrustedRootCertificate::class, 'createFromDiscriminatorValue'])),
            'rootCertificatesForServerValidation' => fn(ParseNode $n) => $o->setRootCertificatesForServerValidation($n->getCollectionOfObjectValues([Windows81TrustedRootCertificate::class, 'createFromDiscriminatorValue'])),
            'secondaryAuthenticationMethod' => fn(ParseNode $n) => $o->setSecondaryAuthenticationMethod($n->getEnumValue(WiredNetworkAuthenticationMethod::class)),
            'secondaryIdentityCertificateForClientAuthentication' => fn(ParseNode $n) => $o->setSecondaryIdentityCertificateForClientAuthentication($n->getObjectValue([WindowsCertificateProfileBase::class, 'createFromDiscriminatorValue'])),
            'secondaryRootCertificateForClientValidation' => fn(ParseNode $n) => $o->setSecondaryRootCertificateForClientValidation($n->getObjectValue([Windows81TrustedRootCertificate::class, 'createFromDiscriminatorValue'])),
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
     * Gets the forceFIPSCompliance property value. When TRUE, forces FIPS compliance. When FALSE, does not enable FIPS compliance. Default value is FALSE.
     * @return bool|null
    */
    public function getForceFIPSCompliance(): ?bool {
        $val = $this->getBackingStore()->get('forceFIPSCompliance');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'forceFIPSCompliance'");
    }

    /**
     * Gets the identityCertificateForClientAuthentication property value. Specify identity certificate for client authentication.
     * @return WindowsCertificateProfileBase|null
    */
    public function getIdentityCertificateForClientAuthentication(): ?WindowsCertificateProfileBase {
        $val = $this->getBackingStore()->get('identityCertificateForClientAuthentication');
        if (is_null($val) || $val instanceof WindowsCertificateProfileBase) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'identityCertificateForClientAuthentication'");
    }

    /**
     * Gets the innerAuthenticationProtocolForEAPTTLS property value. Specify inner authentication protocol for EAP TTLS. Possible values are: unencryptedPassword, challengeHandshakeAuthenticationProtocol, microsoftChap, microsoftChapVersionTwo. Possible values are: unencryptedPassword, challengeHandshakeAuthenticationProtocol, microsoftChap, microsoftChapVersionTwo.
     * @return NonEapAuthenticationMethodForEapTtlsType|null
    */
    public function getInnerAuthenticationProtocolForEAPTTLS(): ?NonEapAuthenticationMethodForEapTtlsType {
        $val = $this->getBackingStore()->get('innerAuthenticationProtocolForEAPTTLS');
        if (is_null($val) || $val instanceof NonEapAuthenticationMethodForEapTtlsType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'innerAuthenticationProtocolForEAPTTLS'");
    }

    /**
     * Gets the maximumAuthenticationFailures property value. Specify the maximum authentication failures allowed for a set of credentials. Valid range 1-100.
     * @return int|null
    */
    public function getMaximumAuthenticationFailures(): ?int {
        $val = $this->getBackingStore()->get('maximumAuthenticationFailures');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maximumAuthenticationFailures'");
    }

    /**
     * Gets the maximumEAPOLStartMessages property value. Specify the maximum number of EAPOL (Extensible Authentication Protocol over LAN) Start messages to be sent before returning failure. Valid range 1-100.
     * @return int|null
    */
    public function getMaximumEAPOLStartMessages(): ?int {
        $val = $this->getBackingStore()->get('maximumEAPOLStartMessages');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maximumEAPOLStartMessages'");
    }

    /**
     * Gets the outerIdentityPrivacyTemporaryValue property value. Specify the string to replace usernames for privacy when using EAP TTLS or PEAP.
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
     * Gets the performServerValidation property value. When TRUE, enables verification of server's identity by validating the certificate when EAP type is selected as PEAP. When FALSE, the certificate is not validated. Default value is TRUE.
     * @return bool|null
    */
    public function getPerformServerValidation(): ?bool {
        $val = $this->getBackingStore()->get('performServerValidation');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'performServerValidation'");
    }

    /**
     * Gets the requireCryptographicBinding property value. When TRUE, enables cryptographic binding when EAP type is selected as PEAP. When FALSE, does not enable cryptogrpahic binding. Default value is TRUE.
     * @return bool|null
    */
    public function getRequireCryptographicBinding(): ?bool {
        $val = $this->getBackingStore()->get('requireCryptographicBinding');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requireCryptographicBinding'");
    }

    /**
     * Gets the rootCertificateForClientValidation property value. Specify root certificate for client validation.
     * @return Windows81TrustedRootCertificate|null
    */
    public function getRootCertificateForClientValidation(): ?Windows81TrustedRootCertificate {
        $val = $this->getBackingStore()->get('rootCertificateForClientValidation');
        if (is_null($val) || $val instanceof Windows81TrustedRootCertificate) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'rootCertificateForClientValidation'");
    }

    /**
     * Gets the rootCertificatesForServerValidation property value. Specify root certificates for server validation. This collection can contain a maximum of 500 elements.
     * @return array<Windows81TrustedRootCertificate>|null
    */
    public function getRootCertificatesForServerValidation(): ?array {
        $val = $this->getBackingStore()->get('rootCertificatesForServerValidation');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Windows81TrustedRootCertificate::class);
            /** @var array<Windows81TrustedRootCertificate>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'rootCertificatesForServerValidation'");
    }

    /**
     * Gets the secondaryAuthenticationMethod property value. Specify the secondary authentication method. Possible values are: certificate, usernameAndPassword, derivedCredential. Possible values are: certificate, usernameAndPassword, derivedCredential, unknownFutureValue.
     * @return WiredNetworkAuthenticationMethod|null
    */
    public function getSecondaryAuthenticationMethod(): ?WiredNetworkAuthenticationMethod {
        $val = $this->getBackingStore()->get('secondaryAuthenticationMethod');
        if (is_null($val) || $val instanceof WiredNetworkAuthenticationMethod) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'secondaryAuthenticationMethod'");
    }

    /**
     * Gets the secondaryIdentityCertificateForClientAuthentication property value. Specify secondary identity certificate for client authentication.
     * @return WindowsCertificateProfileBase|null
    */
    public function getSecondaryIdentityCertificateForClientAuthentication(): ?WindowsCertificateProfileBase {
        $val = $this->getBackingStore()->get('secondaryIdentityCertificateForClientAuthentication');
        if (is_null($val) || $val instanceof WindowsCertificateProfileBase) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'secondaryIdentityCertificateForClientAuthentication'");
    }

    /**
     * Gets the secondaryRootCertificateForClientValidation property value. Specify secondary root certificate for client validation.
     * @return Windows81TrustedRootCertificate|null
    */
    public function getSecondaryRootCertificateForClientValidation(): ?Windows81TrustedRootCertificate {
        $val = $this->getBackingStore()->get('secondaryRootCertificateForClientValidation');
        if (is_null($val) || $val instanceof Windows81TrustedRootCertificate) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'secondaryRootCertificateForClientValidation'");
    }

    /**
     * Gets the trustedServerCertificateNames property value. Specify trusted server certificate names.
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
        $writer->writeIntegerValue('authenticationBlockPeriodInMinutes', $this->getAuthenticationBlockPeriodInMinutes());
        $writer->writeEnumValue('authenticationMethod', $this->getAuthenticationMethod());
        $writer->writeIntegerValue('authenticationPeriodInSeconds', $this->getAuthenticationPeriodInSeconds());
        $writer->writeIntegerValue('authenticationRetryDelayPeriodInSeconds', $this->getAuthenticationRetryDelayPeriodInSeconds());
        $writer->writeEnumValue('authenticationType', $this->getAuthenticationType());
        $writer->writeBooleanValue('cacheCredentials', $this->getCacheCredentials());
        $writer->writeBooleanValue('disableUserPromptForServerValidation', $this->getDisableUserPromptForServerValidation());
        $writer->writeIntegerValue('eapolStartPeriodInSeconds', $this->getEapolStartPeriodInSeconds());
        $writer->writeEnumValue('eapType', $this->getEapType());
        $writer->writeBooleanValue('enforce8021X', $this->getEnforce8021X());
        $writer->writeBooleanValue('forceFIPSCompliance', $this->getForceFIPSCompliance());
        $writer->writeObjectValue('identityCertificateForClientAuthentication', $this->getIdentityCertificateForClientAuthentication());
        $writer->writeEnumValue('innerAuthenticationProtocolForEAPTTLS', $this->getInnerAuthenticationProtocolForEAPTTLS());
        $writer->writeIntegerValue('maximumAuthenticationFailures', $this->getMaximumAuthenticationFailures());
        $writer->writeIntegerValue('maximumEAPOLStartMessages', $this->getMaximumEAPOLStartMessages());
        $writer->writeStringValue('outerIdentityPrivacyTemporaryValue', $this->getOuterIdentityPrivacyTemporaryValue());
        $writer->writeBooleanValue('performServerValidation', $this->getPerformServerValidation());
        $writer->writeBooleanValue('requireCryptographicBinding', $this->getRequireCryptographicBinding());
        $writer->writeObjectValue('rootCertificateForClientValidation', $this->getRootCertificateForClientValidation());
        $writer->writeCollectionOfObjectValues('rootCertificatesForServerValidation', $this->getRootCertificatesForServerValidation());
        $writer->writeEnumValue('secondaryAuthenticationMethod', $this->getSecondaryAuthenticationMethod());
        $writer->writeObjectValue('secondaryIdentityCertificateForClientAuthentication', $this->getSecondaryIdentityCertificateForClientAuthentication());
        $writer->writeObjectValue('secondaryRootCertificateForClientValidation', $this->getSecondaryRootCertificateForClientValidation());
        $writer->writeCollectionOfPrimitiveValues('trustedServerCertificateNames', $this->getTrustedServerCertificateNames());
    }

    /**
     * Sets the authenticationBlockPeriodInMinutes property value. Specify the duration for which automatic authentication attempts will be blocked from occuring after a failed authentication attempt.
     * @param int|null $value Value to set for the authenticationBlockPeriodInMinutes property.
    */
    public function setAuthenticationBlockPeriodInMinutes(?int $value): void {
        $this->getBackingStore()->set('authenticationBlockPeriodInMinutes', $value);
    }

    /**
     * Sets the authenticationMethod property value. Specify the authentication method. Possible values are: certificate, usernameAndPassword, derivedCredential. Possible values are: certificate, usernameAndPassword, derivedCredential, unknownFutureValue.
     * @param WiredNetworkAuthenticationMethod|null $value Value to set for the authenticationMethod property.
    */
    public function setAuthenticationMethod(?WiredNetworkAuthenticationMethod $value): void {
        $this->getBackingStore()->set('authenticationMethod', $value);
    }

    /**
     * Sets the authenticationPeriodInSeconds property value. Specify the number of seconds for the client to wait after an authentication attempt before failing. Valid range 1-3600.
     * @param int|null $value Value to set for the authenticationPeriodInSeconds property.
    */
    public function setAuthenticationPeriodInSeconds(?int $value): void {
        $this->getBackingStore()->set('authenticationPeriodInSeconds', $value);
    }

    /**
     * Sets the authenticationRetryDelayPeriodInSeconds property value. Specify the number of seconds between a failed authentication and the next authentication attempt. Valid range 1-3600.
     * @param int|null $value Value to set for the authenticationRetryDelayPeriodInSeconds property.
    */
    public function setAuthenticationRetryDelayPeriodInSeconds(?int $value): void {
        $this->getBackingStore()->set('authenticationRetryDelayPeriodInSeconds', $value);
    }

    /**
     * Sets the authenticationType property value. Specify whether to authenticate the user, the device, either, or to use guest authentication (none). If you're using certificate authentication, make sure the certificate type matches the authentication type. Possible values are: none, user, machine, machineOrUser, guest. Possible values are: none, user, machine, machineOrUser, guest, unknownFutureValue.
     * @param WiredNetworkAuthenticationType|null $value Value to set for the authenticationType property.
    */
    public function setAuthenticationType(?WiredNetworkAuthenticationType $value): void {
        $this->getBackingStore()->set('authenticationType', $value);
    }

    /**
     * Sets the cacheCredentials property value. When TRUE, caches user credentials on the device so that users don't need to keep entering them each time they connect. When FALSE, do not cache credentials. Default value is FALSE.
     * @param bool|null $value Value to set for the cacheCredentials property.
    */
    public function setCacheCredentials(?bool $value): void {
        $this->getBackingStore()->set('cacheCredentials', $value);
    }

    /**
     * Sets the disableUserPromptForServerValidation property value. When TRUE, prevents the user from being prompted to authorize new servers for trusted certification authorities when EAP type is selected as PEAP. When FALSE, does not prevent the user from being prompted. Default value is FALSE.
     * @param bool|null $value Value to set for the disableUserPromptForServerValidation property.
    */
    public function setDisableUserPromptForServerValidation(?bool $value): void {
        $this->getBackingStore()->set('disableUserPromptForServerValidation', $value);
    }

    /**
     * Sets the eapolStartPeriodInSeconds property value. Specify the number of seconds to wait before sending an EAPOL (Extensible Authentication Protocol over LAN) Start message. Valid range 1-3600.
     * @param int|null $value Value to set for the eapolStartPeriodInSeconds property.
    */
    public function setEapolStartPeriodInSeconds(?int $value): void {
        $this->getBackingStore()->set('eapolStartPeriodInSeconds', $value);
    }

    /**
     * Sets the eapType property value. Extensible Authentication Protocol (EAP) configuration types.
     * @param EapType|null $value Value to set for the eapType property.
    */
    public function setEapType(?EapType $value): void {
        $this->getBackingStore()->set('eapType', $value);
    }

    /**
     * Sets the enforce8021X property value. When TRUE, the automatic configuration service for wired networks requires the use of 802.1X for port authentication. When FALSE, 802.1X is not required. Default value is FALSE.
     * @param bool|null $value Value to set for the enforce8021X property.
    */
    public function setEnforce8021X(?bool $value): void {
        $this->getBackingStore()->set('enforce8021X', $value);
    }

    /**
     * Sets the forceFIPSCompliance property value. When TRUE, forces FIPS compliance. When FALSE, does not enable FIPS compliance. Default value is FALSE.
     * @param bool|null $value Value to set for the forceFIPSCompliance property.
    */
    public function setForceFIPSCompliance(?bool $value): void {
        $this->getBackingStore()->set('forceFIPSCompliance', $value);
    }

    /**
     * Sets the identityCertificateForClientAuthentication property value. Specify identity certificate for client authentication.
     * @param WindowsCertificateProfileBase|null $value Value to set for the identityCertificateForClientAuthentication property.
    */
    public function setIdentityCertificateForClientAuthentication(?WindowsCertificateProfileBase $value): void {
        $this->getBackingStore()->set('identityCertificateForClientAuthentication', $value);
    }

    /**
     * Sets the innerAuthenticationProtocolForEAPTTLS property value. Specify inner authentication protocol for EAP TTLS. Possible values are: unencryptedPassword, challengeHandshakeAuthenticationProtocol, microsoftChap, microsoftChapVersionTwo. Possible values are: unencryptedPassword, challengeHandshakeAuthenticationProtocol, microsoftChap, microsoftChapVersionTwo.
     * @param NonEapAuthenticationMethodForEapTtlsType|null $value Value to set for the innerAuthenticationProtocolForEAPTTLS property.
    */
    public function setInnerAuthenticationProtocolForEAPTTLS(?NonEapAuthenticationMethodForEapTtlsType $value): void {
        $this->getBackingStore()->set('innerAuthenticationProtocolForEAPTTLS', $value);
    }

    /**
     * Sets the maximumAuthenticationFailures property value. Specify the maximum authentication failures allowed for a set of credentials. Valid range 1-100.
     * @param int|null $value Value to set for the maximumAuthenticationFailures property.
    */
    public function setMaximumAuthenticationFailures(?int $value): void {
        $this->getBackingStore()->set('maximumAuthenticationFailures', $value);
    }

    /**
     * Sets the maximumEAPOLStartMessages property value. Specify the maximum number of EAPOL (Extensible Authentication Protocol over LAN) Start messages to be sent before returning failure. Valid range 1-100.
     * @param int|null $value Value to set for the maximumEAPOLStartMessages property.
    */
    public function setMaximumEAPOLStartMessages(?int $value): void {
        $this->getBackingStore()->set('maximumEAPOLStartMessages', $value);
    }

    /**
     * Sets the outerIdentityPrivacyTemporaryValue property value. Specify the string to replace usernames for privacy when using EAP TTLS or PEAP.
     * @param string|null $value Value to set for the outerIdentityPrivacyTemporaryValue property.
    */
    public function setOuterIdentityPrivacyTemporaryValue(?string $value): void {
        $this->getBackingStore()->set('outerIdentityPrivacyTemporaryValue', $value);
    }

    /**
     * Sets the performServerValidation property value. When TRUE, enables verification of server's identity by validating the certificate when EAP type is selected as PEAP. When FALSE, the certificate is not validated. Default value is TRUE.
     * @param bool|null $value Value to set for the performServerValidation property.
    */
    public function setPerformServerValidation(?bool $value): void {
        $this->getBackingStore()->set('performServerValidation', $value);
    }

    /**
     * Sets the requireCryptographicBinding property value. When TRUE, enables cryptographic binding when EAP type is selected as PEAP. When FALSE, does not enable cryptogrpahic binding. Default value is TRUE.
     * @param bool|null $value Value to set for the requireCryptographicBinding property.
    */
    public function setRequireCryptographicBinding(?bool $value): void {
        $this->getBackingStore()->set('requireCryptographicBinding', $value);
    }

    /**
     * Sets the rootCertificateForClientValidation property value. Specify root certificate for client validation.
     * @param Windows81TrustedRootCertificate|null $value Value to set for the rootCertificateForClientValidation property.
    */
    public function setRootCertificateForClientValidation(?Windows81TrustedRootCertificate $value): void {
        $this->getBackingStore()->set('rootCertificateForClientValidation', $value);
    }

    /**
     * Sets the rootCertificatesForServerValidation property value. Specify root certificates for server validation. This collection can contain a maximum of 500 elements.
     * @param array<Windows81TrustedRootCertificate>|null $value Value to set for the rootCertificatesForServerValidation property.
    */
    public function setRootCertificatesForServerValidation(?array $value): void {
        $this->getBackingStore()->set('rootCertificatesForServerValidation', $value);
    }

    /**
     * Sets the secondaryAuthenticationMethod property value. Specify the secondary authentication method. Possible values are: certificate, usernameAndPassword, derivedCredential. Possible values are: certificate, usernameAndPassword, derivedCredential, unknownFutureValue.
     * @param WiredNetworkAuthenticationMethod|null $value Value to set for the secondaryAuthenticationMethod property.
    */
    public function setSecondaryAuthenticationMethod(?WiredNetworkAuthenticationMethod $value): void {
        $this->getBackingStore()->set('secondaryAuthenticationMethod', $value);
    }

    /**
     * Sets the secondaryIdentityCertificateForClientAuthentication property value. Specify secondary identity certificate for client authentication.
     * @param WindowsCertificateProfileBase|null $value Value to set for the secondaryIdentityCertificateForClientAuthentication property.
    */
    public function setSecondaryIdentityCertificateForClientAuthentication(?WindowsCertificateProfileBase $value): void {
        $this->getBackingStore()->set('secondaryIdentityCertificateForClientAuthentication', $value);
    }

    /**
     * Sets the secondaryRootCertificateForClientValidation property value. Specify secondary root certificate for client validation.
     * @param Windows81TrustedRootCertificate|null $value Value to set for the secondaryRootCertificateForClientValidation property.
    */
    public function setSecondaryRootCertificateForClientValidation(?Windows81TrustedRootCertificate $value): void {
        $this->getBackingStore()->set('secondaryRootCertificateForClientValidation', $value);
    }

    /**
     * Sets the trustedServerCertificateNames property value. Specify trusted server certificate names.
     * @param array<string>|null $value Value to set for the trustedServerCertificateNames property.
    */
    public function setTrustedServerCertificateNames(?array $value): void {
        $this->getBackingStore()->set('trustedServerCertificateNames', $value);
    }

}
