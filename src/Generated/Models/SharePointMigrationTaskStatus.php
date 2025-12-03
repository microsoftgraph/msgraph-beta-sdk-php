<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class SharePointMigrationTaskStatus extends Enum {
    public const NOT_STARTED = "notStarted";
    public const IN_PROGRESS = "inProgress";
    public const COMPLETED = "completed";
    public const CANCELLED = "cancelled";
    public const FAILED = "failed";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
