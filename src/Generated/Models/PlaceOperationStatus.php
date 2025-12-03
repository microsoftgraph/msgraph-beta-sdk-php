<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PlaceOperationStatus extends Enum {
    public const CREATED = "created";
    public const IN_PROGRESS = "inProgress";
    public const SUCCEEDED = "succeeded";
    public const FAILED = "failed";
    public const PARTIALLY_SUCCEEDED = "partiallySucceeded";
    public const EXPIRED = "expired";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
