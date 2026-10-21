<?php

namespace Microsoft\Graph\Beta\Generated\Models\IdentityGovernance;

use Microsoft\Kiota\Abstractions\Enum;

class LifecyclePolicyEnforcementActionState extends Enum {
    public const NONE = "none";
    public const WARNING_STATE_ENABLED = "warningStateEnabled";
    public const NON_COMPLIANCE_NOTIFICATION_SENT = "nonComplianceNotificationSent";
    public const FIRST_NOTIFICATION_SENT = "firstNotificationSent";
    public const SECOND_NOTIFICATION_SENT = "secondNotificationSent";
    public const FINAL_NOTIFICATION_SENT = "finalNotificationSent";
    public const DISABLED = "disabled";
    public const DELETED = "deleted";
    public const COMPLIANCE_RESTORED = "complianceRestored";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
