<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class MonitorMode extends Enum {
    public const MONITOR_ONCE = "monitorOnce";
    public const MONITOR_ONLY = "monitorOnly";
    public const APPLY_ONCE_AND_MONITOR_CONTINUOUS = "applyOnceAndMonitorContinuous";
    public const APPLY_ONCE = "applyOnce";
    public const APPLY_CONTINUOUS = "applyContinuous";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
