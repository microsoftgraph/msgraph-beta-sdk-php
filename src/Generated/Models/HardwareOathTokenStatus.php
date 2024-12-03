<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class HardwareOathTokenStatus extends Enum {
    public const AVAILABLE = "available";
    public const ASSIGNED = "assigned";
    public const ACTIVATED = "activated";
    public const FAILED_ACTIVATION = "failedActivation";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
