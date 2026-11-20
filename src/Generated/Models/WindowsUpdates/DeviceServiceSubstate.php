<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use Microsoft\Kiota\Abstractions\Enum;

class DeviceServiceSubstate extends Enum {
    public const UNKNOWN = "unknown";
    public const SCHEDULED = "scheduled";
    public const OFFER_READY = "offerReady";
    public const ADMIN_PAUSED = "adminPaused";
    public const ADMIN_CANCELLED = "adminCancelled";
    public const REMOVED_FROM_DEPLOYMENT = "removedFromDeployment";
    public const NOT_OFFERING = "notOffering";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
