<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use Microsoft\Kiota\Abstractions\Enum;

class DeviceClientState extends Enum {
    public const OFFERING = "offering";
    public const ON_HOLD = "onHold";
    public const INSTALLING = "installing";
    public const INSTALLED = "installed";
    public const CANCELLED = "cancelled";
    public const UNINSTALLING = "uninstalling";
    public const UNINSTALLED = "uninstalled";
    public const NOT_OFFERING = "notOffering";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
