<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class SyncComponentStatus extends Enum {
    public const NONE = "none";
    public const IN_PROGRESS = "inProgress";
    public const SUCCESS = "success";
    public const FAILURE = "failure";
    public const PARTIAL_SUCCESS = "partialSuccess";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
