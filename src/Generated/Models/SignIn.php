<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class SignIn extends Entity implements Parsable 
{
    /**
     * Instantiates a new SignIn and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SignIn
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SignIn {
        return new SignIn();
    }

    /**
     * Gets the appDisplayName property value. The application name displayed in the Microsoft Entra admin center.  Supports $filter (eq, startsWith).
     * @return string|null
    */
    public function getAppDisplayName(): ?string {
        $val = $this->getBackingStore()->get('appDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appDisplayName'");
    }

    /**
     * Gets the appId property value. The application identifier in Microsoft Entra ID.  Supports $filter (eq).
     * @return string|null
    */
    public function getAppId(): ?string {
        $val = $this->getBackingStore()->get('appId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appId'");
    }

    /**
     * Gets the appliedConditionalAccessPolicies property value. A list of conditional access policies that the corresponding sign-in activity triggers. Apps need more Conditional Access-related privileges to read the details of this property. For more information, see Viewing applied conditional access (CA) policies in sign-ins.
     * @return array<AppliedConditionalAccessPolicy>|null
    */
    public function getAppliedConditionalAccessPolicies(): ?array {
        $val = $this->getBackingStore()->get('appliedConditionalAccessPolicies');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AppliedConditionalAccessPolicy::class);
            /** @var array<AppliedConditionalAccessPolicy>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appliedConditionalAccessPolicies'");
    }

    /**
     * Gets the appliedEventListeners property value. Detailed information about the listeners, such as Azure Logic Apps and Azure Functions, which the corresponding events in the sign-in event triggered.
     * @return array<AppliedAuthenticationEventListener>|null
    */
    public function getAppliedEventListeners(): ?array {
        $val = $this->getBackingStore()->get('appliedEventListeners');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AppliedAuthenticationEventListener::class);
            /** @var array<AppliedAuthenticationEventListener>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appliedEventListeners'");
    }

    /**
     * Gets the appTokenProtectionStatus property value. The appTokenProtectionStatus property
     * @return TokenProtectionStatus|null
    */
    public function getAppTokenProtectionStatus(): ?TokenProtectionStatus {
        $val = $this->getBackingStore()->get('appTokenProtectionStatus');
        if (is_null($val) || $val instanceof TokenProtectionStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appTokenProtectionStatus'");
    }

    /**
     * Gets the authenticationAppDeviceDetails property value. Provides details about the app and device used during a Microsoft Entra authentication step.
     * @return AuthenticationAppDeviceDetails|null
    */
    public function getAuthenticationAppDeviceDetails(): ?AuthenticationAppDeviceDetails {
        $val = $this->getBackingStore()->get('authenticationAppDeviceDetails');
        if (is_null($val) || $val instanceof AuthenticationAppDeviceDetails) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authenticationAppDeviceDetails'");
    }

    /**
     * Gets the authenticationAppPolicyEvaluationDetails property value. Provides details of the Microsoft Entra policies applied to a user and client authentication app during an authentication step.
     * @return array<AuthenticationAppPolicyDetails>|null
    */
    public function getAuthenticationAppPolicyEvaluationDetails(): ?array {
        $val = $this->getBackingStore()->get('authenticationAppPolicyEvaluationDetails');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AuthenticationAppPolicyDetails::class);
            /** @var array<AuthenticationAppPolicyDetails>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authenticationAppPolicyEvaluationDetails'");
    }

    /**
     * Gets the authenticationContextClassReferences property value. Contains a collection of values that represent the conditional access authentication contexts applied to the sign-in.
     * @return array<AuthenticationContext>|null
    */
    public function getAuthenticationContextClassReferences(): ?array {
        $val = $this->getBackingStore()->get('authenticationContextClassReferences');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AuthenticationContext::class);
            /** @var array<AuthenticationContext>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authenticationContextClassReferences'");
    }

    /**
     * Gets the authenticationDetails property value. The result of the authentication attempt and more details on the authentication method.
     * @return array<AuthenticationDetail>|null
    */
    public function getAuthenticationDetails(): ?array {
        $val = $this->getBackingStore()->get('authenticationDetails');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AuthenticationDetail::class);
            /** @var array<AuthenticationDetail>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authenticationDetails'");
    }

    /**
     * Gets the authenticationMethodsUsed property value. The authentication methods used. Possible values: SMS, Authenticator App, App Verification code, Password, FIDO, PTA, or PHS.
     * @return array<string>|null
    */
    public function getAuthenticationMethodsUsed(): ?array {
        $val = $this->getBackingStore()->get('authenticationMethodsUsed');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authenticationMethodsUsed'");
    }

    /**
     * Gets the authenticationProcessingDetails property value. More authentication processing details, such as the agent name for  PTA and PHS, or a server or farm name for federated authentication.
     * @return array<KeyValue>|null
    */
    public function getAuthenticationProcessingDetails(): ?array {
        $val = $this->getBackingStore()->get('authenticationProcessingDetails');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, KeyValue::class);
            /** @var array<KeyValue>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authenticationProcessingDetails'");
    }

    /**
     * Gets the authenticationProtocol property value. Lists the protocol type or grant type used in the authentication. The possible values are: none, oAuth2, ropc, wsFederation, saml20, deviceCode, unknownFutureValue, authenticationTransfer, nativeAuth. Use none for all authentications that don't have a specific value in that list. You must use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: authenticationTransfer, nativeAuth.
     * @return ProtocolType|null
    */
    public function getAuthenticationProtocol(): ?ProtocolType {
        $val = $this->getBackingStore()->get('authenticationProtocol');
        if (is_null($val) || $val instanceof ProtocolType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authenticationProtocol'");
    }

    /**
     * Gets the authenticationRequirement property value. This holds the highest level of authentication needed through all the sign-in steps, for sign-in to succeed.  Supports $filter (eq, startsWith).
     * @return string|null
    */
    public function getAuthenticationRequirement(): ?string {
        $val = $this->getBackingStore()->get('authenticationRequirement');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authenticationRequirement'");
    }

    /**
     * Gets the authenticationRequirementPolicies property value. Sources of authentication requirement, such as conditional access, per-user MFA, identity protection, and security defaults.
     * @return array<AuthenticationRequirementPolicy>|null
    */
    public function getAuthenticationRequirementPolicies(): ?array {
        $val = $this->getBackingStore()->get('authenticationRequirementPolicies');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AuthenticationRequirementPolicy::class);
            /** @var array<AuthenticationRequirementPolicy>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authenticationRequirementPolicies'");
    }

    /**
     * Gets the autonomousSystemNumber property value. The Autonomous System Number (ASN) of the network used by the actor.
     * @return int|null
    */
    public function getAutonomousSystemNumber(): ?int {
        $val = $this->getBackingStore()->get('autonomousSystemNumber');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'autonomousSystemNumber'");
    }

    /**
     * Gets the azureResourceId property value. Contains a fully qualified Azure Resource Manager ID of an Azure resource accessed during the sign-in.
     * @return string|null
    */
    public function getAzureResourceId(): ?string {
        $val = $this->getBackingStore()->get('azureResourceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'azureResourceId'");
    }

    /**
     * Gets the clientAppUsed property value. The legacy client used for sign-in activity. For example: Browser, Exchange ActiveSync, Modern clients, IMAP, MAPI, SMTP, or POP.  Supports $filter (eq).
     * @return string|null
    */
    public function getClientAppUsed(): ?string {
        $val = $this->getBackingStore()->get('clientAppUsed');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'clientAppUsed'");
    }

    /**
     * Gets the clientCredentialType property value. Describes the credential type that a user client or service principal provided to Microsoft Entra ID to authenticate itself. You can review this property to track and eliminate less secure credential types or to watch for clients and service principals using anomalous credential types. The possible values are: none, clientSecret, clientAssertion, federatedIdentityCredential, managedIdentity, certificate, unknownFutureValue.
     * @return ClientCredentialType|null
    */
    public function getClientCredentialType(): ?ClientCredentialType {
        $val = $this->getBackingStore()->get('clientCredentialType');
        if (is_null($val) || $val instanceof ClientCredentialType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'clientCredentialType'");
    }

    /**
     * Gets the conditionalAccessAudiences property value. A list that indicates the audience that was evaluated by Conditional Access during a sign-in event.  Supports $filter (eq).
     * @return array<ConditionalAccessAudience>|null
    */
    public function getConditionalAccessAudiences(): ?array {
        $val = $this->getBackingStore()->get('conditionalAccessAudiences');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ConditionalAccessAudience::class);
            /** @var array<ConditionalAccessAudience>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'conditionalAccessAudiences'");
    }

    /**
     * Gets the conditionalAccessStatus property value. The status of the conditional access policy triggered. Possible values: success, failure, notApplied, or unknownFutureValue.  Supports $filter (eq).
     * @return ConditionalAccessStatus|null
    */
    public function getConditionalAccessStatus(): ?ConditionalAccessStatus {
        $val = $this->getBackingStore()->get('conditionalAccessStatus');
        if (is_null($val) || $val instanceof ConditionalAccessStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'conditionalAccessStatus'");
    }

    /**
     * Gets the correlationId property value. The identifier the client sends when sign-in is initiated. This is used for troubleshooting the corresponding sign-in activity when calling for support.  Supports $filter (eq).
     * @return string|null
    */
    public function getCorrelationId(): ?string {
        $val = $this->getBackingStore()->get('correlationId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'correlationId'");
    }

    /**
     * Gets the createdDateTime property value. The date and time the sign-in was initiated. The Timestamp type is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.  Supports $orderby, $filter (eq, le, and ge).
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the crossTenantAccessType property value. Describes the type of cross-tenant access used by the actor to access the resource. Possible values are: none, b2bCollaboration, b2bDirectConnect, microsoftSupport, serviceProvider, unknownFutureValue, passthrough. Also, you must use the Prefer: include-unknown-enum-members request header to get the following value or values in this evolvable enum: passthrough. If the sign in didn't cross tenant boundaries, the value is none.
     * @return SignInAccessType|null
    */
    public function getCrossTenantAccessType(): ?SignInAccessType {
        $val = $this->getBackingStore()->get('crossTenantAccessType');
        if (is_null($val) || $val instanceof SignInAccessType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'crossTenantAccessType'");
    }

    /**
     * Gets the deviceDetail property value. The device information from where the sign-in occurred. Includes information such as deviceId, OS, and browser.  Supports $filter (eq, startsWith) on browser and operatingSystem properties.
     * @return DeviceDetail|null
    */
    public function getDeviceDetail(): ?DeviceDetail {
        $val = $this->getBackingStore()->get('deviceDetail');
        if (is_null($val) || $val instanceof DeviceDetail) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceDetail'");
    }

    /**
     * Gets the federatedCredentialId property value. Contains the identifier of an application's federated identity credential, if a federated identity credential was used to sign in.
     * @return string|null
    */
    public function getFederatedCredentialId(): ?string {
        $val = $this->getBackingStore()->get('federatedCredentialId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'federatedCredentialId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appDisplayName' => fn(ParseNode $n) => $o->setAppDisplayName($n->getStringValue()),
            'appId' => fn(ParseNode $n) => $o->setAppId($n->getStringValue()),
            'appliedConditionalAccessPolicies' => fn(ParseNode $n) => $o->setAppliedConditionalAccessPolicies($n->getCollectionOfObjectValues([AppliedConditionalAccessPolicy::class, 'createFromDiscriminatorValue'])),
            'appliedEventListeners' => fn(ParseNode $n) => $o->setAppliedEventListeners($n->getCollectionOfObjectValues([AppliedAuthenticationEventListener::class, 'createFromDiscriminatorValue'])),
            'appTokenProtectionStatus' => fn(ParseNode $n) => $o->setAppTokenProtectionStatus($n->getEnumValue(TokenProtectionStatus::class)),
            'authenticationAppDeviceDetails' => fn(ParseNode $n) => $o->setAuthenticationAppDeviceDetails($n->getObjectValue([AuthenticationAppDeviceDetails::class, 'createFromDiscriminatorValue'])),
            'authenticationAppPolicyEvaluationDetails' => fn(ParseNode $n) => $o->setAuthenticationAppPolicyEvaluationDetails($n->getCollectionOfObjectValues([AuthenticationAppPolicyDetails::class, 'createFromDiscriminatorValue'])),
            'authenticationContextClassReferences' => fn(ParseNode $n) => $o->setAuthenticationContextClassReferences($n->getCollectionOfObjectValues([AuthenticationContext::class, 'createFromDiscriminatorValue'])),
            'authenticationDetails' => fn(ParseNode $n) => $o->setAuthenticationDetails($n->getCollectionOfObjectValues([AuthenticationDetail::class, 'createFromDiscriminatorValue'])),
            'authenticationMethodsUsed' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAuthenticationMethodsUsed($val);
            },
            'authenticationProcessingDetails' => fn(ParseNode $n) => $o->setAuthenticationProcessingDetails($n->getCollectionOfObjectValues([KeyValue::class, 'createFromDiscriminatorValue'])),
            'authenticationProtocol' => fn(ParseNode $n) => $o->setAuthenticationProtocol($n->getEnumValue(ProtocolType::class)),
            'authenticationRequirement' => fn(ParseNode $n) => $o->setAuthenticationRequirement($n->getStringValue()),
            'authenticationRequirementPolicies' => fn(ParseNode $n) => $o->setAuthenticationRequirementPolicies($n->getCollectionOfObjectValues([AuthenticationRequirementPolicy::class, 'createFromDiscriminatorValue'])),
            'autonomousSystemNumber' => fn(ParseNode $n) => $o->setAutonomousSystemNumber($n->getIntegerValue()),
            'azureResourceId' => fn(ParseNode $n) => $o->setAzureResourceId($n->getStringValue()),
            'clientAppUsed' => fn(ParseNode $n) => $o->setClientAppUsed($n->getStringValue()),
            'clientCredentialType' => fn(ParseNode $n) => $o->setClientCredentialType($n->getEnumValue(ClientCredentialType::class)),
            'conditionalAccessAudiences' => fn(ParseNode $n) => $o->setConditionalAccessAudiences($n->getCollectionOfObjectValues([ConditionalAccessAudience::class, 'createFromDiscriminatorValue'])),
            'conditionalAccessStatus' => fn(ParseNode $n) => $o->setConditionalAccessStatus($n->getEnumValue(ConditionalAccessStatus::class)),
            'correlationId' => fn(ParseNode $n) => $o->setCorrelationId($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'crossTenantAccessType' => fn(ParseNode $n) => $o->setCrossTenantAccessType($n->getEnumValue(SignInAccessType::class)),
            'deviceDetail' => fn(ParseNode $n) => $o->setDeviceDetail($n->getObjectValue([DeviceDetail::class, 'createFromDiscriminatorValue'])),
            'federatedCredentialId' => fn(ParseNode $n) => $o->setFederatedCredentialId($n->getStringValue()),
            'flaggedForReview' => fn(ParseNode $n) => $o->setFlaggedForReview($n->getBooleanValue()),
            'globalSecureAccessIpAddress' => fn(ParseNode $n) => $o->setGlobalSecureAccessIpAddress($n->getStringValue()),
            'homeTenantId' => fn(ParseNode $n) => $o->setHomeTenantId($n->getStringValue()),
            'homeTenantName' => fn(ParseNode $n) => $o->setHomeTenantName($n->getStringValue()),
            'incomingTokenType' => fn(ParseNode $n) => $o->setIncomingTokenType($n->getEnumValue(IncomingTokenType::class)),
            'ipAddress' => fn(ParseNode $n) => $o->setIpAddress($n->getStringValue()),
            'ipAddressFromResourceProvider' => fn(ParseNode $n) => $o->setIpAddressFromResourceProvider($n->getStringValue()),
            'isInteractive' => fn(ParseNode $n) => $o->setIsInteractive($n->getBooleanValue()),
            'isTenantRestricted' => fn(ParseNode $n) => $o->setIsTenantRestricted($n->getBooleanValue()),
            'isThroughGlobalSecureAccess' => fn(ParseNode $n) => $o->setIsThroughGlobalSecureAccess($n->getBooleanValue()),
            'location' => fn(ParseNode $n) => $o->setLocation($n->getObjectValue([SignInLocation::class, 'createFromDiscriminatorValue'])),
            'managedServiceIdentity' => fn(ParseNode $n) => $o->setManagedServiceIdentity($n->getObjectValue([ManagedIdentity::class, 'createFromDiscriminatorValue'])),
            'mfaDetail' => fn(ParseNode $n) => $o->setMfaDetail($n->getObjectValue([MfaDetail::class, 'createFromDiscriminatorValue'])),
            'networkLocationDetails' => fn(ParseNode $n) => $o->setNetworkLocationDetails($n->getCollectionOfObjectValues([NetworkLocationDetail::class, 'createFromDiscriminatorValue'])),
            'originalRequestId' => fn(ParseNode $n) => $o->setOriginalRequestId($n->getStringValue()),
            'originalTransferMethod' => fn(ParseNode $n) => $o->setOriginalTransferMethod($n->getEnumValue(OriginalTransferMethods::class)),
            'privateLinkDetails' => fn(ParseNode $n) => $o->setPrivateLinkDetails($n->getObjectValue([PrivateLinkDetails::class, 'createFromDiscriminatorValue'])),
            'processingTimeInMilliseconds' => fn(ParseNode $n) => $o->setProcessingTimeInMilliseconds($n->getIntegerValue()),
            'resourceDisplayName' => fn(ParseNode $n) => $o->setResourceDisplayName($n->getStringValue()),
            'resourceId' => fn(ParseNode $n) => $o->setResourceId($n->getStringValue()),
            'resourceServicePrincipalId' => fn(ParseNode $n) => $o->setResourceServicePrincipalId($n->getStringValue()),
            'resourceTenantId' => fn(ParseNode $n) => $o->setResourceTenantId($n->getStringValue()),
            'riskDetail' => fn(ParseNode $n) => $o->setRiskDetail($n->getEnumValue(RiskDetail::class)),
            'riskEventTypes_v2' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setRiskEventTypesV2($val);
            },
            'riskLevelAggregated' => fn(ParseNode $n) => $o->setRiskLevelAggregated($n->getEnumValue(RiskLevel::class)),
            'riskLevelDuringSignIn' => fn(ParseNode $n) => $o->setRiskLevelDuringSignIn($n->getEnumValue(RiskLevel::class)),
            'riskState' => fn(ParseNode $n) => $o->setRiskState($n->getEnumValue(RiskState::class)),
            'servicePrincipalCredentialKeyId' => fn(ParseNode $n) => $o->setServicePrincipalCredentialKeyId($n->getStringValue()),
            'servicePrincipalCredentialThumbprint' => fn(ParseNode $n) => $o->setServicePrincipalCredentialThumbprint($n->getStringValue()),
            'servicePrincipalId' => fn(ParseNode $n) => $o->setServicePrincipalId($n->getStringValue()),
            'servicePrincipalName' => fn(ParseNode $n) => $o->setServicePrincipalName($n->getStringValue()),
            'sessionLifetimePolicies' => fn(ParseNode $n) => $o->setSessionLifetimePolicies($n->getCollectionOfObjectValues([SessionLifetimePolicy::class, 'createFromDiscriminatorValue'])),
            'signInEventTypes' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSignInEventTypes($val);
            },
            'signInIdentifier' => fn(ParseNode $n) => $o->setSignInIdentifier($n->getStringValue()),
            'signInIdentifierType' => fn(ParseNode $n) => $o->setSignInIdentifierType($n->getEnumValue(SignInIdentifierType::class)),
            'signInTokenProtectionStatus' => fn(ParseNode $n) => $o->setSignInTokenProtectionStatus($n->getEnumValue(TokenProtectionStatus::class)),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getObjectValue([SignInStatus::class, 'createFromDiscriminatorValue'])),
            'tokenIssuerName' => fn(ParseNode $n) => $o->setTokenIssuerName($n->getStringValue()),
            'tokenIssuerType' => fn(ParseNode $n) => $o->setTokenIssuerType($n->getEnumValue(TokenIssuerType::class)),
            'uniqueTokenIdentifier' => fn(ParseNode $n) => $o->setUniqueTokenIdentifier($n->getStringValue()),
            'userAgent' => fn(ParseNode $n) => $o->setUserAgent($n->getStringValue()),
            'userDisplayName' => fn(ParseNode $n) => $o->setUserDisplayName($n->getStringValue()),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
            'userType' => fn(ParseNode $n) => $o->setUserType($n->getEnumValue(SignInUserType::class)),
        ]);
    }

    /**
     * Gets the flaggedForReview property value. During a failed sign-in, a user can select a button in the Azure portal to mark the failed event for tenant admins. If a user selects the button to flag the failed sign-in, this value is true.
     * @return bool|null
    */
    public function getFlaggedForReview(): ?bool {
        $val = $this->getBackingStore()->get('flaggedForReview');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'flaggedForReview'");
    }

    /**
     * Gets the globalSecureAccessIpAddress property value. The Global Secure Access IP address that the sign-in was initiated from.
     * @return string|null
    */
    public function getGlobalSecureAccessIpAddress(): ?string {
        $val = $this->getBackingStore()->get('globalSecureAccessIpAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'globalSecureAccessIpAddress'");
    }

    /**
     * Gets the homeTenantId property value. The tenant identifier of the user initiating the sign-in. Not applicable in Managed Identity or service principal sign ins.
     * @return string|null
    */
    public function getHomeTenantId(): ?string {
        $val = $this->getBackingStore()->get('homeTenantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'homeTenantId'");
    }

    /**
     * Gets the homeTenantName property value. For user sign ins, the identifier of the tenant that the user is a member of. Only populated in cases where the home tenant has provided affirmative consent to Microsoft Entra ID to show the tenant content.
     * @return string|null
    */
    public function getHomeTenantName(): ?string {
        $val = $this->getBackingStore()->get('homeTenantName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'homeTenantName'");
    }

    /**
     * Gets the incomingTokenType property value. Indicates the token types that were presented to Microsoft Entra ID to authenticate the actor in the sign in. The possible values are: none, primaryRefreshToken, saml11, saml20, unknownFutureValue, remoteDesktopToken.  NOTE Microsoft Entra ID might have also used token types not listed in this enum type to authenticate the actor. Don't infer the lack of a token if it isn't one of the types listed. Also, you must use the Prefer: include-unknown-enum-members request header to get the following value or values in this evolvable enum: remoteDesktopToken.
     * @return IncomingTokenType|null
    */
    public function getIncomingTokenType(): ?IncomingTokenType {
        $val = $this->getBackingStore()->get('incomingTokenType');
        if (is_null($val) || $val instanceof IncomingTokenType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'incomingTokenType'");
    }

    /**
     * Gets the ipAddress property value. The IP address of the client from where the sign-in occurred.  Supports $filter (eq, startsWith).
     * @return string|null
    */
    public function getIpAddress(): ?string {
        $val = $this->getBackingStore()->get('ipAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ipAddress'");
    }

    /**
     * Gets the ipAddressFromResourceProvider property value. The IP address a user used to reach a resource provider, used to determine Conditional Access compliance for some policies. For example, when a user interacts with Exchange Online, the IP address that Microsoft Exchange receives from the user can be recorded here. This value is often null.
     * @return string|null
    */
    public function getIpAddressFromResourceProvider(): ?string {
        $val = $this->getBackingStore()->get('ipAddressFromResourceProvider');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ipAddressFromResourceProvider'");
    }

    /**
     * Gets the isInteractive property value. Indicates whether a user sign in is interactive. In interactive sign in, the user provides an authentication factor to Microsoft Entra ID. These factors include passwords, responses to MFA challenges, biometric factors, or QR codes that a user provides to Microsoft Entra ID or an associated app. In non-interactive sign in, the user doesn't provide an authentication factor. Instead, the client app uses a token or code to authenticate or access a resource on behalf of a user. Non-interactive sign ins are commonly used for a client to sign in on a user's behalf in a process transparent to the user.
     * @return bool|null
    */
    public function getIsInteractive(): ?bool {
        $val = $this->getBackingStore()->get('isInteractive');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isInteractive'");
    }

    /**
     * Gets the isTenantRestricted property value. Shows whether the sign in event was subject to a Microsoft Entra tenant restriction policy.
     * @return bool|null
    */
    public function getIsTenantRestricted(): ?bool {
        $val = $this->getBackingStore()->get('isTenantRestricted');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isTenantRestricted'");
    }

    /**
     * Gets the isThroughGlobalSecureAccess property value. Indicates whether a user came through Global Secure Access service.
     * @return bool|null
    */
    public function getIsThroughGlobalSecureAccess(): ?bool {
        $val = $this->getBackingStore()->get('isThroughGlobalSecureAccess');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isThroughGlobalSecureAccess'");
    }

    /**
     * Gets the location property value. The city, state, and two letter country code from where the sign-in occurred.  Supports $filter (eq, startsWith) on city, state, and countryOrRegion properties.
     * @return SignInLocation|null
    */
    public function getLocation(): ?SignInLocation {
        $val = $this->getBackingStore()->get('location');
        if (is_null($val) || $val instanceof SignInLocation) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'location'");
    }

    /**
     * Gets the managedServiceIdentity property value. Contains information about the managed identity used for the sign in, including its type, associated Azure Resource Manager (ARM) resource ID, and federated token information.
     * @return ManagedIdentity|null
    */
    public function getManagedServiceIdentity(): ?ManagedIdentity {
        $val = $this->getBackingStore()->get('managedServiceIdentity');
        if (is_null($val) || $val instanceof ManagedIdentity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedServiceIdentity'");
    }

    /**
     * Gets the mfaDetail property value. The mfaDetail property
     * @return MfaDetail|null
    */
    public function getMfaDetail(): ?MfaDetail {
        $val = $this->getBackingStore()->get('mfaDetail');
        if (is_null($val) || $val instanceof MfaDetail) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mfaDetail'");
    }

    /**
     * Gets the networkLocationDetails property value. The network location details including the type of network used and its names.
     * @return array<NetworkLocationDetail>|null
    */
    public function getNetworkLocationDetails(): ?array {
        $val = $this->getBackingStore()->get('networkLocationDetails');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, NetworkLocationDetail::class);
            /** @var array<NetworkLocationDetail>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'networkLocationDetails'");
    }

    /**
     * Gets the originalRequestId property value. The request identifier of the first request in the authentication sequence.  Supports $filter (eq).
     * @return string|null
    */
    public function getOriginalRequestId(): ?string {
        $val = $this->getBackingStore()->get('originalRequestId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'originalRequestId'");
    }

    /**
     * Gets the originalTransferMethod property value. Transfer method used to initiate a session throughout all subsequent request. The possible values are: none, deviceCodeFlow, authenticationTransfer, unknownFutureValue.
     * @return OriginalTransferMethods|null
    */
    public function getOriginalTransferMethod(): ?OriginalTransferMethods {
        $val = $this->getBackingStore()->get('originalTransferMethod');
        if (is_null($val) || $val instanceof OriginalTransferMethods) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'originalTransferMethod'");
    }

    /**
     * Gets the privateLinkDetails property value. Contains information about the Microsoft Entra Private Link policy that is associated with the sign in event.
     * @return PrivateLinkDetails|null
    */
    public function getPrivateLinkDetails(): ?PrivateLinkDetails {
        $val = $this->getBackingStore()->get('privateLinkDetails');
        if (is_null($val) || $val instanceof PrivateLinkDetails) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'privateLinkDetails'");
    }

    /**
     * Gets the processingTimeInMilliseconds property value. The request processing time in milliseconds in AD STS.
     * @return int|null
    */
    public function getProcessingTimeInMilliseconds(): ?int {
        $val = $this->getBackingStore()->get('processingTimeInMilliseconds');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'processingTimeInMilliseconds'");
    }

    /**
     * Gets the resourceDisplayName property value. The name of the resource that the user signed in to.  Supports $filter (eq).
     * @return string|null
    */
    public function getResourceDisplayName(): ?string {
        $val = $this->getBackingStore()->get('resourceDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceDisplayName'");
    }

    /**
     * Gets the resourceId property value. The identifier of the resource that the user signed in to.  Supports $filter (eq).
     * @return string|null
    */
    public function getResourceId(): ?string {
        $val = $this->getBackingStore()->get('resourceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceId'");
    }

    /**
     * Gets the resourceServicePrincipalId property value. The identifier of the service principal representing the target resource in the sign-in event.
     * @return string|null
    */
    public function getResourceServicePrincipalId(): ?string {
        $val = $this->getBackingStore()->get('resourceServicePrincipalId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceServicePrincipalId'");
    }

    /**
     * Gets the resourceTenantId property value. The tenant identifier of the resource referenced in the sign in.
     * @return string|null
    */
    public function getResourceTenantId(): ?string {
        $val = $this->getBackingStore()->get('resourceTenantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceTenantId'");
    }

    /**
     * Gets the riskDetail property value. The reason behind a specific state of a risky user, sign-in, or a risk event. The possible values are none, adminGeneratedTemporaryPassword, userPerformedSecuredPasswordChange, userPerformedSecuredPasswordReset, adminConfirmedSigninSafe, aiConfirmedSigninSafe, userPassedMFADrivenByRiskBasedPolicy, adminDismissedAllRiskForUser, adminConfirmedSigninCompromised, hidden, adminConfirmedUserCompromised, unknownFutureValue, adminConfirmedServicePrincipalCompromised, adminDismissedAllRiskForServicePrincipal, m365DAdminDismissedDetection, userChangedPasswordOnPremises, adminDismissedRiskForSignIn, adminConfirmedAccountSafe.  You must use the Prefer: include-unknown-enum-members request header to get the following value or values in this evolvable enum: adminConfirmedServicePrincipalCompromised, adminDismissedAllRiskForServicePrincipal, m365DAdminDismissedDetection, userChangedPasswordOnPremises, adminDismissedRiskForSignIn, adminConfirmedAccountSafe.The value none means that Microsoft Entra risk detection hasn't flagged the user or the sign-in as a risky event so far.  Supports $filter (eq). Note: Details for this property are only available for Microsoft Entra ID P2 customers. All other customers are returned hidden.
     * @return RiskDetail|null
    */
    public function getRiskDetail(): ?RiskDetail {
        $val = $this->getBackingStore()->get('riskDetail');
        if (is_null($val) || $val instanceof RiskDetail) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'riskDetail'");
    }

    /**
     * Gets the riskEventTypes_v2 property value. The list of risk event types associated with the sign-in. Possible values: unlikelyTravel, anonymizedIPAddress, maliciousIPAddress, unfamiliarFeatures, malwareInfectedIPAddress, suspiciousIPAddress, leakedCredentials, investigationsThreatIntelligence,  generic, or unknownFutureValue.  Supports $filter (eq, startsWith).
     * @return array<string>|null
    */
    public function getRiskEventTypesV2(): ?array {
        $val = $this->getBackingStore()->get('riskEventTypes_v2');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'riskEventTypes_v2'");
    }

    /**
     * Gets the riskLevelAggregated property value. The aggregated risk level. Possible values: none, low, medium, high, hidden, or unknownFutureValue. The value hidden means the user or sign-in wasn't enabled for Microsoft Entra ID Protection.  Supports $filter (eq). Note: Details for this property are only available for Microsoft Entra ID P2 customers. All other customers are returned hidden.
     * @return RiskLevel|null
    */
    public function getRiskLevelAggregated(): ?RiskLevel {
        $val = $this->getBackingStore()->get('riskLevelAggregated');
        if (is_null($val) || $val instanceof RiskLevel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'riskLevelAggregated'");
    }

    /**
     * Gets the riskLevelDuringSignIn property value. The risk level during sign-in. Possible values: none, low, medium, high, hidden, or unknownFutureValue. The value hidden means the user or sign-in wasn't enabled for Microsoft Entra ID Protection.  Supports $filter (eq). Note: Details for this property are only available for Microsoft Entra ID P2 customers. All other customers are returned hidden.
     * @return RiskLevel|null
    */
    public function getRiskLevelDuringSignIn(): ?RiskLevel {
        $val = $this->getBackingStore()->get('riskLevelDuringSignIn');
        if (is_null($val) || $val instanceof RiskLevel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'riskLevelDuringSignIn'");
    }

    /**
     * Gets the riskState property value. The risk state of a risky user, sign-in, or a risk event. Possible values: none, confirmedSafe, remediated, dismissed, atRisk, confirmedCompromised, or unknownFutureValue.  Supports $filter (eq).
     * @return RiskState|null
    */
    public function getRiskState(): ?RiskState {
        $val = $this->getBackingStore()->get('riskState');
        if (is_null($val) || $val instanceof RiskState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'riskState'");
    }

    /**
     * Gets the servicePrincipalCredentialKeyId property value. The unique identifier of the key credential used by the service principal to authenticate.
     * @return string|null
    */
    public function getServicePrincipalCredentialKeyId(): ?string {
        $val = $this->getBackingStore()->get('servicePrincipalCredentialKeyId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'servicePrincipalCredentialKeyId'");
    }

    /**
     * Gets the servicePrincipalCredentialThumbprint property value. The certificate thumbprint of the certificate used by the service principal to authenticate.
     * @return string|null
    */
    public function getServicePrincipalCredentialThumbprint(): ?string {
        $val = $this->getBackingStore()->get('servicePrincipalCredentialThumbprint');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'servicePrincipalCredentialThumbprint'");
    }

    /**
     * Gets the servicePrincipalId property value. The application identifier used for sign-in. This field is populated when you're signing in using an application.  Supports $filter (eq, startsWith).
     * @return string|null
    */
    public function getServicePrincipalId(): ?string {
        $val = $this->getBackingStore()->get('servicePrincipalId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'servicePrincipalId'");
    }

    /**
     * Gets the servicePrincipalName property value. The application name used for sign-in. This field is populated when you're signing in using an application.  Supports $filter (eq, startsWith).
     * @return string|null
    */
    public function getServicePrincipalName(): ?string {
        $val = $this->getBackingStore()->get('servicePrincipalName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'servicePrincipalName'");
    }

    /**
     * Gets the sessionLifetimePolicies property value. Any conditional access session management policies that were applied during the sign-in event.
     * @return array<SessionLifetimePolicy>|null
    */
    public function getSessionLifetimePolicies(): ?array {
        $val = $this->getBackingStore()->get('sessionLifetimePolicies');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SessionLifetimePolicy::class);
            /** @var array<SessionLifetimePolicy>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sessionLifetimePolicies'");
    }

    /**
     * Gets the signInEventTypes property value. Indicates the category of sign in that the event represents. For user sign ins, the category can be interactiveUser or nonInteractiveUser and corresponds to the value for the isInteractive property on the signin resource. For managed identity sign ins, the category is managedIdentity. For service principal sign-ins, the category is servicePrincipal. Possible values are: interactiveUser, nonInteractiveUser, servicePrincipal, managedIdentity, unknownFutureValue.  Supports $filter (eq, ne).
     * @return array<string>|null
    */
    public function getSignInEventTypes(): ?array {
        $val = $this->getBackingStore()->get('signInEventTypes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'signInEventTypes'");
    }

    /**
     * Gets the signInIdentifier property value. The identification that the user provided to sign in. It can be the userPrincipalName, but is also populated when a user signs in using other identifiers.
     * @return string|null
    */
    public function getSignInIdentifier(): ?string {
        $val = $this->getBackingStore()->get('signInIdentifier');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'signInIdentifier'");
    }

    /**
     * Gets the signInIdentifierType property value. The type of sign in identifier. Possible values are: userPrincipalName, phoneNumber, proxyAddress, qrCode, onPremisesUserPrincipalName, unknownFutureValue.
     * @return SignInIdentifierType|null
    */
    public function getSignInIdentifierType(): ?SignInIdentifierType {
        $val = $this->getBackingStore()->get('signInIdentifierType');
        if (is_null($val) || $val instanceof SignInIdentifierType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'signInIdentifierType'");
    }

    /**
     * Gets the signInTokenProtectionStatus property value. Token protection creates a cryptographically secure tie between the token and the device it's issued to. This field indicates whether the signin token was bound to the device or not. The possible values are: none, bound, unbound, unknownFutureValue.
     * @return TokenProtectionStatus|null
    */
    public function getSignInTokenProtectionStatus(): ?TokenProtectionStatus {
        $val = $this->getBackingStore()->get('signInTokenProtectionStatus');
        if (is_null($val) || $val instanceof TokenProtectionStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'signInTokenProtectionStatus'");
    }

    /**
     * Gets the status property value. The sign-in status. Includes the error code and description of the error (for a sign-in failure).  Supports $filter (eq) on errorCode property.
     * @return SignInStatus|null
    */
    public function getStatus(): ?SignInStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof SignInStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the tokenIssuerName property value. The name of the identity provider. For example, sts.microsoft.com.  Supports $filter (eq).
     * @return string|null
    */
    public function getTokenIssuerName(): ?string {
        $val = $this->getBackingStore()->get('tokenIssuerName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tokenIssuerName'");
    }

    /**
     * Gets the tokenIssuerType property value. The type of identity provider. The possible values are: AzureAD, ADFederationServices, UnknownFutureValue, AzureADBackupAuth, ADFederationServicesMFAAdapter, NPSExtension. You must use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: AzureADBackupAuth , ADFederationServicesMFAAdapter , NPSExtension.
     * @return TokenIssuerType|null
    */
    public function getTokenIssuerType(): ?TokenIssuerType {
        $val = $this->getBackingStore()->get('tokenIssuerType');
        if (is_null($val) || $val instanceof TokenIssuerType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tokenIssuerType'");
    }

    /**
     * Gets the uniqueTokenIdentifier property value. A unique base64 encoded request identifier used to track tokens issued by Microsoft Entra ID as they're redeemed at resource providers.
     * @return string|null
    */
    public function getUniqueTokenIdentifier(): ?string {
        $val = $this->getBackingStore()->get('uniqueTokenIdentifier');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'uniqueTokenIdentifier'");
    }

    /**
     * Gets the userAgent property value. The user agent information related to sign-in.  Supports $filter (eq, startsWith).
     * @return string|null
    */
    public function getUserAgent(): ?string {
        $val = $this->getBackingStore()->get('userAgent');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userAgent'");
    }

    /**
     * Gets the userDisplayName property value. The display name of the user.  Supports $filter (eq, startsWith).
     * @return string|null
    */
    public function getUserDisplayName(): ?string {
        $val = $this->getBackingStore()->get('userDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userDisplayName'");
    }

    /**
     * Gets the userId property value. The identifier of the user.  Supports $filter (eq).
     * @return string|null
    */
    public function getUserId(): ?string {
        $val = $this->getBackingStore()->get('userId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userId'");
    }

    /**
     * Gets the userPrincipalName property value. The UPN of the user.  Supports $filter (eq, startsWith).
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        $val = $this->getBackingStore()->get('userPrincipalName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userPrincipalName'");
    }

    /**
     * Gets the userType property value. Identifies whether the user is a member or guest in the tenant. Possible values are: member, guest, unknownFutureValue.
     * @return SignInUserType|null
    */
    public function getUserType(): ?SignInUserType {
        $val = $this->getBackingStore()->get('userType');
        if (is_null($val) || $val instanceof SignInUserType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('appDisplayName', $this->getAppDisplayName());
        $writer->writeStringValue('appId', $this->getAppId());
        $writer->writeCollectionOfObjectValues('appliedConditionalAccessPolicies', $this->getAppliedConditionalAccessPolicies());
        $writer->writeCollectionOfObjectValues('appliedEventListeners', $this->getAppliedEventListeners());
        $writer->writeEnumValue('appTokenProtectionStatus', $this->getAppTokenProtectionStatus());
        $writer->writeObjectValue('authenticationAppDeviceDetails', $this->getAuthenticationAppDeviceDetails());
        $writer->writeCollectionOfObjectValues('authenticationAppPolicyEvaluationDetails', $this->getAuthenticationAppPolicyEvaluationDetails());
        $writer->writeCollectionOfObjectValues('authenticationContextClassReferences', $this->getAuthenticationContextClassReferences());
        $writer->writeCollectionOfObjectValues('authenticationDetails', $this->getAuthenticationDetails());
        $writer->writeCollectionOfPrimitiveValues('authenticationMethodsUsed', $this->getAuthenticationMethodsUsed());
        $writer->writeCollectionOfObjectValues('authenticationProcessingDetails', $this->getAuthenticationProcessingDetails());
        $writer->writeEnumValue('authenticationProtocol', $this->getAuthenticationProtocol());
        $writer->writeStringValue('authenticationRequirement', $this->getAuthenticationRequirement());
        $writer->writeCollectionOfObjectValues('authenticationRequirementPolicies', $this->getAuthenticationRequirementPolicies());
        $writer->writeIntegerValue('autonomousSystemNumber', $this->getAutonomousSystemNumber());
        $writer->writeStringValue('azureResourceId', $this->getAzureResourceId());
        $writer->writeStringValue('clientAppUsed', $this->getClientAppUsed());
        $writer->writeEnumValue('clientCredentialType', $this->getClientCredentialType());
        $writer->writeCollectionOfObjectValues('conditionalAccessAudiences', $this->getConditionalAccessAudiences());
        $writer->writeEnumValue('conditionalAccessStatus', $this->getConditionalAccessStatus());
        $writer->writeStringValue('correlationId', $this->getCorrelationId());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeEnumValue('crossTenantAccessType', $this->getCrossTenantAccessType());
        $writer->writeObjectValue('deviceDetail', $this->getDeviceDetail());
        $writer->writeStringValue('federatedCredentialId', $this->getFederatedCredentialId());
        $writer->writeBooleanValue('flaggedForReview', $this->getFlaggedForReview());
        $writer->writeStringValue('globalSecureAccessIpAddress', $this->getGlobalSecureAccessIpAddress());
        $writer->writeStringValue('homeTenantId', $this->getHomeTenantId());
        $writer->writeStringValue('homeTenantName', $this->getHomeTenantName());
        $writer->writeEnumValue('incomingTokenType', $this->getIncomingTokenType());
        $writer->writeStringValue('ipAddress', $this->getIpAddress());
        $writer->writeStringValue('ipAddressFromResourceProvider', $this->getIpAddressFromResourceProvider());
        $writer->writeBooleanValue('isInteractive', $this->getIsInteractive());
        $writer->writeBooleanValue('isTenantRestricted', $this->getIsTenantRestricted());
        $writer->writeBooleanValue('isThroughGlobalSecureAccess', $this->getIsThroughGlobalSecureAccess());
        $writer->writeObjectValue('location', $this->getLocation());
        $writer->writeObjectValue('managedServiceIdentity', $this->getManagedServiceIdentity());
        $writer->writeObjectValue('mfaDetail', $this->getMfaDetail());
        $writer->writeCollectionOfObjectValues('networkLocationDetails', $this->getNetworkLocationDetails());
        $writer->writeStringValue('originalRequestId', $this->getOriginalRequestId());
        $writer->writeEnumValue('originalTransferMethod', $this->getOriginalTransferMethod());
        $writer->writeObjectValue('privateLinkDetails', $this->getPrivateLinkDetails());
        $writer->writeIntegerValue('processingTimeInMilliseconds', $this->getProcessingTimeInMilliseconds());
        $writer->writeStringValue('resourceDisplayName', $this->getResourceDisplayName());
        $writer->writeStringValue('resourceId', $this->getResourceId());
        $writer->writeStringValue('resourceServicePrincipalId', $this->getResourceServicePrincipalId());
        $writer->writeStringValue('resourceTenantId', $this->getResourceTenantId());
        $writer->writeEnumValue('riskDetail', $this->getRiskDetail());
        $writer->writeCollectionOfPrimitiveValues('riskEventTypes_v2', $this->getRiskEventTypesV2());
        $writer->writeEnumValue('riskLevelAggregated', $this->getRiskLevelAggregated());
        $writer->writeEnumValue('riskLevelDuringSignIn', $this->getRiskLevelDuringSignIn());
        $writer->writeEnumValue('riskState', $this->getRiskState());
        $writer->writeStringValue('servicePrincipalCredentialKeyId', $this->getServicePrincipalCredentialKeyId());
        $writer->writeStringValue('servicePrincipalCredentialThumbprint', $this->getServicePrincipalCredentialThumbprint());
        $writer->writeStringValue('servicePrincipalId', $this->getServicePrincipalId());
        $writer->writeStringValue('servicePrincipalName', $this->getServicePrincipalName());
        $writer->writeCollectionOfObjectValues('sessionLifetimePolicies', $this->getSessionLifetimePolicies());
        $writer->writeCollectionOfPrimitiveValues('signInEventTypes', $this->getSignInEventTypes());
        $writer->writeStringValue('signInIdentifier', $this->getSignInIdentifier());
        $writer->writeEnumValue('signInIdentifierType', $this->getSignInIdentifierType());
        $writer->writeEnumValue('signInTokenProtectionStatus', $this->getSignInTokenProtectionStatus());
        $writer->writeObjectValue('status', $this->getStatus());
        $writer->writeStringValue('tokenIssuerName', $this->getTokenIssuerName());
        $writer->writeEnumValue('tokenIssuerType', $this->getTokenIssuerType());
        $writer->writeStringValue('uniqueTokenIdentifier', $this->getUniqueTokenIdentifier());
        $writer->writeStringValue('userAgent', $this->getUserAgent());
        $writer->writeStringValue('userDisplayName', $this->getUserDisplayName());
        $writer->writeStringValue('userId', $this->getUserId());
        $writer->writeStringValue('userPrincipalName', $this->getUserPrincipalName());
        $writer->writeEnumValue('userType', $this->getUserType());
    }

    /**
     * Sets the appDisplayName property value. The application name displayed in the Microsoft Entra admin center.  Supports $filter (eq, startsWith).
     * @param string|null $value Value to set for the appDisplayName property.
    */
    public function setAppDisplayName(?string $value): void {
        $this->getBackingStore()->set('appDisplayName', $value);
    }

    /**
     * Sets the appId property value. The application identifier in Microsoft Entra ID.  Supports $filter (eq).
     * @param string|null $value Value to set for the appId property.
    */
    public function setAppId(?string $value): void {
        $this->getBackingStore()->set('appId', $value);
    }

    /**
     * Sets the appliedConditionalAccessPolicies property value. A list of conditional access policies that the corresponding sign-in activity triggers. Apps need more Conditional Access-related privileges to read the details of this property. For more information, see Viewing applied conditional access (CA) policies in sign-ins.
     * @param array<AppliedConditionalAccessPolicy>|null $value Value to set for the appliedConditionalAccessPolicies property.
    */
    public function setAppliedConditionalAccessPolicies(?array $value): void {
        $this->getBackingStore()->set('appliedConditionalAccessPolicies', $value);
    }

    /**
     * Sets the appliedEventListeners property value. Detailed information about the listeners, such as Azure Logic Apps and Azure Functions, which the corresponding events in the sign-in event triggered.
     * @param array<AppliedAuthenticationEventListener>|null $value Value to set for the appliedEventListeners property.
    */
    public function setAppliedEventListeners(?array $value): void {
        $this->getBackingStore()->set('appliedEventListeners', $value);
    }

    /**
     * Sets the appTokenProtectionStatus property value. The appTokenProtectionStatus property
     * @param TokenProtectionStatus|null $value Value to set for the appTokenProtectionStatus property.
    */
    public function setAppTokenProtectionStatus(?TokenProtectionStatus $value): void {
        $this->getBackingStore()->set('appTokenProtectionStatus', $value);
    }

    /**
     * Sets the authenticationAppDeviceDetails property value. Provides details about the app and device used during a Microsoft Entra authentication step.
     * @param AuthenticationAppDeviceDetails|null $value Value to set for the authenticationAppDeviceDetails property.
    */
    public function setAuthenticationAppDeviceDetails(?AuthenticationAppDeviceDetails $value): void {
        $this->getBackingStore()->set('authenticationAppDeviceDetails', $value);
    }

    /**
     * Sets the authenticationAppPolicyEvaluationDetails property value. Provides details of the Microsoft Entra policies applied to a user and client authentication app during an authentication step.
     * @param array<AuthenticationAppPolicyDetails>|null $value Value to set for the authenticationAppPolicyEvaluationDetails property.
    */
    public function setAuthenticationAppPolicyEvaluationDetails(?array $value): void {
        $this->getBackingStore()->set('authenticationAppPolicyEvaluationDetails', $value);
    }

    /**
     * Sets the authenticationContextClassReferences property value. Contains a collection of values that represent the conditional access authentication contexts applied to the sign-in.
     * @param array<AuthenticationContext>|null $value Value to set for the authenticationContextClassReferences property.
    */
    public function setAuthenticationContextClassReferences(?array $value): void {
        $this->getBackingStore()->set('authenticationContextClassReferences', $value);
    }

    /**
     * Sets the authenticationDetails property value. The result of the authentication attempt and more details on the authentication method.
     * @param array<AuthenticationDetail>|null $value Value to set for the authenticationDetails property.
    */
    public function setAuthenticationDetails(?array $value): void {
        $this->getBackingStore()->set('authenticationDetails', $value);
    }

    /**
     * Sets the authenticationMethodsUsed property value. The authentication methods used. Possible values: SMS, Authenticator App, App Verification code, Password, FIDO, PTA, or PHS.
     * @param array<string>|null $value Value to set for the authenticationMethodsUsed property.
    */
    public function setAuthenticationMethodsUsed(?array $value): void {
        $this->getBackingStore()->set('authenticationMethodsUsed', $value);
    }

    /**
     * Sets the authenticationProcessingDetails property value. More authentication processing details, such as the agent name for  PTA and PHS, or a server or farm name for federated authentication.
     * @param array<KeyValue>|null $value Value to set for the authenticationProcessingDetails property.
    */
    public function setAuthenticationProcessingDetails(?array $value): void {
        $this->getBackingStore()->set('authenticationProcessingDetails', $value);
    }

    /**
     * Sets the authenticationProtocol property value. Lists the protocol type or grant type used in the authentication. The possible values are: none, oAuth2, ropc, wsFederation, saml20, deviceCode, unknownFutureValue, authenticationTransfer, nativeAuth. Use none for all authentications that don't have a specific value in that list. You must use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: authenticationTransfer, nativeAuth.
     * @param ProtocolType|null $value Value to set for the authenticationProtocol property.
    */
    public function setAuthenticationProtocol(?ProtocolType $value): void {
        $this->getBackingStore()->set('authenticationProtocol', $value);
    }

    /**
     * Sets the authenticationRequirement property value. This holds the highest level of authentication needed through all the sign-in steps, for sign-in to succeed.  Supports $filter (eq, startsWith).
     * @param string|null $value Value to set for the authenticationRequirement property.
    */
    public function setAuthenticationRequirement(?string $value): void {
        $this->getBackingStore()->set('authenticationRequirement', $value);
    }

    /**
     * Sets the authenticationRequirementPolicies property value. Sources of authentication requirement, such as conditional access, per-user MFA, identity protection, and security defaults.
     * @param array<AuthenticationRequirementPolicy>|null $value Value to set for the authenticationRequirementPolicies property.
    */
    public function setAuthenticationRequirementPolicies(?array $value): void {
        $this->getBackingStore()->set('authenticationRequirementPolicies', $value);
    }

    /**
     * Sets the autonomousSystemNumber property value. The Autonomous System Number (ASN) of the network used by the actor.
     * @param int|null $value Value to set for the autonomousSystemNumber property.
    */
    public function setAutonomousSystemNumber(?int $value): void {
        $this->getBackingStore()->set('autonomousSystemNumber', $value);
    }

    /**
     * Sets the azureResourceId property value. Contains a fully qualified Azure Resource Manager ID of an Azure resource accessed during the sign-in.
     * @param string|null $value Value to set for the azureResourceId property.
    */
    public function setAzureResourceId(?string $value): void {
        $this->getBackingStore()->set('azureResourceId', $value);
    }

    /**
     * Sets the clientAppUsed property value. The legacy client used for sign-in activity. For example: Browser, Exchange ActiveSync, Modern clients, IMAP, MAPI, SMTP, or POP.  Supports $filter (eq).
     * @param string|null $value Value to set for the clientAppUsed property.
    */
    public function setClientAppUsed(?string $value): void {
        $this->getBackingStore()->set('clientAppUsed', $value);
    }

    /**
     * Sets the clientCredentialType property value. Describes the credential type that a user client or service principal provided to Microsoft Entra ID to authenticate itself. You can review this property to track and eliminate less secure credential types or to watch for clients and service principals using anomalous credential types. The possible values are: none, clientSecret, clientAssertion, federatedIdentityCredential, managedIdentity, certificate, unknownFutureValue.
     * @param ClientCredentialType|null $value Value to set for the clientCredentialType property.
    */
    public function setClientCredentialType(?ClientCredentialType $value): void {
        $this->getBackingStore()->set('clientCredentialType', $value);
    }

    /**
     * Sets the conditionalAccessAudiences property value. A list that indicates the audience that was evaluated by Conditional Access during a sign-in event.  Supports $filter (eq).
     * @param array<ConditionalAccessAudience>|null $value Value to set for the conditionalAccessAudiences property.
    */
    public function setConditionalAccessAudiences(?array $value): void {
        $this->getBackingStore()->set('conditionalAccessAudiences', $value);
    }

    /**
     * Sets the conditionalAccessStatus property value. The status of the conditional access policy triggered. Possible values: success, failure, notApplied, or unknownFutureValue.  Supports $filter (eq).
     * @param ConditionalAccessStatus|null $value Value to set for the conditionalAccessStatus property.
    */
    public function setConditionalAccessStatus(?ConditionalAccessStatus $value): void {
        $this->getBackingStore()->set('conditionalAccessStatus', $value);
    }

    /**
     * Sets the correlationId property value. The identifier the client sends when sign-in is initiated. This is used for troubleshooting the corresponding sign-in activity when calling for support.  Supports $filter (eq).
     * @param string|null $value Value to set for the correlationId property.
    */
    public function setCorrelationId(?string $value): void {
        $this->getBackingStore()->set('correlationId', $value);
    }

    /**
     * Sets the createdDateTime property value. The date and time the sign-in was initiated. The Timestamp type is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.  Supports $orderby, $filter (eq, le, and ge).
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the crossTenantAccessType property value. Describes the type of cross-tenant access used by the actor to access the resource. Possible values are: none, b2bCollaboration, b2bDirectConnect, microsoftSupport, serviceProvider, unknownFutureValue, passthrough. Also, you must use the Prefer: include-unknown-enum-members request header to get the following value or values in this evolvable enum: passthrough. If the sign in didn't cross tenant boundaries, the value is none.
     * @param SignInAccessType|null $value Value to set for the crossTenantAccessType property.
    */
    public function setCrossTenantAccessType(?SignInAccessType $value): void {
        $this->getBackingStore()->set('crossTenantAccessType', $value);
    }

    /**
     * Sets the deviceDetail property value. The device information from where the sign-in occurred. Includes information such as deviceId, OS, and browser.  Supports $filter (eq, startsWith) on browser and operatingSystem properties.
     * @param DeviceDetail|null $value Value to set for the deviceDetail property.
    */
    public function setDeviceDetail(?DeviceDetail $value): void {
        $this->getBackingStore()->set('deviceDetail', $value);
    }

    /**
     * Sets the federatedCredentialId property value. Contains the identifier of an application's federated identity credential, if a federated identity credential was used to sign in.
     * @param string|null $value Value to set for the federatedCredentialId property.
    */
    public function setFederatedCredentialId(?string $value): void {
        $this->getBackingStore()->set('federatedCredentialId', $value);
    }

    /**
     * Sets the flaggedForReview property value. During a failed sign-in, a user can select a button in the Azure portal to mark the failed event for tenant admins. If a user selects the button to flag the failed sign-in, this value is true.
     * @param bool|null $value Value to set for the flaggedForReview property.
    */
    public function setFlaggedForReview(?bool $value): void {
        $this->getBackingStore()->set('flaggedForReview', $value);
    }

    /**
     * Sets the globalSecureAccessIpAddress property value. The Global Secure Access IP address that the sign-in was initiated from.
     * @param string|null $value Value to set for the globalSecureAccessIpAddress property.
    */
    public function setGlobalSecureAccessIpAddress(?string $value): void {
        $this->getBackingStore()->set('globalSecureAccessIpAddress', $value);
    }

    /**
     * Sets the homeTenantId property value. The tenant identifier of the user initiating the sign-in. Not applicable in Managed Identity or service principal sign ins.
     * @param string|null $value Value to set for the homeTenantId property.
    */
    public function setHomeTenantId(?string $value): void {
        $this->getBackingStore()->set('homeTenantId', $value);
    }

    /**
     * Sets the homeTenantName property value. For user sign ins, the identifier of the tenant that the user is a member of. Only populated in cases where the home tenant has provided affirmative consent to Microsoft Entra ID to show the tenant content.
     * @param string|null $value Value to set for the homeTenantName property.
    */
    public function setHomeTenantName(?string $value): void {
        $this->getBackingStore()->set('homeTenantName', $value);
    }

    /**
     * Sets the incomingTokenType property value. Indicates the token types that were presented to Microsoft Entra ID to authenticate the actor in the sign in. The possible values are: none, primaryRefreshToken, saml11, saml20, unknownFutureValue, remoteDesktopToken.  NOTE Microsoft Entra ID might have also used token types not listed in this enum type to authenticate the actor. Don't infer the lack of a token if it isn't one of the types listed. Also, you must use the Prefer: include-unknown-enum-members request header to get the following value or values in this evolvable enum: remoteDesktopToken.
     * @param IncomingTokenType|null $value Value to set for the incomingTokenType property.
    */
    public function setIncomingTokenType(?IncomingTokenType $value): void {
        $this->getBackingStore()->set('incomingTokenType', $value);
    }

    /**
     * Sets the ipAddress property value. The IP address of the client from where the sign-in occurred.  Supports $filter (eq, startsWith).
     * @param string|null $value Value to set for the ipAddress property.
    */
    public function setIpAddress(?string $value): void {
        $this->getBackingStore()->set('ipAddress', $value);
    }

    /**
     * Sets the ipAddressFromResourceProvider property value. The IP address a user used to reach a resource provider, used to determine Conditional Access compliance for some policies. For example, when a user interacts with Exchange Online, the IP address that Microsoft Exchange receives from the user can be recorded here. This value is often null.
     * @param string|null $value Value to set for the ipAddressFromResourceProvider property.
    */
    public function setIpAddressFromResourceProvider(?string $value): void {
        $this->getBackingStore()->set('ipAddressFromResourceProvider', $value);
    }

    /**
     * Sets the isInteractive property value. Indicates whether a user sign in is interactive. In interactive sign in, the user provides an authentication factor to Microsoft Entra ID. These factors include passwords, responses to MFA challenges, biometric factors, or QR codes that a user provides to Microsoft Entra ID or an associated app. In non-interactive sign in, the user doesn't provide an authentication factor. Instead, the client app uses a token or code to authenticate or access a resource on behalf of a user. Non-interactive sign ins are commonly used for a client to sign in on a user's behalf in a process transparent to the user.
     * @param bool|null $value Value to set for the isInteractive property.
    */
    public function setIsInteractive(?bool $value): void {
        $this->getBackingStore()->set('isInteractive', $value);
    }

    /**
     * Sets the isTenantRestricted property value. Shows whether the sign in event was subject to a Microsoft Entra tenant restriction policy.
     * @param bool|null $value Value to set for the isTenantRestricted property.
    */
    public function setIsTenantRestricted(?bool $value): void {
        $this->getBackingStore()->set('isTenantRestricted', $value);
    }

    /**
     * Sets the isThroughGlobalSecureAccess property value. Indicates whether a user came through Global Secure Access service.
     * @param bool|null $value Value to set for the isThroughGlobalSecureAccess property.
    */
    public function setIsThroughGlobalSecureAccess(?bool $value): void {
        $this->getBackingStore()->set('isThroughGlobalSecureAccess', $value);
    }

    /**
     * Sets the location property value. The city, state, and two letter country code from where the sign-in occurred.  Supports $filter (eq, startsWith) on city, state, and countryOrRegion properties.
     * @param SignInLocation|null $value Value to set for the location property.
    */
    public function setLocation(?SignInLocation $value): void {
        $this->getBackingStore()->set('location', $value);
    }

    /**
     * Sets the managedServiceIdentity property value. Contains information about the managed identity used for the sign in, including its type, associated Azure Resource Manager (ARM) resource ID, and federated token information.
     * @param ManagedIdentity|null $value Value to set for the managedServiceIdentity property.
    */
    public function setManagedServiceIdentity(?ManagedIdentity $value): void {
        $this->getBackingStore()->set('managedServiceIdentity', $value);
    }

    /**
     * Sets the mfaDetail property value. The mfaDetail property
     * @param MfaDetail|null $value Value to set for the mfaDetail property.
    */
    public function setMfaDetail(?MfaDetail $value): void {
        $this->getBackingStore()->set('mfaDetail', $value);
    }

    /**
     * Sets the networkLocationDetails property value. The network location details including the type of network used and its names.
     * @param array<NetworkLocationDetail>|null $value Value to set for the networkLocationDetails property.
    */
    public function setNetworkLocationDetails(?array $value): void {
        $this->getBackingStore()->set('networkLocationDetails', $value);
    }

    /**
     * Sets the originalRequestId property value. The request identifier of the first request in the authentication sequence.  Supports $filter (eq).
     * @param string|null $value Value to set for the originalRequestId property.
    */
    public function setOriginalRequestId(?string $value): void {
        $this->getBackingStore()->set('originalRequestId', $value);
    }

    /**
     * Sets the originalTransferMethod property value. Transfer method used to initiate a session throughout all subsequent request. The possible values are: none, deviceCodeFlow, authenticationTransfer, unknownFutureValue.
     * @param OriginalTransferMethods|null $value Value to set for the originalTransferMethod property.
    */
    public function setOriginalTransferMethod(?OriginalTransferMethods $value): void {
        $this->getBackingStore()->set('originalTransferMethod', $value);
    }

    /**
     * Sets the privateLinkDetails property value. Contains information about the Microsoft Entra Private Link policy that is associated with the sign in event.
     * @param PrivateLinkDetails|null $value Value to set for the privateLinkDetails property.
    */
    public function setPrivateLinkDetails(?PrivateLinkDetails $value): void {
        $this->getBackingStore()->set('privateLinkDetails', $value);
    }

    /**
     * Sets the processingTimeInMilliseconds property value. The request processing time in milliseconds in AD STS.
     * @param int|null $value Value to set for the processingTimeInMilliseconds property.
    */
    public function setProcessingTimeInMilliseconds(?int $value): void {
        $this->getBackingStore()->set('processingTimeInMilliseconds', $value);
    }

    /**
     * Sets the resourceDisplayName property value. The name of the resource that the user signed in to.  Supports $filter (eq).
     * @param string|null $value Value to set for the resourceDisplayName property.
    */
    public function setResourceDisplayName(?string $value): void {
        $this->getBackingStore()->set('resourceDisplayName', $value);
    }

    /**
     * Sets the resourceId property value. The identifier of the resource that the user signed in to.  Supports $filter (eq).
     * @param string|null $value Value to set for the resourceId property.
    */
    public function setResourceId(?string $value): void {
        $this->getBackingStore()->set('resourceId', $value);
    }

    /**
     * Sets the resourceServicePrincipalId property value. The identifier of the service principal representing the target resource in the sign-in event.
     * @param string|null $value Value to set for the resourceServicePrincipalId property.
    */
    public function setResourceServicePrincipalId(?string $value): void {
        $this->getBackingStore()->set('resourceServicePrincipalId', $value);
    }

    /**
     * Sets the resourceTenantId property value. The tenant identifier of the resource referenced in the sign in.
     * @param string|null $value Value to set for the resourceTenantId property.
    */
    public function setResourceTenantId(?string $value): void {
        $this->getBackingStore()->set('resourceTenantId', $value);
    }

    /**
     * Sets the riskDetail property value. The reason behind a specific state of a risky user, sign-in, or a risk event. The possible values are none, adminGeneratedTemporaryPassword, userPerformedSecuredPasswordChange, userPerformedSecuredPasswordReset, adminConfirmedSigninSafe, aiConfirmedSigninSafe, userPassedMFADrivenByRiskBasedPolicy, adminDismissedAllRiskForUser, adminConfirmedSigninCompromised, hidden, adminConfirmedUserCompromised, unknownFutureValue, adminConfirmedServicePrincipalCompromised, adminDismissedAllRiskForServicePrincipal, m365DAdminDismissedDetection, userChangedPasswordOnPremises, adminDismissedRiskForSignIn, adminConfirmedAccountSafe.  You must use the Prefer: include-unknown-enum-members request header to get the following value or values in this evolvable enum: adminConfirmedServicePrincipalCompromised, adminDismissedAllRiskForServicePrincipal, m365DAdminDismissedDetection, userChangedPasswordOnPremises, adminDismissedRiskForSignIn, adminConfirmedAccountSafe.The value none means that Microsoft Entra risk detection hasn't flagged the user or the sign-in as a risky event so far.  Supports $filter (eq). Note: Details for this property are only available for Microsoft Entra ID P2 customers. All other customers are returned hidden.
     * @param RiskDetail|null $value Value to set for the riskDetail property.
    */
    public function setRiskDetail(?RiskDetail $value): void {
        $this->getBackingStore()->set('riskDetail', $value);
    }

    /**
     * Sets the riskEventTypes_v2 property value. The list of risk event types associated with the sign-in. Possible values: unlikelyTravel, anonymizedIPAddress, maliciousIPAddress, unfamiliarFeatures, malwareInfectedIPAddress, suspiciousIPAddress, leakedCredentials, investigationsThreatIntelligence,  generic, or unknownFutureValue.  Supports $filter (eq, startsWith).
     * @param array<string>|null $value Value to set for the riskEventTypes_v2 property.
    */
    public function setRiskEventTypesV2(?array $value): void {
        $this->getBackingStore()->set('riskEventTypes_v2', $value);
    }

    /**
     * Sets the riskLevelAggregated property value. The aggregated risk level. Possible values: none, low, medium, high, hidden, or unknownFutureValue. The value hidden means the user or sign-in wasn't enabled for Microsoft Entra ID Protection.  Supports $filter (eq). Note: Details for this property are only available for Microsoft Entra ID P2 customers. All other customers are returned hidden.
     * @param RiskLevel|null $value Value to set for the riskLevelAggregated property.
    */
    public function setRiskLevelAggregated(?RiskLevel $value): void {
        $this->getBackingStore()->set('riskLevelAggregated', $value);
    }

    /**
     * Sets the riskLevelDuringSignIn property value. The risk level during sign-in. Possible values: none, low, medium, high, hidden, or unknownFutureValue. The value hidden means the user or sign-in wasn't enabled for Microsoft Entra ID Protection.  Supports $filter (eq). Note: Details for this property are only available for Microsoft Entra ID P2 customers. All other customers are returned hidden.
     * @param RiskLevel|null $value Value to set for the riskLevelDuringSignIn property.
    */
    public function setRiskLevelDuringSignIn(?RiskLevel $value): void {
        $this->getBackingStore()->set('riskLevelDuringSignIn', $value);
    }

    /**
     * Sets the riskState property value. The risk state of a risky user, sign-in, or a risk event. Possible values: none, confirmedSafe, remediated, dismissed, atRisk, confirmedCompromised, or unknownFutureValue.  Supports $filter (eq).
     * @param RiskState|null $value Value to set for the riskState property.
    */
    public function setRiskState(?RiskState $value): void {
        $this->getBackingStore()->set('riskState', $value);
    }

    /**
     * Sets the servicePrincipalCredentialKeyId property value. The unique identifier of the key credential used by the service principal to authenticate.
     * @param string|null $value Value to set for the servicePrincipalCredentialKeyId property.
    */
    public function setServicePrincipalCredentialKeyId(?string $value): void {
        $this->getBackingStore()->set('servicePrincipalCredentialKeyId', $value);
    }

    /**
     * Sets the servicePrincipalCredentialThumbprint property value. The certificate thumbprint of the certificate used by the service principal to authenticate.
     * @param string|null $value Value to set for the servicePrincipalCredentialThumbprint property.
    */
    public function setServicePrincipalCredentialThumbprint(?string $value): void {
        $this->getBackingStore()->set('servicePrincipalCredentialThumbprint', $value);
    }

    /**
     * Sets the servicePrincipalId property value. The application identifier used for sign-in. This field is populated when you're signing in using an application.  Supports $filter (eq, startsWith).
     * @param string|null $value Value to set for the servicePrincipalId property.
    */
    public function setServicePrincipalId(?string $value): void {
        $this->getBackingStore()->set('servicePrincipalId', $value);
    }

    /**
     * Sets the servicePrincipalName property value. The application name used for sign-in. This field is populated when you're signing in using an application.  Supports $filter (eq, startsWith).
     * @param string|null $value Value to set for the servicePrincipalName property.
    */
    public function setServicePrincipalName(?string $value): void {
        $this->getBackingStore()->set('servicePrincipalName', $value);
    }

    /**
     * Sets the sessionLifetimePolicies property value. Any conditional access session management policies that were applied during the sign-in event.
     * @param array<SessionLifetimePolicy>|null $value Value to set for the sessionLifetimePolicies property.
    */
    public function setSessionLifetimePolicies(?array $value): void {
        $this->getBackingStore()->set('sessionLifetimePolicies', $value);
    }

    /**
     * Sets the signInEventTypes property value. Indicates the category of sign in that the event represents. For user sign ins, the category can be interactiveUser or nonInteractiveUser and corresponds to the value for the isInteractive property on the signin resource. For managed identity sign ins, the category is managedIdentity. For service principal sign-ins, the category is servicePrincipal. Possible values are: interactiveUser, nonInteractiveUser, servicePrincipal, managedIdentity, unknownFutureValue.  Supports $filter (eq, ne).
     * @param array<string>|null $value Value to set for the signInEventTypes property.
    */
    public function setSignInEventTypes(?array $value): void {
        $this->getBackingStore()->set('signInEventTypes', $value);
    }

    /**
     * Sets the signInIdentifier property value. The identification that the user provided to sign in. It can be the userPrincipalName, but is also populated when a user signs in using other identifiers.
     * @param string|null $value Value to set for the signInIdentifier property.
    */
    public function setSignInIdentifier(?string $value): void {
        $this->getBackingStore()->set('signInIdentifier', $value);
    }

    /**
     * Sets the signInIdentifierType property value. The type of sign in identifier. Possible values are: userPrincipalName, phoneNumber, proxyAddress, qrCode, onPremisesUserPrincipalName, unknownFutureValue.
     * @param SignInIdentifierType|null $value Value to set for the signInIdentifierType property.
    */
    public function setSignInIdentifierType(?SignInIdentifierType $value): void {
        $this->getBackingStore()->set('signInIdentifierType', $value);
    }

    /**
     * Sets the signInTokenProtectionStatus property value. Token protection creates a cryptographically secure tie between the token and the device it's issued to. This field indicates whether the signin token was bound to the device or not. The possible values are: none, bound, unbound, unknownFutureValue.
     * @param TokenProtectionStatus|null $value Value to set for the signInTokenProtectionStatus property.
    */
    public function setSignInTokenProtectionStatus(?TokenProtectionStatus $value): void {
        $this->getBackingStore()->set('signInTokenProtectionStatus', $value);
    }

    /**
     * Sets the status property value. The sign-in status. Includes the error code and description of the error (for a sign-in failure).  Supports $filter (eq) on errorCode property.
     * @param SignInStatus|null $value Value to set for the status property.
    */
    public function setStatus(?SignInStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the tokenIssuerName property value. The name of the identity provider. For example, sts.microsoft.com.  Supports $filter (eq).
     * @param string|null $value Value to set for the tokenIssuerName property.
    */
    public function setTokenIssuerName(?string $value): void {
        $this->getBackingStore()->set('tokenIssuerName', $value);
    }

    /**
     * Sets the tokenIssuerType property value. The type of identity provider. The possible values are: AzureAD, ADFederationServices, UnknownFutureValue, AzureADBackupAuth, ADFederationServicesMFAAdapter, NPSExtension. You must use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: AzureADBackupAuth , ADFederationServicesMFAAdapter , NPSExtension.
     * @param TokenIssuerType|null $value Value to set for the tokenIssuerType property.
    */
    public function setTokenIssuerType(?TokenIssuerType $value): void {
        $this->getBackingStore()->set('tokenIssuerType', $value);
    }

    /**
     * Sets the uniqueTokenIdentifier property value. A unique base64 encoded request identifier used to track tokens issued by Microsoft Entra ID as they're redeemed at resource providers.
     * @param string|null $value Value to set for the uniqueTokenIdentifier property.
    */
    public function setUniqueTokenIdentifier(?string $value): void {
        $this->getBackingStore()->set('uniqueTokenIdentifier', $value);
    }

    /**
     * Sets the userAgent property value. The user agent information related to sign-in.  Supports $filter (eq, startsWith).
     * @param string|null $value Value to set for the userAgent property.
    */
    public function setUserAgent(?string $value): void {
        $this->getBackingStore()->set('userAgent', $value);
    }

    /**
     * Sets the userDisplayName property value. The display name of the user.  Supports $filter (eq, startsWith).
     * @param string|null $value Value to set for the userDisplayName property.
    */
    public function setUserDisplayName(?string $value): void {
        $this->getBackingStore()->set('userDisplayName', $value);
    }

    /**
     * Sets the userId property value. The identifier of the user.  Supports $filter (eq).
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->getBackingStore()->set('userId', $value);
    }

    /**
     * Sets the userPrincipalName property value. The UPN of the user.  Supports $filter (eq, startsWith).
     * @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('userPrincipalName', $value);
    }

    /**
     * Sets the userType property value. Identifies whether the user is a member or guest in the tenant. Possible values are: member, guest, unknownFutureValue.
     * @param SignInUserType|null $value Value to set for the userType property.
    */
    public function setUserType(?SignInUserType $value): void {
        $this->getBackingStore()->set('userType', $value);
    }

}
