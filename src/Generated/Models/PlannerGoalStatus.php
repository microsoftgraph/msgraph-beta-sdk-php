<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PlannerGoalStatus extends Enum {
    public const NOT_STARTED = "notStarted";
    public const ON_TRACK = "onTrack";
    public const BEHIND = "behind";
    public const AT_RISK = "atRisk";
    public const CLOSED = "closed";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
