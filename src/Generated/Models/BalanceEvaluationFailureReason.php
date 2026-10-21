<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class BalanceEvaluationFailureReason extends Enum {
    public const UPSTREAM_FAILURE = "upstreamFailure";
    public const NO_APPLICABLE_POLICY = "noApplicablePolicy";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
