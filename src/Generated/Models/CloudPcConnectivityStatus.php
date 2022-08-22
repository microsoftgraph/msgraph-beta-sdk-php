<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class CloudPcConnectivityStatus extends Enum {
    public const UNKNOWN = 'unknown';
    public const AVAILABLE = 'available';
    public const AVAILABLE_WITH_WARNING = 'availableWithWarning';
    public const UNAVAILABLE = 'unavailable';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
