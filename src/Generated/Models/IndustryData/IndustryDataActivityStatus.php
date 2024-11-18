<?php

namespace Microsoft\Graph\Beta\Generated\Models\IndustryData;

use Microsoft\Kiota\Abstractions\Enum;

class IndustryDataActivityStatus extends Enum {
    public const IN_PROGRESS = "inProgress";
    public const SKIPPED = "skipped";
    public const FAILED = "failed";
    public const COMPLETED = "completed";
    public const COMPLETED_WITH_ERRORS = "completedWithErrors";
    public const COMPLETED_WITH_WARNINGS = "completedWithWarnings";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
