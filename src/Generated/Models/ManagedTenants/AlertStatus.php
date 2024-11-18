<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use Microsoft\Kiota\Abstractions\Enum;

class AlertStatus extends Enum {
    public const UNKNOWN = "unknown";
    public const NEW_ALERT = "newAlert";
    public const IN_PROGRESS = "inProgress";
    public const RESOLVED = "resolved";
    public const DISMISSED = "dismissed";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
