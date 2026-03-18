<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ActivityLogResultStatus extends Enum {
    public const SUCCEEDED = "succeeded";
    public const FAILED = "failed";
    public const PARTIALLY_SUCCEEDED = "partiallySucceeded";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
