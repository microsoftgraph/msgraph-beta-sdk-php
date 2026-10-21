<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class AccessDecisionReason extends Enum {
    public const ALLOWED = "allowed";
    public const NOT_ENTITLED = "notEntitled";
    public const LIMIT_EXHAUSTED = "limitExhausted";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
