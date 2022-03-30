<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SignIn extends Entity 
{
    /** @var string|null $appDisplayName App name displayed in the Azure Portal. Supports $filter (eq and startsWith operators only). */
    private ?string $appDisplayName = null;
    
    /** @var string|null $appId Unique GUID representing the app ID in the Azure Active Directory. Supports $filter (eq operator only). */
    private ?string $appId = null;
    
    /** @var array<AppliedConditionalAccessPolicy>|null $appliedConditionalAccessPolicies A list of conditional access policies that are triggered by the corresponding sign-in activity. */
    private ?array $appliedConditionalAccessPolicies = null;
    
    /** @var array<AuthenticationContext>|null $authenticationContextClassReferences Contains a collection of values that represent the conditional access authentication contexts applied to the sign-in. */
    private ?array $authenticationContextClassReferences = null;
    
    /** @var array<AuthenticationDetail>|null $authenticationDetails The result of the authentication attempt and additional details on the authentication method. */
    private ?array $authenticationDetails = null;
    
    /** @var array<string>|null $authenticationMethodsUsed The authentication methods used. Possible values: SMS, Authenticator App, App Verification code, Password, FIDO, PTA, or PHS. */
    private ?array $authenticationMethodsUsed = null;
    
    /** @var array<KeyValue>|null $authenticationProcessingDetails Additional authentication processing details, such as the agent name in case of PTA/PHS or Server/farm name in case of federated authentication. */
    private ?array $authenticationProcessingDetails = null;
    
    /** @var ProtocolType|null $authenticationProtocol Lists the protocol type or grant type used in the authentication. The possible values are: none, oAuth2, ropc, wsFederation, saml20, deviceCode, unknownFutureValue. For authentications that use protocols other than the possible values listed, the protocol type is listed as none. */
    private ?ProtocolType $authenticationProtocol = null;
    
    /** @var string|null $authenticationRequirement This holds the highest level of authentication needed through all the sign-in steps, for sign-in to succeed. Supports $filter (eq and startsWith operators only). */
    private ?string $authenticationRequirement = null;
    
    /** @var array<AuthenticationRequirementPolicy>|null $authenticationRequirementPolicies Sources of authentication requirement, such as conditional access, per-user MFA, identity protection, and security defaults. */
    private ?array $authenticationRequirementPolicies = null;
    
    /** @var int|null $autonomousSystemNumber The Autonomous System Number (ASN) of the network used by the actor. */
    private ?int $autonomousSystemNumber = null;
    
    /** @var string|null $azureResourceId Contains a fully qualified Azure Resource Manager ID of an Azure resource accessed during the sign-in. */
    private ?string $azureResourceId = null;
    
    /** @var string|null $clientAppUsed Identifies the client used for the sign-in activity. Modern authentication clients include Browser and modern clients. Legacy authentication clients include Exchange ActiveSync, IMAP, MAPI, SMTP, POP, and other clients. Supports $filter (eq operator only). */
    private ?string $clientAppUsed = null;
    
    /** @var ConditionalAccessStatus|null $conditionalAccessStatus Reports status of an activated conditional access policy. Possible values are: success, failure, notApplied, and unknownFutureValue. Supports $filter (eq operator only). */
    private ?ConditionalAccessStatus $conditionalAccessStatus = null;
    
    /** @var string|null $correlationId The request ID sent from the client when the sign-in is initiated; used to troubleshoot sign-in activity. Supports $filter (eq operator only). */
    private ?string $correlationId = null;
    
    /** @var DateTime|null $createdDateTime Date and time (UTC) the sign-in was initiated. Example: midnight on Jan 1, 2014 is reported as 2014-01-01T00:00:00Z. Supports $orderby and $filter (eq, le, and ge operators only). */
    private ?DateTime $createdDateTime = null;
    
    /** @var SignInAccessType|null $crossTenantAccessType Describes the type of cross-tenant access used by the actor to access the resource. Possible values are: none, b2bCollaboration, b2bDirectConnect, microsoftSupport, serviceProvider, unknownFutureValue. If the sign in did not cross tenant boundaries, the value is none. */
    private ?SignInAccessType $crossTenantAccessType = null;
    
    /** @var DeviceDetail|null $deviceDetail Device information from where the sign-in occurred; includes device ID, operating system, and browser. Supports $filter (eq and startsWith operators only) on browser and operatingSytem properties. */
    private ?DeviceDetail $deviceDetail = null;
    
    /** @var string|null $federatedCredentialId Contains the identifier of an application's federated identity credential, if a federated identity credential was used to sign in. */
    private ?string $federatedCredentialId = null;
    
    /** @var bool|null $flaggedForReview During a failed sign in, a user may click a button in the Azure portal to mark the failed event for tenant admins. If a user clicked the button to flag the failed sign in, this value is true. */
    private ?bool $flaggedForReview = null;
    
    /** @var string|null $homeTenantId The tenant identifier of the user initiating the sign in. Not applicable in Managed Identity or service principal sign ins. */
    private ?string $homeTenantId = null;
    
    /** @var string|null $homeTenantName For user sign ins, the identifier of the tenant that the user is a member of. Only populated in cases where the home tenant has provided affirmative consent to Azure AD to show the tenant content. */
    private ?string $homeTenantName = null;
    
    /** @var IncomingTokenType|null $incomingTokenType Indicates the token types that were presented to Azure AD to authenticate the actor in the sign in. The possible values are: none, primaryRefreshToken, saml11, saml20, unknownFutureValue.  NOTE Azure AD may have also used token types not listed in this Enum type to authenticate the actor. Do not infer the lack of a token if it is not one of the types listed. */
    private ?IncomingTokenType $incomingTokenType = null;
    
    /** @var string|null $ipAddress IP address of the client used to sign in. Supports $filter (eq and startsWith operators only). */
    private ?string $ipAddress = null;
    
    /** @var string|null $ipAddressFromResourceProvider The IP address a user used to reach a resource provider, used to determine Conditional Access compliance for some policies. For example, when a user interacts with Exchange Online, the IP address Exchange receives from the user may be recorded here. This value is often null. */
    private ?string $ipAddressFromResourceProvider = null;
    
    /** @var bool|null $isInteractive Indicates if a sign-in is interactive or not. */
    private ?bool $isInteractive = null;
    
    /** @var bool|null $isTenantRestricted Shows whether the sign in event was subject to an Azure AD tenant restriction policy. */
    private ?bool $isTenantRestricted = null;
    
    /** @var SignInLocation|null $location Provides the city, state, and country code where the sign-in originated. Supports $filter (eq and startsWith operators only) on city, state, and countryOrRegion properties. */
    private ?SignInLocation $location = null;
    
    /** @var MfaDetail|null $mfaDetail  */
    private ?MfaDetail $mfaDetail = null;
    
    /** @var array<NetworkLocationDetail>|null $networkLocationDetails The network location details including the type of network used and its names. */
    private ?array $networkLocationDetails = null;
    
    /** @var string|null $originalRequestId The request identifier of the first request in the authentication sequence. Supports $filter (eq operator only). */
    private ?string $originalRequestId = null;
    
    /** @var PrivateLinkDetails|null $privateLinkDetails Contains information about the Azure AD Private Link policy that is associated with the sign in event. */
    private ?PrivateLinkDetails $privateLinkDetails = null;
    
    /** @var int|null $processingTimeInMilliseconds The request processing time in milliseconds in AD STS. */
    private ?int $processingTimeInMilliseconds = null;
    
    /** @var string|null $resourceDisplayName Name of the resource the user signed into. Supports $filter (eq operator only). */
    private ?string $resourceDisplayName = null;
    
    /** @var string|null $resourceId ID of the resource that the user signed into. Supports $filter (eq operator only). */
    private ?string $resourceId = null;
    
    /** @var string|null $resourceServicePrincipalId The identifier of the service principal representing the target resource in the sign-in event. */
    private ?string $resourceServicePrincipalId = null;
    
    /** @var string|null $resourceTenantId The tenant identifier of the resource referenced in the sign in. */
    private ?string $resourceTenantId = null;
    
    /** @var RiskDetail|null $riskDetail Provides the 'reason' behind a specific state of a risky user, sign-in or a risk event. The possible values are: none, adminGeneratedTemporaryPassword, userPerformedSecuredPasswordChange, userPerformedSecuredPasswordReset, adminConfirmedSigninSafe, aiConfirmedSigninSafe, userPassedMFADrivenByRiskBasedPolicy, adminDismissedAllRiskForUser, adminConfirmedSigninCompromised, unknownFutureValue. The value none means that no action has been performed on the user or sign-in so far.  Supports $filter (eq operator only).Note: Details for this property require an Azure AD Premium P2 license. Other licenses return the value hidden. */
    private ?RiskDetail $riskDetail = null;
    
    /** @var array<string>|null $riskEventTypes_v2 The list of risk event types associated with the sign-in. Possible values: unlikelyTravel, anonymizedIPAddress, maliciousIPAddress, unfamiliarFeatures, malwareInfectedIPAddress, suspiciousIPAddress, leakedCredentials, investigationsThreatIntelligence,  generic, or unknownFutureValue. Supports $filter (eq and startsWith operators only). */
    private ?array $riskEventTypes_v2 = null;
    
    /** @var RiskLevel|null $riskLevelAggregated Aggregated risk level. The possible values are: none, low, medium, high, hidden, and unknownFutureValue. The value hidden means the user or sign-in was not enabled for Azure AD Identity Protection. Supports $filter (eq operator only).  Note: Details for this property are only available for Azure AD Premium P2 customers. All other customers will be returned hidden. */
    private ?RiskLevel $riskLevelAggregated = null;
    
    /** @var RiskLevel|null $riskLevelDuringSignIn Risk level during sign-in. The possible values are: none, low, medium, high, hidden, and unknownFutureValue. The value hidden means the user or sign-in was not enabled for Azure AD Identity Protection.  Supports $filter (eq operator only). Note: Details for this property are only available for Azure AD Premium P2 customers. All other customers will be returned hidden. */
    private ?RiskLevel $riskLevelDuringSignIn = null;
    
    /** @var RiskState|null $riskState Reports status of the risky user, sign-in, or a risk event. The possible values are: none, confirmedSafe, remediated, dismissed, atRisk, confirmedCompromised, unknownFutureValue. Supports $filter (eq operator only). */
    private ?RiskState $riskState = null;
    
    /** @var string|null $servicePrincipalCredentialKeyId The unique identifier of the key credential used by the service principal to authenticate. */
    private ?string $servicePrincipalCredentialKeyId = null;
    
    /** @var string|null $servicePrincipalCredentialThumbprint The certificate thumbprint of the certificate used by the service principal to authenticate. */
    private ?string $servicePrincipalCredentialThumbprint = null;
    
    /** @var string|null $servicePrincipalId The application identifier used for sign-in. This field is populated when you are signing in using an application. Supports $filter (eq and startsWith operators only). */
    private ?string $servicePrincipalId = null;
    
    /** @var string|null $servicePrincipalName The application name used for sign-in. This field is populated when you are signing in using an application. Supports $filter (eq and startsWith operators only). */
    private ?string $servicePrincipalName = null;
    
    /** @var array<SessionLifetimePolicy>|null $sessionLifetimePolicies Any conditional access session management policies that were applied during the sign-in event. */
    private ?array $sessionLifetimePolicies = null;
    
    /** @var array<string>|null $signInEventTypes Indicates the category of sign in that the event represents. For user sign ins, the category can be interactiveUser or nonInteractiveUser and corresponds to the value for the isInteractive property on the signin resource. For managed identity sign ins, the category is managedIdentity. For service principal sign ins, the category is servicePrincipal. Possible values are: interactiveUser, nonInteractiveUser, servicePrincipal, managedIdentity, unknownFutureValue. Supports $filter (eq, ne). */
    private ?array $signInEventTypes = null;
    
    /** @var string|null $signInIdentifier The identification that the user provided to sign in. It may be the userPrincipalName but it's also populated when a user signs in using other identifiers. */
    private ?string $signInIdentifier = null;
    
    /** @var SignInIdentifierType|null $signInIdentifierType The type of sign in identifier. Possible values are: userPrincipalName, phoneNumber, proxyAddress, qrCode, onPremisesUserPrincipalName, unknownFutureValue. */
    private ?SignInIdentifierType $signInIdentifierType = null;
    
    /** @var SignInStatus|null $status Sign-in status. Includes the error code and description of the error (in case of a sign-in failure). Supports $filter (eq operator only) on errorCode property. */
    private ?SignInStatus $status = null;
    
    /** @var string|null $tokenIssuerName The name of the identity provider. For example, sts.microsoft.com. Supports $filter (eq operator only). */
    private ?string $tokenIssuerName = null;
    
    /** @var TokenIssuerType|null $tokenIssuerType The type of identity provider. The possible values are: AzureAD, ADFederationServices, UnknownFutureValue, AzureADBackupAuth, ADFederationServicesMFAAdapter, NPSExtension. Note that you must use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: AzureADBackupAuth , ADFederationServicesMFAAdapter , NPSExtension. */
    private ?TokenIssuerType $tokenIssuerType = null;
    
    /** @var string|null $uniqueTokenIdentifier A unique base64 encoded request identifier used to track tokens issued by Azure AD as they are redeemed at resource providers. */
    private ?string $uniqueTokenIdentifier = null;
    
    /** @var string|null $userAgent The user agent information related to sign-in. Supports $filter (eq and startsWith operators only). */
    private ?string $userAgent = null;
    
    /** @var string|null $userDisplayName Display name of the user that initiated the sign-in. Supports $filter (eq and startsWith operators only). */
    private ?string $userDisplayName = null;
    
    /** @var string|null $userId ID of the user that initiated the sign-in. Supports $filter (eq operator only). */
    private ?string $userId = null;
    
    /** @var string|null $userPrincipalName User principal name of the user that initiated the sign-in. Supports $filter (eq and startsWith operators only). */
    private ?string $userPrincipalName = null;
    
    /** @var SignInUserType|null $userType Identifies whether the user is a member or guest in the tenant. Possible values are: member, guest, unknownFutureValue. */
    private ?SignInUserType $userType = null;
    
    /**
     * Instantiates a new signIn and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SignIn
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): SignIn {
        return new SignIn();
    }

    /**
     * Gets the appDisplayName property value. App name displayed in the Azure Portal. Supports $filter (eq and startsWith operators only).
     * @return string|null
    */
    public function getAppDisplayName(): ?string {
        return $this->appDisplayName;
    }

    /**
     * Gets the appId property value. Unique GUID representing the app ID in the Azure Active Directory. Supports $filter (eq operator only).
     * @return string|null
    */
    public function getAppId(): ?string {
        return $this->appId;
    }

    /**
     * Gets the appliedConditionalAccessPolicies property value. A list of conditional access policies that are triggered by the corresponding sign-in activity.
     * @return array<AppliedConditionalAccessPolicy>|null
    */
    public function getAppliedConditionalAccessPolicies(): ?array {
        return $this->appliedConditionalAccessPolicies;
    }

    /**
     * Gets the authenticationContextClassReferences property value. Contains a collection of values that represent the conditional access authentication contexts applied to the sign-in.
     * @return array<AuthenticationContext>|null
    */
    public function getAuthenticationContextClassReferences(): ?array {
        return $this->authenticationContextClassReferences;
    }

    /**
     * Gets the authenticationDetails property value. The result of the authentication attempt and additional details on the authentication method.
     * @return array<AuthenticationDetail>|null
    */
    public function getAuthenticationDetails(): ?array {
        return $this->authenticationDetails;
    }

    /**
     * Gets the authenticationMethodsUsed property value. The authentication methods used. Possible values: SMS, Authenticator App, App Verification code, Password, FIDO, PTA, or PHS.
     * @return array<string>|null
    */
    public function getAuthenticationMethodsUsed(): ?array {
        return $this->authenticationMethodsUsed;
    }

    /**
     * Gets the authenticationProcessingDetails property value. Additional authentication processing details, such as the agent name in case of PTA/PHS or Server/farm name in case of federated authentication.
     * @return array<KeyValue>|null
    */
    public function getAuthenticationProcessingDetails(): ?array {
        return $this->authenticationProcessingDetails;
    }

    /**
     * Gets the authenticationProtocol property value. Lists the protocol type or grant type used in the authentication. The possible values are: none, oAuth2, ropc, wsFederation, saml20, deviceCode, unknownFutureValue. For authentications that use protocols other than the possible values listed, the protocol type is listed as none.
     * @return ProtocolType|null
    */
    public function getAuthenticationProtocol(): ?ProtocolType {
        return $this->authenticationProtocol;
    }

    /**
     * Gets the authenticationRequirement property value. This holds the highest level of authentication needed through all the sign-in steps, for sign-in to succeed. Supports $filter (eq and startsWith operators only).
     * @return string|null
    */
    public function getAuthenticationRequirement(): ?string {
        return $this->authenticationRequirement;
    }

    /**
     * Gets the authenticationRequirementPolicies property value. Sources of authentication requirement, such as conditional access, per-user MFA, identity protection, and security defaults.
     * @return array<AuthenticationRequirementPolicy>|null
    */
    public function getAuthenticationRequirementPolicies(): ?array {
        return $this->authenticationRequirementPolicies;
    }

    /**
     * Gets the autonomousSystemNumber property value. The Autonomous System Number (ASN) of the network used by the actor.
     * @return int|null
    */
    public function getAutonomousSystemNumber(): ?int {
        return $this->autonomousSystemNumber;
    }

    /**
     * Gets the azureResourceId property value. Contains a fully qualified Azure Resource Manager ID of an Azure resource accessed during the sign-in.
     * @return string|null
    */
    public function getAzureResourceId(): ?string {
        return $this->azureResourceId;
    }

    /**
     * Gets the clientAppUsed property value. Identifies the client used for the sign-in activity. Modern authentication clients include Browser and modern clients. Legacy authentication clients include Exchange ActiveSync, IMAP, MAPI, SMTP, POP, and other clients. Supports $filter (eq operator only).
     * @return string|null
    */
    public function getClientAppUsed(): ?string {
        return $this->clientAppUsed;
    }

    /**
     * Gets the conditionalAccessStatus property value. Reports status of an activated conditional access policy. Possible values are: success, failure, notApplied, and unknownFutureValue. Supports $filter (eq operator only).
     * @return ConditionalAccessStatus|null
    */
    public function getConditionalAccessStatus(): ?ConditionalAccessStatus {
        return $this->conditionalAccessStatus;
    }

    /**
     * Gets the correlationId property value. The request ID sent from the client when the sign-in is initiated; used to troubleshoot sign-in activity. Supports $filter (eq operator only).
     * @return string|null
    */
    public function getCorrelationId(): ?string {
        return $this->correlationId;
    }

    /**
     * Gets the createdDateTime property value. Date and time (UTC) the sign-in was initiated. Example: midnight on Jan 1, 2014 is reported as 2014-01-01T00:00:00Z. Supports $orderby and $filter (eq, le, and ge operators only).
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the crossTenantAccessType property value. Describes the type of cross-tenant access used by the actor to access the resource. Possible values are: none, b2bCollaboration, b2bDirectConnect, microsoftSupport, serviceProvider, unknownFutureValue. If the sign in did not cross tenant boundaries, the value is none.
     * @return SignInAccessType|null
    */
    public function getCrossTenantAccessType(): ?SignInAccessType {
        return $this->crossTenantAccessType;
    }

    /**
     * Gets the deviceDetail property value. Device information from where the sign-in occurred; includes device ID, operating system, and browser. Supports $filter (eq and startsWith operators only) on browser and operatingSytem properties.
     * @return DeviceDetail|null
    */
    public function getDeviceDetail(): ?DeviceDetail {
        return $this->deviceDetail;
    }

    /**
     * Gets the federatedCredentialId property value. Contains the identifier of an application's federated identity credential, if a federated identity credential was used to sign in.
     * @return string|null
    */
    public function getFederatedCredentialId(): ?string {
        return $this->federatedCredentialId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'appDisplayName' => function (self $o, ParseNode $n) { $o->setAppDisplayName($n->getStringValue()); },
            'appId' => function (self $o, ParseNode $n) { $o->setAppId($n->getStringValue()); },
            'appliedConditionalAccessPolicies' => function (self $o, ParseNode $n) { $o->setAppliedConditionalAccessPolicies($n->getCollectionOfObjectValues(AppliedConditionalAccessPolicy::class)); },
            'authenticationContextClassReferences' => function (self $o, ParseNode $n) { $o->setAuthenticationContextClassReferences($n->getCollectionOfObjectValues(AuthenticationContext::class)); },
            'authenticationDetails' => function (self $o, ParseNode $n) { $o->setAuthenticationDetails($n->getCollectionOfObjectValues(AuthenticationDetail::class)); },
            'authenticationMethodsUsed' => function (self $o, ParseNode $n) { $o->setAuthenticationMethodsUsed($n->getCollectionOfPrimitiveValues()); },
            'authenticationProcessingDetails' => function (self $o, ParseNode $n) { $o->setAuthenticationProcessingDetails($n->getCollectionOfObjectValues(KeyValue::class)); },
            'authenticationProtocol' => function (self $o, ParseNode $n) { $o->setAuthenticationProtocol($n->getEnumValue(ProtocolType::class)); },
            'authenticationRequirement' => function (self $o, ParseNode $n) { $o->setAuthenticationRequirement($n->getStringValue()); },
            'authenticationRequirementPolicies' => function (self $o, ParseNode $n) { $o->setAuthenticationRequirementPolicies($n->getCollectionOfObjectValues(AuthenticationRequirementPolicy::class)); },
            'autonomousSystemNumber' => function (self $o, ParseNode $n) { $o->setAutonomousSystemNumber($n->getIntegerValue()); },
            'azureResourceId' => function (self $o, ParseNode $n) { $o->setAzureResourceId($n->getStringValue()); },
            'clientAppUsed' => function (self $o, ParseNode $n) { $o->setClientAppUsed($n->getStringValue()); },
            'conditionalAccessStatus' => function (self $o, ParseNode $n) { $o->setConditionalAccessStatus($n->getEnumValue(ConditionalAccessStatus::class)); },
            'correlationId' => function (self $o, ParseNode $n) { $o->setCorrelationId($n->getStringValue()); },
            'createdDateTime' => function (self $o, ParseNode $n) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'crossTenantAccessType' => function (self $o, ParseNode $n) { $o->setCrossTenantAccessType($n->getEnumValue(SignInAccessType::class)); },
            'deviceDetail' => function (self $o, ParseNode $n) { $o->setDeviceDetail($n->getObjectValue(DeviceDetail::class)); },
            'federatedCredentialId' => function (self $o, ParseNode $n) { $o->setFederatedCredentialId($n->getStringValue()); },
            'flaggedForReview' => function (self $o, ParseNode $n) { $o->setFlaggedForReview($n->getBooleanValue()); },
            'homeTenantId' => function (self $o, ParseNode $n) { $o->setHomeTenantId($n->getStringValue()); },
            'homeTenantName' => function (self $o, ParseNode $n) { $o->setHomeTenantName($n->getStringValue()); },
            'incomingTokenType' => function (self $o, ParseNode $n) { $o->setIncomingTokenType($n->getEnumValue(IncomingTokenType::class)); },
            'ipAddress' => function (self $o, ParseNode $n) { $o->setIpAddress($n->getStringValue()); },
            'ipAddressFromResourceProvider' => function (self $o, ParseNode $n) { $o->setIpAddressFromResourceProvider($n->getStringValue()); },
            'isInteractive' => function (self $o, ParseNode $n) { $o->setIsInteractive($n->getBooleanValue()); },
            'isTenantRestricted' => function (self $o, ParseNode $n) { $o->setIsTenantRestricted($n->getBooleanValue()); },
            'location' => function (self $o, ParseNode $n) { $o->setLocation($n->getObjectValue(SignInLocation::class)); },
            'mfaDetail' => function (self $o, ParseNode $n) { $o->setMfaDetail($n->getObjectValue(MfaDetail::class)); },
            'networkLocationDetails' => function (self $o, ParseNode $n) { $o->setNetworkLocationDetails($n->getCollectionOfObjectValues(NetworkLocationDetail::class)); },
            'originalRequestId' => function (self $o, ParseNode $n) { $o->setOriginalRequestId($n->getStringValue()); },
            'privateLinkDetails' => function (self $o, ParseNode $n) { $o->setPrivateLinkDetails($n->getObjectValue(PrivateLinkDetails::class)); },
            'processingTimeInMilliseconds' => function (self $o, ParseNode $n) { $o->setProcessingTimeInMilliseconds($n->getIntegerValue()); },
            'resourceDisplayName' => function (self $o, ParseNode $n) { $o->setResourceDisplayName($n->getStringValue()); },
            'resourceId' => function (self $o, ParseNode $n) { $o->setResourceId($n->getStringValue()); },
            'resourceServicePrincipalId' => function (self $o, ParseNode $n) { $o->setResourceServicePrincipalId($n->getStringValue()); },
            'resourceTenantId' => function (self $o, ParseNode $n) { $o->setResourceTenantId($n->getStringValue()); },
            'riskDetail' => function (self $o, ParseNode $n) { $o->setRiskDetail($n->getEnumValue(RiskDetail::class)); },
            'riskEventTypes_v2' => function (self $o, ParseNode $n) { $o->setRiskEventTypes_v2($n->getCollectionOfPrimitiveValues()); },
            'riskLevelAggregated' => function (self $o, ParseNode $n) { $o->setRiskLevelAggregated($n->getEnumValue(RiskLevel::class)); },
            'riskLevelDuringSignIn' => function (self $o, ParseNode $n) { $o->setRiskLevelDuringSignIn($n->getEnumValue(RiskLevel::class)); },
            'riskState' => function (self $o, ParseNode $n) { $o->setRiskState($n->getEnumValue(RiskState::class)); },
            'servicePrincipalCredentialKeyId' => function (self $o, ParseNode $n) { $o->setServicePrincipalCredentialKeyId($n->getStringValue()); },
            'servicePrincipalCredentialThumbprint' => function (self $o, ParseNode $n) { $o->setServicePrincipalCredentialThumbprint($n->getStringValue()); },
            'servicePrincipalId' => function (self $o, ParseNode $n) { $o->setServicePrincipalId($n->getStringValue()); },
            'servicePrincipalName' => function (self $o, ParseNode $n) { $o->setServicePrincipalName($n->getStringValue()); },
            'sessionLifetimePolicies' => function (self $o, ParseNode $n) { $o->setSessionLifetimePolicies($n->getCollectionOfObjectValues(SessionLifetimePolicy::class)); },
            'signInEventTypes' => function (self $o, ParseNode $n) { $o->setSignInEventTypes($n->getCollectionOfPrimitiveValues()); },
            'signInIdentifier' => function (self $o, ParseNode $n) { $o->setSignInIdentifier($n->getStringValue()); },
            'signInIdentifierType' => function (self $o, ParseNode $n) { $o->setSignInIdentifierType($n->getEnumValue(SignInIdentifierType::class)); },
            'status' => function (self $o, ParseNode $n) { $o->setStatus($n->getObjectValue(SignInStatus::class)); },
            'tokenIssuerName' => function (self $o, ParseNode $n) { $o->setTokenIssuerName($n->getStringValue()); },
            'tokenIssuerType' => function (self $o, ParseNode $n) { $o->setTokenIssuerType($n->getEnumValue(TokenIssuerType::class)); },
            'uniqueTokenIdentifier' => function (self $o, ParseNode $n) { $o->setUniqueTokenIdentifier($n->getStringValue()); },
            'userAgent' => function (self $o, ParseNode $n) { $o->setUserAgent($n->getStringValue()); },
            'userDisplayName' => function (self $o, ParseNode $n) { $o->setUserDisplayName($n->getStringValue()); },
            'userId' => function (self $o, ParseNode $n) { $o->setUserId($n->getStringValue()); },
            'userPrincipalName' => function (self $o, ParseNode $n) { $o->setUserPrincipalName($n->getStringValue()); },
            'userType' => function (self $o, ParseNode $n) { $o->setUserType($n->getEnumValue(SignInUserType::class)); },
        ]);
    }

    /**
     * Gets the flaggedForReview property value. During a failed sign in, a user may click a button in the Azure portal to mark the failed event for tenant admins. If a user clicked the button to flag the failed sign in, this value is true.
     * @return bool|null
    */
    public function getFlaggedForReview(): ?bool {
        return $this->flaggedForReview;
    }

    /**
     * Gets the homeTenantId property value. The tenant identifier of the user initiating the sign in. Not applicable in Managed Identity or service principal sign ins.
     * @return string|null
    */
    public function getHomeTenantId(): ?string {
        return $this->homeTenantId;
    }

    /**
     * Gets the homeTenantName property value. For user sign ins, the identifier of the tenant that the user is a member of. Only populated in cases where the home tenant has provided affirmative consent to Azure AD to show the tenant content.
     * @return string|null
    */
    public function getHomeTenantName(): ?string {
        return $this->homeTenantName;
    }

    /**
     * Gets the incomingTokenType property value. Indicates the token types that were presented to Azure AD to authenticate the actor in the sign in. The possible values are: none, primaryRefreshToken, saml11, saml20, unknownFutureValue.  NOTE Azure AD may have also used token types not listed in this Enum type to authenticate the actor. Do not infer the lack of a token if it is not one of the types listed.
     * @return IncomingTokenType|null
    */
    public function getIncomingTokenType(): ?IncomingTokenType {
        return $this->incomingTokenType;
    }

    /**
     * Gets the ipAddress property value. IP address of the client used to sign in. Supports $filter (eq and startsWith operators only).
     * @return string|null
    */
    public function getIpAddress(): ?string {
        return $this->ipAddress;
    }

    /**
     * Gets the ipAddressFromResourceProvider property value. The IP address a user used to reach a resource provider, used to determine Conditional Access compliance for some policies. For example, when a user interacts with Exchange Online, the IP address Exchange receives from the user may be recorded here. This value is often null.
     * @return string|null
    */
    public function getIpAddressFromResourceProvider(): ?string {
        return $this->ipAddressFromResourceProvider;
    }

    /**
     * Gets the isInteractive property value. Indicates if a sign-in is interactive or not.
     * @return bool|null
    */
    public function getIsInteractive(): ?bool {
        return $this->isInteractive;
    }

    /**
     * Gets the isTenantRestricted property value. Shows whether the sign in event was subject to an Azure AD tenant restriction policy.
     * @return bool|null
    */
    public function getIsTenantRestricted(): ?bool {
        return $this->isTenantRestricted;
    }

    /**
     * Gets the location property value. Provides the city, state, and country code where the sign-in originated. Supports $filter (eq and startsWith operators only) on city, state, and countryOrRegion properties.
     * @return SignInLocation|null
    */
    public function getLocation(): ?SignInLocation {
        return $this->location;
    }

    /**
     * Gets the mfaDetail property value. 
     * @return MfaDetail|null
    */
    public function getMfaDetail(): ?MfaDetail {
        return $this->mfaDetail;
    }

    /**
     * Gets the networkLocationDetails property value. The network location details including the type of network used and its names.
     * @return array<NetworkLocationDetail>|null
    */
    public function getNetworkLocationDetails(): ?array {
        return $this->networkLocationDetails;
    }

    /**
     * Gets the originalRequestId property value. The request identifier of the first request in the authentication sequence. Supports $filter (eq operator only).
     * @return string|null
    */
    public function getOriginalRequestId(): ?string {
        return $this->originalRequestId;
    }

    /**
     * Gets the privateLinkDetails property value. Contains information about the Azure AD Private Link policy that is associated with the sign in event.
     * @return PrivateLinkDetails|null
    */
    public function getPrivateLinkDetails(): ?PrivateLinkDetails {
        return $this->privateLinkDetails;
    }

    /**
     * Gets the processingTimeInMilliseconds property value. The request processing time in milliseconds in AD STS.
     * @return int|null
    */
    public function getProcessingTimeInMilliseconds(): ?int {
        return $this->processingTimeInMilliseconds;
    }

    /**
     * Gets the resourceDisplayName property value. Name of the resource the user signed into. Supports $filter (eq operator only).
     * @return string|null
    */
    public function getResourceDisplayName(): ?string {
        return $this->resourceDisplayName;
    }

    /**
     * Gets the resourceId property value. ID of the resource that the user signed into. Supports $filter (eq operator only).
     * @return string|null
    */
    public function getResourceId(): ?string {
        return $this->resourceId;
    }

    /**
     * Gets the resourceServicePrincipalId property value. The identifier of the service principal representing the target resource in the sign-in event.
     * @return string|null
    */
    public function getResourceServicePrincipalId(): ?string {
        return $this->resourceServicePrincipalId;
    }

    /**
     * Gets the resourceTenantId property value. The tenant identifier of the resource referenced in the sign in.
     * @return string|null
    */
    public function getResourceTenantId(): ?string {
        return $this->resourceTenantId;
    }

    /**
     * Gets the riskDetail property value. Provides the 'reason' behind a specific state of a risky user, sign-in or a risk event. The possible values are: none, adminGeneratedTemporaryPassword, userPerformedSecuredPasswordChange, userPerformedSecuredPasswordReset, adminConfirmedSigninSafe, aiConfirmedSigninSafe, userPassedMFADrivenByRiskBasedPolicy, adminDismissedAllRiskForUser, adminConfirmedSigninCompromised, unknownFutureValue. The value none means that no action has been performed on the user or sign-in so far.  Supports $filter (eq operator only).Note: Details for this property require an Azure AD Premium P2 license. Other licenses return the value hidden.
     * @return RiskDetail|null
    */
    public function getRiskDetail(): ?RiskDetail {
        return $this->riskDetail;
    }

    /**
     * Gets the riskEventTypes_v2 property value. The list of risk event types associated with the sign-in. Possible values: unlikelyTravel, anonymizedIPAddress, maliciousIPAddress, unfamiliarFeatures, malwareInfectedIPAddress, suspiciousIPAddress, leakedCredentials, investigationsThreatIntelligence,  generic, or unknownFutureValue. Supports $filter (eq and startsWith operators only).
     * @return array<string>|null
    */
    public function getRiskEventTypes_v2(): ?array {
        return $this->riskEventTypes_v2;
    }

    /**
     * Gets the riskLevelAggregated property value. Aggregated risk level. The possible values are: none, low, medium, high, hidden, and unknownFutureValue. The value hidden means the user or sign-in was not enabled for Azure AD Identity Protection. Supports $filter (eq operator only).  Note: Details for this property are only available for Azure AD Premium P2 customers. All other customers will be returned hidden.
     * @return RiskLevel|null
    */
    public function getRiskLevelAggregated(): ?RiskLevel {
        return $this->riskLevelAggregated;
    }

    /**
     * Gets the riskLevelDuringSignIn property value. Risk level during sign-in. The possible values are: none, low, medium, high, hidden, and unknownFutureValue. The value hidden means the user or sign-in was not enabled for Azure AD Identity Protection.  Supports $filter (eq operator only). Note: Details for this property are only available for Azure AD Premium P2 customers. All other customers will be returned hidden.
     * @return RiskLevel|null
    */
    public function getRiskLevelDuringSignIn(): ?RiskLevel {
        return $this->riskLevelDuringSignIn;
    }

    /**
     * Gets the riskState property value. Reports status of the risky user, sign-in, or a risk event. The possible values are: none, confirmedSafe, remediated, dismissed, atRisk, confirmedCompromised, unknownFutureValue. Supports $filter (eq operator only).
     * @return RiskState|null
    */
    public function getRiskState(): ?RiskState {
        return $this->riskState;
    }

    /**
     * Gets the servicePrincipalCredentialKeyId property value. The unique identifier of the key credential used by the service principal to authenticate.
     * @return string|null
    */
    public function getServicePrincipalCredentialKeyId(): ?string {
        return $this->servicePrincipalCredentialKeyId;
    }

    /**
     * Gets the servicePrincipalCredentialThumbprint property value. The certificate thumbprint of the certificate used by the service principal to authenticate.
     * @return string|null
    */
    public function getServicePrincipalCredentialThumbprint(): ?string {
        return $this->servicePrincipalCredentialThumbprint;
    }

    /**
     * Gets the servicePrincipalId property value. The application identifier used for sign-in. This field is populated when you are signing in using an application. Supports $filter (eq and startsWith operators only).
     * @return string|null
    */
    public function getServicePrincipalId(): ?string {
        return $this->servicePrincipalId;
    }

    /**
     * Gets the servicePrincipalName property value. The application name used for sign-in. This field is populated when you are signing in using an application. Supports $filter (eq and startsWith operators only).
     * @return string|null
    */
    public function getServicePrincipalName(): ?string {
        return $this->servicePrincipalName;
    }

    /**
     * Gets the sessionLifetimePolicies property value. Any conditional access session management policies that were applied during the sign-in event.
     * @return array<SessionLifetimePolicy>|null
    */
    public function getSessionLifetimePolicies(): ?array {
        return $this->sessionLifetimePolicies;
    }

    /**
     * Gets the signInEventTypes property value. Indicates the category of sign in that the event represents. For user sign ins, the category can be interactiveUser or nonInteractiveUser and corresponds to the value for the isInteractive property on the signin resource. For managed identity sign ins, the category is managedIdentity. For service principal sign ins, the category is servicePrincipal. Possible values are: interactiveUser, nonInteractiveUser, servicePrincipal, managedIdentity, unknownFutureValue. Supports $filter (eq, ne).
     * @return array<string>|null
    */
    public function getSignInEventTypes(): ?array {
        return $this->signInEventTypes;
    }

    /**
     * Gets the signInIdentifier property value. The identification that the user provided to sign in. It may be the userPrincipalName but it's also populated when a user signs in using other identifiers.
     * @return string|null
    */
    public function getSignInIdentifier(): ?string {
        return $this->signInIdentifier;
    }

    /**
     * Gets the signInIdentifierType property value. The type of sign in identifier. Possible values are: userPrincipalName, phoneNumber, proxyAddress, qrCode, onPremisesUserPrincipalName, unknownFutureValue.
     * @return SignInIdentifierType|null
    */
    public function getSignInIdentifierType(): ?SignInIdentifierType {
        return $this->signInIdentifierType;
    }

    /**
     * Gets the status property value. Sign-in status. Includes the error code and description of the error (in case of a sign-in failure). Supports $filter (eq operator only) on errorCode property.
     * @return SignInStatus|null
    */
    public function getStatus(): ?SignInStatus {
        return $this->status;
    }

    /**
     * Gets the tokenIssuerName property value. The name of the identity provider. For example, sts.microsoft.com. Supports $filter (eq operator only).
     * @return string|null
    */
    public function getTokenIssuerName(): ?string {
        return $this->tokenIssuerName;
    }

    /**
     * Gets the tokenIssuerType property value. The type of identity provider. The possible values are: AzureAD, ADFederationServices, UnknownFutureValue, AzureADBackupAuth, ADFederationServicesMFAAdapter, NPSExtension. Note that you must use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: AzureADBackupAuth , ADFederationServicesMFAAdapter , NPSExtension.
     * @return TokenIssuerType|null
    */
    public function getTokenIssuerType(): ?TokenIssuerType {
        return $this->tokenIssuerType;
    }

    /**
     * Gets the uniqueTokenIdentifier property value. A unique base64 encoded request identifier used to track tokens issued by Azure AD as they are redeemed at resource providers.
     * @return string|null
    */
    public function getUniqueTokenIdentifier(): ?string {
        return $this->uniqueTokenIdentifier;
    }

    /**
     * Gets the userAgent property value. The user agent information related to sign-in. Supports $filter (eq and startsWith operators only).
     * @return string|null
    */
    public function getUserAgent(): ?string {
        return $this->userAgent;
    }

    /**
     * Gets the userDisplayName property value. Display name of the user that initiated the sign-in. Supports $filter (eq and startsWith operators only).
     * @return string|null
    */
    public function getUserDisplayName(): ?string {
        return $this->userDisplayName;
    }

    /**
     * Gets the userId property value. ID of the user that initiated the sign-in. Supports $filter (eq operator only).
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Gets the userPrincipalName property value. User principal name of the user that initiated the sign-in. Supports $filter (eq and startsWith operators only).
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->userPrincipalName;
    }

    /**
     * Gets the userType property value. Identifies whether the user is a member or guest in the tenant. Possible values are: member, guest, unknownFutureValue.
     * @return SignInUserType|null
    */
    public function getUserType(): ?SignInUserType {
        return $this->userType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('appDisplayName', $this->appDisplayName);
        $writer->writeStringValue('appId', $this->appId);
        $writer->writeCollectionOfObjectValues('appliedConditionalAccessPolicies', $this->appliedConditionalAccessPolicies);
        $writer->writeCollectionOfObjectValues('authenticationContextClassReferences', $this->authenticationContextClassReferences);
        $writer->writeCollectionOfObjectValues('authenticationDetails', $this->authenticationDetails);
        $writer->writeCollectionOfPrimitiveValues('authenticationMethodsUsed', $this->authenticationMethodsUsed);
        $writer->writeCollectionOfObjectValues('authenticationProcessingDetails', $this->authenticationProcessingDetails);
        $writer->writeEnumValue('authenticationProtocol', $this->authenticationProtocol);
        $writer->writeStringValue('authenticationRequirement', $this->authenticationRequirement);
        $writer->writeCollectionOfObjectValues('authenticationRequirementPolicies', $this->authenticationRequirementPolicies);
        $writer->writeIntegerValue('autonomousSystemNumber', $this->autonomousSystemNumber);
        $writer->writeStringValue('azureResourceId', $this->azureResourceId);
        $writer->writeStringValue('clientAppUsed', $this->clientAppUsed);
        $writer->writeEnumValue('conditionalAccessStatus', $this->conditionalAccessStatus);
        $writer->writeStringValue('correlationId', $this->correlationId);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeEnumValue('crossTenantAccessType', $this->crossTenantAccessType);
        $writer->writeObjectValue('deviceDetail', $this->deviceDetail);
        $writer->writeStringValue('federatedCredentialId', $this->federatedCredentialId);
        $writer->writeBooleanValue('flaggedForReview', $this->flaggedForReview);
        $writer->writeStringValue('homeTenantId', $this->homeTenantId);
        $writer->writeStringValue('homeTenantName', $this->homeTenantName);
        $writer->writeEnumValue('incomingTokenType', $this->incomingTokenType);
        $writer->writeStringValue('ipAddress', $this->ipAddress);
        $writer->writeStringValue('ipAddressFromResourceProvider', $this->ipAddressFromResourceProvider);
        $writer->writeBooleanValue('isInteractive', $this->isInteractive);
        $writer->writeBooleanValue('isTenantRestricted', $this->isTenantRestricted);
        $writer->writeObjectValue('location', $this->location);
        $writer->writeObjectValue('mfaDetail', $this->mfaDetail);
        $writer->writeCollectionOfObjectValues('networkLocationDetails', $this->networkLocationDetails);
        $writer->writeStringValue('originalRequestId', $this->originalRequestId);
        $writer->writeObjectValue('privateLinkDetails', $this->privateLinkDetails);
        $writer->writeIntegerValue('processingTimeInMilliseconds', $this->processingTimeInMilliseconds);
        $writer->writeStringValue('resourceDisplayName', $this->resourceDisplayName);
        $writer->writeStringValue('resourceId', $this->resourceId);
        $writer->writeStringValue('resourceServicePrincipalId', $this->resourceServicePrincipalId);
        $writer->writeStringValue('resourceTenantId', $this->resourceTenantId);
        $writer->writeEnumValue('riskDetail', $this->riskDetail);
        $writer->writeCollectionOfPrimitiveValues('riskEventTypes_v2', $this->riskEventTypes_v2);
        $writer->writeEnumValue('riskLevelAggregated', $this->riskLevelAggregated);
        $writer->writeEnumValue('riskLevelDuringSignIn', $this->riskLevelDuringSignIn);
        $writer->writeEnumValue('riskState', $this->riskState);
        $writer->writeStringValue('servicePrincipalCredentialKeyId', $this->servicePrincipalCredentialKeyId);
        $writer->writeStringValue('servicePrincipalCredentialThumbprint', $this->servicePrincipalCredentialThumbprint);
        $writer->writeStringValue('servicePrincipalId', $this->servicePrincipalId);
        $writer->writeStringValue('servicePrincipalName', $this->servicePrincipalName);
        $writer->writeCollectionOfObjectValues('sessionLifetimePolicies', $this->sessionLifetimePolicies);
        $writer->writeCollectionOfPrimitiveValues('signInEventTypes', $this->signInEventTypes);
        $writer->writeStringValue('signInIdentifier', $this->signInIdentifier);
        $writer->writeEnumValue('signInIdentifierType', $this->signInIdentifierType);
        $writer->writeObjectValue('status', $this->status);
        $writer->writeStringValue('tokenIssuerName', $this->tokenIssuerName);
        $writer->writeEnumValue('tokenIssuerType', $this->tokenIssuerType);
        $writer->writeStringValue('uniqueTokenIdentifier', $this->uniqueTokenIdentifier);
        $writer->writeStringValue('userAgent', $this->userAgent);
        $writer->writeStringValue('userDisplayName', $this->userDisplayName);
        $writer->writeStringValue('userId', $this->userId);
        $writer->writeStringValue('userPrincipalName', $this->userPrincipalName);
        $writer->writeEnumValue('userType', $this->userType);
    }

    /**
     * Sets the appDisplayName property value. App name displayed in the Azure Portal. Supports $filter (eq and startsWith operators only).
     *  @param string|null $value Value to set for the appDisplayName property.
    */
    public function setAppDisplayName(?string $value ): void {
        $this->appDisplayName = $value;
    }

    /**
     * Sets the appId property value. Unique GUID representing the app ID in the Azure Active Directory. Supports $filter (eq operator only).
     *  @param string|null $value Value to set for the appId property.
    */
    public function setAppId(?string $value ): void {
        $this->appId = $value;
    }

    /**
     * Sets the appliedConditionalAccessPolicies property value. A list of conditional access policies that are triggered by the corresponding sign-in activity.
     *  @param array<AppliedConditionalAccessPolicy>|null $value Value to set for the appliedConditionalAccessPolicies property.
    */
    public function setAppliedConditionalAccessPolicies(?array $value ): void {
        $this->appliedConditionalAccessPolicies = $value;
    }

    /**
     * Sets the authenticationContextClassReferences property value. Contains a collection of values that represent the conditional access authentication contexts applied to the sign-in.
     *  @param array<AuthenticationContext>|null $value Value to set for the authenticationContextClassReferences property.
    */
    public function setAuthenticationContextClassReferences(?array $value ): void {
        $this->authenticationContextClassReferences = $value;
    }

    /**
     * Sets the authenticationDetails property value. The result of the authentication attempt and additional details on the authentication method.
     *  @param array<AuthenticationDetail>|null $value Value to set for the authenticationDetails property.
    */
    public function setAuthenticationDetails(?array $value ): void {
        $this->authenticationDetails = $value;
    }

    /**
     * Sets the authenticationMethodsUsed property value. The authentication methods used. Possible values: SMS, Authenticator App, App Verification code, Password, FIDO, PTA, or PHS.
     *  @param array<string>|null $value Value to set for the authenticationMethodsUsed property.
    */
    public function setAuthenticationMethodsUsed(?array $value ): void {
        $this->authenticationMethodsUsed = $value;
    }

    /**
     * Sets the authenticationProcessingDetails property value. Additional authentication processing details, such as the agent name in case of PTA/PHS or Server/farm name in case of federated authentication.
     *  @param array<KeyValue>|null $value Value to set for the authenticationProcessingDetails property.
    */
    public function setAuthenticationProcessingDetails(?array $value ): void {
        $this->authenticationProcessingDetails = $value;
    }

    /**
     * Sets the authenticationProtocol property value. Lists the protocol type or grant type used in the authentication. The possible values are: none, oAuth2, ropc, wsFederation, saml20, deviceCode, unknownFutureValue. For authentications that use protocols other than the possible values listed, the protocol type is listed as none.
     *  @param ProtocolType|null $value Value to set for the authenticationProtocol property.
    */
    public function setAuthenticationProtocol(?ProtocolType $value ): void {
        $this->authenticationProtocol = $value;
    }

    /**
     * Sets the authenticationRequirement property value. This holds the highest level of authentication needed through all the sign-in steps, for sign-in to succeed. Supports $filter (eq and startsWith operators only).
     *  @param string|null $value Value to set for the authenticationRequirement property.
    */
    public function setAuthenticationRequirement(?string $value ): void {
        $this->authenticationRequirement = $value;
    }

    /**
     * Sets the authenticationRequirementPolicies property value. Sources of authentication requirement, such as conditional access, per-user MFA, identity protection, and security defaults.
     *  @param array<AuthenticationRequirementPolicy>|null $value Value to set for the authenticationRequirementPolicies property.
    */
    public function setAuthenticationRequirementPolicies(?array $value ): void {
        $this->authenticationRequirementPolicies = $value;
    }

    /**
     * Sets the autonomousSystemNumber property value. The Autonomous System Number (ASN) of the network used by the actor.
     *  @param int|null $value Value to set for the autonomousSystemNumber property.
    */
    public function setAutonomousSystemNumber(?int $value ): void {
        $this->autonomousSystemNumber = $value;
    }

    /**
     * Sets the azureResourceId property value. Contains a fully qualified Azure Resource Manager ID of an Azure resource accessed during the sign-in.
     *  @param string|null $value Value to set for the azureResourceId property.
    */
    public function setAzureResourceId(?string $value ): void {
        $this->azureResourceId = $value;
    }

    /**
     * Sets the clientAppUsed property value. Identifies the client used for the sign-in activity. Modern authentication clients include Browser and modern clients. Legacy authentication clients include Exchange ActiveSync, IMAP, MAPI, SMTP, POP, and other clients. Supports $filter (eq operator only).
     *  @param string|null $value Value to set for the clientAppUsed property.
    */
    public function setClientAppUsed(?string $value ): void {
        $this->clientAppUsed = $value;
    }

    /**
     * Sets the conditionalAccessStatus property value. Reports status of an activated conditional access policy. Possible values are: success, failure, notApplied, and unknownFutureValue. Supports $filter (eq operator only).
     *  @param ConditionalAccessStatus|null $value Value to set for the conditionalAccessStatus property.
    */
    public function setConditionalAccessStatus(?ConditionalAccessStatus $value ): void {
        $this->conditionalAccessStatus = $value;
    }

    /**
     * Sets the correlationId property value. The request ID sent from the client when the sign-in is initiated; used to troubleshoot sign-in activity. Supports $filter (eq operator only).
     *  @param string|null $value Value to set for the correlationId property.
    */
    public function setCorrelationId(?string $value ): void {
        $this->correlationId = $value;
    }

    /**
     * Sets the createdDateTime property value. Date and time (UTC) the sign-in was initiated. Example: midnight on Jan 1, 2014 is reported as 2014-01-01T00:00:00Z. Supports $orderby and $filter (eq, le, and ge operators only).
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the crossTenantAccessType property value. Describes the type of cross-tenant access used by the actor to access the resource. Possible values are: none, b2bCollaboration, b2bDirectConnect, microsoftSupport, serviceProvider, unknownFutureValue. If the sign in did not cross tenant boundaries, the value is none.
     *  @param SignInAccessType|null $value Value to set for the crossTenantAccessType property.
    */
    public function setCrossTenantAccessType(?SignInAccessType $value ): void {
        $this->crossTenantAccessType = $value;
    }

    /**
     * Sets the deviceDetail property value. Device information from where the sign-in occurred; includes device ID, operating system, and browser. Supports $filter (eq and startsWith operators only) on browser and operatingSytem properties.
     *  @param DeviceDetail|null $value Value to set for the deviceDetail property.
    */
    public function setDeviceDetail(?DeviceDetail $value ): void {
        $this->deviceDetail = $value;
    }

    /**
     * Sets the federatedCredentialId property value. Contains the identifier of an application's federated identity credential, if a federated identity credential was used to sign in.
     *  @param string|null $value Value to set for the federatedCredentialId property.
    */
    public function setFederatedCredentialId(?string $value ): void {
        $this->federatedCredentialId = $value;
    }

    /**
     * Sets the flaggedForReview property value. During a failed sign in, a user may click a button in the Azure portal to mark the failed event for tenant admins. If a user clicked the button to flag the failed sign in, this value is true.
     *  @param bool|null $value Value to set for the flaggedForReview property.
    */
    public function setFlaggedForReview(?bool $value ): void {
        $this->flaggedForReview = $value;
    }

    /**
     * Sets the homeTenantId property value. The tenant identifier of the user initiating the sign in. Not applicable in Managed Identity or service principal sign ins.
     *  @param string|null $value Value to set for the homeTenantId property.
    */
    public function setHomeTenantId(?string $value ): void {
        $this->homeTenantId = $value;
    }

    /**
     * Sets the homeTenantName property value. For user sign ins, the identifier of the tenant that the user is a member of. Only populated in cases where the home tenant has provided affirmative consent to Azure AD to show the tenant content.
     *  @param string|null $value Value to set for the homeTenantName property.
    */
    public function setHomeTenantName(?string $value ): void {
        $this->homeTenantName = $value;
    }

    /**
     * Sets the incomingTokenType property value. Indicates the token types that were presented to Azure AD to authenticate the actor in the sign in. The possible values are: none, primaryRefreshToken, saml11, saml20, unknownFutureValue.  NOTE Azure AD may have also used token types not listed in this Enum type to authenticate the actor. Do not infer the lack of a token if it is not one of the types listed.
     *  @param IncomingTokenType|null $value Value to set for the incomingTokenType property.
    */
    public function setIncomingTokenType(?IncomingTokenType $value ): void {
        $this->incomingTokenType = $value;
    }

    /**
     * Sets the ipAddress property value. IP address of the client used to sign in. Supports $filter (eq and startsWith operators only).
     *  @param string|null $value Value to set for the ipAddress property.
    */
    public function setIpAddress(?string $value ): void {
        $this->ipAddress = $value;
    }

    /**
     * Sets the ipAddressFromResourceProvider property value. The IP address a user used to reach a resource provider, used to determine Conditional Access compliance for some policies. For example, when a user interacts with Exchange Online, the IP address Exchange receives from the user may be recorded here. This value is often null.
     *  @param string|null $value Value to set for the ipAddressFromResourceProvider property.
    */
    public function setIpAddressFromResourceProvider(?string $value ): void {
        $this->ipAddressFromResourceProvider = $value;
    }

    /**
     * Sets the isInteractive property value. Indicates if a sign-in is interactive or not.
     *  @param bool|null $value Value to set for the isInteractive property.
    */
    public function setIsInteractive(?bool $value ): void {
        $this->isInteractive = $value;
    }

    /**
     * Sets the isTenantRestricted property value. Shows whether the sign in event was subject to an Azure AD tenant restriction policy.
     *  @param bool|null $value Value to set for the isTenantRestricted property.
    */
    public function setIsTenantRestricted(?bool $value ): void {
        $this->isTenantRestricted = $value;
    }

    /**
     * Sets the location property value. Provides the city, state, and country code where the sign-in originated. Supports $filter (eq and startsWith operators only) on city, state, and countryOrRegion properties.
     *  @param SignInLocation|null $value Value to set for the location property.
    */
    public function setLocation(?SignInLocation $value ): void {
        $this->location = $value;
    }

    /**
     * Sets the mfaDetail property value. 
     *  @param MfaDetail|null $value Value to set for the mfaDetail property.
    */
    public function setMfaDetail(?MfaDetail $value ): void {
        $this->mfaDetail = $value;
    }

    /**
     * Sets the networkLocationDetails property value. The network location details including the type of network used and its names.
     *  @param array<NetworkLocationDetail>|null $value Value to set for the networkLocationDetails property.
    */
    public function setNetworkLocationDetails(?array $value ): void {
        $this->networkLocationDetails = $value;
    }

    /**
     * Sets the originalRequestId property value. The request identifier of the first request in the authentication sequence. Supports $filter (eq operator only).
     *  @param string|null $value Value to set for the originalRequestId property.
    */
    public function setOriginalRequestId(?string $value ): void {
        $this->originalRequestId = $value;
    }

    /**
     * Sets the privateLinkDetails property value. Contains information about the Azure AD Private Link policy that is associated with the sign in event.
     *  @param PrivateLinkDetails|null $value Value to set for the privateLinkDetails property.
    */
    public function setPrivateLinkDetails(?PrivateLinkDetails $value ): void {
        $this->privateLinkDetails = $value;
    }

    /**
     * Sets the processingTimeInMilliseconds property value. The request processing time in milliseconds in AD STS.
     *  @param int|null $value Value to set for the processingTimeInMilliseconds property.
    */
    public function setProcessingTimeInMilliseconds(?int $value ): void {
        $this->processingTimeInMilliseconds = $value;
    }

    /**
     * Sets the resourceDisplayName property value. Name of the resource the user signed into. Supports $filter (eq operator only).
     *  @param string|null $value Value to set for the resourceDisplayName property.
    */
    public function setResourceDisplayName(?string $value ): void {
        $this->resourceDisplayName = $value;
    }

    /**
     * Sets the resourceId property value. ID of the resource that the user signed into. Supports $filter (eq operator only).
     *  @param string|null $value Value to set for the resourceId property.
    */
    public function setResourceId(?string $value ): void {
        $this->resourceId = $value;
    }

    /**
     * Sets the resourceServicePrincipalId property value. The identifier of the service principal representing the target resource in the sign-in event.
     *  @param string|null $value Value to set for the resourceServicePrincipalId property.
    */
    public function setResourceServicePrincipalId(?string $value ): void {
        $this->resourceServicePrincipalId = $value;
    }

    /**
     * Sets the resourceTenantId property value. The tenant identifier of the resource referenced in the sign in.
     *  @param string|null $value Value to set for the resourceTenantId property.
    */
    public function setResourceTenantId(?string $value ): void {
        $this->resourceTenantId = $value;
    }

    /**
     * Sets the riskDetail property value. Provides the 'reason' behind a specific state of a risky user, sign-in or a risk event. The possible values are: none, adminGeneratedTemporaryPassword, userPerformedSecuredPasswordChange, userPerformedSecuredPasswordReset, adminConfirmedSigninSafe, aiConfirmedSigninSafe, userPassedMFADrivenByRiskBasedPolicy, adminDismissedAllRiskForUser, adminConfirmedSigninCompromised, unknownFutureValue. The value none means that no action has been performed on the user or sign-in so far.  Supports $filter (eq operator only).Note: Details for this property require an Azure AD Premium P2 license. Other licenses return the value hidden.
     *  @param RiskDetail|null $value Value to set for the riskDetail property.
    */
    public function setRiskDetail(?RiskDetail $value ): void {
        $this->riskDetail = $value;
    }

    /**
     * Sets the riskEventTypes_v2 property value. The list of risk event types associated with the sign-in. Possible values: unlikelyTravel, anonymizedIPAddress, maliciousIPAddress, unfamiliarFeatures, malwareInfectedIPAddress, suspiciousIPAddress, leakedCredentials, investigationsThreatIntelligence,  generic, or unknownFutureValue. Supports $filter (eq and startsWith operators only).
     *  @param array<string>|null $value Value to set for the riskEventTypes_v2 property.
    */
    public function setRiskEventTypes_v2(?array $value ): void {
        $this->riskEventTypes_v2 = $value;
    }

    /**
     * Sets the riskLevelAggregated property value. Aggregated risk level. The possible values are: none, low, medium, high, hidden, and unknownFutureValue. The value hidden means the user or sign-in was not enabled for Azure AD Identity Protection. Supports $filter (eq operator only).  Note: Details for this property are only available for Azure AD Premium P2 customers. All other customers will be returned hidden.
     *  @param RiskLevel|null $value Value to set for the riskLevelAggregated property.
    */
    public function setRiskLevelAggregated(?RiskLevel $value ): void {
        $this->riskLevelAggregated = $value;
    }

    /**
     * Sets the riskLevelDuringSignIn property value. Risk level during sign-in. The possible values are: none, low, medium, high, hidden, and unknownFutureValue. The value hidden means the user or sign-in was not enabled for Azure AD Identity Protection.  Supports $filter (eq operator only). Note: Details for this property are only available for Azure AD Premium P2 customers. All other customers will be returned hidden.
     *  @param RiskLevel|null $value Value to set for the riskLevelDuringSignIn property.
    */
    public function setRiskLevelDuringSignIn(?RiskLevel $value ): void {
        $this->riskLevelDuringSignIn = $value;
    }

    /**
     * Sets the riskState property value. Reports status of the risky user, sign-in, or a risk event. The possible values are: none, confirmedSafe, remediated, dismissed, atRisk, confirmedCompromised, unknownFutureValue. Supports $filter (eq operator only).
     *  @param RiskState|null $value Value to set for the riskState property.
    */
    public function setRiskState(?RiskState $value ): void {
        $this->riskState = $value;
    }

    /**
     * Sets the servicePrincipalCredentialKeyId property value. The unique identifier of the key credential used by the service principal to authenticate.
     *  @param string|null $value Value to set for the servicePrincipalCredentialKeyId property.
    */
    public function setServicePrincipalCredentialKeyId(?string $value ): void {
        $this->servicePrincipalCredentialKeyId = $value;
    }

    /**
     * Sets the servicePrincipalCredentialThumbprint property value. The certificate thumbprint of the certificate used by the service principal to authenticate.
     *  @param string|null $value Value to set for the servicePrincipalCredentialThumbprint property.
    */
    public function setServicePrincipalCredentialThumbprint(?string $value ): void {
        $this->servicePrincipalCredentialThumbprint = $value;
    }

    /**
     * Sets the servicePrincipalId property value. The application identifier used for sign-in. This field is populated when you are signing in using an application. Supports $filter (eq and startsWith operators only).
     *  @param string|null $value Value to set for the servicePrincipalId property.
    */
    public function setServicePrincipalId(?string $value ): void {
        $this->servicePrincipalId = $value;
    }

    /**
     * Sets the servicePrincipalName property value. The application name used for sign-in. This field is populated when you are signing in using an application. Supports $filter (eq and startsWith operators only).
     *  @param string|null $value Value to set for the servicePrincipalName property.
    */
    public function setServicePrincipalName(?string $value ): void {
        $this->servicePrincipalName = $value;
    }

    /**
     * Sets the sessionLifetimePolicies property value. Any conditional access session management policies that were applied during the sign-in event.
     *  @param array<SessionLifetimePolicy>|null $value Value to set for the sessionLifetimePolicies property.
    */
    public function setSessionLifetimePolicies(?array $value ): void {
        $this->sessionLifetimePolicies = $value;
    }

    /**
     * Sets the signInEventTypes property value. Indicates the category of sign in that the event represents. For user sign ins, the category can be interactiveUser or nonInteractiveUser and corresponds to the value for the isInteractive property on the signin resource. For managed identity sign ins, the category is managedIdentity. For service principal sign ins, the category is servicePrincipal. Possible values are: interactiveUser, nonInteractiveUser, servicePrincipal, managedIdentity, unknownFutureValue. Supports $filter (eq, ne).
     *  @param array<string>|null $value Value to set for the signInEventTypes property.
    */
    public function setSignInEventTypes(?array $value ): void {
        $this->signInEventTypes = $value;
    }

    /**
     * Sets the signInIdentifier property value. The identification that the user provided to sign in. It may be the userPrincipalName but it's also populated when a user signs in using other identifiers.
     *  @param string|null $value Value to set for the signInIdentifier property.
    */
    public function setSignInIdentifier(?string $value ): void {
        $this->signInIdentifier = $value;
    }

    /**
     * Sets the signInIdentifierType property value. The type of sign in identifier. Possible values are: userPrincipalName, phoneNumber, proxyAddress, qrCode, onPremisesUserPrincipalName, unknownFutureValue.
     *  @param SignInIdentifierType|null $value Value to set for the signInIdentifierType property.
    */
    public function setSignInIdentifierType(?SignInIdentifierType $value ): void {
        $this->signInIdentifierType = $value;
    }

    /**
     * Sets the status property value. Sign-in status. Includes the error code and description of the error (in case of a sign-in failure). Supports $filter (eq operator only) on errorCode property.
     *  @param SignInStatus|null $value Value to set for the status property.
    */
    public function setStatus(?SignInStatus $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the tokenIssuerName property value. The name of the identity provider. For example, sts.microsoft.com. Supports $filter (eq operator only).
     *  @param string|null $value Value to set for the tokenIssuerName property.
    */
    public function setTokenIssuerName(?string $value ): void {
        $this->tokenIssuerName = $value;
    }

    /**
     * Sets the tokenIssuerType property value. The type of identity provider. The possible values are: AzureAD, ADFederationServices, UnknownFutureValue, AzureADBackupAuth, ADFederationServicesMFAAdapter, NPSExtension. Note that you must use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: AzureADBackupAuth , ADFederationServicesMFAAdapter , NPSExtension.
     *  @param TokenIssuerType|null $value Value to set for the tokenIssuerType property.
    */
    public function setTokenIssuerType(?TokenIssuerType $value ): void {
        $this->tokenIssuerType = $value;
    }

    /**
     * Sets the uniqueTokenIdentifier property value. A unique base64 encoded request identifier used to track tokens issued by Azure AD as they are redeemed at resource providers.
     *  @param string|null $value Value to set for the uniqueTokenIdentifier property.
    */
    public function setUniqueTokenIdentifier(?string $value ): void {
        $this->uniqueTokenIdentifier = $value;
    }

    /**
     * Sets the userAgent property value. The user agent information related to sign-in. Supports $filter (eq and startsWith operators only).
     *  @param string|null $value Value to set for the userAgent property.
    */
    public function setUserAgent(?string $value ): void {
        $this->userAgent = $value;
    }

    /**
     * Sets the userDisplayName property value. Display name of the user that initiated the sign-in. Supports $filter (eq and startsWith operators only).
     *  @param string|null $value Value to set for the userDisplayName property.
    */
    public function setUserDisplayName(?string $value ): void {
        $this->userDisplayName = $value;
    }

    /**
     * Sets the userId property value. ID of the user that initiated the sign-in. Supports $filter (eq operator only).
     *  @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value ): void {
        $this->userId = $value;
    }

    /**
     * Sets the userPrincipalName property value. User principal name of the user that initiated the sign-in. Supports $filter (eq and startsWith operators only).
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value ): void {
        $this->userPrincipalName = $value;
    }

    /**
     * Sets the userType property value. Identifies whether the user is a member or guest in the tenant. Possible values are: member, guest, unknownFutureValue.
     *  @param SignInUserType|null $value Value to set for the userType property.
    */
    public function setUserType(?SignInUserType $value ): void {
        $this->userType = $value;
    }

}
