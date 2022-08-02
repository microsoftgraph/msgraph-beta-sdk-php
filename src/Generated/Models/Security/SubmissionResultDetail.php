<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class SubmissionResultDetail extends Enum {
    public const NONE = 'none';
    public const UNDER_INVESTIGATION = 'underInvestigation';
    public const SIMULATED_THREAT = 'simulatedThreat';
    public const ALLOWED_BY_SEC_OPS = 'allowedBySecOps';
    public const ALLOWED_BY_THIRD_PARTY_FILTERS = 'allowedByThirdPartyFilters';
    public const MESSAGE_NOT_FOUND = 'messageNotFound';
    public const URL_FILE_SHOULD_NOT_BE_BLOCKED = 'urlFileShouldNotBeBlocked';
    public const URL_FILE_SHOULD_BE_BLOCKED = 'urlFileShouldBeBlocked';
    public const URL_FILE_CANNOT_MAKE_DECISION = 'urlFileCannotMakeDecision';
    public const DOMAIN_IMPERSONATION = 'domainImpersonation';
    public const USER_IMPERSONATION = 'userImpersonation';
    public const BRAND_IMPERSONATION = 'brandImpersonation';
    public const OUTBOUND_SHOULD_NOT_BE_BLOCKED = 'outboundShouldNotBeBlocked';
    public const OUTBOUND_SHOULD_BE_BLOCKED = 'outboundShouldBeBlocked';
    public const OUTBOUND_BULK = 'outboundBulk';
    public const OUTBOUND_CANNOT_MAKE_DECISION = 'outboundCannotMakeDecision';
    public const OUTBOUND_NOT_RESCANNED = 'outboundNotRescanned';
    public const ZERO_HOUR_AUTO_PURGE_ALLOWED = 'zeroHourAutoPurgeAllowed';
    public const ZERO_HOUR_AUTO_PURGE_BLOCKED = 'zeroHourAutoPurgeBlocked';
    public const ZERO_HOUR_AUTO_PURGE_QUARANTINE_RELEASED = 'zeroHourAutoPurgeQuarantineReleased';
    public const ON_PREMISES_SKIP = 'onPremisesSkip';
    public const ALLOWED_BY_TENANT_ALLOW_BLOCK_LIST = 'allowedByTenantAllowBlockList';
    public const BLOCKED_BY_TENANT_ALLOW_BLOCK_LIST = 'blockedByTenantAllowBlockList';
    public const ALLOWED_URL_BY_TENANT_ALLOW_BLOCK_LIST = 'allowedUrlByTenantAllowBlockList';
    public const ALLOWED_FILE_BY_TENANT_ALLOW_BLOCK_LIST = 'allowedFileByTenantAllowBlockList';
    public const ALLOWED_SENDER_BY_TENANT_ALLOW_BLOCK_LIST = 'allowedSenderByTenantAllowBlockList';
    public const ALLOWED_RECIPIENT_BY_TENANT_ALLOW_BLOCK_LIST = 'allowedRecipientByTenantAllowBlockList';
    public const BLOCKED_URL_BY_TENANT_ALLOW_BLOCK_LIST = 'blockedUrlByTenantAllowBlockList';
    public const BLOCKED_FILE_BY_TENANT_ALLOW_BLOCK_LIST = 'blockedFileByTenantAllowBlockList';
    public const BLOCKED_SENDER_BY_TENANT_ALLOW_BLOCK_LIST = 'blockedSenderByTenantAllowBlockList';
    public const BLOCKED_RECIPIENT_BY_TENANT_ALLOW_BLOCK_LIST = 'blockedRecipientByTenantAllowBlockList';
    public const ALLOWED_BY_CONNECTION = 'allowedByConnection';
    public const BLOCKED_BY_CONNECTION = 'blockedByConnection';
    public const ALLOWED_BY_EXCHANGE_TRANSPORT_RULE = 'allowedByExchangeTransportRule';
    public const BLOCKED_BY_EXCHANGE_TRANSPORT_RULE = 'blockedByExchangeTransportRule';
    public const QUARANTINE_RELEASED = 'quarantineReleased';
    public const QUARANTINE_RELEASED_THEN_BLOCKED = 'quarantineReleasedThenBlocked';
    public const JUNK_MAIL_RULE_DISABLED = 'junkMailRuleDisabled';
    public const ALLOWED_BY_USER_SETTING = 'allowedByUserSetting';
    public const BLOCKED_BY_USER_SETTING = 'blockedByUserSetting';
    public const ALLOWED_BY_TENANT = 'allowedByTenant';
    public const BLOCKED_BY_TENANT = 'blockedByTenant';
    public const INVALID_FALSE_POSITIVE = 'invalidFalsePositive';
    public const INVALID_FALSE_NEGATIVE = 'invalidFalseNegative';
    public const SPOOF_BLOCKED = 'spoofBlocked';
    public const GOOD_RECLASSIFIED_AS_BAD = 'goodReclassifiedAsBad';
    public const GOOD_RECLASSIFIED_AS_BULK = 'goodReclassifiedAsBulk';
    public const GOOD_RECLASSIFIED_AS_GOOD = 'goodReclassifiedAsGood';
    public const GOOD_RECLASSIFIED_AS_CANNOT_MAKE_DECISION = 'goodReclassifiedAsCannotMakeDecision';
    public const BAD_RECLASSIFIED_AS_GOOD = 'badReclassifiedAsGood';
    public const BAD_RECLASSIFIED_AS_BULK = 'badReclassifiedAsBulk';
    public const BAD_RECLASSIFIED_AS_BAD = 'badReclassifiedAsBad';
    public const BAD_RECLASSIFIED_AS_CANNOT_MAKE_DECISION = 'badReclassifiedAsCannotMakeDecision';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
