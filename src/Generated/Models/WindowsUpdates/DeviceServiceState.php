<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use Microsoft\Kiota\Abstractions\Enum;

class DeviceServiceState extends Enum {
    public const UNKNOWN = "unknown";
    public const PENDING = "pending";
    public const OFFERING = "offering";
    public const ON_HOLD = "onHold";
    public const CANCELLED = "cancelled";
    public const NOT_OFFERING = "notOffering";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
