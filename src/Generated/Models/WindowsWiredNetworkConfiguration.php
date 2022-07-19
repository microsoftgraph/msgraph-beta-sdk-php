<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsWiredNetworkConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * @var int|null $authenticationBlockPeriodInMinutes Specify the duration for which automatic authentication attempts will be blocked from occuring after a failed authentication attempt.
    */
    private ?int $authenticationBlockPeriodInMinutes = null;
    
    /**
     * @var WiredNetworkAuthenticationMethod|null $authenticationMethod Specify the authentication method. Possible values are: certificate, usernameAndPassword, derivedCredential. Possible values are: certificate, usernameAndPassword, derivedCredential, unknownFutureValue.
    */
    private ?WiredNetworkAuthenticationMethod $authenticationMethod = null;
    
    /**
     * @var int|null $authenticationPeriodInSeconds Specify the number of seconds for the client to wait after an authentication attempt before failing. Valid range 1-3600.
    */
    private ?int $authenticationPeriodInSeconds = null;
    
    /**
     * @var int|null $authenticationRetryDelayPeriodInSeconds Specify the number of seconds between a failed authentication and the next authentication attempt. Valid range 1-3600.
    */
    private ?int $authenticationRetryDelayPeriodInSeconds = null;
    
    /**
     * @var WiredNetworkAuthenticationType|null $authenticationType Specify whether to authenticate the user, the device, either, or to use guest authentication (none). If you're using certificate authentication, make sure the certificate type matches the authentication type. Possible values are: none, user, machine, machineOrUser, guest. Possible values are: none, user, machine, machineOrUser, guest, unknownFutureValue.
    */
    private ?WiredNetworkAuthenticationType $authenticationType = null;
    
    /**
     * @var bool|null $cacheCredentials When TRUE, caches user credentials on the device so that users don't need to keep entering them each time they connect. When FALSE, do not cache credentials. Default value is FALSE.
    */
    private ?bool $cacheCredentials = null;
    
    /**
     * @var bool|null $disableUserPromptForServerValidation When TRUE, prevents the user from being prompted to authorize new servers for trusted certification authorities when EAP type is selected as PEAP. When FALSE, does not prevent the user from being prompted. Default value is FALSE.
    */
    private ?bool $disableUserPromptForServerValidation = null;
    
    /**
     * @var int|null $eapolStartPeriodInSeconds Specify the number of seconds to wait before sending an EAPOL (Extensible Authentication Protocol over LAN) Start message. Valid range 1-3600.
    */
    private ?int $eapolStartPeriodInSeconds = null;
    
    /**
     * @var EapType|null $eapType Extensible Authentication Protocol (EAP) configuration types.
    */
    private ?EapType $eapType = null;
    
    /**
     * @var bool|null $enforce8021X When TRUE, the automatic configuration service for wired networks requires the use of 802.1X for port authentication. When FALSE, 802.1X is not required. Default value is FALSE.
    */
    private ?bool $enforce8021X = null;
    
    /**
     * @var bool|null $forceFIPSCompliance When TRUE, forces FIPS compliance. When FALSE, does not enable FIPS compliance. Default value is FALSE.
    */
    private ?bool $forceFIPSCompliance = null;
    
    /**
     * @var WindowsCertificateProfileBase|null $identityCertificateForClientAuthentication Specify identity certificate for client authentication.
    */
    private ?WindowsCertificateProfileBase $identityCertificateForClientAuthentication = null;
    
    /**
     * @var NonEapAuthenticationMethodForEapTtlsType|null $innerAuthenticationProtocolForEAPTTLS Specify inner authentication protocol for EAP TTLS. Possible values are: unencryptedPassword, challengeHandshakeAuthenticationProtocol, microsoftChap, microsoftChapVersionTwo. Possible values are: unencryptedPassword, challengeHandshakeAuthenticationProtocol, microsoftChap, microsoftChapVersionTwo.
    */
    private ?NonEapAuthenticationMethodForEapTtlsType $innerAuthenticationProtocolForEAPTTLS = null;
    
    /**
     * @var int|null $maximumAuthenticationFailures Specify the maximum authentication failures allowed for a set of credentials. Valid range 1-100.
    */
    private ?int $maximumAuthenticationFailures = null;
    
    /**
     * @var int|null $maximumEAPOLStartMessages Specify the maximum number of EAPOL (Extensible Authentication Protocol over LAN) Start messages to be sent before returning failure. Valid range 1-100.
    */
    private ?int $maximumEAPOLStartMessages = null;
    
    /**
     * @var string|null $outerIdentityPrivacyTemporaryValue Specify the string to replace usernames for privacy when using EAP TTLS or PEAP.
    */
    private ?string $outerIdentityPrivacyTemporaryValue = null;
    
    /**
     * @var bool|null $performServerValidation When TRUE, enables verification of server's identity by validating the certificate when EAP type is selected as PEAP. When FALSE, the certificate is not validated. Default value is TRUE.
    */
    private ?bool $performServerValidation = null;
    
    /**
     * @var bool|null $requireCryptographicBinding When TRUE, enables cryptographic binding when EAP type is selected as PEAP. When FALSE, does not enable cryptogrpahic binding. Default value is TRUE.
    */
    private ?bool $requireCryptographicBinding = null;
    
    /**
     * @var Windows81TrustedRootCertificate|null $rootCertificateForClientValidation Specify root certificate for client validation.
    */
    private ?Windows81TrustedRootCertificate $rootCertificateForClientValidation = null;
    
    /**
     * @var array<Windows81TrustedRootCertificate>|null $rootCertificatesForServerValidation Specify root certificates for server validation. This collection can contain a maximum of 500 elements.
    */
    private ?array $rootCertificatesForServerValidation = null;
    
    /**
     * @var WiredNetworkAuthenticationMethod|null $secondaryAuthenticationMethod Specify the secondary authentication method. Possible values are: certificate, usernameAndPassword, derivedCredential. Possible values are: certificate, usernameAndPassword, derivedCredential, unknownFutureValue.
    */
    private ?WiredNetworkAuthenticationMethod $secondaryAuthenticationMethod = null;
    
    /**
     * @var WindowsCertificateProfileBase|null $secondaryIdentityCertificateForClientAuthentication Specify secondary identity certificate for client authentication.
    */
    private ?WindowsCertificateProfileBase $secondaryIdentityCertificateForClientAuthentication = null;
    
    /**
     * @var Windows81TrustedRootCertificate|null $secondaryRootCertificateForClientValidation Specify secondary root certificate for client validation.
    */
    private ?Windows81TrustedRootCertificate $secondaryRootCertificateForClientValidation = null;
    
    /**
     * @var array<string>|null $trustedServerCertificateNames Specify trusted server certificate names.
    */
    private ?array $trustedServerCertificateNames = null;
    
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
        return $this->authenticationBlockPeriodInMinutes;
    }

    /**
     * Gets the authenticationMethod property value. Specify the authentication method. Possible values are: certificate, usernameAndPassword, derivedCredential. Possible values are: certificate, usernameAndPassword, derivedCredential, unknownFutureValue.
     * @return WiredNetworkAuthenticationMethod|null
    */
    public function getAuthenticationMethod(): ?WiredNetworkAuthenticationMethod {
        return $this->authenticationMethod;
    }

    /**
     * Gets the authenticationPeriodInSeconds property value. Specify the number of seconds for the client to wait after an authentication attempt before failing. Valid range 1-3600.
     * @return int|null
    */
    public function getAuthenticationPeriodInSeconds(): ?int {
        return $this->authenticationPeriodInSeconds;
    }

    /**
     * Gets the authenticationRetryDelayPeriodInSeconds property value. Specify the number of seconds between a failed authentication and the next authentication attempt. Valid range 1-3600.
     * @return int|null
    */
    public function getAuthenticationRetryDelayPeriodInSeconds(): ?int {
        return $this->authenticationRetryDelayPeriodInSeconds;
    }

    /**
     * Gets the authenticationType property value. Specify whether to authenticate the user, the device, either, or to use guest authentication (none). If you're using certificate authentication, make sure the certificate type matches the authentication type. Possible values are: none, user, machine, machineOrUser, guest. Possible values are: none, user, machine, machineOrUser, guest, unknownFutureValue.
     * @return WiredNetworkAuthenticationType|null
    */
    public function getAuthenticationType(): ?WiredNetworkAuthenticationType {
        return $this->authenticationType;
    }

    /**
     * Gets the cacheCredentials property value. When TRUE, caches user credentials on the device so that users don't need to keep entering them each time they connect. When FALSE, do not cache credentials. Default value is FALSE.
     * @return bool|null
    */
    public function getCacheCredentials(): ?bool {
        return $this->cacheCredentials;
    }

    /**
     * Gets the disableUserPromptForServerValidation property value. When TRUE, prevents the user from being prompted to authorize new servers for trusted certification authorities when EAP type is selected as PEAP. When FALSE, does not prevent the user from being prompted. Default value is FALSE.
     * @return bool|null
    */
    public function getDisableUserPromptForServerValidation(): ?bool {
        return $this->disableUserPromptForServerValidation;
    }

    /**
     * Gets the eapolStartPeriodInSeconds property value. Specify the number of seconds to wait before sending an EAPOL (Extensible Authentication Protocol over LAN) Start message. Valid range 1-3600.
     * @return int|null
    */
    public function getEapolStartPeriodInSeconds(): ?int {
        return $this->eapolStartPeriodInSeconds;
    }

    /**
     * Gets the eapType property value. Extensible Authentication Protocol (EAP) configuration types.
     * @return EapType|null
    */
    public function getEapType(): ?EapType {
        return $this->eapType;
    }

    /**
     * Gets the enforce8021X property value. When TRUE, the automatic configuration service for wired networks requires the use of 802.1X for port authentication. When FALSE, 802.1X is not required. Default value is FALSE.
     * @return bool|null
    */
    public function getEnforce8021X(): ?bool {
        return $this->enforce8021X;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'authenticationBlockPeriodInMinutes' => function (ParseNode $n) use ($o) { $o->setAuthenticationBlockPeriodInMinutes($n->getIntegerValue()); },
            'authenticationMethod' => function (ParseNode $n) use ($o) { $o->setAuthenticationMethod($n->getEnumValue(WiredNetworkAuthenticationMethod::class)); },
            'authenticationPeriodInSeconds' => function (ParseNode $n) use ($o) { $o->setAuthenticationPeriodInSeconds($n->getIntegerValue()); },
            'authenticationRetryDelayPeriodInSeconds' => function (ParseNode $n) use ($o) { $o->setAuthenticationRetryDelayPeriodInSeconds($n->getIntegerValue()); },
            'authenticationType' => function (ParseNode $n) use ($o) { $o->setAuthenticationType($n->getEnumValue(WiredNetworkAuthenticationType::class)); },
            'cacheCredentials' => function (ParseNode $n) use ($o) { $o->setCacheCredentials($n->getBooleanValue()); },
            'disableUserPromptForServerValidation' => function (ParseNode $n) use ($o) { $o->setDisableUserPromptForServerValidation($n->getBooleanValue()); },
            'eapolStartPeriodInSeconds' => function (ParseNode $n) use ($o) { $o->setEapolStartPeriodInSeconds($n->getIntegerValue()); },
            'eapType' => function (ParseNode $n) use ($o) { $o->setEapType($n->getEnumValue(EapType::class)); },
            'enforce8021X' => function (ParseNode $n) use ($o) { $o->setEnforce8021X($n->getBooleanValue()); },
            'forceFIPSCompliance' => function (ParseNode $n) use ($o) { $o->setForceFIPSCompliance($n->getBooleanValue()); },
            'identityCertificateForClientAuthentication' => function (ParseNode $n) use ($o) { $o->setIdentityCertificateForClientAuthentication($n->getObjectValue(array(WindowsCertificateProfileBase::class, 'createFromDiscriminatorValue'))); },
            'innerAuthenticationProtocolForEAPTTLS' => function (ParseNode $n) use ($o) { $o->setInnerAuthenticationProtocolForEAPTTLS($n->getEnumValue(NonEapAuthenticationMethodForEapTtlsType::class)); },
            'maximumAuthenticationFailures' => function (ParseNode $n) use ($o) { $o->setMaximumAuthenticationFailures($n->getIntegerValue()); },
            'maximumEAPOLStartMessages' => function (ParseNode $n) use ($o) { $o->setMaximumEAPOLStartMessages($n->getIntegerValue()); },
            'outerIdentityPrivacyTemporaryValue' => function (ParseNode $n) use ($o) { $o->setOuterIdentityPrivacyTemporaryValue($n->getStringValue()); },
            'performServerValidation' => function (ParseNode $n) use ($o) { $o->setPerformServerValidation($n->getBooleanValue()); },
            'requireCryptographicBinding' => function (ParseNode $n) use ($o) { $o->setRequireCryptographicBinding($n->getBooleanValue()); },
            'rootCertificateForClientValidation' => function (ParseNode $n) use ($o) { $o->setRootCertificateForClientValidation($n->getObjectValue(array(Windows81TrustedRootCertificate::class, 'createFromDiscriminatorValue'))); },
            'rootCertificatesForServerValidation' => function (ParseNode $n) use ($o) { $o->setRootCertificatesForServerValidation($n->getCollectionOfObjectValues(array(Windows81TrustedRootCertificate::class, 'createFromDiscriminatorValue'))); },
            'secondaryAuthenticationMethod' => function (ParseNode $n) use ($o) { $o->setSecondaryAuthenticationMethod($n->getEnumValue(WiredNetworkAuthenticationMethod::class)); },
            'secondaryIdentityCertificateForClientAuthentication' => function (ParseNode $n) use ($o) { $o->setSecondaryIdentityCertificateForClientAuthentication($n->getObjectValue(array(WindowsCertificateProfileBase::class, 'createFromDiscriminatorValue'))); },
            'secondaryRootCertificateForClientValidation' => function (ParseNode $n) use ($o) { $o->setSecondaryRootCertificateForClientValidation($n->getObjectValue(array(Windows81TrustedRootCertificate::class, 'createFromDiscriminatorValue'))); },
            'trustedServerCertificateNames' => function (ParseNode $n) use ($o) { $o->setTrustedServerCertificateNames($n->getCollectionOfPrimitiveValues()); },
        ]);
    }

    /**
     * Gets the forceFIPSCompliance property value. When TRUE, forces FIPS compliance. When FALSE, does not enable FIPS compliance. Default value is FALSE.
     * @return bool|null
    */
    public function getForceFIPSCompliance(): ?bool {
        return $this->forceFIPSCompliance;
    }

    /**
     * Gets the identityCertificateForClientAuthentication property value. Specify identity certificate for client authentication.
     * @return WindowsCertificateProfileBase|null
    */
    public function getIdentityCertificateForClientAuthentication(): ?WindowsCertificateProfileBase {
        return $this->identityCertificateForClientAuthentication;
    }

    /**
     * Gets the innerAuthenticationProtocolForEAPTTLS property value. Specify inner authentication protocol for EAP TTLS. Possible values are: unencryptedPassword, challengeHandshakeAuthenticationProtocol, microsoftChap, microsoftChapVersionTwo. Possible values are: unencryptedPassword, challengeHandshakeAuthenticationProtocol, microsoftChap, microsoftChapVersionTwo.
     * @return NonEapAuthenticationMethodForEapTtlsType|null
    */
    public function getInnerAuthenticationProtocolForEAPTTLS(): ?NonEapAuthenticationMethodForEapTtlsType {
        return $this->innerAuthenticationProtocolForEAPTTLS;
    }

    /**
     * Gets the maximumAuthenticationFailures property value. Specify the maximum authentication failures allowed for a set of credentials. Valid range 1-100.
     * @return int|null
    */
    public function getMaximumAuthenticationFailures(): ?int {
        return $this->maximumAuthenticationFailures;
    }

    /**
     * Gets the maximumEAPOLStartMessages property value. Specify the maximum number of EAPOL (Extensible Authentication Protocol over LAN) Start messages to be sent before returning failure. Valid range 1-100.
     * @return int|null
    */
    public function getMaximumEAPOLStartMessages(): ?int {
        return $this->maximumEAPOLStartMessages;
    }

    /**
     * Gets the outerIdentityPrivacyTemporaryValue property value. Specify the string to replace usernames for privacy when using EAP TTLS or PEAP.
     * @return string|null
    */
    public function getOuterIdentityPrivacyTemporaryValue(): ?string {
        return $this->outerIdentityPrivacyTemporaryValue;
    }

    /**
     * Gets the performServerValidation property value. When TRUE, enables verification of server's identity by validating the certificate when EAP type is selected as PEAP. When FALSE, the certificate is not validated. Default value is TRUE.
     * @return bool|null
    */
    public function getPerformServerValidation(): ?bool {
        return $this->performServerValidation;
    }

    /**
     * Gets the requireCryptographicBinding property value. When TRUE, enables cryptographic binding when EAP type is selected as PEAP. When FALSE, does not enable cryptogrpahic binding. Default value is TRUE.
     * @return bool|null
    */
    public function getRequireCryptographicBinding(): ?bool {
        return $this->requireCryptographicBinding;
    }

    /**
     * Gets the rootCertificateForClientValidation property value. Specify root certificate for client validation.
     * @return Windows81TrustedRootCertificate|null
    */
    public function getRootCertificateForClientValidation(): ?Windows81TrustedRootCertificate {
        return $this->rootCertificateForClientValidation;
    }

    /**
     * Gets the rootCertificatesForServerValidation property value. Specify root certificates for server validation. This collection can contain a maximum of 500 elements.
     * @return array<Windows81TrustedRootCertificate>|null
    */
    public function getRootCertificatesForServerValidation(): ?array {
        return $this->rootCertificatesForServerValidation;
    }

    /**
     * Gets the secondaryAuthenticationMethod property value. Specify the secondary authentication method. Possible values are: certificate, usernameAndPassword, derivedCredential. Possible values are: certificate, usernameAndPassword, derivedCredential, unknownFutureValue.
     * @return WiredNetworkAuthenticationMethod|null
    */
    public function getSecondaryAuthenticationMethod(): ?WiredNetworkAuthenticationMethod {
        return $this->secondaryAuthenticationMethod;
    }

    /**
     * Gets the secondaryIdentityCertificateForClientAuthentication property value. Specify secondary identity certificate for client authentication.
     * @return WindowsCertificateProfileBase|null
    */
    public function getSecondaryIdentityCertificateForClientAuthentication(): ?WindowsCertificateProfileBase {
        return $this->secondaryIdentityCertificateForClientAuthentication;
    }

    /**
     * Gets the secondaryRootCertificateForClientValidation property value. Specify secondary root certificate for client validation.
     * @return Windows81TrustedRootCertificate|null
    */
    public function getSecondaryRootCertificateForClientValidation(): ?Windows81TrustedRootCertificate {
        return $this->secondaryRootCertificateForClientValidation;
    }

    /**
     * Gets the trustedServerCertificateNames property value. Specify trusted server certificate names.
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
        $writer->writeIntegerValue('authenticationBlockPeriodInMinutes', $this->authenticationBlockPeriodInMinutes);
        $writer->writeEnumValue('authenticationMethod', $this->authenticationMethod);
        $writer->writeIntegerValue('authenticationPeriodInSeconds', $this->authenticationPeriodInSeconds);
        $writer->writeIntegerValue('authenticationRetryDelayPeriodInSeconds', $this->authenticationRetryDelayPeriodInSeconds);
        $writer->writeEnumValue('authenticationType', $this->authenticationType);
        $writer->writeBooleanValue('cacheCredentials', $this->cacheCredentials);
        $writer->writeBooleanValue('disableUserPromptForServerValidation', $this->disableUserPromptForServerValidation);
        $writer->writeIntegerValue('eapolStartPeriodInSeconds', $this->eapolStartPeriodInSeconds);
        $writer->writeEnumValue('eapType', $this->eapType);
        $writer->writeBooleanValue('enforce8021X', $this->enforce8021X);
        $writer->writeBooleanValue('forceFIPSCompliance', $this->forceFIPSCompliance);
        $writer->writeObjectValue('identityCertificateForClientAuthentication', $this->identityCertificateForClientAuthentication);
        $writer->writeEnumValue('innerAuthenticationProtocolForEAPTTLS', $this->innerAuthenticationProtocolForEAPTTLS);
        $writer->writeIntegerValue('maximumAuthenticationFailures', $this->maximumAuthenticationFailures);
        $writer->writeIntegerValue('maximumEAPOLStartMessages', $this->maximumEAPOLStartMessages);
        $writer->writeStringValue('outerIdentityPrivacyTemporaryValue', $this->outerIdentityPrivacyTemporaryValue);
        $writer->writeBooleanValue('performServerValidation', $this->performServerValidation);
        $writer->writeBooleanValue('requireCryptographicBinding', $this->requireCryptographicBinding);
        $writer->writeObjectValue('rootCertificateForClientValidation', $this->rootCertificateForClientValidation);
        $writer->writeCollectionOfObjectValues('rootCertificatesForServerValidation', $this->rootCertificatesForServerValidation);
        $writer->writeEnumValue('secondaryAuthenticationMethod', $this->secondaryAuthenticationMethod);
        $writer->writeObjectValue('secondaryIdentityCertificateForClientAuthentication', $this->secondaryIdentityCertificateForClientAuthentication);
        $writer->writeObjectValue('secondaryRootCertificateForClientValidation', $this->secondaryRootCertificateForClientValidation);
        $writer->writeCollectionOfPrimitiveValues('trustedServerCertificateNames', $this->trustedServerCertificateNames);
    }

    /**
     * Sets the authenticationBlockPeriodInMinutes property value. Specify the duration for which automatic authentication attempts will be blocked from occuring after a failed authentication attempt.
     *  @param int|null $value Value to set for the authenticationBlockPeriodInMinutes property.
    */
    public function setAuthenticationBlockPeriodInMinutes(?int $value ): void {
        $this->authenticationBlockPeriodInMinutes = $value;
    }

    /**
     * Sets the authenticationMethod property value. Specify the authentication method. Possible values are: certificate, usernameAndPassword, derivedCredential. Possible values are: certificate, usernameAndPassword, derivedCredential, unknownFutureValue.
     *  @param WiredNetworkAuthenticationMethod|null $value Value to set for the authenticationMethod property.
    */
    public function setAuthenticationMethod(?WiredNetworkAuthenticationMethod $value ): void {
        $this->authenticationMethod = $value;
    }

    /**
     * Sets the authenticationPeriodInSeconds property value. Specify the number of seconds for the client to wait after an authentication attempt before failing. Valid range 1-3600.
     *  @param int|null $value Value to set for the authenticationPeriodInSeconds property.
    */
    public function setAuthenticationPeriodInSeconds(?int $value ): void {
        $this->authenticationPeriodInSeconds = $value;
    }

    /**
     * Sets the authenticationRetryDelayPeriodInSeconds property value. Specify the number of seconds between a failed authentication and the next authentication attempt. Valid range 1-3600.
     *  @param int|null $value Value to set for the authenticationRetryDelayPeriodInSeconds property.
    */
    public function setAuthenticationRetryDelayPeriodInSeconds(?int $value ): void {
        $this->authenticationRetryDelayPeriodInSeconds = $value;
    }

    /**
     * Sets the authenticationType property value. Specify whether to authenticate the user, the device, either, or to use guest authentication (none). If you're using certificate authentication, make sure the certificate type matches the authentication type. Possible values are: none, user, machine, machineOrUser, guest. Possible values are: none, user, machine, machineOrUser, guest, unknownFutureValue.
     *  @param WiredNetworkAuthenticationType|null $value Value to set for the authenticationType property.
    */
    public function setAuthenticationType(?WiredNetworkAuthenticationType $value ): void {
        $this->authenticationType = $value;
    }

    /**
     * Sets the cacheCredentials property value. When TRUE, caches user credentials on the device so that users don't need to keep entering them each time they connect. When FALSE, do not cache credentials. Default value is FALSE.
     *  @param bool|null $value Value to set for the cacheCredentials property.
    */
    public function setCacheCredentials(?bool $value ): void {
        $this->cacheCredentials = $value;
    }

    /**
     * Sets the disableUserPromptForServerValidation property value. When TRUE, prevents the user from being prompted to authorize new servers for trusted certification authorities when EAP type is selected as PEAP. When FALSE, does not prevent the user from being prompted. Default value is FALSE.
     *  @param bool|null $value Value to set for the disableUserPromptForServerValidation property.
    */
    public function setDisableUserPromptForServerValidation(?bool $value ): void {
        $this->disableUserPromptForServerValidation = $value;
    }

    /**
     * Sets the eapolStartPeriodInSeconds property value. Specify the number of seconds to wait before sending an EAPOL (Extensible Authentication Protocol over LAN) Start message. Valid range 1-3600.
     *  @param int|null $value Value to set for the eapolStartPeriodInSeconds property.
    */
    public function setEapolStartPeriodInSeconds(?int $value ): void {
        $this->eapolStartPeriodInSeconds = $value;
    }

    /**
     * Sets the eapType property value. Extensible Authentication Protocol (EAP) configuration types.
     *  @param EapType|null $value Value to set for the eapType property.
    */
    public function setEapType(?EapType $value ): void {
        $this->eapType = $value;
    }

    /**
     * Sets the enforce8021X property value. When TRUE, the automatic configuration service for wired networks requires the use of 802.1X for port authentication. When FALSE, 802.1X is not required. Default value is FALSE.
     *  @param bool|null $value Value to set for the enforce8021X property.
    */
    public function setEnforce8021X(?bool $value ): void {
        $this->enforce8021X = $value;
    }

    /**
     * Sets the forceFIPSCompliance property value. When TRUE, forces FIPS compliance. When FALSE, does not enable FIPS compliance. Default value is FALSE.
     *  @param bool|null $value Value to set for the forceFIPSCompliance property.
    */
    public function setForceFIPSCompliance(?bool $value ): void {
        $this->forceFIPSCompliance = $value;
    }

    /**
     * Sets the identityCertificateForClientAuthentication property value. Specify identity certificate for client authentication.
     *  @param WindowsCertificateProfileBase|null $value Value to set for the identityCertificateForClientAuthentication property.
    */
    public function setIdentityCertificateForClientAuthentication(?WindowsCertificateProfileBase $value ): void {
        $this->identityCertificateForClientAuthentication = $value;
    }

    /**
     * Sets the innerAuthenticationProtocolForEAPTTLS property value. Specify inner authentication protocol for EAP TTLS. Possible values are: unencryptedPassword, challengeHandshakeAuthenticationProtocol, microsoftChap, microsoftChapVersionTwo. Possible values are: unencryptedPassword, challengeHandshakeAuthenticationProtocol, microsoftChap, microsoftChapVersionTwo.
     *  @param NonEapAuthenticationMethodForEapTtlsType|null $value Value to set for the innerAuthenticationProtocolForEAPTTLS property.
    */
    public function setInnerAuthenticationProtocolForEAPTTLS(?NonEapAuthenticationMethodForEapTtlsType $value ): void {
        $this->innerAuthenticationProtocolForEAPTTLS = $value;
    }

    /**
     * Sets the maximumAuthenticationFailures property value. Specify the maximum authentication failures allowed for a set of credentials. Valid range 1-100.
     *  @param int|null $value Value to set for the maximumAuthenticationFailures property.
    */
    public function setMaximumAuthenticationFailures(?int $value ): void {
        $this->maximumAuthenticationFailures = $value;
    }

    /**
     * Sets the maximumEAPOLStartMessages property value. Specify the maximum number of EAPOL (Extensible Authentication Protocol over LAN) Start messages to be sent before returning failure. Valid range 1-100.
     *  @param int|null $value Value to set for the maximumEAPOLStartMessages property.
    */
    public function setMaximumEAPOLStartMessages(?int $value ): void {
        $this->maximumEAPOLStartMessages = $value;
    }

    /**
     * Sets the outerIdentityPrivacyTemporaryValue property value. Specify the string to replace usernames for privacy when using EAP TTLS or PEAP.
     *  @param string|null $value Value to set for the outerIdentityPrivacyTemporaryValue property.
    */
    public function setOuterIdentityPrivacyTemporaryValue(?string $value ): void {
        $this->outerIdentityPrivacyTemporaryValue = $value;
    }

    /**
     * Sets the performServerValidation property value. When TRUE, enables verification of server's identity by validating the certificate when EAP type is selected as PEAP. When FALSE, the certificate is not validated. Default value is TRUE.
     *  @param bool|null $value Value to set for the performServerValidation property.
    */
    public function setPerformServerValidation(?bool $value ): void {
        $this->performServerValidation = $value;
    }

    /**
     * Sets the requireCryptographicBinding property value. When TRUE, enables cryptographic binding when EAP type is selected as PEAP. When FALSE, does not enable cryptogrpahic binding. Default value is TRUE.
     *  @param bool|null $value Value to set for the requireCryptographicBinding property.
    */
    public function setRequireCryptographicBinding(?bool $value ): void {
        $this->requireCryptographicBinding = $value;
    }

    /**
     * Sets the rootCertificateForClientValidation property value. Specify root certificate for client validation.
     *  @param Windows81TrustedRootCertificate|null $value Value to set for the rootCertificateForClientValidation property.
    */
    public function setRootCertificateForClientValidation(?Windows81TrustedRootCertificate $value ): void {
        $this->rootCertificateForClientValidation = $value;
    }

    /**
     * Sets the rootCertificatesForServerValidation property value. Specify root certificates for server validation. This collection can contain a maximum of 500 elements.
     *  @param array<Windows81TrustedRootCertificate>|null $value Value to set for the rootCertificatesForServerValidation property.
    */
    public function setRootCertificatesForServerValidation(?array $value ): void {
        $this->rootCertificatesForServerValidation = $value;
    }

    /**
     * Sets the secondaryAuthenticationMethod property value. Specify the secondary authentication method. Possible values are: certificate, usernameAndPassword, derivedCredential. Possible values are: certificate, usernameAndPassword, derivedCredential, unknownFutureValue.
     *  @param WiredNetworkAuthenticationMethod|null $value Value to set for the secondaryAuthenticationMethod property.
    */
    public function setSecondaryAuthenticationMethod(?WiredNetworkAuthenticationMethod $value ): void {
        $this->secondaryAuthenticationMethod = $value;
    }

    /**
     * Sets the secondaryIdentityCertificateForClientAuthentication property value. Specify secondary identity certificate for client authentication.
     *  @param WindowsCertificateProfileBase|null $value Value to set for the secondaryIdentityCertificateForClientAuthentication property.
    */
    public function setSecondaryIdentityCertificateForClientAuthentication(?WindowsCertificateProfileBase $value ): void {
        $this->secondaryIdentityCertificateForClientAuthentication = $value;
    }

    /**
     * Sets the secondaryRootCertificateForClientValidation property value. Specify secondary root certificate for client validation.
     *  @param Windows81TrustedRootCertificate|null $value Value to set for the secondaryRootCertificateForClientValidation property.
    */
    public function setSecondaryRootCertificateForClientValidation(?Windows81TrustedRootCertificate $value ): void {
        $this->secondaryRootCertificateForClientValidation = $value;
    }

    /**
     * Sets the trustedServerCertificateNames property value. Specify trusted server certificate names.
     *  @param array<string>|null $value Value to set for the trustedServerCertificateNames property.
    */
    public function setTrustedServerCertificateNames(?array $value ): void {
        $this->trustedServerCertificateNames = $value;
    }

}
