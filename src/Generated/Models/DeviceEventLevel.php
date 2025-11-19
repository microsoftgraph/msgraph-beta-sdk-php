<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class DeviceEventLevel extends Enum {
    public const NONE = "none";
    public const VERBOSE = "verbose";
    public const INFORMATION = "information";
    public const WARNING = "warning";
    public const ERROR = "error";
    public const CRITICAL = "critical";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
