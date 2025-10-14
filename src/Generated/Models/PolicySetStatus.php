<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PolicySetStatus extends Enum {
    public const UNKNOWN = "unknown";
    public const VALIDATING = "validating";
    public const PARTIAL_SUCCESS = "partialSuccess";
    public const SUCCESS = "success";
    public const ERROR = "error";
    public const NOT_ASSIGNED = "notAssigned";
}
