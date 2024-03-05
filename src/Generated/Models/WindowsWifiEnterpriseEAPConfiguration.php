<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * This entity provides descriptions of the declared methods, properties and relationships exposed by the Wifi CSP.
*/
class WindowsWifiEnterpriseEAPConfiguration extends WindowsWifiConfiguration implements Parsable 
{
    /**
     * Instantiates a new WindowsWifiEnterpriseEAPConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsWifiEnterpriseEAPConfiguration');
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
     * Gets the authenticationMethod property value. Specify the authentication method. Possible values are: certificate, usernameAndPassword, derivedCredential.
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
     * Gets the authenticationType property value. Specify whether to authenticate the user, the device, either, or to use guest authentication (none). If you’re using certificate authentication, make sure the certificate type matches the authentication type. Possible values are: none, user, machine, machineOrUser, guest.
     * @return WifiAuthenticationType|null
    */
    public function getAuthenticationType(): ?WifiAuthenticationType {
        $val = $this->getBackingStore()->get('authenticationType');
        if (is_null($val) || $val instanceof WifiAuthenticationType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authenticationType'");
    }

    /**
     * Gets the cacheCredentials property value. Specify whether to cache user credentials on the device so that users don’t need to keep entering them each time they connect.
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
     * Gets the disableUserPromptForServerValidation property value. Specify whether to prevent the user from being prompted to authorize new servers for trusted certification authorities when EAP type is selected as PEAP.
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
     * Gets the enablePairwiseMasterKeyCaching property value. Specify whether the wifi connection should enable pairwise master key caching.
     * @return bool|null
    */
    public function getEnablePairwiseMasterKeyCaching(): ?bool {
        $val = $this->getBackingStore()->get('enablePairwiseMasterKeyCaching');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enablePairwiseMasterKeyCaching'");
    }

    /**
     * Gets the enablePreAuthentication property value. Specify whether pre-authentication should be enabled.
     * @return bool|null
    */
    public function getEnablePreAuthentication(): ?bool {
        $val = $this->getBackingStore()->get('enablePreAuthentication');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enablePreAuthentication'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'authenticationMethod' => fn(ParseNode $n) => $o->setAuthenticationMethod($n->getEnumValue(WiFiAuthenticationMethod::class)),
            'authenticationPeriodInSeconds' => fn(ParseNode $n) => $o->setAuthenticationPeriodInSeconds($n->getIntegerValue()),
            'authenticationRetryDelayPeriodInSeconds' => fn(ParseNode $n) => $o->setAuthenticationRetryDelayPeriodInSeconds($n->getIntegerValue()),
            'authenticationType' => fn(ParseNode $n) => $o->setAuthenticationType($n->getEnumValue(WifiAuthenticationType::class)),
            'cacheCredentials' => fn(ParseNode $n) => $o->setCacheCredentials($n->getBooleanValue()),
            'disableUserPromptForServerValidation' => fn(ParseNode $n) => $o->setDisableUserPromptForServerValidation($n->getBooleanValue()),
            'eapolStartPeriodInSeconds' => fn(ParseNode $n) => $o->setEapolStartPeriodInSeconds($n->getIntegerValue()),
            'eapType' => fn(ParseNode $n) => $o->setEapType($n->getEnumValue(EapType::class)),
            'enablePairwiseMasterKeyCaching' => fn(ParseNode $n) => $o->setEnablePairwiseMasterKeyCaching($n->getBooleanValue()),
            'enablePreAuthentication' => fn(ParseNode $n) => $o->setEnablePreAuthentication($n->getBooleanValue()),
            'identityCertificateForClientAuthentication' => fn(ParseNode $n) => $o->setIdentityCertificateForClientAuthentication($n->getObjectValue([WindowsCertificateProfileBase::class, 'createFromDiscriminatorValue'])),
            'innerAuthenticationProtocolForEAPTTLS' => fn(ParseNode $n) => $o->setInnerAuthenticationProtocolForEAPTTLS($n->getEnumValue(NonEapAuthenticationMethodForEapTtlsType::class)),
            'maximumAuthenticationFailures' => fn(ParseNode $n) => $o->setMaximumAuthenticationFailures($n->getIntegerValue()),
            'maximumAuthenticationTimeoutInSeconds' => fn(ParseNode $n) => $o->setMaximumAuthenticationTimeoutInSeconds($n->getIntegerValue()),
            'maximumEAPOLStartMessages' => fn(ParseNode $n) => $o->setMaximumEAPOLStartMessages($n->getIntegerValue()),
            'maximumNumberOfPairwiseMasterKeysInCache' => fn(ParseNode $n) => $o->setMaximumNumberOfPairwiseMasterKeysInCache($n->getIntegerValue()),
            'maximumPairwiseMasterKeyCacheTimeInMinutes' => fn(ParseNode $n) => $o->setMaximumPairwiseMasterKeyCacheTimeInMinutes($n->getIntegerValue()),
            'maximumPreAuthenticationAttempts' => fn(ParseNode $n) => $o->setMaximumPreAuthenticationAttempts($n->getIntegerValue()),
            'networkSingleSignOn' => fn(ParseNode $n) => $o->setNetworkSingleSignOn($n->getEnumValue(NetworkSingleSignOnType::class)),
            'outerIdentityPrivacyTemporaryValue' => fn(ParseNode $n) => $o->setOuterIdentityPrivacyTemporaryValue($n->getStringValue()),
            'performServerValidation' => fn(ParseNode $n) => $o->setPerformServerValidation($n->getBooleanValue()),
            'promptForAdditionalAuthenticationCredentials' => fn(ParseNode $n) => $o->setPromptForAdditionalAuthenticationCredentials($n->getBooleanValue()),
            'requireCryptographicBinding' => fn(ParseNode $n) => $o->setRequireCryptographicBinding($n->getBooleanValue()),
            'rootCertificateForClientValidation' => fn(ParseNode $n) => $o->setRootCertificateForClientValidation($n->getObjectValue([Windows81TrustedRootCertificate::class, 'createFromDiscriminatorValue'])),
            'rootCertificatesForServerValidation' => fn(ParseNode $n) => $o->setRootCertificatesForServerValidation($n->getCollectionOfObjectValues([Windows81TrustedRootCertificate::class, 'createFromDiscriminatorValue'])),
            'trustedServerCertificateNames' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setTrustedServerCertificateNames($val);
            },
            'userBasedVirtualLan' => fn(ParseNode $n) => $o->setUserBasedVirtualLan($n->getBooleanValue()),
        ]);
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
     * Gets the innerAuthenticationProtocolForEAPTTLS property value. Specify inner authentication protocol for EAP TTLS. Possible values are: unencryptedPassword, challengeHandshakeAuthenticationProtocol, microsoftChap, microsoftChapVersionTwo.
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
     * Gets the maximumAuthenticationTimeoutInSeconds property value. Specify maximum authentication timeout (in seconds).  Valid range: 1-120
     * @return int|null
    */
    public function getMaximumAuthenticationTimeoutInSeconds(): ?int {
        $val = $this->getBackingStore()->get('maximumAuthenticationTimeoutInSeconds');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maximumAuthenticationTimeoutInSeconds'");
    }

    /**
     * Gets the maximumEAPOLStartMessages property value. Specifiy the maximum number of EAPOL (Extensible Authentication Protocol over LAN) Start messages to be sent before returning failure. Valid range 1-100.
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
     * Gets the maximumNumberOfPairwiseMasterKeysInCache property value. Specify maximum number of pairwise master keys in cache.  Valid range: 1-255
     * @return int|null
    */
    public function getMaximumNumberOfPairwiseMasterKeysInCache(): ?int {
        $val = $this->getBackingStore()->get('maximumNumberOfPairwiseMasterKeysInCache');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maximumNumberOfPairwiseMasterKeysInCache'");
    }

    /**
     * Gets the maximumPairwiseMasterKeyCacheTimeInMinutes property value. Specify maximum pairwise master key cache time (in minutes).  Valid range: 5-1440
     * @return int|null
    */
    public function getMaximumPairwiseMasterKeyCacheTimeInMinutes(): ?int {
        $val = $this->getBackingStore()->get('maximumPairwiseMasterKeyCacheTimeInMinutes');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maximumPairwiseMasterKeyCacheTimeInMinutes'");
    }

    /**
     * Gets the maximumPreAuthenticationAttempts property value. Specify maximum pre-authentication attempts.  Valid range: 1-16
     * @return int|null
    */
    public function getMaximumPreAuthenticationAttempts(): ?int {
        $val = $this->getBackingStore()->get('maximumPreAuthenticationAttempts');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maximumPreAuthenticationAttempts'");
    }

    /**
     * Gets the networkSingleSignOn property value. Specify the network single sign on type. Possible values are: disabled, prelogon, postlogon.
     * @return NetworkSingleSignOnType|null
    */
    public function getNetworkSingleSignOn(): ?NetworkSingleSignOnType {
        $val = $this->getBackingStore()->get('networkSingleSignOn');
        if (is_null($val) || $val instanceof NetworkSingleSignOnType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'networkSingleSignOn'");
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
     * Gets the performServerValidation property value. Specify whether to enable verification of server's identity by validating the certificate when EAP type is selected as PEAP.
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
     * Gets the promptForAdditionalAuthenticationCredentials property value. Specify whether the wifi connection should prompt for additional authentication credentials.
     * @return bool|null
    */
    public function getPromptForAdditionalAuthenticationCredentials(): ?bool {
        $val = $this->getBackingStore()->get('promptForAdditionalAuthenticationCredentials');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'promptForAdditionalAuthenticationCredentials'");
    }

    /**
     * Gets the requireCryptographicBinding property value. Specify whether to enable cryptographic binding when EAP type is selected as PEAP.
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
     * Gets the rootCertificatesForServerValidation property value. Specify root certificate for server validation. This collection can contain a maximum of 500 elements.
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
     * Gets the userBasedVirtualLan property value. Specifiy whether to change the virtual LAN used by the device based on the user’s credentials. Cannot be used when NetworkSingleSignOnType is set to ​Disabled.
     * @return bool|null
    */
    public function getUserBasedVirtualLan(): ?bool {
        $val = $this->getBackingStore()->get('userBasedVirtualLan');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userBasedVirtualLan'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('authenticationMethod', $this->getAuthenticationMethod());
        $writer->writeIntegerValue('authenticationPeriodInSeconds', $this->getAuthenticationPeriodInSeconds());
        $writer->writeIntegerValue('authenticationRetryDelayPeriodInSeconds', $this->getAuthenticationRetryDelayPeriodInSeconds());
        $writer->writeEnumValue('authenticationType', $this->getAuthenticationType());
        $writer->writeBooleanValue('cacheCredentials', $this->getCacheCredentials());
        $writer->writeBooleanValue('disableUserPromptForServerValidation', $this->getDisableUserPromptForServerValidation());
        $writer->writeIntegerValue('eapolStartPeriodInSeconds', $this->getEapolStartPeriodInSeconds());
        $writer->writeEnumValue('eapType', $this->getEapType());
        $writer->writeBooleanValue('enablePairwiseMasterKeyCaching', $this->getEnablePairwiseMasterKeyCaching());
        $writer->writeBooleanValue('enablePreAuthentication', $this->getEnablePreAuthentication());
        $writer->writeObjectValue('identityCertificateForClientAuthentication', $this->getIdentityCertificateForClientAuthentication());
        $writer->writeEnumValue('innerAuthenticationProtocolForEAPTTLS', $this->getInnerAuthenticationProtocolForEAPTTLS());
        $writer->writeIntegerValue('maximumAuthenticationFailures', $this->getMaximumAuthenticationFailures());
        $writer->writeIntegerValue('maximumAuthenticationTimeoutInSeconds', $this->getMaximumAuthenticationTimeoutInSeconds());
        $writer->writeIntegerValue('maximumEAPOLStartMessages', $this->getMaximumEAPOLStartMessages());
        $writer->writeIntegerValue('maximumNumberOfPairwiseMasterKeysInCache', $this->getMaximumNumberOfPairwiseMasterKeysInCache());
        $writer->writeIntegerValue('maximumPairwiseMasterKeyCacheTimeInMinutes', $this->getMaximumPairwiseMasterKeyCacheTimeInMinutes());
        $writer->writeIntegerValue('maximumPreAuthenticationAttempts', $this->getMaximumPreAuthenticationAttempts());
        $writer->writeEnumValue('networkSingleSignOn', $this->getNetworkSingleSignOn());
        $writer->writeStringValue('outerIdentityPrivacyTemporaryValue', $this->getOuterIdentityPrivacyTemporaryValue());
        $writer->writeBooleanValue('performServerValidation', $this->getPerformServerValidation());
        $writer->writeBooleanValue('promptForAdditionalAuthenticationCredentials', $this->getPromptForAdditionalAuthenticationCredentials());
        $writer->writeBooleanValue('requireCryptographicBinding', $this->getRequireCryptographicBinding());
        $writer->writeObjectValue('rootCertificateForClientValidation', $this->getRootCertificateForClientValidation());
        $writer->writeCollectionOfObjectValues('rootCertificatesForServerValidation', $this->getRootCertificatesForServerValidation());
        $writer->writeCollectionOfPrimitiveValues('trustedServerCertificateNames', $this->getTrustedServerCertificateNames());
        $writer->writeBooleanValue('userBasedVirtualLan', $this->getUserBasedVirtualLan());
    }

    /**
     * Sets the authenticationMethod property value. Specify the authentication method. Possible values are: certificate, usernameAndPassword, derivedCredential.
     * @param WiFiAuthenticationMethod|null $value Value to set for the authenticationMethod property.
    */
    public function setAuthenticationMethod(?WiFiAuthenticationMethod $value): void {
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
     * Sets the authenticationType property value. Specify whether to authenticate the user, the device, either, or to use guest authentication (none). If you’re using certificate authentication, make sure the certificate type matches the authentication type. Possible values are: none, user, machine, machineOrUser, guest.
     * @param WifiAuthenticationType|null $value Value to set for the authenticationType property.
    */
    public function setAuthenticationType(?WifiAuthenticationType $value): void {
        $this->getBackingStore()->set('authenticationType', $value);
    }

    /**
     * Sets the cacheCredentials property value. Specify whether to cache user credentials on the device so that users don’t need to keep entering them each time they connect.
     * @param bool|null $value Value to set for the cacheCredentials property.
    */
    public function setCacheCredentials(?bool $value): void {
        $this->getBackingStore()->set('cacheCredentials', $value);
    }

    /**
     * Sets the disableUserPromptForServerValidation property value. Specify whether to prevent the user from being prompted to authorize new servers for trusted certification authorities when EAP type is selected as PEAP.
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
     * Sets the enablePairwiseMasterKeyCaching property value. Specify whether the wifi connection should enable pairwise master key caching.
     * @param bool|null $value Value to set for the enablePairwiseMasterKeyCaching property.
    */
    public function setEnablePairwiseMasterKeyCaching(?bool $value): void {
        $this->getBackingStore()->set('enablePairwiseMasterKeyCaching', $value);
    }

    /**
     * Sets the enablePreAuthentication property value. Specify whether pre-authentication should be enabled.
     * @param bool|null $value Value to set for the enablePreAuthentication property.
    */
    public function setEnablePreAuthentication(?bool $value): void {
        $this->getBackingStore()->set('enablePreAuthentication', $value);
    }

    /**
     * Sets the identityCertificateForClientAuthentication property value. Specify identity certificate for client authentication.
     * @param WindowsCertificateProfileBase|null $value Value to set for the identityCertificateForClientAuthentication property.
    */
    public function setIdentityCertificateForClientAuthentication(?WindowsCertificateProfileBase $value): void {
        $this->getBackingStore()->set('identityCertificateForClientAuthentication', $value);
    }

    /**
     * Sets the innerAuthenticationProtocolForEAPTTLS property value. Specify inner authentication protocol for EAP TTLS. Possible values are: unencryptedPassword, challengeHandshakeAuthenticationProtocol, microsoftChap, microsoftChapVersionTwo.
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
     * Sets the maximumAuthenticationTimeoutInSeconds property value. Specify maximum authentication timeout (in seconds).  Valid range: 1-120
     * @param int|null $value Value to set for the maximumAuthenticationTimeoutInSeconds property.
    */
    public function setMaximumAuthenticationTimeoutInSeconds(?int $value): void {
        $this->getBackingStore()->set('maximumAuthenticationTimeoutInSeconds', $value);
    }

    /**
     * Sets the maximumEAPOLStartMessages property value. Specifiy the maximum number of EAPOL (Extensible Authentication Protocol over LAN) Start messages to be sent before returning failure. Valid range 1-100.
     * @param int|null $value Value to set for the maximumEAPOLStartMessages property.
    */
    public function setMaximumEAPOLStartMessages(?int $value): void {
        $this->getBackingStore()->set('maximumEAPOLStartMessages', $value);
    }

    /**
     * Sets the maximumNumberOfPairwiseMasterKeysInCache property value. Specify maximum number of pairwise master keys in cache.  Valid range: 1-255
     * @param int|null $value Value to set for the maximumNumberOfPairwiseMasterKeysInCache property.
    */
    public function setMaximumNumberOfPairwiseMasterKeysInCache(?int $value): void {
        $this->getBackingStore()->set('maximumNumberOfPairwiseMasterKeysInCache', $value);
    }

    /**
     * Sets the maximumPairwiseMasterKeyCacheTimeInMinutes property value. Specify maximum pairwise master key cache time (in minutes).  Valid range: 5-1440
     * @param int|null $value Value to set for the maximumPairwiseMasterKeyCacheTimeInMinutes property.
    */
    public function setMaximumPairwiseMasterKeyCacheTimeInMinutes(?int $value): void {
        $this->getBackingStore()->set('maximumPairwiseMasterKeyCacheTimeInMinutes', $value);
    }

    /**
     * Sets the maximumPreAuthenticationAttempts property value. Specify maximum pre-authentication attempts.  Valid range: 1-16
     * @param int|null $value Value to set for the maximumPreAuthenticationAttempts property.
    */
    public function setMaximumPreAuthenticationAttempts(?int $value): void {
        $this->getBackingStore()->set('maximumPreAuthenticationAttempts', $value);
    }

    /**
     * Sets the networkSingleSignOn property value. Specify the network single sign on type. Possible values are: disabled, prelogon, postlogon.
     * @param NetworkSingleSignOnType|null $value Value to set for the networkSingleSignOn property.
    */
    public function setNetworkSingleSignOn(?NetworkSingleSignOnType $value): void {
        $this->getBackingStore()->set('networkSingleSignOn', $value);
    }

    /**
     * Sets the outerIdentityPrivacyTemporaryValue property value. Specify the string to replace usernames for privacy when using EAP TTLS or PEAP.
     * @param string|null $value Value to set for the outerIdentityPrivacyTemporaryValue property.
    */
    public function setOuterIdentityPrivacyTemporaryValue(?string $value): void {
        $this->getBackingStore()->set('outerIdentityPrivacyTemporaryValue', $value);
    }

    /**
     * Sets the performServerValidation property value. Specify whether to enable verification of server's identity by validating the certificate when EAP type is selected as PEAP.
     * @param bool|null $value Value to set for the performServerValidation property.
    */
    public function setPerformServerValidation(?bool $value): void {
        $this->getBackingStore()->set('performServerValidation', $value);
    }

    /**
     * Sets the promptForAdditionalAuthenticationCredentials property value. Specify whether the wifi connection should prompt for additional authentication credentials.
     * @param bool|null $value Value to set for the promptForAdditionalAuthenticationCredentials property.
    */
    public function setPromptForAdditionalAuthenticationCredentials(?bool $value): void {
        $this->getBackingStore()->set('promptForAdditionalAuthenticationCredentials', $value);
    }

    /**
     * Sets the requireCryptographicBinding property value. Specify whether to enable cryptographic binding when EAP type is selected as PEAP.
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
     * Sets the rootCertificatesForServerValidation property value. Specify root certificate for server validation. This collection can contain a maximum of 500 elements.
     * @param array<Windows81TrustedRootCertificate>|null $value Value to set for the rootCertificatesForServerValidation property.
    */
    public function setRootCertificatesForServerValidation(?array $value): void {
        $this->getBackingStore()->set('rootCertificatesForServerValidation', $value);
    }

    /**
     * Sets the trustedServerCertificateNames property value. Specify trusted server certificate names.
     * @param array<string>|null $value Value to set for the trustedServerCertificateNames property.
    */
    public function setTrustedServerCertificateNames(?array $value): void {
        $this->getBackingStore()->set('trustedServerCertificateNames', $value);
    }

    /**
     * Sets the userBasedVirtualLan property value. Specifiy whether to change the virtual LAN used by the device based on the user’s credentials. Cannot be used when NetworkSingleSignOnType is set to ​Disabled.
     * @param bool|null $value Value to set for the userBasedVirtualLan property.
    */
    public function setUserBasedVirtualLan(?bool $value): void {
        $this->getBackingStore()->set('userBasedVirtualLan', $value);
    }

}
