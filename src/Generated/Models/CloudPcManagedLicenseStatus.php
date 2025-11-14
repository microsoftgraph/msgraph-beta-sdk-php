<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class CloudPcManagedLicenseStatus extends Enum {
    public const ENABLED = "enabled";
    public const EXPIRED = "expired";
    public const BLOCKED = "blocked";
    public const DELETED = "deleted";
    public const UNKNOWN = "unknown";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
