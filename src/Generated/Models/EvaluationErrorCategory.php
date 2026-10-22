<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class EvaluationErrorCategory extends Enum {
    public const UNKNOWN = "unknown";
    public const SYSTEM_LIMIT = "systemLimit";
    public const SYSTEM_ERROR = "systemError";
    public const ENFORCEMENT_ERROR = "enforcementError";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
