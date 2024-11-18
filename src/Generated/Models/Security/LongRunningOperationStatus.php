<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class LongRunningOperationStatus extends Enum {
    public const NOT_STARTED = "notStarted";
    public const RUNNING = "running";
    public const SUCCEEDED = "succeeded";
    public const FAILED = "failed";
    public const SKIPPED = "skipped";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
