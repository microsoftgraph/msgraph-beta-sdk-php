<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class AccountStatus extends Enum {
    public const UNKNOWN = "unknown";
    public const STAGED = "staged";
    public const ACTIVE = "active";
    public const SUSPENDED = "suspended";
    public const DELETED = "deleted";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
