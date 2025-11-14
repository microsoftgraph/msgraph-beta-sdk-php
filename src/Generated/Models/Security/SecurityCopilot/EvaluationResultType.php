<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\SecurityCopilot;

use Microsoft\Kiota\Abstractions\Enum;

class EvaluationResultType extends Enum {
    public const UNKNOWN = "unknown";
    public const SUCCESS = "success";
    public const ERROR = "error";
    public const NEED_ADDITIONAL_CLAIMS = "needAdditionalClaims";
    public const REJECTED = "rejected";
    public const TIMED_OUT = "timedOut";
    public const CAPACITY_EXCEEDED = "capacityExceeded";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
