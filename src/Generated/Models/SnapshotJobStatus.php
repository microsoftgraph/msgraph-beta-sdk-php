<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class SnapshotJobStatus extends Enum {
    public const NOT_STARTED = "notStarted";
    public const RUNNING = "running";
    public const SUCCEEDED = "succeeded";
    public const FAILED = "failed";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
    public const PARTIALLY_SUCCESSFUL = "partiallySuccessful";
}
