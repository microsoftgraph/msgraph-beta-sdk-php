<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

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
     * Gets the appDisplayName property value. The application name displayed in the Azure Portal. Supports $filter (eq and startsWith operators only).
     * @return string|null
    */
    public function getAppDisplayName(): ?string {
        return $this->getBackingStore()->get('appDisplayName');
    }

    /**
     * Gets the appId property value. The application identifier in Azure Active Directory. Supports $filter (eq operator only).
     * @return string|null
    */
    public function getAppId(): ?string {
        return $this->getBackingStore()->get('appId');
    }

    /**
     * Gets the appliedConditionalAccessPolicies property value. A list of conditional access policies that are triggered by the corresponding sign-in activity.
     * @return array<AppliedConditionalAccessPolicy>|null
    */
    public function getAppliedConditionalAccessPolicies(): ?array {
        return $this->getBackingStore()->get('appliedConditionalAccessPolicies');
    }

    /**
     * Gets the appliedEventListeners property value. Detailed information about the listeners, such as Azure Logic Apps and Azure Functions, that were triggered by the corresponding events in the sign-in event.
     * @return array<AppliedAuthenticationEventListener>|null
    */
    public function getAppliedEventListeners(): ?array {
        return $this->getBackingStore()->get('appliedEventListeners');
    }

    /**
     * Gets the authenticationAppDeviceDetails property value. Provides details about the app and device used during an Azure AD authentication step.
     * @return AuthenticationAppDeviceDetails|null
    */
    public function getAuthenticationAppDeviceDetails(): ?AuthenticationAppDeviceDetails {
        return $this->getBackingStore()->get('authenticationAppDeviceDetails');
    }

    /**
     * Gets the authenticationAppPolicyEvaluationDetails property value. Provides details of the Azure AD policies applied to a user and client authentication app during an authentication step.
     * @return array<AuthenticationAppPolicyDetails>|null
    */
    public function getAuthenticationAppPolicyEvaluationDetails(): ?array {
        return $this->getBackingStore()->get('authenticationAppPolicyEvaluationDetails');
    }

    /**
     * Gets the authenticationContextClassReferences property value. Contains a collection of values that represent the conditional access authentication contexts applied to the sign-in.
     * @return array<AuthenticationContext>|null
    */
    public function getAuthenticationContextClassReferences(): ?array {
        return $this->getBackingStore()->get('authenticationContextClassReferences');
    }

    /**
     * Gets the authenticationDetails property value. The result of the authentication attempt and additional details on the authentication method.
     * @return array<AuthenticationDetail>|null
    */
    public function getAuthenticationDetails(): ?array {
        return $this->getBackingStore()->get('authenticationDetails');
    }

    /**
     * Gets the authenticationMethodsUsed property value. The authentication methods used. Possible values: SMS, Authenticator App, App Verification code, Password, FIDO, PTA, or PHS.
     * @return array<string>|null
    */
    public function getAuthenticationMethodsUsed(): ?array {
        return $this->getBackingStore()->get('authenticationMethodsUsed');
    }

    /**
     * Gets the authenticationProcessingDetails property value. Additional authentication processing details, such as the agent name in case of PTA/PHS or Server/farm name in case of federated authentication.
     * @return array<KeyValue>|null
    */
    public function getAuthenticationProcessingDetails(): ?array {
        return $this->getBackingStore()->get('authenticationProcessingDetails');
    }

    /**
     * Gets the authenticationProtocol property value. Lists the protocol type or grant type used in the authentication. The possible values are: none, oAuth2, ropc, wsFederation, saml20, deviceCode, unknownFutureValue. For authentications that use protocols other than the possible values listed, the protocol type is listed as none.
     * @return ProtocolType|null
    */
    public function getAuthenticationProtocol(): ?ProtocolType {
        return $this->getBackingStore()->get('authenticationProtocol');
    }

    /**
     * Gets the authenticationRequirement property value. This holds the highest level of authentication needed through all the sign-in steps, for sign-in to succeed. Supports $filter (eq and startsWith operators only).
     * @return string|null
    */
    public function getAuthenticationRequirement(): ?string {
        return $this->getBackingStore()->get('authenticationRequirement');
    }

    /**
     * Gets the authenticationRequirementPolicies property value. Sources of authentication requirement, such as conditional access, per-user MFA, identity protection, and security defaults.
     * @return array<AuthenticationRequirementPolicy>|null
    */
    public function getAuthenticationRequirementPolicies(): ?array {
        return $this->getBackingStore()->get('authenticationRequirementPolicies');
    }

    /**
     * Gets the autonomousSystemNumber property value. The Autonomous System Number (ASN) of the network used by the actor.
     * @return int|null
    */
    public function getAutonomousSystemNumber(): ?int {
        return $this->getBackingStore()->get('autonomousSystemNumber');
    }

    /**
     * Gets the azureResourceId property value. Contains a fully qualified Azure Resource Manager ID of an Azure resource accessed during the sign-in.
     * @return string|null
    */
    public function getAzureResourceId(): ?string {
        return $this->getBackingStore()->get('azureResourceId');
    }

    /**
     * Gets the clientAppUsed property value. The legacy client used for sign-in activity. For example: Browser, Exchange ActiveSync, Modern clients, IMAP, MAPI, SMTP, or POP. Supports $filter (eq operator only).
     * @return string|null
    */
    public function getClientAppUsed(): ?string {
        return $this->getBackingStore()->get('clientAppUsed');
    }

    /**
     * Gets the clientCredentialType property value. Describes the credential type that a user client or service principal provided to Azure AD to authenticate itself. You may wish to review clientCredentialType to track and eliminate less secure credential types or to watch for clients and service principals using anomalous credential types. The possible values are: none, clientSecret, clientAssertion, federatedIdentityCredential, managedIdentity, certificate, unknownFutureValue.
     * @return ClientCredentialType|null
    */
    public function getClientCredentialType(): ?ClientCredentialType {
        return $this->getBackingStore()->get('clientCredentialType');
    }

    /**
     * Gets the conditionalAccessStatus property value. The status of the conditional access policy triggered. Possible values: success, failure, notApplied, or unknownFutureValue. Supports $filter (eq operator only).
     * @return ConditionalAccessStatus|null
    */
    public function getConditionalAccessStatus(): ?ConditionalAccessStatus {
        return $this->getBackingStore()->get('conditionalAccessStatus');
    }

    /**
     * Gets the correlationId property value. The identifier that's sent from the client when sign-in is initiated. This is used for troubleshooting the corresponding sign-in activity when calling for support. Supports $filter (eq operator only).
     * @return string|null
    */
    public function getCorrelationId(): ?string {
        return $this->getBackingStore()->get('correlationId');
    }

    /**
     * Gets the createdDateTime property value. The date and time the sign-in was initiated. The Timestamp type is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Supports $orderby and $filter (eq, le, and ge operators only).
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the crossTenantAccessType property value. Describes the type of cross-tenant access used by the actor to access the resource. Possible values are: none, b2bCollaboration, b2bDirectConnect, microsoftSupport, serviceProvider, unknownFutureValue. If the sign in did not cross tenant boundaries, the value is none.
     * @return SignInAccessType|null
    */
    public function getCrossTenantAccessType(): ?SignInAccessType {
        return $this->getBackingStore()->get('crossTenantAccessType');
    }

    /**
     * Gets the deviceDetail property value. The device information from where the sign-in occurred. Includes information such as deviceId, OS, and browser. Supports $filter (eq and startsWith operators only) on browser and operatingSystem properties.
     * @return DeviceDetail|null
    */
    public function getDeviceDetail(): ?DeviceDetail {
        return $this->getBackingStore()->get('deviceDetail');
    }

    /**
     * Gets the federatedCredentialId property value. Contains the identifier of an application's federated identity credential, if a federated identity credential was used to sign in.
     * @return string|null
    */
    public function getFederatedCredentialId(): ?string {
        return $this->getBackingStore()->get('federatedCredentialId');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appDisplayName' => fn(ParseNode $n) => $o->setAppDisplayName($n->getStringValue()),
            'appId' => fn(ParseNode $n) => $o->setAppId($n->getStringValue()),
            'appliedConditionalAccessPolicies' => fn(ParseNode $n) => $o->setAppliedConditionalAccessPolicies($n->getCollectionOfObjectValues([AppliedConditionalAccessPolicy::class, 'createFromDiscriminatorValue'])),
            'appliedEventListeners' => fn(ParseNode $n) => $o->setAppliedEventListeners($n->getCollectionOfObjectValues([AppliedAuthenticationEventListener::class, 'createFromDiscriminatorValue'])),
            'authenticationAppDeviceDetails' => fn(ParseNode $n) => $o->setAuthenticationAppDeviceDetails($n->getObjectValue([AuthenticationAppDeviceDetails::class, 'createFromDiscriminatorValue'])),
            'authenticationAppPolicyEvaluationDetails' => fn(ParseNode $n) => $o->setAuthenticationAppPolicyEvaluationDetails($n->getCollectionOfObjectValues([AuthenticationAppPolicyDetails::class, 'createFromDiscriminatorValue'])),
            'authenticationContextClassReferences' => fn(ParseNode $n) => $o->setAuthenticationContextClassReferences($n->getCollectionOfObjectValues([AuthenticationContext::class, 'createFromDiscriminatorValue'])),
            'authenticationDetails' => fn(ParseNode $n) => $o->setAuthenticationDetails($n->getCollectionOfObjectValues([AuthenticationDetail::class, 'createFromDiscriminatorValue'])),
            'authenticationMethodsUsed' => fn(ParseNode $n) => $o->setAuthenticationMethodsUsed($n->getCollectionOfPrimitiveValues()),
            'authenticationProcessingDetails' => fn(ParseNode $n) => $o->setAuthenticationProcessingDetails($n->getCollectionOfObjectValues([KeyValue::class, 'createFromDiscriminatorValue'])),
            'authenticationProtocol' => fn(ParseNode $n) => $o->setAuthenticationProtocol($n->getEnumValue(ProtocolType::class)),
            'authenticationRequirement' => fn(ParseNode $n) => $o->setAuthenticationRequirement($n->getStringValue()),
            'authenticationRequirementPolicies' => fn(ParseNode $n) => $o->setAuthenticationRequirementPolicies($n->getCollectionOfObjectValues([AuthenticationRequirementPolicy::class, 'createFromDiscriminatorValue'])),
            'autonomousSystemNumber' => fn(ParseNode $n) => $o->setAutonomousSystemNumber($n->getIntegerValue()),
            'azureResourceId' => fn(ParseNode $n) => $o->setAzureResourceId($n->getStringValue()),
            'clientAppUsed' => fn(ParseNode $n) => $o->setClientAppUsed($n->getStringValue()),
            'clientCredentialType' => fn(ParseNode $n) => $o->setClientCredentialType($n->getEnumValue(ClientCredentialType::class)),
            'conditionalAccessStatus' => fn(ParseNode $n) => $o->setConditionalAccessStatus($n->getEnumValue(ConditionalAccessStatus::class)),
            'correlationId' => fn(ParseNode $n) => $o->setCorrelationId($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'crossTenantAccessType' => fn(ParseNode $n) => $o->setCrossTenantAccessType($n->getEnumValue(SignInAccessType::class)),
            'deviceDetail' => fn(ParseNode $n) => $o->setDeviceDetail($n->getObjectValue([DeviceDetail::class, 'createFromDiscriminatorValue'])),
            'federatedCredentialId' => fn(ParseNode $n) => $o->setFederatedCredentialId($n->getStringValue()),
            'flaggedForReview' => fn(ParseNode $n) => $o->setFlaggedForReview($n->getBooleanValue()),
            'homeTenantId' => fn(ParseNode $n) => $o->setHomeTenantId($n->getStringValue()),
            'homeTenantName' => fn(ParseNode $n) => $o->setHomeTenantName($n->getStringValue()),
            'incomingTokenType' => fn(ParseNode $n) => $o->setIncomingTokenType($n->getEnumValue(IncomingTokenType::class)),
            'ipAddress' => fn(ParseNode $n) => $o->setIpAddress($n->getStringValue()),
            'ipAddressFromResourceProvider' => fn(ParseNode $n) => $o->setIpAddressFromResourceProvider($n->getStringValue()),
            'isInteractive' => fn(ParseNode $n) => $o->setIsInteractive($n->getBooleanValue()),
            'isTenantRestricted' => fn(ParseNode $n) => $o->setIsTenantRestricted($n->getBooleanValue()),
            'location' => fn(ParseNode $n) => $o->setLocation($n->getObjectValue([SignInLocation::class, 'createFromDiscriminatorValue'])),
            'managedServiceIdentity' => fn(ParseNode $n) => $o->setManagedServiceIdentity($n->getObjectValue([ManagedIdentity::class, 'createFromDiscriminatorValue'])),
            'mfaDetail' => fn(ParseNode $n) => $o->setMfaDetail($n->getObjectValue([MfaDetail::class, 'createFromDiscriminatorValue'])),
            'networkLocationDetails' => fn(ParseNode $n) => $o->setNetworkLocationDetails($n->getCollectionOfObjectValues([NetworkLocationDetail::class, 'createFromDiscriminatorValue'])),
            'originalRequestId' => fn(ParseNode $n) => $o->setOriginalRequestId($n->getStringValue()),
            'privateLinkDetails' => fn(ParseNode $n) => $o->setPrivateLinkDetails($n->getObjectValue([PrivateLinkDetails::class, 'createFromDiscriminatorValue'])),
            'processingTimeInMilliseconds' => fn(ParseNode $n) => $o->setProcessingTimeInMilliseconds($n->getIntegerValue()),
            'resourceDisplayName' => fn(ParseNode $n) => $o->setResourceDisplayName($n->getStringValue()),
            'resourceId' => fn(ParseNode $n) => $o->setResourceId($n->getStringValue()),
            'resourceServicePrincipalId' => fn(ParseNode $n) => $o->setResourceServicePrincipalId($n->getStringValue()),
            'resourceTenantId' => fn(ParseNode $n) => $o->setResourceTenantId($n->getStringValue()),
            'riskDetail' => fn(ParseNode $n) => $o->setRiskDetail($n->getEnumValue(RiskDetail::class)),
            'riskEventTypes_v2' => fn(ParseNode $n) => $o->setRiskEventTypesV2($n->getCollectionOfPrimitiveValues()),
            'riskLevelAggregated' => fn(ParseNode $n) => $o->setRiskLevelAggregated($n->getEnumValue(RiskLevel::class)),
            'riskLevelDuringSignIn' => fn(ParseNode $n) => $o->setRiskLevelDuringSignIn($n->getEnumValue(RiskLevel::class)),
            'riskState' => fn(ParseNode $n) => $o->setRiskState($n->getEnumValue(RiskState::class)),
            'servicePrincipalCredentialKeyId' => fn(ParseNode $n) => $o->setServicePrincipalCredentialKeyId($n->getStringValue()),
            'servicePrincipalCredentialThumbprint' => fn(ParseNode $n) => $o->setServicePrincipalCredentialThumbprint($n->getStringValue()),
            'servicePrincipalId' => fn(ParseNode $n) => $o->setServicePrincipalId($n->getStringValue()),
            'servicePrincipalName' => fn(ParseNode $n) => $o->setServicePrincipalName($n->getStringValue()),
            'sessionLifetimePolicies' => fn(ParseNode $n) => $o->setSessionLifetimePolicies($n->getCollectionOfObjectValues([SessionLifetimePolicy::class, 'createFromDiscriminatorValue'])),
            'signInEventTypes' => fn(ParseNode $n) => $o->setSignInEventTypes($n->getCollectionOfPrimitiveValues()),
            'signInIdentifier' => fn(ParseNode $n) => $o->setSignInIdentifier($n->getStringValue()),
            'signInIdentifierType' => fn(ParseNode $n) => $o->setSignInIdentifierType($n->getEnumValue(SignInIdentifierType::class)),
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
     * Gets the flaggedForReview property value. During a failed sign in, a user may click a button in the Azure portal to mark the failed event for tenant admins. If a user clicked the button to flag the failed sign in, this value is true.
     * @return bool|null
    */
    public function getFlaggedForReview(): ?bool {
        return $this->getBackingStore()->get('flaggedForReview');
    }

    /**
     * Gets the homeTenantId property value. The tenant identifier of the user initiating the sign in. Not applicable in Managed Identity or service principal sign ins.
     * @return string|null
    */
    public function getHomeTenantId(): ?string {
        return $this->getBackingStore()->get('homeTenantId');
    }

    /**
     * Gets the homeTenantName property value. For user sign ins, the identifier of the tenant that the user is a member of. Only populated in cases where the home tenant has provided affirmative consent to Azure AD to show the tenant content.
     * @return string|null
    */
    public function getHomeTenantName(): ?string {
        return $this->getBackingStore()->get('homeTenantName');
    }

    /**
     * Gets the incomingTokenType property value. Indicates the token types that were presented to Azure AD to authenticate the actor in the sign in. The possible values are: none, primaryRefreshToken, saml11, saml20, unknownFutureValue, remoteDesktopToken.  NOTE Azure AD may have also used token types not listed in this Enum type to authenticate the actor. Do not infer the lack of a token if it is not one of the types listed. Also, please note that you must use the Prefer: include-unknown-enum-members request header to get the following value(s) in this evolvable enum: remoteDesktopToken.
     * @return IncomingTokenType|null
    */
    public function getIncomingTokenType(): ?IncomingTokenType {
        return $this->getBackingStore()->get('incomingTokenType');
    }

    /**
     * Gets the ipAddress property value. The IP address of the client from where the sign-in occurred. Supports $filter (eq and startsWith operators only).
     * @return string|null
    */
    public function getIpAddress(): ?string {
        return $this->getBackingStore()->get('ipAddress');
    }

    /**
     * Gets the ipAddressFromResourceProvider property value. The IP address a user used to reach a resource provider, used to determine Conditional Access compliance for some policies. For example, when a user interacts with Exchange Online, the IP address Exchange receives from the user may be recorded here. This value is often null.
     * @return string|null
    */
    public function getIpAddressFromResourceProvider(): ?string {
        return $this->getBackingStore()->get('ipAddressFromResourceProvider');
    }

    /**
     * Gets the isInteractive property value. Indicates whether a user sign in is interactive. In interactive sign in, the user provides an authentication factor to Azure AD. These factors include passwords, responses to MFA challenges, biometric factors, or QR codes that a user provides to Azure AD or an associated app. In non-interactive sign in, the user doesn't provide an authentication factor. Instead, the client app uses a token or code to authenticate or access a resource on behalf of a user. Non-interactive sign ins are commonly used for a client to sign in on a user's behalf in a process transparent to the user.
     * @return bool|null
    */
    public function getIsInteractive(): ?bool {
        return $this->getBackingStore()->get('isInteractive');
    }

    /**
     * Gets the isTenantRestricted property value. Shows whether the sign in event was subject to an Azure AD tenant restriction policy.
     * @return bool|null
    */
    public function getIsTenantRestricted(): ?bool {
        return $this->getBackingStore()->get('isTenantRestricted');
    }

    /**
     * Gets the location property value. The city, state, and 2 letter country code from where the sign-in occurred. Supports $filter (eq and startsWith operators only) on city, state, and countryOrRegion properties.
     * @return SignInLocation|null
    */
    public function getLocation(): ?SignInLocation {
        return $this->getBackingStore()->get('location');
    }

    /**
     * Gets the managedServiceIdentity property value. Contains information about the managed identity used for the sign in, including its type and associated Azure Resource Manager (ARM) resource ID.
     * @return ManagedIdentity|null
    */
    public function getManagedServiceIdentity(): ?ManagedIdentity {
        return $this->getBackingStore()->get('managedServiceIdentity');
    }

    /**
     * Gets the mfaDetail property value. The mfaDetail property
     * @return MfaDetail|null
    */
    public function getMfaDetail(): ?MfaDetail {
        return $this->getBackingStore()->get('mfaDetail');
    }

    /**
     * Gets the networkLocationDetails property value. The network location details including the type of network used and its names.
     * @return array<NetworkLocationDetail>|null
    */
    public function getNetworkLocationDetails(): ?array {
        return $this->getBackingStore()->get('networkLocationDetails');
    }

    /**
     * Gets the originalRequestId property value. The request identifier of the first request in the authentication sequence. Supports $filter (eq operator only).
     * @return string|null
    */
    public function getOriginalRequestId(): ?string {
        return $this->getBackingStore()->get('originalRequestId');
    }

    /**
     * Gets the privateLinkDetails property value. Contains information about the Azure AD Private Link policy that is associated with the sign in event.
     * @return PrivateLinkDetails|null
    */
    public function getPrivateLinkDetails(): ?PrivateLinkDetails {
        return $this->getBackingStore()->get('privateLinkDetails');
    }

    /**
     * Gets the processingTimeInMilliseconds property value. The request processing time in milliseconds in AD STS.
     * @return int|null
    */
    public function getProcessingTimeInMilliseconds(): ?int {
        return $this->getBackingStore()->get('processingTimeInMilliseconds');
    }

    /**
     * Gets the resourceDisplayName property value. The name of the resource that the user signed in to. Supports $filter (eq operator only).
     * @return string|null
    */
    public function getResourceDisplayName(): ?string {
        return $this->getBackingStore()->get('resourceDisplayName');
    }

    /**
     * Gets the resourceId property value. The identifier of the resource that the user signed in to. Supports $filter (eq operator only).
     * @return string|null
    */
    public function getResourceId(): ?string {
        return $this->getBackingStore()->get('resourceId');
    }

    /**
     * Gets the resourceServicePrincipalId property value. The identifier of the service principal representing the target resource in the sign-in event.
     * @return string|null
    */
    public function getResourceServicePrincipalId(): ?string {
        return $this->getBackingStore()->get('resourceServicePrincipalId');
    }

    /**
     * Gets the resourceTenantId property value. The tenant identifier of the resource referenced in the sign in.
     * @return string|null
    */
    public function getResourceTenantId(): ?string {
        return $this->getBackingStore()->get('resourceTenantId');
    }

    /**
     * Gets the riskDetail property value. The reason behind a specific state of a risky user, sign-in, or a risk event. Possible values: none, adminGeneratedTemporaryPassword, userPerformedSecuredPasswordChange, userPerformedSecuredPasswordReset, adminConfirmedSigninSafe, aiConfirmedSigninSafe, userPassedMFADrivenByRiskBasedPolicy, adminDismissedAllRiskForUser, adminConfirmedSigninCompromised, or unknownFutureValue. The value none means that no action has been performed on the user or sign-in so far. Supports $filter (eq operator only). Note: Details for this property are only available for Azure AD Premium P2 customers. All other customers are returned hidden.
     * @return RiskDetail|null
    */
    public function getRiskDetail(): ?RiskDetail {
        return $this->getBackingStore()->get('riskDetail');
    }

    /**
     * Gets the riskEventTypes_v2 property value. The list of risk event types associated with the sign-in. Possible values: unlikelyTravel, anonymizedIPAddress, maliciousIPAddress, unfamiliarFeatures, malwareInfectedIPAddress, suspiciousIPAddress, leakedCredentials, investigationsThreatIntelligence,  generic, or unknownFutureValue. Supports $filter (eq and startsWith operators only).
     * @return array<string>|null
    */
    public function getRiskEventTypesV2(): ?array {
        return $this->getBackingStore()->get('riskEventTypes_v2');
    }

    /**
     * Gets the riskLevelAggregated property value. The aggregated risk level. Possible values: none, low, medium, high, hidden, or unknownFutureValue. The value hidden means the user or sign-in was not enabled for Azure AD Identity Protection. Supports $filter (eq operator only). Note: Details for this property are only available for Azure AD Premium P2 customers. All other customers are returned hidden.
     * @return RiskLevel|null
    */
    public function getRiskLevelAggregated(): ?RiskLevel {
        return $this->getBackingStore()->get('riskLevelAggregated');
    }

    /**
     * Gets the riskLevelDuringSignIn property value. The risk level during sign-in. Possible values: none, low, medium, high, hidden, or unknownFutureValue. The value hidden means the user or sign-in was not enabled for Azure AD Identity Protection. Supports $filter (eq operator only). Note: Details for this property are only available for Azure AD Premium P2 customers. All other customers are returned hidden.
     * @return RiskLevel|null
    */
    public function getRiskLevelDuringSignIn(): ?RiskLevel {
        return $this->getBackingStore()->get('riskLevelDuringSignIn');
    }

    /**
     * Gets the riskState property value. The risk state of a risky user, sign-in, or a risk event. Possible values: none, confirmedSafe, remediated, dismissed, atRisk, confirmedCompromised, or unknownFutureValue. Supports $filter (eq operator only).
     * @return RiskState|null
    */
    public function getRiskState(): ?RiskState {
        return $this->getBackingStore()->get('riskState');
    }

    /**
     * Gets the servicePrincipalCredentialKeyId property value. The unique identifier of the key credential used by the service principal to authenticate.
     * @return string|null
    */
    public function getServicePrincipalCredentialKeyId(): ?string {
        return $this->getBackingStore()->get('servicePrincipalCredentialKeyId');
    }

    /**
     * Gets the servicePrincipalCredentialThumbprint property value. The certificate thumbprint of the certificate used by the service principal to authenticate.
     * @return string|null
    */
    public function getServicePrincipalCredentialThumbprint(): ?string {
        return $this->getBackingStore()->get('servicePrincipalCredentialThumbprint');
    }

    /**
     * Gets the servicePrincipalId property value. The application identifier used for sign-in. This field is populated when you are signing in using an application. Supports $filter (eq and startsWith operators only).
     * @return string|null
    */
    public function getServicePrincipalId(): ?string {
        return $this->getBackingStore()->get('servicePrincipalId');
    }

    /**
     * Gets the servicePrincipalName property value. The application name used for sign-in. This field is populated when you are signing in using an application. Supports $filter (eq and startsWith operators only).
     * @return string|null
    */
    public function getServicePrincipalName(): ?string {
        return $this->getBackingStore()->get('servicePrincipalName');
    }

    /**
     * Gets the sessionLifetimePolicies property value. Any conditional access session management policies that were applied during the sign-in event.
     * @return array<SessionLifetimePolicy>|null
    */
    public function getSessionLifetimePolicies(): ?array {
        return $this->getBackingStore()->get('sessionLifetimePolicies');
    }

    /**
     * Gets the signInEventTypes property value. Indicates the category of sign in that the event represents. For user sign ins, the category can be interactiveUser or nonInteractiveUser and corresponds to the value for the isInteractive property on the signin resource. For managed identity sign ins, the category is managedIdentity. For service principal sign ins, the category is servicePrincipal. Possible values are: interactiveUser, nonInteractiveUser, servicePrincipal, managedIdentity, unknownFutureValue. Supports $filter (eq, ne).
     * @return array<string>|null
    */
    public function getSignInEventTypes(): ?array {
        return $this->getBackingStore()->get('signInEventTypes');
    }

    /**
     * Gets the signInIdentifier property value. The identification that the user provided to sign in. It may be the userPrincipalName but it's also populated when a user signs in using other identifiers.
     * @return string|null
    */
    public function getSignInIdentifier(): ?string {
        return $this->getBackingStore()->get('signInIdentifier');
    }

    /**
     * Gets the signInIdentifierType property value. The type of sign in identifier. Possible values are: userPrincipalName, phoneNumber, proxyAddress, qrCode, onPremisesUserPrincipalName, unknownFutureValue.
     * @return SignInIdentifierType|null
    */
    public function getSignInIdentifierType(): ?SignInIdentifierType {
        return $this->getBackingStore()->get('signInIdentifierType');
    }

    /**
     * Gets the status property value. The sign-in status. Includes the error code and description of the error (in case of a sign-in failure). Supports $filter (eq operator only) on errorCode property.
     * @return SignInStatus|null
    */
    public function getStatus(): ?SignInStatus {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Gets the tokenIssuerName property value. The name of the identity provider. For example, sts.microsoft.com. Supports $filter (eq operator only).
     * @return string|null
    */
    public function getTokenIssuerName(): ?string {
        return $this->getBackingStore()->get('tokenIssuerName');
    }

    /**
     * Gets the tokenIssuerType property value. The type of identity provider. The possible values are: AzureAD, ADFederationServices, UnknownFutureValue, AzureADBackupAuth, ADFederationServicesMFAAdapter, NPSExtension. Note that you must use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: AzureADBackupAuth , ADFederationServicesMFAAdapter , NPSExtension.
     * @return TokenIssuerType|null
    */
    public function getTokenIssuerType(): ?TokenIssuerType {
        return $this->getBackingStore()->get('tokenIssuerType');
    }

    /**
     * Gets the uniqueTokenIdentifier property value. A unique base64 encoded request identifier used to track tokens issued by Azure AD as they are redeemed at resource providers.
     * @return string|null
    */
    public function getUniqueTokenIdentifier(): ?string {
        return $this->getBackingStore()->get('uniqueTokenIdentifier');
    }

    /**
     * Gets the userAgent property value. The user agent information related to sign-in. Supports $filter (eq and startsWith operators only).
     * @return string|null
    */
    public function getUserAgent(): ?string {
        return $this->getBackingStore()->get('userAgent');
    }

    /**
     * Gets the userDisplayName property value. The display name of the user. Supports $filter (eq and startsWith operators only).
     * @return string|null
    */
    public function getUserDisplayName(): ?string {
        return $this->getBackingStore()->get('userDisplayName');
    }

    /**
     * Gets the userId property value. The identifier of the user. Supports $filter (eq operator only).
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->getBackingStore()->get('userId');
    }

    /**
     * Gets the userPrincipalName property value. The UPN of the user. Supports $filter (eq and startsWith operators only).
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->getBackingStore()->get('userPrincipalName');
    }

    /**
     * Gets the userType property value. Identifies whether the user is a member or guest in the tenant. Possible values are: member, guest, unknownFutureValue.
     * @return SignInUserType|null
    */
    public function getUserType(): ?SignInUserType {
        return $this->getBackingStore()->get('userType');
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
        $writer->writeEnumValue('conditionalAccessStatus', $this->getConditionalAccessStatus());
        $writer->writeStringValue('correlationId', $this->getCorrelationId());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeEnumValue('crossTenantAccessType', $this->getCrossTenantAccessType());
        $writer->writeObjectValue('deviceDetail', $this->getDeviceDetail());
        $writer->writeStringValue('federatedCredentialId', $this->getFederatedCredentialId());
        $writer->writeBooleanValue('flaggedForReview', $this->getFlaggedForReview());
        $writer->writeStringValue('homeTenantId', $this->getHomeTenantId());
        $writer->writeStringValue('homeTenantName', $this->getHomeTenantName());
        $writer->writeEnumValue('incomingTokenType', $this->getIncomingTokenType());
        $writer->writeStringValue('ipAddress', $this->getIpAddress());
        $writer->writeStringValue('ipAddressFromResourceProvider', $this->getIpAddressFromResourceProvider());
        $writer->writeBooleanValue('isInteractive', $this->getIsInteractive());
        $writer->writeBooleanValue('isTenantRestricted', $this->getIsTenantRestricted());
        $writer->writeObjectValue('location', $this->getLocation());
        $writer->writeObjectValue('managedServiceIdentity', $this->getManagedServiceIdentity());
        $writer->writeObjectValue('mfaDetail', $this->getMfaDetail());
        $writer->writeCollectionOfObjectValues('networkLocationDetails', $this->getNetworkLocationDetails());
        $writer->writeStringValue('originalRequestId', $this->getOriginalRequestId());
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
     * Sets the appDisplayName property value. The application name displayed in the Azure Portal. Supports $filter (eq and startsWith operators only).
     * @param string|null $value Value to set for the appDisplayName property.
    */
    public function setAppDisplayName(?string $value): void {
        $this->getBackingStore()->set('appDisplayName', $value);
    }

    /**
     * Sets the appId property value. The application identifier in Azure Active Directory. Supports $filter (eq operator only).
     * @param string|null $value Value to set for the appId property.
    */
    public function setAppId(?string $value): void {
        $this->getBackingStore()->set('appId', $value);
    }

    /**
     * Sets the appliedConditionalAccessPolicies property value. A list of conditional access policies that are triggered by the corresponding sign-in activity.
     * @param array<AppliedConditionalAccessPolicy>|null $value Value to set for the appliedConditionalAccessPolicies property.
    */
    public function setAppliedConditionalAccessPolicies(?array $value): void {
        $this->getBackingStore()->set('appliedConditionalAccessPolicies', $value);
    }

    /**
     * Sets the appliedEventListeners property value. Detailed information about the listeners, such as Azure Logic Apps and Azure Functions, that were triggered by the corresponding events in the sign-in event.
     * @param array<AppliedAuthenticationEventListener>|null $value Value to set for the appliedEventListeners property.
    */
    public function setAppliedEventListeners(?array $value): void {
        $this->getBackingStore()->set('appliedEventListeners', $value);
    }

    /**
     * Sets the authenticationAppDeviceDetails property value. Provides details about the app and device used during an Azure AD authentication step.
     * @param AuthenticationAppDeviceDetails|null $value Value to set for the authenticationAppDeviceDetails property.
    */
    public function setAuthenticationAppDeviceDetails(?AuthenticationAppDeviceDetails $value): void {
        $this->getBackingStore()->set('authenticationAppDeviceDetails', $value);
    }

    /**
     * Sets the authenticationAppPolicyEvaluationDetails property value. Provides details of the Azure AD policies applied to a user and client authentication app during an authentication step.
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
     * Sets the authenticationDetails property value. The result of the authentication attempt and additional details on the authentication method.
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
     * Sets the authenticationProcessingDetails property value. Additional authentication processing details, such as the agent name in case of PTA/PHS or Server/farm name in case of federated authentication.
     * @param array<KeyValue>|null $value Value to set for the authenticationProcessingDetails property.
    */
    public function setAuthenticationProcessingDetails(?array $value): void {
        $this->getBackingStore()->set('authenticationProcessingDetails', $value);
    }

    /**
     * Sets the authenticationProtocol property value. Lists the protocol type or grant type used in the authentication. The possible values are: none, oAuth2, ropc, wsFederation, saml20, deviceCode, unknownFutureValue. For authentications that use protocols other than the possible values listed, the protocol type is listed as none.
     * @param ProtocolType|null $value Value to set for the authenticationProtocol property.
    */
    public function setAuthenticationProtocol(?ProtocolType $value): void {
        $this->getBackingStore()->set('authenticationProtocol', $value);
    }

    /**
     * Sets the authenticationRequirement property value. This holds the highest level of authentication needed through all the sign-in steps, for sign-in to succeed. Supports $filter (eq and startsWith operators only).
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
     * Sets the clientAppUsed property value. The legacy client used for sign-in activity. For example: Browser, Exchange ActiveSync, Modern clients, IMAP, MAPI, SMTP, or POP. Supports $filter (eq operator only).
     * @param string|null $value Value to set for the clientAppUsed property.
    */
    public function setClientAppUsed(?string $value): void {
        $this->getBackingStore()->set('clientAppUsed', $value);
    }

    /**
     * Sets the clientCredentialType property value. Describes the credential type that a user client or service principal provided to Azure AD to authenticate itself. You may wish to review clientCredentialType to track and eliminate less secure credential types or to watch for clients and service principals using anomalous credential types. The possible values are: none, clientSecret, clientAssertion, federatedIdentityCredential, managedIdentity, certificate, unknownFutureValue.
     * @param ClientCredentialType|null $value Value to set for the clientCredentialType property.
    */
    public function setClientCredentialType(?ClientCredentialType $value): void {
        $this->getBackingStore()->set('clientCredentialType', $value);
    }

    /**
     * Sets the conditionalAccessStatus property value. The status of the conditional access policy triggered. Possible values: success, failure, notApplied, or unknownFutureValue. Supports $filter (eq operator only).
     * @param ConditionalAccessStatus|null $value Value to set for the conditionalAccessStatus property.
    */
    public function setConditionalAccessStatus(?ConditionalAccessStatus $value): void {
        $this->getBackingStore()->set('conditionalAccessStatus', $value);
    }

    /**
     * Sets the correlationId property value. The identifier that's sent from the client when sign-in is initiated. This is used for troubleshooting the corresponding sign-in activity when calling for support. Supports $filter (eq operator only).
     * @param string|null $value Value to set for the correlationId property.
    */
    public function setCorrelationId(?string $value): void {
        $this->getBackingStore()->set('correlationId', $value);
    }

    /**
     * Sets the createdDateTime property value. The date and time the sign-in was initiated. The Timestamp type is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Supports $orderby and $filter (eq, le, and ge operators only).
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the crossTenantAccessType property value. Describes the type of cross-tenant access used by the actor to access the resource. Possible values are: none, b2bCollaboration, b2bDirectConnect, microsoftSupport, serviceProvider, unknownFutureValue. If the sign in did not cross tenant boundaries, the value is none.
     * @param SignInAccessType|null $value Value to set for the crossTenantAccessType property.
    */
    public function setCrossTenantAccessType(?SignInAccessType $value): void {
        $this->getBackingStore()->set('crossTenantAccessType', $value);
    }

    /**
     * Sets the deviceDetail property value. The device information from where the sign-in occurred. Includes information such as deviceId, OS, and browser. Supports $filter (eq and startsWith operators only) on browser and operatingSystem properties.
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
     * Sets the flaggedForReview property value. During a failed sign in, a user may click a button in the Azure portal to mark the failed event for tenant admins. If a user clicked the button to flag the failed sign in, this value is true.
     * @param bool|null $value Value to set for the flaggedForReview property.
    */
    public function setFlaggedForReview(?bool $value): void {
        $this->getBackingStore()->set('flaggedForReview', $value);
    }

    /**
     * Sets the homeTenantId property value. The tenant identifier of the user initiating the sign in. Not applicable in Managed Identity or service principal sign ins.
     * @param string|null $value Value to set for the homeTenantId property.
    */
    public function setHomeTenantId(?string $value): void {
        $this->getBackingStore()->set('homeTenantId', $value);
    }

    /**
     * Sets the homeTenantName property value. For user sign ins, the identifier of the tenant that the user is a member of. Only populated in cases where the home tenant has provided affirmative consent to Azure AD to show the tenant content.
     * @param string|null $value Value to set for the homeTenantName property.
    */
    public function setHomeTenantName(?string $value): void {
        $this->getBackingStore()->set('homeTenantName', $value);
    }

    /**
     * Sets the incomingTokenType property value. Indicates the token types that were presented to Azure AD to authenticate the actor in the sign in. The possible values are: none, primaryRefreshToken, saml11, saml20, unknownFutureValue, remoteDesktopToken.  NOTE Azure AD may have also used token types not listed in this Enum type to authenticate the actor. Do not infer the lack of a token if it is not one of the types listed. Also, please note that you must use the Prefer: include-unknown-enum-members request header to get the following value(s) in this evolvable enum: remoteDesktopToken.
     * @param IncomingTokenType|null $value Value to set for the incomingTokenType property.
    */
    public function setIncomingTokenType(?IncomingTokenType $value): void {
        $this->getBackingStore()->set('incomingTokenType', $value);
    }

    /**
     * Sets the ipAddress property value. The IP address of the client from where the sign-in occurred. Supports $filter (eq and startsWith operators only).
     * @param string|null $value Value to set for the ipAddress property.
    */
    public function setIpAddress(?string $value): void {
        $this->getBackingStore()->set('ipAddress', $value);
    }

    /**
     * Sets the ipAddressFromResourceProvider property value. The IP address a user used to reach a resource provider, used to determine Conditional Access compliance for some policies. For example, when a user interacts with Exchange Online, the IP address Exchange receives from the user may be recorded here. This value is often null.
     * @param string|null $value Value to set for the ipAddressFromResourceProvider property.
    */
    public function setIpAddressFromResourceProvider(?string $value): void {
        $this->getBackingStore()->set('ipAddressFromResourceProvider', $value);
    }

    /**
     * Sets the isInteractive property value. Indicates whether a user sign in is interactive. In interactive sign in, the user provides an authentication factor to Azure AD. These factors include passwords, responses to MFA challenges, biometric factors, or QR codes that a user provides to Azure AD or an associated app. In non-interactive sign in, the user doesn't provide an authentication factor. Instead, the client app uses a token or code to authenticate or access a resource on behalf of a user. Non-interactive sign ins are commonly used for a client to sign in on a user's behalf in a process transparent to the user.
     * @param bool|null $value Value to set for the isInteractive property.
    */
    public function setIsInteractive(?bool $value): void {
        $this->getBackingStore()->set('isInteractive', $value);
    }

    /**
     * Sets the isTenantRestricted property value. Shows whether the sign in event was subject to an Azure AD tenant restriction policy.
     * @param bool|null $value Value to set for the isTenantRestricted property.
    */
    public function setIsTenantRestricted(?bool $value): void {
        $this->getBackingStore()->set('isTenantRestricted', $value);
    }

    /**
     * Sets the location property value. The city, state, and 2 letter country code from where the sign-in occurred. Supports $filter (eq and startsWith operators only) on city, state, and countryOrRegion properties.
     * @param SignInLocation|null $value Value to set for the location property.
    */
    public function setLocation(?SignInLocation $value): void {
        $this->getBackingStore()->set('location', $value);
    }

    /**
     * Sets the managedServiceIdentity property value. Contains information about the managed identity used for the sign in, including its type and associated Azure Resource Manager (ARM) resource ID.
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
     * Sets the originalRequestId property value. The request identifier of the first request in the authentication sequence. Supports $filter (eq operator only).
     * @param string|null $value Value to set for the originalRequestId property.
    */
    public function setOriginalRequestId(?string $value): void {
        $this->getBackingStore()->set('originalRequestId', $value);
    }

    /**
     * Sets the privateLinkDetails property value. Contains information about the Azure AD Private Link policy that is associated with the sign in event.
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
     * Sets the resourceDisplayName property value. The name of the resource that the user signed in to. Supports $filter (eq operator only).
     * @param string|null $value Value to set for the resourceDisplayName property.
    */
    public function setResourceDisplayName(?string $value): void {
        $this->getBackingStore()->set('resourceDisplayName', $value);
    }

    /**
     * Sets the resourceId property value. The identifier of the resource that the user signed in to. Supports $filter (eq operator only).
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
     * Sets the riskDetail property value. The reason behind a specific state of a risky user, sign-in, or a risk event. Possible values: none, adminGeneratedTemporaryPassword, userPerformedSecuredPasswordChange, userPerformedSecuredPasswordReset, adminConfirmedSigninSafe, aiConfirmedSigninSafe, userPassedMFADrivenByRiskBasedPolicy, adminDismissedAllRiskForUser, adminConfirmedSigninCompromised, or unknownFutureValue. The value none means that no action has been performed on the user or sign-in so far. Supports $filter (eq operator only). Note: Details for this property are only available for Azure AD Premium P2 customers. All other customers are returned hidden.
     * @param RiskDetail|null $value Value to set for the riskDetail property.
    */
    public function setRiskDetail(?RiskDetail $value): void {
        $this->getBackingStore()->set('riskDetail', $value);
    }

    /**
     * Sets the riskEventTypes_v2 property value. The list of risk event types associated with the sign-in. Possible values: unlikelyTravel, anonymizedIPAddress, maliciousIPAddress, unfamiliarFeatures, malwareInfectedIPAddress, suspiciousIPAddress, leakedCredentials, investigationsThreatIntelligence,  generic, or unknownFutureValue. Supports $filter (eq and startsWith operators only).
     * @param array<string>|null $value Value to set for the riskEventTypes_v2 property.
    */
    public function setRiskEventTypesV2(?array $value): void {
        $this->getBackingStore()->set('riskEventTypes_v2', $value);
    }

    /**
     * Sets the riskLevelAggregated property value. The aggregated risk level. Possible values: none, low, medium, high, hidden, or unknownFutureValue. The value hidden means the user or sign-in was not enabled for Azure AD Identity Protection. Supports $filter (eq operator only). Note: Details for this property are only available for Azure AD Premium P2 customers. All other customers are returned hidden.
     * @param RiskLevel|null $value Value to set for the riskLevelAggregated property.
    */
    public function setRiskLevelAggregated(?RiskLevel $value): void {
        $this->getBackingStore()->set('riskLevelAggregated', $value);
    }

    /**
     * Sets the riskLevelDuringSignIn property value. The risk level during sign-in. Possible values: none, low, medium, high, hidden, or unknownFutureValue. The value hidden means the user or sign-in was not enabled for Azure AD Identity Protection. Supports $filter (eq operator only). Note: Details for this property are only available for Azure AD Premium P2 customers. All other customers are returned hidden.
     * @param RiskLevel|null $value Value to set for the riskLevelDuringSignIn property.
    */
    public function setRiskLevelDuringSignIn(?RiskLevel $value): void {
        $this->getBackingStore()->set('riskLevelDuringSignIn', $value);
    }

    /**
     * Sets the riskState property value. The risk state of a risky user, sign-in, or a risk event. Possible values: none, confirmedSafe, remediated, dismissed, atRisk, confirmedCompromised, or unknownFutureValue. Supports $filter (eq operator only).
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
     * Sets the servicePrincipalId property value. The application identifier used for sign-in. This field is populated when you are signing in using an application. Supports $filter (eq and startsWith operators only).
     * @param string|null $value Value to set for the servicePrincipalId property.
    */
    public function setServicePrincipalId(?string $value): void {
        $this->getBackingStore()->set('servicePrincipalId', $value);
    }

    /**
     * Sets the servicePrincipalName property value. The application name used for sign-in. This field is populated when you are signing in using an application. Supports $filter (eq and startsWith operators only).
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
     * Sets the signInEventTypes property value. Indicates the category of sign in that the event represents. For user sign ins, the category can be interactiveUser or nonInteractiveUser and corresponds to the value for the isInteractive property on the signin resource. For managed identity sign ins, the category is managedIdentity. For service principal sign ins, the category is servicePrincipal. Possible values are: interactiveUser, nonInteractiveUser, servicePrincipal, managedIdentity, unknownFutureValue. Supports $filter (eq, ne).
     * @param array<string>|null $value Value to set for the signInEventTypes property.
    */
    public function setSignInEventTypes(?array $value): void {
        $this->getBackingStore()->set('signInEventTypes', $value);
    }

    /**
     * Sets the signInIdentifier property value. The identification that the user provided to sign in. It may be the userPrincipalName but it's also populated when a user signs in using other identifiers.
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
     * Sets the status property value. The sign-in status. Includes the error code and description of the error (in case of a sign-in failure). Supports $filter (eq operator only) on errorCode property.
     * @param SignInStatus|null $value Value to set for the status property.
    */
    public function setStatus(?SignInStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the tokenIssuerName property value. The name of the identity provider. For example, sts.microsoft.com. Supports $filter (eq operator only).
     * @param string|null $value Value to set for the tokenIssuerName property.
    */
    public function setTokenIssuerName(?string $value): void {
        $this->getBackingStore()->set('tokenIssuerName', $value);
    }

    /**
     * Sets the tokenIssuerType property value. The type of identity provider. The possible values are: AzureAD, ADFederationServices, UnknownFutureValue, AzureADBackupAuth, ADFederationServicesMFAAdapter, NPSExtension. Note that you must use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: AzureADBackupAuth , ADFederationServicesMFAAdapter , NPSExtension.
     * @param TokenIssuerType|null $value Value to set for the tokenIssuerType property.
    */
    public function setTokenIssuerType(?TokenIssuerType $value): void {
        $this->getBackingStore()->set('tokenIssuerType', $value);
    }

    /**
     * Sets the uniqueTokenIdentifier property value. A unique base64 encoded request identifier used to track tokens issued by Azure AD as they are redeemed at resource providers.
     * @param string|null $value Value to set for the uniqueTokenIdentifier property.
    */
    public function setUniqueTokenIdentifier(?string $value): void {
        $this->getBackingStore()->set('uniqueTokenIdentifier', $value);
    }

    /**
     * Sets the userAgent property value. The user agent information related to sign-in. Supports $filter (eq and startsWith operators only).
     * @param string|null $value Value to set for the userAgent property.
    */
    public function setUserAgent(?string $value): void {
        $this->getBackingStore()->set('userAgent', $value);
    }

    /**
     * Sets the userDisplayName property value. The display name of the user. Supports $filter (eq and startsWith operators only).
     * @param string|null $value Value to set for the userDisplayName property.
    */
    public function setUserDisplayName(?string $value): void {
        $this->getBackingStore()->set('userDisplayName', $value);
    }

    /**
     * Sets the userId property value. The identifier of the user. Supports $filter (eq operator only).
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->getBackingStore()->set('userId', $value);
    }

    /**
     * Sets the userPrincipalName property value. The UPN of the user. Supports $filter (eq and startsWith operators only).
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
