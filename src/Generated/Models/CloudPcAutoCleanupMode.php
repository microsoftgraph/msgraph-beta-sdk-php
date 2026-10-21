<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class CloudPcAutoCleanupMode extends Enum {
    public const NONE = "none";
    public const SCHEDULED = "scheduled";
    public const ON_QUOTA_EXCEEDED = "onQuotaExceeded";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
