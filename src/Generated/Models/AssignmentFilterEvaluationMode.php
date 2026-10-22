<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class AssignmentFilterEvaluationMode extends Enum {
    public const CHECKIN_TIME_EVALUATION = "checkinTimeEvaluation";
    public const INVENTORY_EVALUATION = "inventoryEvaluation";
    public const MIXED_EVALUATION = "mixedEvaluation";
    public const DISABLED = "disabled";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
