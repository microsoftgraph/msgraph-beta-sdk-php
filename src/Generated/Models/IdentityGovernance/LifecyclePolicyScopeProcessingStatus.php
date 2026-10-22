<?php

namespace Microsoft\Graph\Beta\Generated\Models\IdentityGovernance;

use Microsoft\Kiota\Abstractions\Enum;

class LifecyclePolicyScopeProcessingStatus extends Enum {
    public const IDLE = "idle";
    public const NOT_STARTED = "notStarted";
    public const EVALUATING = "evaluating";
    public const PROCESSING = "processing";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
