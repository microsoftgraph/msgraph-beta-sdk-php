<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class TeamworkDeviceHealthStatus extends Enum {
    public const UNKNOWN = "unknown";
    public const OFFLINE = "offline";
    public const CRITICAL = "critical";
    public const NON_URGENT = "nonUrgent";
    public const HEALTHY = "healthy";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
