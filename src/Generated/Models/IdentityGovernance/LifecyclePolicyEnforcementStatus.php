<?php

namespace Microsoft\Graph\Beta\Generated\Models\IdentityGovernance;

use Microsoft\Kiota\Abstractions\Enum;

class LifecyclePolicyEnforcementStatus extends Enum {
    public const NOT_REQUIRED = "notRequired";
    public const NOT_STARTED = "notStarted";
    public const PROCESSING = "processing";
    public const WAITING = "waiting";
    public const ACTION_DUE = "actionDue";
    public const COMPLETE = "complete";
    public const UNKNOWN = "unknown";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
