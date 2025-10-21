<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class CloudPcExternalPartnerStatus extends Enum {
    public const NOT_AVAILABLE = "notAvailable";
    public const AVAILABLE = "available";
    public const HEALTHY = "healthy";
    public const UNHEALTHY = "unhealthy";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
