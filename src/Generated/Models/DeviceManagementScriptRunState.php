<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class DeviceManagementScriptRunState extends Enum {
    public const UNKNOWN = "unknown";
    public const SUCCESS = "success";
    public const FAIL = "fail";
    public const SCRIPT_ERROR = "scriptError";
    public const PENDING = "pending";
    public const NOT_APPLICABLE = "notApplicable";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
