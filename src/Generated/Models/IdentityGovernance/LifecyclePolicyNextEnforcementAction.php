<?php

namespace Microsoft\Graph\Beta\Generated\Models\IdentityGovernance;

use Microsoft\Kiota\Abstractions\Enum;

class LifecyclePolicyNextEnforcementAction extends Enum {
    public const NON_COMPLIANCE_NOTIFICATION = "nonComplianceNotification";
    public const FIRST_NOTIFICATION = "firstNotification";
    public const SECOND_NOTIFICATION = "secondNotification";
    public const FINAL_NOTIFICATION = "finalNotification";
    public const DISABLE = "disable";
    public const DISABLE_NOTIFICATION = "disableNotification";
    public const DELETE = "delete";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
