<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsWifiEnterpriseEAPConfiguration extends WindowsWifiConfiguration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var WiFiAuthenticationMethod|null $authenticationMethod Specify the authentication method. Possible values are: certificate, usernameAndPassword, derivedCredential.
    */
    private ?WiFiAuthenticationMethod $authenticationMethod = null;
    
    /**
     * @var int|null $authenticationPeriodInSeconds Specify the number of seconds for the client to wait after an authentication attempt before failing. Valid range 1-3600.
    */
    private ?int $authenticationPeriodInSeconds = null;
    
    /**
     * @var int|null $authenticationRetryDelayPeriodInSeconds Specify the number of seconds between a failed authentication and the next authentication attempt. Valid range 1-3600.
    */
    private ?int $authenticationRetryDelayPeriodInSeconds = null;
    
    /**
     * @var WifiAuthenticationType|null $authenticationType Specify whether to authenticate the user, the device, either, or to use guest authentication (none). If you’re using certificate authentication, make sure the certificate type matches the authentication type. Possible values are: none, user, machine, machineOrUser, guest.
    */
    private ?WifiAuthenticationType $authenticationType = null;
    
    /**
     * @var bool|null $cacheCredentials Specify whether to cache user credentials on the device so that users don’t need to keep entering them each time they connect.
    */
    private ?bool $cacheCredentials = null;
    
    /**
     * @var bool|null $disableUserPromptForServerValidation Specify whether to prevent the user from being prompted to authorize new servers for trusted certification authorities when EAP type is selected as PEAP.
    */
    private ?bool $disableUserPromptForServerValidation = null;
    
    /**
     * @var int|null $eapolStartPeriodInSeconds Specify the number of seconds to wait before sending an EAPOL (Extensible Authentication Protocol over LAN) Start message. Valid range 1-3600.
    */
    private ?int $eapolStartPeriodInSeconds = null;
    
    /**
     * @var EapType|null $eapType Extensible Authentication Protocol (EAP). Indicates the type of EAP protocol set on the Wi-Fi endpoint (router). Possible values are: eapTls, leap, eapSim, eapTtls, peap, eapFast, teap.
    */
    private ?EapType $eapType = null;
    
    /**
     * @var bool|null $enablePairwiseMasterKeyCaching Specify whether the wifi connection should enable pairwise master key caching.
    */
    private ?bool $enablePairwiseMasterKeyCaching = null;
    
    /**
     * @var bool|null $enablePreAuthentication Specify whether pre-authentication should be enabled.
    */
    private ?bool $enablePreAuthentication = null;
    
    /**
     * @var WindowsCertificateProfileBase|null $identityCertificateForClientAuthentication Specify identity certificate for client authentication.
    */
    private ?WindowsCertificateProfileBase $identityCertificateForClientAuthentication = null;
    
    /**
     * @var NonEapAuthenticationMethodForEapTtlsType|null $innerAuthenticationProtocolForEAPTTLS Specify inner authentication protocol for EAP TTLS. Possible values are: unencryptedPassword, challengeHandshakeAuthenticationProtocol, microsoftChap, microsoftChapVersionTwo.
    */
    private ?NonEapAuthenticationMethodForEapTtlsType $innerAuthenticationProtocolForEAPTTLS = null;
    
    /**
     * @var int|null $maximumAuthenticationFailures Specify the maximum authentication failures allowed for a set of credentials. Valid range 1-100.
    */
    private ?int $maximumAuthenticationFailures = null;
    
    /**
     * @var int|null $maximumAuthenticationTimeoutInSeconds Specify maximum authentication timeout (in seconds).  Valid range: 1-120
    */
    private ?int $maximumAuthenticationTimeoutInSeconds = null;
    
    /**
     * @var int|null $maximumEAPOLStartMessages Specifiy the maximum number of EAPOL (Extensible Authentication Protocol over LAN) Start messages to be sent before returning failure. Valid range 1-100.
    */
    private ?int $maximumEAPOLStartMessages = null;
    
    /**
     * @var int|null $maximumNumberOfPairwiseMasterKeysInCache Specify maximum number of pairwise master keys in cache.  Valid range: 1-255
    */
    private ?int $maximumNumberOfPairwiseMasterKeysInCache = null;
    
    /**
     * @var int|null $maximumPairwiseMasterKeyCacheTimeInMinutes Specify maximum pairwise master key cache time (in minutes).  Valid range: 5-1440
    */
    private ?int $maximumPairwiseMasterKeyCacheTimeInMinutes = null;
    
    /**
     * @var int|null $maximumPreAuthenticationAttempts Specify maximum pre-authentication attempts.  Valid range: 1-16
    */
    private ?int $maximumPreAuthenticationAttempts = null;
    
    /**
     * @var NetworkSingleSignOnType|null $networkSingleSignOn Specify the network single sign on type. Possible values are: disabled, prelogon, postlogon.
    */
    private ?NetworkSingleSignOnType $networkSingleSignOn = null;
    
    /**
     * @var string|null $outerIdentityPrivacyTemporaryValue Specify the string to replace usernames for privacy when using EAP TTLS or PEAP.
    */
    private ?string $outerIdentityPrivacyTemporaryValue = null;
    
    /**
     * @var bool|null $performServerValidation Specify whether to enable verification of server's identity by validating the certificate when EAP type is selected as PEAP.
    */
    private ?bool $performServerValidation = null;
    
    /**
     * @var bool|null $promptForAdditionalAuthenticationCredentials Specify whether the wifi connection should prompt for additional authentication credentials.
    */
    private ?bool $promptForAdditionalAuthenticationCredentials = null;
    
    /**
     * @var bool|null $requireCryptographicBinding Specify whether to enable cryptographic binding when EAP type is selected as PEAP.
    */
    private ?bool $requireCryptographicBinding = null;
    
    /**
     * @var Windows81TrustedRootCertificate|null $rootCertificateForClientValidation Specify root certificate for client validation.
    */
    private ?Windows81TrustedRootCertificate $rootCertificateForClientValidation = null;
    
    /**
     * @var array<Windows81TrustedRootCertificate>|null $rootCertificatesForServerValidation Specify root certificate for server validation. This collection can contain a maximum of 500 elements.
    */
    private ?array $rootCertificatesForServerValidation = null;
    
    /**
     * @var array<string>|null $trustedServerCertificateNames Specify trusted server certificate names.
    */
    private ?array $trustedServerCertificateNames = null;
    
    /**
     * @var bool|null $userBasedVirtualLan Specifiy whether to change the virtual LAN used by the device based on the user’s credentials. Cannot be used when NetworkSingleSignOnType is set to ​Disabled.
    */
    private ?bool $userBasedVirtualLan = null;
    
    /**
     * Instantiates a new WindowsWifiEnterpriseEAPConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsWifiEnterpriseEAPConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsWifiEnterpriseEAPConfiguration {
        return new WindowsWifiEnterpriseEAPConfiguration();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the authenticationMethod property value. Specify the authentication method. Possible values are: certificate, usernameAndPassword, derivedCredential.
     * @return WiFiAuthenticationMethod|null
    */
    public function getAuthenticationMethod(): ?WiFiAuthenticationMethod {
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
     * Gets the authenticationType property value. Specify whether to authenticate the user, the device, either, or to use guest authentication (none). If you’re using certificate authentication, make sure the certificate type matches the authentication type. Possible values are: none, user, machine, machineOrUser, guest.
     * @return WifiAuthenticationType|null
    */
    public function getAuthenticationType(): ?WifiAuthenticationType {
        return $this->authenticationType;
    }

    /**
     * Gets the cacheCredentials property value. Specify whether to cache user credentials on the device so that users don’t need to keep entering them each time they connect.
     * @return bool|null
    */
    public function getCacheCredentials(): ?bool {
        return $this->cacheCredentials;
    }

    /**
     * Gets the disableUserPromptForServerValidation property value. Specify whether to prevent the user from being prompted to authorize new servers for trusted certification authorities when EAP type is selected as PEAP.
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
     * Gets the eapType property value. Extensible Authentication Protocol (EAP). Indicates the type of EAP protocol set on the Wi-Fi endpoint (router). Possible values are: eapTls, leap, eapSim, eapTtls, peap, eapFast, teap.
     * @return EapType|null
    */
    public function getEapType(): ?EapType {
        return $this->eapType;
    }

    /**
     * Gets the enablePairwiseMasterKeyCaching property value. Specify whether the wifi connection should enable pairwise master key caching.
     * @return bool|null
    */
    public function getEnablePairwiseMasterKeyCaching(): ?bool {
        return $this->enablePairwiseMasterKeyCaching;
    }

    /**
     * Gets the enablePreAuthentication property value. Specify whether pre-authentication should be enabled.
     * @return bool|null
    */
    public function getEnablePreAuthentication(): ?bool {
        return $this->enablePreAuthentication;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'authenticationMethod' => function (ParseNode $n) use ($o) { $o->setAuthenticationMethod($n->getEnumValue(WiFiAuthenticationMethod::class)); },
            'authenticationPeriodInSeconds' => function (ParseNode $n) use ($o) { $o->setAuthenticationPeriodInSeconds($n->getIntegerValue()); },
            'authenticationRetryDelayPeriodInSeconds' => function (ParseNode $n) use ($o) { $o->setAuthenticationRetryDelayPeriodInSeconds($n->getIntegerValue()); },
            'authenticationType' => function (ParseNode $n) use ($o) { $o->setAuthenticationType($n->getEnumValue(WifiAuthenticationType::class)); },
            'cacheCredentials' => function (ParseNode $n) use ($o) { $o->setCacheCredentials($n->getBooleanValue()); },
            'disableUserPromptForServerValidation' => function (ParseNode $n) use ($o) { $o->setDisableUserPromptForServerValidation($n->getBooleanValue()); },
            'eapolStartPeriodInSeconds' => function (ParseNode $n) use ($o) { $o->setEapolStartPeriodInSeconds($n->getIntegerValue()); },
            'eapType' => function (ParseNode $n) use ($o) { $o->setEapType($n->getEnumValue(EapType::class)); },
            'enablePairwiseMasterKeyCaching' => function (ParseNode $n) use ($o) { $o->setEnablePairwiseMasterKeyCaching($n->getBooleanValue()); },
            'enablePreAuthentication' => function (ParseNode $n) use ($o) { $o->setEnablePreAuthentication($n->getBooleanValue()); },
            'identityCertificateForClientAuthentication' => function (ParseNode $n) use ($o) { $o->setIdentityCertificateForClientAuthentication($n->getObjectValue(array(WindowsCertificateProfileBase::class, 'createFromDiscriminatorValue'))); },
            'innerAuthenticationProtocolForEAPTTLS' => function (ParseNode $n) use ($o) { $o->setInnerAuthenticationProtocolForEAPTTLS($n->getEnumValue(NonEapAuthenticationMethodForEapTtlsType::class)); },
            'maximumAuthenticationFailures' => function (ParseNode $n) use ($o) { $o->setMaximumAuthenticationFailures($n->getIntegerValue()); },
            'maximumAuthenticationTimeoutInSeconds' => function (ParseNode $n) use ($o) { $o->setMaximumAuthenticationTimeoutInSeconds($n->getIntegerValue()); },
            'maximumEAPOLStartMessages' => function (ParseNode $n) use ($o) { $o->setMaximumEAPOLStartMessages($n->getIntegerValue()); },
            'maximumNumberOfPairwiseMasterKeysInCache' => function (ParseNode $n) use ($o) { $o->setMaximumNumberOfPairwiseMasterKeysInCache($n->getIntegerValue()); },
            'maximumPairwiseMasterKeyCacheTimeInMinutes' => function (ParseNode $n) use ($o) { $o->setMaximumPairwiseMasterKeyCacheTimeInMinutes($n->getIntegerValue()); },
            'maximumPreAuthenticationAttempts' => function (ParseNode $n) use ($o) { $o->setMaximumPreAuthenticationAttempts($n->getIntegerValue()); },
            'networkSingleSignOn' => function (ParseNode $n) use ($o) { $o->setNetworkSingleSignOn($n->getEnumValue(NetworkSingleSignOnType::class)); },
            'outerIdentityPrivacyTemporaryValue' => function (ParseNode $n) use ($o) { $o->setOuterIdentityPrivacyTemporaryValue($n->getStringValue()); },
            'performServerValidation' => function (ParseNode $n) use ($o) { $o->setPerformServerValidation($n->getBooleanValue()); },
            'promptForAdditionalAuthenticationCredentials' => function (ParseNode $n) use ($o) { $o->setPromptForAdditionalAuthenticationCredentials($n->getBooleanValue()); },
            'requireCryptographicBinding' => function (ParseNode $n) use ($o) { $o->setRequireCryptographicBinding($n->getBooleanValue()); },
            'rootCertificateForClientValidation' => function (ParseNode $n) use ($o) { $o->setRootCertificateForClientValidation($n->getObjectValue(array(Windows81TrustedRootCertificate::class, 'createFromDiscriminatorValue'))); },
            'rootCertificatesForServerValidation' => function (ParseNode $n) use ($o) { $o->setRootCertificatesForServerValidation($n->getCollectionOfObjectValues(array(Windows81TrustedRootCertificate::class, 'createFromDiscriminatorValue'))); },
            'trustedServerCertificateNames' => function (ParseNode $n) use ($o) { $o->setTrustedServerCertificateNames($n->getCollectionOfPrimitiveValues()); },
            'userBasedVirtualLan' => function (ParseNode $n) use ($o) { $o->setUserBasedVirtualLan($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the identityCertificateForClientAuthentication property value. Specify identity certificate for client authentication.
     * @return WindowsCertificateProfileBase|null
    */
    public function getIdentityCertificateForClientAuthentication(): ?WindowsCertificateProfileBase {
        return $this->identityCertificateForClientAuthentication;
    }

    /**
     * Gets the innerAuthenticationProtocolForEAPTTLS property value. Specify inner authentication protocol for EAP TTLS. Possible values are: unencryptedPassword, challengeHandshakeAuthenticationProtocol, microsoftChap, microsoftChapVersionTwo.
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
     * Gets the maximumAuthenticationTimeoutInSeconds property value. Specify maximum authentication timeout (in seconds).  Valid range: 1-120
     * @return int|null
    */
    public function getMaximumAuthenticationTimeoutInSeconds(): ?int {
        return $this->maximumAuthenticationTimeoutInSeconds;
    }

    /**
     * Gets the maximumEAPOLStartMessages property value. Specifiy the maximum number of EAPOL (Extensible Authentication Protocol over LAN) Start messages to be sent before returning failure. Valid range 1-100.
     * @return int|null
    */
    public function getMaximumEAPOLStartMessages(): ?int {
        return $this->maximumEAPOLStartMessages;
    }

    /**
     * Gets the maximumNumberOfPairwiseMasterKeysInCache property value. Specify maximum number of pairwise master keys in cache.  Valid range: 1-255
     * @return int|null
    */
    public function getMaximumNumberOfPairwiseMasterKeysInCache(): ?int {
        return $this->maximumNumberOfPairwiseMasterKeysInCache;
    }

    /**
     * Gets the maximumPairwiseMasterKeyCacheTimeInMinutes property value. Specify maximum pairwise master key cache time (in minutes).  Valid range: 5-1440
     * @return int|null
    */
    public function getMaximumPairwiseMasterKeyCacheTimeInMinutes(): ?int {
        return $this->maximumPairwiseMasterKeyCacheTimeInMinutes;
    }

    /**
     * Gets the maximumPreAuthenticationAttempts property value. Specify maximum pre-authentication attempts.  Valid range: 1-16
     * @return int|null
    */
    public function getMaximumPreAuthenticationAttempts(): ?int {
        return $this->maximumPreAuthenticationAttempts;
    }

    /**
     * Gets the networkSingleSignOn property value. Specify the network single sign on type. Possible values are: disabled, prelogon, postlogon.
     * @return NetworkSingleSignOnType|null
    */
    public function getNetworkSingleSignOn(): ?NetworkSingleSignOnType {
        return $this->networkSingleSignOn;
    }

    /**
     * Gets the outerIdentityPrivacyTemporaryValue property value. Specify the string to replace usernames for privacy when using EAP TTLS or PEAP.
     * @return string|null
    */
    public function getOuterIdentityPrivacyTemporaryValue(): ?string {
        return $this->outerIdentityPrivacyTemporaryValue;
    }

    /**
     * Gets the performServerValidation property value. Specify whether to enable verification of server's identity by validating the certificate when EAP type is selected as PEAP.
     * @return bool|null
    */
    public function getPerformServerValidation(): ?bool {
        return $this->performServerValidation;
    }

    /**
     * Gets the promptForAdditionalAuthenticationCredentials property value. Specify whether the wifi connection should prompt for additional authentication credentials.
     * @return bool|null
    */
    public function getPromptForAdditionalAuthenticationCredentials(): ?bool {
        return $this->promptForAdditionalAuthenticationCredentials;
    }

    /**
     * Gets the requireCryptographicBinding property value. Specify whether to enable cryptographic binding when EAP type is selected as PEAP.
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
     * Gets the rootCertificatesForServerValidation property value. Specify root certificate for server validation. This collection can contain a maximum of 500 elements.
     * @return array<Windows81TrustedRootCertificate>|null
    */
    public function getRootCertificatesForServerValidation(): ?array {
        return $this->rootCertificatesForServerValidation;
    }

    /**
     * Gets the trustedServerCertificateNames property value. Specify trusted server certificate names.
     * @return array<string>|null
    */
    public function getTrustedServerCertificateNames(): ?array {
        return $this->trustedServerCertificateNames;
    }

    /**
     * Gets the userBasedVirtualLan property value. Specifiy whether to change the virtual LAN used by the device based on the user’s credentials. Cannot be used when NetworkSingleSignOnType is set to ​Disabled.
     * @return bool|null
    */
    public function getUserBasedVirtualLan(): ?bool {
        return $this->userBasedVirtualLan;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('authenticationMethod', $this->authenticationMethod);
        $writer->writeIntegerValue('authenticationPeriodInSeconds', $this->authenticationPeriodInSeconds);
        $writer->writeIntegerValue('authenticationRetryDelayPeriodInSeconds', $this->authenticationRetryDelayPeriodInSeconds);
        $writer->writeEnumValue('authenticationType', $this->authenticationType);
        $writer->writeBooleanValue('cacheCredentials', $this->cacheCredentials);
        $writer->writeBooleanValue('disableUserPromptForServerValidation', $this->disableUserPromptForServerValidation);
        $writer->writeIntegerValue('eapolStartPeriodInSeconds', $this->eapolStartPeriodInSeconds);
        $writer->writeEnumValue('eapType', $this->eapType);
        $writer->writeBooleanValue('enablePairwiseMasterKeyCaching', $this->enablePairwiseMasterKeyCaching);
        $writer->writeBooleanValue('enablePreAuthentication', $this->enablePreAuthentication);
        $writer->writeObjectValue('identityCertificateForClientAuthentication', $this->identityCertificateForClientAuthentication);
        $writer->writeEnumValue('innerAuthenticationProtocolForEAPTTLS', $this->innerAuthenticationProtocolForEAPTTLS);
        $writer->writeIntegerValue('maximumAuthenticationFailures', $this->maximumAuthenticationFailures);
        $writer->writeIntegerValue('maximumAuthenticationTimeoutInSeconds', $this->maximumAuthenticationTimeoutInSeconds);
        $writer->writeIntegerValue('maximumEAPOLStartMessages', $this->maximumEAPOLStartMessages);
        $writer->writeIntegerValue('maximumNumberOfPairwiseMasterKeysInCache', $this->maximumNumberOfPairwiseMasterKeysInCache);
        $writer->writeIntegerValue('maximumPairwiseMasterKeyCacheTimeInMinutes', $this->maximumPairwiseMasterKeyCacheTimeInMinutes);
        $writer->writeIntegerValue('maximumPreAuthenticationAttempts', $this->maximumPreAuthenticationAttempts);
        $writer->writeEnumValue('networkSingleSignOn', $this->networkSingleSignOn);
        $writer->writeStringValue('outerIdentityPrivacyTemporaryValue', $this->outerIdentityPrivacyTemporaryValue);
        $writer->writeBooleanValue('performServerValidation', $this->performServerValidation);
        $writer->writeBooleanValue('promptForAdditionalAuthenticationCredentials', $this->promptForAdditionalAuthenticationCredentials);
        $writer->writeBooleanValue('requireCryptographicBinding', $this->requireCryptographicBinding);
        $writer->writeObjectValue('rootCertificateForClientValidation', $this->rootCertificateForClientValidation);
        $writer->writeCollectionOfObjectValues('rootCertificatesForServerValidation', $this->rootCertificatesForServerValidation);
        $writer->writeCollectionOfPrimitiveValues('trustedServerCertificateNames', $this->trustedServerCertificateNames);
        $writer->writeBooleanValue('userBasedVirtualLan', $this->userBasedVirtualLan);
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
     * Sets the authenticationMethod property value. Specify the authentication method. Possible values are: certificate, usernameAndPassword, derivedCredential.
     *  @param WiFiAuthenticationMethod|null $value Value to set for the authenticationMethod property.
    */
    public function setAuthenticationMethod(?WiFiAuthenticationMethod $value ): void {
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
     * Sets the authenticationType property value. Specify whether to authenticate the user, the device, either, or to use guest authentication (none). If you’re using certificate authentication, make sure the certificate type matches the authentication type. Possible values are: none, user, machine, machineOrUser, guest.
     *  @param WifiAuthenticationType|null $value Value to set for the authenticationType property.
    */
    public function setAuthenticationType(?WifiAuthenticationType $value ): void {
        $this->authenticationType = $value;
    }

    /**
     * Sets the cacheCredentials property value. Specify whether to cache user credentials on the device so that users don’t need to keep entering them each time they connect.
     *  @param bool|null $value Value to set for the cacheCredentials property.
    */
    public function setCacheCredentials(?bool $value ): void {
        $this->cacheCredentials = $value;
    }

    /**
     * Sets the disableUserPromptForServerValidation property value. Specify whether to prevent the user from being prompted to authorize new servers for trusted certification authorities when EAP type is selected as PEAP.
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
     * Sets the eapType property value. Extensible Authentication Protocol (EAP). Indicates the type of EAP protocol set on the Wi-Fi endpoint (router). Possible values are: eapTls, leap, eapSim, eapTtls, peap, eapFast, teap.
     *  @param EapType|null $value Value to set for the eapType property.
    */
    public function setEapType(?EapType $value ): void {
        $this->eapType = $value;
    }

    /**
     * Sets the enablePairwiseMasterKeyCaching property value. Specify whether the wifi connection should enable pairwise master key caching.
     *  @param bool|null $value Value to set for the enablePairwiseMasterKeyCaching property.
    */
    public function setEnablePairwiseMasterKeyCaching(?bool $value ): void {
        $this->enablePairwiseMasterKeyCaching = $value;
    }

    /**
     * Sets the enablePreAuthentication property value. Specify whether pre-authentication should be enabled.
     *  @param bool|null $value Value to set for the enablePreAuthentication property.
    */
    public function setEnablePreAuthentication(?bool $value ): void {
        $this->enablePreAuthentication = $value;
    }

    /**
     * Sets the identityCertificateForClientAuthentication property value. Specify identity certificate for client authentication.
     *  @param WindowsCertificateProfileBase|null $value Value to set for the identityCertificateForClientAuthentication property.
    */
    public function setIdentityCertificateForClientAuthentication(?WindowsCertificateProfileBase $value ): void {
        $this->identityCertificateForClientAuthentication = $value;
    }

    /**
     * Sets the innerAuthenticationProtocolForEAPTTLS property value. Specify inner authentication protocol for EAP TTLS. Possible values are: unencryptedPassword, challengeHandshakeAuthenticationProtocol, microsoftChap, microsoftChapVersionTwo.
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
     * Sets the maximumAuthenticationTimeoutInSeconds property value. Specify maximum authentication timeout (in seconds).  Valid range: 1-120
     *  @param int|null $value Value to set for the maximumAuthenticationTimeoutInSeconds property.
    */
    public function setMaximumAuthenticationTimeoutInSeconds(?int $value ): void {
        $this->maximumAuthenticationTimeoutInSeconds = $value;
    }

    /**
     * Sets the maximumEAPOLStartMessages property value. Specifiy the maximum number of EAPOL (Extensible Authentication Protocol over LAN) Start messages to be sent before returning failure. Valid range 1-100.
     *  @param int|null $value Value to set for the maximumEAPOLStartMessages property.
    */
    public function setMaximumEAPOLStartMessages(?int $value ): void {
        $this->maximumEAPOLStartMessages = $value;
    }

    /**
     * Sets the maximumNumberOfPairwiseMasterKeysInCache property value. Specify maximum number of pairwise master keys in cache.  Valid range: 1-255
     *  @param int|null $value Value to set for the maximumNumberOfPairwiseMasterKeysInCache property.
    */
    public function setMaximumNumberOfPairwiseMasterKeysInCache(?int $value ): void {
        $this->maximumNumberOfPairwiseMasterKeysInCache = $value;
    }

    /**
     * Sets the maximumPairwiseMasterKeyCacheTimeInMinutes property value. Specify maximum pairwise master key cache time (in minutes).  Valid range: 5-1440
     *  @param int|null $value Value to set for the maximumPairwiseMasterKeyCacheTimeInMinutes property.
    */
    public function setMaximumPairwiseMasterKeyCacheTimeInMinutes(?int $value ): void {
        $this->maximumPairwiseMasterKeyCacheTimeInMinutes = $value;
    }

    /**
     * Sets the maximumPreAuthenticationAttempts property value. Specify maximum pre-authentication attempts.  Valid range: 1-16
     *  @param int|null $value Value to set for the maximumPreAuthenticationAttempts property.
    */
    public function setMaximumPreAuthenticationAttempts(?int $value ): void {
        $this->maximumPreAuthenticationAttempts = $value;
    }

    /**
     * Sets the networkSingleSignOn property value. Specify the network single sign on type. Possible values are: disabled, prelogon, postlogon.
     *  @param NetworkSingleSignOnType|null $value Value to set for the networkSingleSignOn property.
    */
    public function setNetworkSingleSignOn(?NetworkSingleSignOnType $value ): void {
        $this->networkSingleSignOn = $value;
    }

    /**
     * Sets the outerIdentityPrivacyTemporaryValue property value. Specify the string to replace usernames for privacy when using EAP TTLS or PEAP.
     *  @param string|null $value Value to set for the outerIdentityPrivacyTemporaryValue property.
    */
    public function setOuterIdentityPrivacyTemporaryValue(?string $value ): void {
        $this->outerIdentityPrivacyTemporaryValue = $value;
    }

    /**
     * Sets the performServerValidation property value. Specify whether to enable verification of server's identity by validating the certificate when EAP type is selected as PEAP.
     *  @param bool|null $value Value to set for the performServerValidation property.
    */
    public function setPerformServerValidation(?bool $value ): void {
        $this->performServerValidation = $value;
    }

    /**
     * Sets the promptForAdditionalAuthenticationCredentials property value. Specify whether the wifi connection should prompt for additional authentication credentials.
     *  @param bool|null $value Value to set for the promptForAdditionalAuthenticationCredentials property.
    */
    public function setPromptForAdditionalAuthenticationCredentials(?bool $value ): void {
        $this->promptForAdditionalAuthenticationCredentials = $value;
    }

    /**
     * Sets the requireCryptographicBinding property value. Specify whether to enable cryptographic binding when EAP type is selected as PEAP.
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
     * Sets the rootCertificatesForServerValidation property value. Specify root certificate for server validation. This collection can contain a maximum of 500 elements.
     *  @param array<Windows81TrustedRootCertificate>|null $value Value to set for the rootCertificatesForServerValidation property.
    */
    public function setRootCertificatesForServerValidation(?array $value ): void {
        $this->rootCertificatesForServerValidation = $value;
    }

    /**
     * Sets the trustedServerCertificateNames property value. Specify trusted server certificate names.
     *  @param array<string>|null $value Value to set for the trustedServerCertificateNames property.
    */
    public function setTrustedServerCertificateNames(?array $value ): void {
        $this->trustedServerCertificateNames = $value;
    }

    /**
     * Sets the userBasedVirtualLan property value. Specifiy whether to change the virtual LAN used by the device based on the user’s credentials. Cannot be used when NetworkSingleSignOnType is set to ​Disabled.
     *  @param bool|null $value Value to set for the userBasedVirtualLan property.
    */
    public function setUserBasedVirtualLan(?bool $value ): void {
        $this->userBasedVirtualLan = $value;
    }

}
