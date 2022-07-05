<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PolicyRoot implements AdditionalDataHolder, Parsable 
{
    /**
     * @var AccessReviewPolicy|null $accessReviewPolicy The policy that contains directory-level access review settings.
    */
    private ?AccessReviewPolicy $accessReviewPolicy = null;
    
    /**
     * @var array<ActivityBasedTimeoutPolicy>|null $activityBasedTimeoutPolicies The policy that controls the idle time out for web sessions for applications.
    */
    private ?array $activityBasedTimeoutPolicies = null;
    
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var AdminConsentRequestPolicy|null $adminConsentRequestPolicy The policy by which consent requests are created and managed for the entire tenant.
    */
    private ?AdminConsentRequestPolicy $adminConsentRequestPolicy = null;
    
    /**
     * @var array<AppManagementPolicy>|null $appManagementPolicies The policies that enforce app management restrictions for specific applications and service principals, overriding the defaultAppManagementPolicy.
    */
    private ?array $appManagementPolicies = null;
    
    /**
     * @var AuthenticationFlowsPolicy|null $authenticationFlowsPolicy The policy configuration of the self-service sign-up experience of external users.
    */
    private ?AuthenticationFlowsPolicy $authenticationFlowsPolicy = null;
    
    /**
     * @var AuthenticationMethodsPolicy|null $authenticationMethodsPolicy The authentication methods and the users that are allowed to use them to sign in and perform multi-factor authentication (MFA) in Azure Active Directory (Azure AD).
    */
    private ?AuthenticationMethodsPolicy $authenticationMethodsPolicy = null;
    
    /**
     * @var array<AuthorizationPolicy>|null $authorizationPolicy The policy that controls Azure AD authorization settings.
    */
    private ?array $authorizationPolicy = null;
    
    /**
     * @var B2cAuthenticationMethodsPolicy|null $b2cAuthenticationMethodsPolicy The Azure AD B2C policies that define how end users register via local accounts.
    */
    private ?B2cAuthenticationMethodsPolicy $b2cAuthenticationMethodsPolicy = null;
    
    /**
     * @var array<ClaimsMappingPolicy>|null $claimsMappingPolicies The claim-mapping policies for WS-Fed, SAML, OAuth 2.0, and OpenID Connect protocols, for tokens issued to a specific application.
    */
    private ?array $claimsMappingPolicies = null;
    
    /**
     * @var array<ConditionalAccessPolicy>|null $conditionalAccessPolicies The custom rules that define an access scenario.
    */
    private ?array $conditionalAccessPolicies = null;
    
    /**
     * @var CrossTenantAccessPolicy|null $crossTenantAccessPolicy The custom rules that define an access scenario when interacting with external Azure AD tenants.
    */
    private ?CrossTenantAccessPolicy $crossTenantAccessPolicy = null;
    
    /**
     * @var TenantAppManagementPolicy|null $defaultAppManagementPolicy The tenant-wide policy that enforces app management restrictions for all applications and service principals.
    */
    private ?TenantAppManagementPolicy $defaultAppManagementPolicy = null;
    
    /**
     * @var DeviceRegistrationPolicy|null $deviceRegistrationPolicy The deviceRegistrationPolicy property
    */
    private ?DeviceRegistrationPolicy $deviceRegistrationPolicy = null;
    
    /**
     * @var DirectoryRoleAccessReviewPolicy|null $directoryRoleAccessReviewPolicy The directoryRoleAccessReviewPolicy property
    */
    private ?DirectoryRoleAccessReviewPolicy $directoryRoleAccessReviewPolicy = null;
    
    /**
     * @var ExternalIdentitiesPolicy|null $externalIdentitiesPolicy The externalIdentitiesPolicy property
    */
    private ?ExternalIdentitiesPolicy $externalIdentitiesPolicy = null;
    
    /**
     * @var array<FeatureRolloutPolicy>|null $featureRolloutPolicies The feature rollout policy associated with a directory object.
    */
    private ?array $featureRolloutPolicies = null;
    
    /**
     * @var array<HomeRealmDiscoveryPolicy>|null $homeRealmDiscoveryPolicies The policy to control Azure AD authentication behavior for federated users.
    */
    private ?array $homeRealmDiscoveryPolicies = null;
    
    /**
     * @var IdentitySecurityDefaultsEnforcementPolicy|null $identitySecurityDefaultsEnforcementPolicy The policy that represents the security defaults that protect against common attacks.
    */
    private ?IdentitySecurityDefaultsEnforcementPolicy $identitySecurityDefaultsEnforcementPolicy = null;
    
    /**
     * @var array<MobilityManagementPolicy>|null $mobileAppManagementPolicies The policy that defines auto-enrollment configuration for a mobility management (MDM or MAM) application.
    */
    private ?array $mobileAppManagementPolicies = null;
    
    /**
     * @var array<MobilityManagementPolicy>|null $mobileDeviceManagementPolicies The mobileDeviceManagementPolicies property
    */
    private ?array $mobileDeviceManagementPolicies = null;
    
    /**
     * @var array<PermissionGrantPolicy>|null $permissionGrantPolicies The policy that specifies the conditions under which consent can be granted.
    */
    private ?array $permissionGrantPolicies = null;
    
    /**
     * @var array<UnifiedRoleManagementPolicy>|null $roleManagementPolicies Represents the role management policies.
    */
    private ?array $roleManagementPolicies = null;
    
    /**
     * @var array<UnifiedRoleManagementPolicyAssignment>|null $roleManagementPolicyAssignments Represents the role management policy assignments.
    */
    private ?array $roleManagementPolicyAssignments = null;
    
    /**
     * @var array<ServicePrincipalCreationPolicy>|null $servicePrincipalCreationPolicies The servicePrincipalCreationPolicies property
    */
    private ?array $servicePrincipalCreationPolicies = null;
    
    /**
     * @var array<TokenIssuancePolicy>|null $tokenIssuancePolicies The policy that specifies the characteristics of SAML tokens issued by Azure AD.
    */
    private ?array $tokenIssuancePolicies = null;
    
    /**
     * @var array<TokenLifetimePolicy>|null $tokenLifetimePolicies The policy that controls the lifetime of a JWT access token, an ID token, or a SAML 1.1/2.0 token issued by Azure AD.
    */
    private ?array $tokenLifetimePolicies = null;
    
    /**
     * Instantiates a new PolicyRoot and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PolicyRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PolicyRoot {
        return new PolicyRoot();
    }

    /**
     * Gets the accessReviewPolicy property value. The policy that contains directory-level access review settings.
     * @return AccessReviewPolicy|null
    */
    public function getAccessReviewPolicy(): ?AccessReviewPolicy {
        return $this->accessReviewPolicy;
    }

    /**
     * Gets the activityBasedTimeoutPolicies property value. The policy that controls the idle time out for web sessions for applications.
     * @return array<ActivityBasedTimeoutPolicy>|null
    */
    public function getActivityBasedTimeoutPolicies(): ?array {
        return $this->activityBasedTimeoutPolicies;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the adminConsentRequestPolicy property value. The policy by which consent requests are created and managed for the entire tenant.
     * @return AdminConsentRequestPolicy|null
    */
    public function getAdminConsentRequestPolicy(): ?AdminConsentRequestPolicy {
        return $this->adminConsentRequestPolicy;
    }

    /**
     * Gets the appManagementPolicies property value. The policies that enforce app management restrictions for specific applications and service principals, overriding the defaultAppManagementPolicy.
     * @return array<AppManagementPolicy>|null
    */
    public function getAppManagementPolicies(): ?array {
        return $this->appManagementPolicies;
    }

    /**
     * Gets the authenticationFlowsPolicy property value. The policy configuration of the self-service sign-up experience of external users.
     * @return AuthenticationFlowsPolicy|null
    */
    public function getAuthenticationFlowsPolicy(): ?AuthenticationFlowsPolicy {
        return $this->authenticationFlowsPolicy;
    }

    /**
     * Gets the authenticationMethodsPolicy property value. The authentication methods and the users that are allowed to use them to sign in and perform multi-factor authentication (MFA) in Azure Active Directory (Azure AD).
     * @return AuthenticationMethodsPolicy|null
    */
    public function getAuthenticationMethodsPolicy(): ?AuthenticationMethodsPolicy {
        return $this->authenticationMethodsPolicy;
    }

    /**
     * Gets the authorizationPolicy property value. The policy that controls Azure AD authorization settings.
     * @return array<AuthorizationPolicy>|null
    */
    public function getAuthorizationPolicy(): ?array {
        return $this->authorizationPolicy;
    }

    /**
     * Gets the b2cAuthenticationMethodsPolicy property value. The Azure AD B2C policies that define how end users register via local accounts.
     * @return B2cAuthenticationMethodsPolicy|null
    */
    public function getB2cAuthenticationMethodsPolicy(): ?B2cAuthenticationMethodsPolicy {
        return $this->b2cAuthenticationMethodsPolicy;
    }

    /**
     * Gets the claimsMappingPolicies property value. The claim-mapping policies for WS-Fed, SAML, OAuth 2.0, and OpenID Connect protocols, for tokens issued to a specific application.
     * @return array<ClaimsMappingPolicy>|null
    */
    public function getClaimsMappingPolicies(): ?array {
        return $this->claimsMappingPolicies;
    }

    /**
     * Gets the conditionalAccessPolicies property value. The custom rules that define an access scenario.
     * @return array<ConditionalAccessPolicy>|null
    */
    public function getConditionalAccessPolicies(): ?array {
        return $this->conditionalAccessPolicies;
    }

    /**
     * Gets the crossTenantAccessPolicy property value. The custom rules that define an access scenario when interacting with external Azure AD tenants.
     * @return CrossTenantAccessPolicy|null
    */
    public function getCrossTenantAccessPolicy(): ?CrossTenantAccessPolicy {
        return $this->crossTenantAccessPolicy;
    }

    /**
     * Gets the defaultAppManagementPolicy property value. The tenant-wide policy that enforces app management restrictions for all applications and service principals.
     * @return TenantAppManagementPolicy|null
    */
    public function getDefaultAppManagementPolicy(): ?TenantAppManagementPolicy {
        return $this->defaultAppManagementPolicy;
    }

    /**
     * Gets the deviceRegistrationPolicy property value. The deviceRegistrationPolicy property
     * @return DeviceRegistrationPolicy|null
    */
    public function getDeviceRegistrationPolicy(): ?DeviceRegistrationPolicy {
        return $this->deviceRegistrationPolicy;
    }

    /**
     * Gets the directoryRoleAccessReviewPolicy property value. The directoryRoleAccessReviewPolicy property
     * @return DirectoryRoleAccessReviewPolicy|null
    */
    public function getDirectoryRoleAccessReviewPolicy(): ?DirectoryRoleAccessReviewPolicy {
        return $this->directoryRoleAccessReviewPolicy;
    }

    /**
     * Gets the externalIdentitiesPolicy property value. The externalIdentitiesPolicy property
     * @return ExternalIdentitiesPolicy|null
    */
    public function getExternalIdentitiesPolicy(): ?ExternalIdentitiesPolicy {
        return $this->externalIdentitiesPolicy;
    }

    /**
     * Gets the featureRolloutPolicies property value. The feature rollout policy associated with a directory object.
     * @return array<FeatureRolloutPolicy>|null
    */
    public function getFeatureRolloutPolicies(): ?array {
        return $this->featureRolloutPolicies;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'accessReviewPolicy' => function (ParseNode $n) use ($o) { $o->setAccessReviewPolicy($n->getObjectValue(array(AccessReviewPolicy::class, 'createFromDiscriminatorValue'))); },
            'activityBasedTimeoutPolicies' => function (ParseNode $n) use ($o) { $o->setActivityBasedTimeoutPolicies($n->getCollectionOfObjectValues(array(ActivityBasedTimeoutPolicy::class, 'createFromDiscriminatorValue'))); },
            'adminConsentRequestPolicy' => function (ParseNode $n) use ($o) { $o->setAdminConsentRequestPolicy($n->getObjectValue(array(AdminConsentRequestPolicy::class, 'createFromDiscriminatorValue'))); },
            'appManagementPolicies' => function (ParseNode $n) use ($o) { $o->setAppManagementPolicies($n->getCollectionOfObjectValues(array(AppManagementPolicy::class, 'createFromDiscriminatorValue'))); },
            'authenticationFlowsPolicy' => function (ParseNode $n) use ($o) { $o->setAuthenticationFlowsPolicy($n->getObjectValue(array(AuthenticationFlowsPolicy::class, 'createFromDiscriminatorValue'))); },
            'authenticationMethodsPolicy' => function (ParseNode $n) use ($o) { $o->setAuthenticationMethodsPolicy($n->getObjectValue(array(AuthenticationMethodsPolicy::class, 'createFromDiscriminatorValue'))); },
            'authorizationPolicy' => function (ParseNode $n) use ($o) { $o->setAuthorizationPolicy($n->getCollectionOfObjectValues(array(AuthorizationPolicy::class, 'createFromDiscriminatorValue'))); },
            'b2cAuthenticationMethodsPolicy' => function (ParseNode $n) use ($o) { $o->setB2cAuthenticationMethodsPolicy($n->getObjectValue(array(B2cAuthenticationMethodsPolicy::class, 'createFromDiscriminatorValue'))); },
            'claimsMappingPolicies' => function (ParseNode $n) use ($o) { $o->setClaimsMappingPolicies($n->getCollectionOfObjectValues(array(ClaimsMappingPolicy::class, 'createFromDiscriminatorValue'))); },
            'conditionalAccessPolicies' => function (ParseNode $n) use ($o) { $o->setConditionalAccessPolicies($n->getCollectionOfObjectValues(array(ConditionalAccessPolicy::class, 'createFromDiscriminatorValue'))); },
            'crossTenantAccessPolicy' => function (ParseNode $n) use ($o) { $o->setCrossTenantAccessPolicy($n->getObjectValue(array(CrossTenantAccessPolicy::class, 'createFromDiscriminatorValue'))); },
            'defaultAppManagementPolicy' => function (ParseNode $n) use ($o) { $o->setDefaultAppManagementPolicy($n->getObjectValue(array(TenantAppManagementPolicy::class, 'createFromDiscriminatorValue'))); },
            'deviceRegistrationPolicy' => function (ParseNode $n) use ($o) { $o->setDeviceRegistrationPolicy($n->getObjectValue(array(DeviceRegistrationPolicy::class, 'createFromDiscriminatorValue'))); },
            'directoryRoleAccessReviewPolicy' => function (ParseNode $n) use ($o) { $o->setDirectoryRoleAccessReviewPolicy($n->getObjectValue(array(DirectoryRoleAccessReviewPolicy::class, 'createFromDiscriminatorValue'))); },
            'externalIdentitiesPolicy' => function (ParseNode $n) use ($o) { $o->setExternalIdentitiesPolicy($n->getObjectValue(array(ExternalIdentitiesPolicy::class, 'createFromDiscriminatorValue'))); },
            'featureRolloutPolicies' => function (ParseNode $n) use ($o) { $o->setFeatureRolloutPolicies($n->getCollectionOfObjectValues(array(FeatureRolloutPolicy::class, 'createFromDiscriminatorValue'))); },
            'homeRealmDiscoveryPolicies' => function (ParseNode $n) use ($o) { $o->setHomeRealmDiscoveryPolicies($n->getCollectionOfObjectValues(array(HomeRealmDiscoveryPolicy::class, 'createFromDiscriminatorValue'))); },
            'identitySecurityDefaultsEnforcementPolicy' => function (ParseNode $n) use ($o) { $o->setIdentitySecurityDefaultsEnforcementPolicy($n->getObjectValue(array(IdentitySecurityDefaultsEnforcementPolicy::class, 'createFromDiscriminatorValue'))); },
            'mobileAppManagementPolicies' => function (ParseNode $n) use ($o) { $o->setMobileAppManagementPolicies($n->getCollectionOfObjectValues(array(MobilityManagementPolicy::class, 'createFromDiscriminatorValue'))); },
            'mobileDeviceManagementPolicies' => function (ParseNode $n) use ($o) { $o->setMobileDeviceManagementPolicies($n->getCollectionOfObjectValues(array(MobilityManagementPolicy::class, 'createFromDiscriminatorValue'))); },
            'permissionGrantPolicies' => function (ParseNode $n) use ($o) { $o->setPermissionGrantPolicies($n->getCollectionOfObjectValues(array(PermissionGrantPolicy::class, 'createFromDiscriminatorValue'))); },
            'roleManagementPolicies' => function (ParseNode $n) use ($o) { $o->setRoleManagementPolicies($n->getCollectionOfObjectValues(array(UnifiedRoleManagementPolicy::class, 'createFromDiscriminatorValue'))); },
            'roleManagementPolicyAssignments' => function (ParseNode $n) use ($o) { $o->setRoleManagementPolicyAssignments($n->getCollectionOfObjectValues(array(UnifiedRoleManagementPolicyAssignment::class, 'createFromDiscriminatorValue'))); },
            'servicePrincipalCreationPolicies' => function (ParseNode $n) use ($o) { $o->setServicePrincipalCreationPolicies($n->getCollectionOfObjectValues(array(ServicePrincipalCreationPolicy::class, 'createFromDiscriminatorValue'))); },
            'tokenIssuancePolicies' => function (ParseNode $n) use ($o) { $o->setTokenIssuancePolicies($n->getCollectionOfObjectValues(array(TokenIssuancePolicy::class, 'createFromDiscriminatorValue'))); },
            'tokenLifetimePolicies' => function (ParseNode $n) use ($o) { $o->setTokenLifetimePolicies($n->getCollectionOfObjectValues(array(TokenLifetimePolicy::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the homeRealmDiscoveryPolicies property value. The policy to control Azure AD authentication behavior for federated users.
     * @return array<HomeRealmDiscoveryPolicy>|null
    */
    public function getHomeRealmDiscoveryPolicies(): ?array {
        return $this->homeRealmDiscoveryPolicies;
    }

    /**
     * Gets the identitySecurityDefaultsEnforcementPolicy property value. The policy that represents the security defaults that protect against common attacks.
     * @return IdentitySecurityDefaultsEnforcementPolicy|null
    */
    public function getIdentitySecurityDefaultsEnforcementPolicy(): ?IdentitySecurityDefaultsEnforcementPolicy {
        return $this->identitySecurityDefaultsEnforcementPolicy;
    }

    /**
     * Gets the mobileAppManagementPolicies property value. The policy that defines auto-enrollment configuration for a mobility management (MDM or MAM) application.
     * @return array<MobilityManagementPolicy>|null
    */
    public function getMobileAppManagementPolicies(): ?array {
        return $this->mobileAppManagementPolicies;
    }

    /**
     * Gets the mobileDeviceManagementPolicies property value. The mobileDeviceManagementPolicies property
     * @return array<MobilityManagementPolicy>|null
    */
    public function getMobileDeviceManagementPolicies(): ?array {
        return $this->mobileDeviceManagementPolicies;
    }

    /**
     * Gets the permissionGrantPolicies property value. The policy that specifies the conditions under which consent can be granted.
     * @return array<PermissionGrantPolicy>|null
    */
    public function getPermissionGrantPolicies(): ?array {
        return $this->permissionGrantPolicies;
    }

    /**
     * Gets the roleManagementPolicies property value. Represents the role management policies.
     * @return array<UnifiedRoleManagementPolicy>|null
    */
    public function getRoleManagementPolicies(): ?array {
        return $this->roleManagementPolicies;
    }

    /**
     * Gets the roleManagementPolicyAssignments property value. Represents the role management policy assignments.
     * @return array<UnifiedRoleManagementPolicyAssignment>|null
    */
    public function getRoleManagementPolicyAssignments(): ?array {
        return $this->roleManagementPolicyAssignments;
    }

    /**
     * Gets the servicePrincipalCreationPolicies property value. The servicePrincipalCreationPolicies property
     * @return array<ServicePrincipalCreationPolicy>|null
    */
    public function getServicePrincipalCreationPolicies(): ?array {
        return $this->servicePrincipalCreationPolicies;
    }

    /**
     * Gets the tokenIssuancePolicies property value. The policy that specifies the characteristics of SAML tokens issued by Azure AD.
     * @return array<TokenIssuancePolicy>|null
    */
    public function getTokenIssuancePolicies(): ?array {
        return $this->tokenIssuancePolicies;
    }

    /**
     * Gets the tokenLifetimePolicies property value. The policy that controls the lifetime of a JWT access token, an ID token, or a SAML 1.1/2.0 token issued by Azure AD.
     * @return array<TokenLifetimePolicy>|null
    */
    public function getTokenLifetimePolicies(): ?array {
        return $this->tokenLifetimePolicies;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('accessReviewPolicy', $this->accessReviewPolicy);
        $writer->writeCollectionOfObjectValues('activityBasedTimeoutPolicies', $this->activityBasedTimeoutPolicies);
        $writer->writeObjectValue('adminConsentRequestPolicy', $this->adminConsentRequestPolicy);
        $writer->writeCollectionOfObjectValues('appManagementPolicies', $this->appManagementPolicies);
        $writer->writeObjectValue('authenticationFlowsPolicy', $this->authenticationFlowsPolicy);
        $writer->writeObjectValue('authenticationMethodsPolicy', $this->authenticationMethodsPolicy);
        $writer->writeCollectionOfObjectValues('authorizationPolicy', $this->authorizationPolicy);
        $writer->writeObjectValue('b2cAuthenticationMethodsPolicy', $this->b2cAuthenticationMethodsPolicy);
        $writer->writeCollectionOfObjectValues('claimsMappingPolicies', $this->claimsMappingPolicies);
        $writer->writeCollectionOfObjectValues('conditionalAccessPolicies', $this->conditionalAccessPolicies);
        $writer->writeObjectValue('crossTenantAccessPolicy', $this->crossTenantAccessPolicy);
        $writer->writeObjectValue('defaultAppManagementPolicy', $this->defaultAppManagementPolicy);
        $writer->writeObjectValue('deviceRegistrationPolicy', $this->deviceRegistrationPolicy);
        $writer->writeObjectValue('directoryRoleAccessReviewPolicy', $this->directoryRoleAccessReviewPolicy);
        $writer->writeObjectValue('externalIdentitiesPolicy', $this->externalIdentitiesPolicy);
        $writer->writeCollectionOfObjectValues('featureRolloutPolicies', $this->featureRolloutPolicies);
        $writer->writeCollectionOfObjectValues('homeRealmDiscoveryPolicies', $this->homeRealmDiscoveryPolicies);
        $writer->writeObjectValue('identitySecurityDefaultsEnforcementPolicy', $this->identitySecurityDefaultsEnforcementPolicy);
        $writer->writeCollectionOfObjectValues('mobileAppManagementPolicies', $this->mobileAppManagementPolicies);
        $writer->writeCollectionOfObjectValues('mobileDeviceManagementPolicies', $this->mobileDeviceManagementPolicies);
        $writer->writeCollectionOfObjectValues('permissionGrantPolicies', $this->permissionGrantPolicies);
        $writer->writeCollectionOfObjectValues('roleManagementPolicies', $this->roleManagementPolicies);
        $writer->writeCollectionOfObjectValues('roleManagementPolicyAssignments', $this->roleManagementPolicyAssignments);
        $writer->writeCollectionOfObjectValues('servicePrincipalCreationPolicies', $this->servicePrincipalCreationPolicies);
        $writer->writeCollectionOfObjectValues('tokenIssuancePolicies', $this->tokenIssuancePolicies);
        $writer->writeCollectionOfObjectValues('tokenLifetimePolicies', $this->tokenLifetimePolicies);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the accessReviewPolicy property value. The policy that contains directory-level access review settings.
     *  @param AccessReviewPolicy|null $value Value to set for the accessReviewPolicy property.
    */
    public function setAccessReviewPolicy(?AccessReviewPolicy $value ): void {
        $this->accessReviewPolicy = $value;
    }

    /**
     * Sets the activityBasedTimeoutPolicies property value. The policy that controls the idle time out for web sessions for applications.
     *  @param array<ActivityBasedTimeoutPolicy>|null $value Value to set for the activityBasedTimeoutPolicies property.
    */
    public function setActivityBasedTimeoutPolicies(?array $value ): void {
        $this->activityBasedTimeoutPolicies = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the adminConsentRequestPolicy property value. The policy by which consent requests are created and managed for the entire tenant.
     *  @param AdminConsentRequestPolicy|null $value Value to set for the adminConsentRequestPolicy property.
    */
    public function setAdminConsentRequestPolicy(?AdminConsentRequestPolicy $value ): void {
        $this->adminConsentRequestPolicy = $value;
    }

    /**
     * Sets the appManagementPolicies property value. The policies that enforce app management restrictions for specific applications and service principals, overriding the defaultAppManagementPolicy.
     *  @param array<AppManagementPolicy>|null $value Value to set for the appManagementPolicies property.
    */
    public function setAppManagementPolicies(?array $value ): void {
        $this->appManagementPolicies = $value;
    }

    /**
     * Sets the authenticationFlowsPolicy property value. The policy configuration of the self-service sign-up experience of external users.
     *  @param AuthenticationFlowsPolicy|null $value Value to set for the authenticationFlowsPolicy property.
    */
    public function setAuthenticationFlowsPolicy(?AuthenticationFlowsPolicy $value ): void {
        $this->authenticationFlowsPolicy = $value;
    }

    /**
     * Sets the authenticationMethodsPolicy property value. The authentication methods and the users that are allowed to use them to sign in and perform multi-factor authentication (MFA) in Azure Active Directory (Azure AD).
     *  @param AuthenticationMethodsPolicy|null $value Value to set for the authenticationMethodsPolicy property.
    */
    public function setAuthenticationMethodsPolicy(?AuthenticationMethodsPolicy $value ): void {
        $this->authenticationMethodsPolicy = $value;
    }

    /**
     * Sets the authorizationPolicy property value. The policy that controls Azure AD authorization settings.
     *  @param array<AuthorizationPolicy>|null $value Value to set for the authorizationPolicy property.
    */
    public function setAuthorizationPolicy(?array $value ): void {
        $this->authorizationPolicy = $value;
    }

    /**
     * Sets the b2cAuthenticationMethodsPolicy property value. The Azure AD B2C policies that define how end users register via local accounts.
     *  @param B2cAuthenticationMethodsPolicy|null $value Value to set for the b2cAuthenticationMethodsPolicy property.
    */
    public function setB2cAuthenticationMethodsPolicy(?B2cAuthenticationMethodsPolicy $value ): void {
        $this->b2cAuthenticationMethodsPolicy = $value;
    }

    /**
     * Sets the claimsMappingPolicies property value. The claim-mapping policies for WS-Fed, SAML, OAuth 2.0, and OpenID Connect protocols, for tokens issued to a specific application.
     *  @param array<ClaimsMappingPolicy>|null $value Value to set for the claimsMappingPolicies property.
    */
    public function setClaimsMappingPolicies(?array $value ): void {
        $this->claimsMappingPolicies = $value;
    }

    /**
     * Sets the conditionalAccessPolicies property value. The custom rules that define an access scenario.
     *  @param array<ConditionalAccessPolicy>|null $value Value to set for the conditionalAccessPolicies property.
    */
    public function setConditionalAccessPolicies(?array $value ): void {
        $this->conditionalAccessPolicies = $value;
    }

    /**
     * Sets the crossTenantAccessPolicy property value. The custom rules that define an access scenario when interacting with external Azure AD tenants.
     *  @param CrossTenantAccessPolicy|null $value Value to set for the crossTenantAccessPolicy property.
    */
    public function setCrossTenantAccessPolicy(?CrossTenantAccessPolicy $value ): void {
        $this->crossTenantAccessPolicy = $value;
    }

    /**
     * Sets the defaultAppManagementPolicy property value. The tenant-wide policy that enforces app management restrictions for all applications and service principals.
     *  @param TenantAppManagementPolicy|null $value Value to set for the defaultAppManagementPolicy property.
    */
    public function setDefaultAppManagementPolicy(?TenantAppManagementPolicy $value ): void {
        $this->defaultAppManagementPolicy = $value;
    }

    /**
     * Sets the deviceRegistrationPolicy property value. The deviceRegistrationPolicy property
     *  @param DeviceRegistrationPolicy|null $value Value to set for the deviceRegistrationPolicy property.
    */
    public function setDeviceRegistrationPolicy(?DeviceRegistrationPolicy $value ): void {
        $this->deviceRegistrationPolicy = $value;
    }

    /**
     * Sets the directoryRoleAccessReviewPolicy property value. The directoryRoleAccessReviewPolicy property
     *  @param DirectoryRoleAccessReviewPolicy|null $value Value to set for the directoryRoleAccessReviewPolicy property.
    */
    public function setDirectoryRoleAccessReviewPolicy(?DirectoryRoleAccessReviewPolicy $value ): void {
        $this->directoryRoleAccessReviewPolicy = $value;
    }

    /**
     * Sets the externalIdentitiesPolicy property value. The externalIdentitiesPolicy property
     *  @param ExternalIdentitiesPolicy|null $value Value to set for the externalIdentitiesPolicy property.
    */
    public function setExternalIdentitiesPolicy(?ExternalIdentitiesPolicy $value ): void {
        $this->externalIdentitiesPolicy = $value;
    }

    /**
     * Sets the featureRolloutPolicies property value. The feature rollout policy associated with a directory object.
     *  @param array<FeatureRolloutPolicy>|null $value Value to set for the featureRolloutPolicies property.
    */
    public function setFeatureRolloutPolicies(?array $value ): void {
        $this->featureRolloutPolicies = $value;
    }

    /**
     * Sets the homeRealmDiscoveryPolicies property value. The policy to control Azure AD authentication behavior for federated users.
     *  @param array<HomeRealmDiscoveryPolicy>|null $value Value to set for the homeRealmDiscoveryPolicies property.
    */
    public function setHomeRealmDiscoveryPolicies(?array $value ): void {
        $this->homeRealmDiscoveryPolicies = $value;
    }

    /**
     * Sets the identitySecurityDefaultsEnforcementPolicy property value. The policy that represents the security defaults that protect against common attacks.
     *  @param IdentitySecurityDefaultsEnforcementPolicy|null $value Value to set for the identitySecurityDefaultsEnforcementPolicy property.
    */
    public function setIdentitySecurityDefaultsEnforcementPolicy(?IdentitySecurityDefaultsEnforcementPolicy $value ): void {
        $this->identitySecurityDefaultsEnforcementPolicy = $value;
    }

    /**
     * Sets the mobileAppManagementPolicies property value. The policy that defines auto-enrollment configuration for a mobility management (MDM or MAM) application.
     *  @param array<MobilityManagementPolicy>|null $value Value to set for the mobileAppManagementPolicies property.
    */
    public function setMobileAppManagementPolicies(?array $value ): void {
        $this->mobileAppManagementPolicies = $value;
    }

    /**
     * Sets the mobileDeviceManagementPolicies property value. The mobileDeviceManagementPolicies property
     *  @param array<MobilityManagementPolicy>|null $value Value to set for the mobileDeviceManagementPolicies property.
    */
    public function setMobileDeviceManagementPolicies(?array $value ): void {
        $this->mobileDeviceManagementPolicies = $value;
    }

    /**
     * Sets the permissionGrantPolicies property value. The policy that specifies the conditions under which consent can be granted.
     *  @param array<PermissionGrantPolicy>|null $value Value to set for the permissionGrantPolicies property.
    */
    public function setPermissionGrantPolicies(?array $value ): void {
        $this->permissionGrantPolicies = $value;
    }

    /**
     * Sets the roleManagementPolicies property value. Represents the role management policies.
     *  @param array<UnifiedRoleManagementPolicy>|null $value Value to set for the roleManagementPolicies property.
    */
    public function setRoleManagementPolicies(?array $value ): void {
        $this->roleManagementPolicies = $value;
    }

    /**
     * Sets the roleManagementPolicyAssignments property value. Represents the role management policy assignments.
     *  @param array<UnifiedRoleManagementPolicyAssignment>|null $value Value to set for the roleManagementPolicyAssignments property.
    */
    public function setRoleManagementPolicyAssignments(?array $value ): void {
        $this->roleManagementPolicyAssignments = $value;
    }

    /**
     * Sets the servicePrincipalCreationPolicies property value. The servicePrincipalCreationPolicies property
     *  @param array<ServicePrincipalCreationPolicy>|null $value Value to set for the servicePrincipalCreationPolicies property.
    */
    public function setServicePrincipalCreationPolicies(?array $value ): void {
        $this->servicePrincipalCreationPolicies = $value;
    }

    /**
     * Sets the tokenIssuancePolicies property value. The policy that specifies the characteristics of SAML tokens issued by Azure AD.
     *  @param array<TokenIssuancePolicy>|null $value Value to set for the tokenIssuancePolicies property.
    */
    public function setTokenIssuancePolicies(?array $value ): void {
        $this->tokenIssuancePolicies = $value;
    }

    /**
     * Sets the tokenLifetimePolicies property value. The policy that controls the lifetime of a JWT access token, an ID token, or a SAML 1.1/2.0 token issued by Azure AD.
     *  @param array<TokenLifetimePolicy>|null $value Value to set for the tokenLifetimePolicies property.
    */
    public function setTokenLifetimePolicies(?array $value ): void {
        $this->tokenLifetimePolicies = $value;
    }

}
