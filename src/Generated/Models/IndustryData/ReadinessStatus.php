<?php

namespace Microsoft\Graph\Beta\Generated\Models\IndustryData;

use Microsoft\Kiota\Abstractions\Enum;

class ReadinessStatus extends Enum {
    public const NOT_READY = "notReady";
    public const READY = "ready";
    public const FAILED = "failed";
    public const DISABLED = "disabled";
    public const EXPIRED = "expired";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
