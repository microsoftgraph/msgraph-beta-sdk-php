<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class RequirementProvider extends Enum {
    public const USER = "user";
    public const REQUEST = "request";
    public const SERVICE_PRINCIPAL = "servicePrincipal";
    public const V1_CONDITIONAL_ACCESS = "v1ConditionalAccess";
    public const MULTI_CONDITIONAL_ACCESS = "multiConditionalAccess";
    public const TENANT_SESSION_RISK_POLICY = "tenantSessionRiskPolicy";
    public const ACCOUNT_COMPROMISE_POLICIES = "accountCompromisePolicies";
    public const V1_CONDITIONAL_ACCESS_DEPENDENCY = "v1ConditionalAccessDependency";
    public const V1_CONDITIONAL_ACCESS_POLICY_ID_REQUESTED = "v1ConditionalAccessPolicyIdRequested";
    public const MFA_REGISTRATION_REQUIRED_BY_IDENTITY_PROTECTION_POLICY = "mfaRegistrationRequiredByIdentityProtectionPolicy";
    public const BASELINE_PROTECTION = "baselineProtection";
    public const MFA_REGISTRATION_REQUIRED_BY_BASELINE_PROTECTION = "mfaRegistrationRequiredByBaselineProtection";
    public const MFA_REGISTRATION_REQUIRED_BY_MULTI_CONDITIONAL_ACCESS = "mfaRegistrationRequiredByMultiConditionalAccess";
    public const ENFORCED_FOR_CSP_ADMINS = "enforcedForCspAdmins";
    public const SECURITY_DEFAULTS = "securityDefaults";
    public const MFA_REGISTRATION_REQUIRED_BY_SECURITY_DEFAULTS = "mfaRegistrationRequiredBySecurityDefaults";
    public const PROOF_UP_CODE_REQUEST = "proofUpCodeRequest";
    public const CROSS_TENANT_OUTBOUND_RULE = "crossTenantOutboundRule";
    public const GPS_LOCATION_CONDITION = "gpsLocationCondition";
    public const RISK_BASED_POLICY = "riskBasedPolicy";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
    public const SCOPE_BASED_AUTH_REQUIREMENT_POLICY = "scopeBasedAuthRequirementPolicy";
    public const AUTHENTICATION_STRENGTHS = "authenticationStrengths";
}
