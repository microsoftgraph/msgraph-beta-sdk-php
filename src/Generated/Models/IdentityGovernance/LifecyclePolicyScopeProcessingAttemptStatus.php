<?php

namespace Microsoft\Graph\Beta\Generated\Models\IdentityGovernance;

use Microsoft\Kiota\Abstractions\Enum;

class LifecyclePolicyScopeProcessingAttemptStatus extends Enum {
    public const NOT_STARTED = "notStarted";
    public const EVALUATING = "evaluating";
    public const PROCESSING = "processing";
    public const COMPLETED = "completed";
    public const FAILED = "failed";
    public const TIMED_OUT = "timedOut";
    public const INVALID_SCOPE = "invalidScope";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
