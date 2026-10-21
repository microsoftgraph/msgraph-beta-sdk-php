<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PlannerTaskStatus extends Enum {
    public const NOT_STARTED = "notStarted";
    public const IN_PROGRESS = "inProgress";
    public const COMPLETED = "completed";
    public const BLOCKED = "blocked";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
