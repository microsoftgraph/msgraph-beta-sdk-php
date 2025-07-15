<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class IncidentTaskActionStatus extends Enum {
    public const NOT_STARTED = "notStarted";
    public const IN_PROGRESS = "inProgress";
    public const PARTIALLY_COMPLETED = "partiallyCompleted";
    public const COMPLETED = "completed";
    public const FAILED = "failed";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
