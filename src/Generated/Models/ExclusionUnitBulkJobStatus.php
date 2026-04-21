<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ExclusionUnitBulkJobStatus extends Enum {
    public const CREATED = "created";
    public const ACTIVE = "active";
    public const COMPLETED = "completed";
    public const COMPLETED_WITH_ERRORS = "completedWithErrors";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
