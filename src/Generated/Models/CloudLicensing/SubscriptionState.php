<?php

namespace Microsoft\Graph\Beta\Generated\Models\CloudLicensing;

use Microsoft\Kiota\Abstractions\Enum;

class SubscriptionState extends Enum {
    public const ACTIVE = "active";
    public const WARNING = "warning";
    public const SUSPENDED = "suspended";
    public const LOCKED_OUT = "lockedOut";
    public const DELETED = "deleted";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
