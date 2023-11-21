<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class RecommendationType extends Enum {
    public const ADFS_APPS_MIGRATION = 'adfsAppsMigration';
    public const ENABLE_DESKTOP_S_S_O = 'enableDesktopSSO';
    public const ENABLE_P_H_S = 'enablePHS';
    public const ENABLE_PROVISIONING = 'enableProvisioning';
    public const SWITCH_FROM_PER_USER_M_F_A = 'switchFromPerUserMFA';
    public const TENANT_M_F_A = 'tenantMFA';
    public const THIRD_PARTY_APPS = 'thirdPartyApps';
    public const TURN_OFF_PER_USER_M_F_A = 'turnOffPerUserMFA';
    public const USE_AUTHENTICATOR_APP = 'useAuthenticatorApp';
    public const USE_MY_APPS = 'useMyApps';
    public const STALE_APPS = 'staleApps';
    public const STALE_APP_CREDS = 'staleAppCreds';
    public const APPLICATION_CREDENTIAL_EXPIRY = 'applicationCredentialExpiry';
    public const SERVICE_PRINCIPAL_KEY_EXPIRY = 'servicePrincipalKeyExpiry';
    public const ADMIN_M_F_A_V2 = 'adminMFAV2';
    public const BLOCK_LEGACY_AUTHENTICATION = 'blockLegacyAuthentication';
    public const INTEGRATED_APPS = 'integratedApps';
    public const MFA_REGISTRATION_V2 = 'mfaRegistrationV2';
    public const PWAGE_POLICY_NEW = 'pwagePolicyNew';
    public const PASSWORD_HASH_SYNC = 'passwordHashSync';
    public const ONE_ADMIN = 'oneAdmin';
    public const ROLE_OVERLAP = 'roleOverlap';
    public const SELF_SERVICE_PASSWORD_RESET = 'selfServicePasswordReset';
    public const SIGNIN_RISK_POLICY = 'signinRiskPolicy';
    public const USER_RISK_POLICY = 'userRiskPolicy';
    public const VERIFY_APP_PUBLISHER = 'verifyAppPublisher';
    public const PRIVATE_LINK_FOR_A_A_D = 'privateLinkForAAD';
    public const APP_ROLE_ASSIGNMENTS_GROUPS = 'appRoleAssignmentsGroups';
    public const APP_ROLE_ASSIGNMENTS_USERS = 'appRoleAssignmentsUsers';
    public const MANAGED_IDENTITY = 'managedIdentity';
    public const OVERPRIVILEGED_APPS = 'overprivilegedApps';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
    public const LONG_LIVED_CREDENTIALS = 'longLivedCredentials';
    public const AAD_CONNECT_DEPRECATED = 'aadConnectDeprecated';
    public const ADAL_TO_MSAL_MIGRATION = 'adalToMsalMigration';
    public const OWNERLESS_APPS = 'ownerlessApps';
    public const INACTIVE_GUESTS = 'inactiveGuests';
}
