<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class SubmissionResultCategory extends Enum {
    public const NOT_JUNK = "notJunk";
    public const SPAM = "spam";
    public const PHISHING = "phishing";
    public const MALWARE = "malware";
    public const ALLOWED_BY_POLICY = "allowedByPolicy";
    public const BLOCKED_BY_POLICY = "blockedByPolicy";
    public const SPOOF = "spoof";
    public const UNKNOWN = "unknown";
    public const NO_RESULT_AVAILABLE = "noResultAvailable";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
    public const BEING_ANALYZED = "beingAnalyzed";
    public const NOT_SUBMITTED_TO_MICROSOFT = "notSubmittedToMicrosoft";
    public const PHISHING_SIMULATION = "phishingSimulation";
    public const ALLOWED_DUE_TO_ORGANIZATION_OVERRIDE = "allowedDueToOrganizationOverride";
    public const BLOCKED_DUE_TO_ORGANIZATION_OVERRIDE = "blockedDueToOrganizationOverride";
    public const ALLOWED_DUE_TO_USER_OVERRIDE = "allowedDueToUserOverride";
    public const BLOCKED_DUE_TO_USER_OVERRIDE = "blockedDueToUserOverride";
    public const ITEM_NOTFOUND = "itemNotfound";
    public const THREATS_FOUND = "threatsFound";
    public const NO_THREATS_FOUND = "noThreatsFound";
    public const DOMAIN_IMPERSONATION = "domainImpersonation";
    public const USER_IMPERSONATION = "userImpersonation";
    public const BRAND_IMPERSONATION = "brandImpersonation";
    public const AUTHENTICATION_FAILURE = "authenticationFailure";
    public const SPOOFED_BLOCKED = "spoofedBlocked";
    public const SPOOFED_ALLOWED = "spoofedAllowed";
    public const REASON_LOST_IN_TRANSIT = "reasonLostInTransit";
    public const BULK = "bulk";
}
