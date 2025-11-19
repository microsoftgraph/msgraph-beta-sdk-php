<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ApplicationPermissionsRequired extends Enum {
    public const UNKNOWN = "unknown";
    public const ANONYMOUS = "anonymous";
    public const GUEST = "guest";
    public const USER = "user";
    public const ADMINISTRATOR = "administrator";
    public const SYSTEM = "system";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
