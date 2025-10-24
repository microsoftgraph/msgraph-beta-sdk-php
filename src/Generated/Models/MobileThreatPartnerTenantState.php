<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class MobileThreatPartnerTenantState extends Enum {
    public const UNAVAILABLE = "unavailable";
    public const AVAILABLE = "available";
    public const ENABLED = "enabled";
    public const UNRESPONSIVE = "unresponsive";
    public const NOT_SET_UP = "notSetUp";
    public const ERROR = "error";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
