<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\CaseManagement;

use Microsoft\Kiota\Abstractions\Enum;

class TaskStatus extends Enum {
    public const NOT_SET = "notSet";
    public const NEW = "new";
    public const IN_PROGRESS = "inProgress";
    public const FAILED = "failed";
    public const PARTIALLY_COMPLETED = "partiallyCompleted";
    public const SKIPPED = "skipped";
    public const COMPLETED = "completed";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
