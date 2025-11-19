<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ApprovalOperationStatus extends Enum {
    public const SCHEDULED = "scheduled";
    public const IN_PROGRESS = "inProgress";
    public const SUCCEEDED = "succeeded";
    public const FAILED = "failed";
    public const TIMEOUT = "timeout";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
