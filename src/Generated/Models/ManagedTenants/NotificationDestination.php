<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\ManagedTenants;

use Microsoft\Kiota\Abstractions\Enum;

class NotificationDestination extends Enum {
    public const NONE = "none";
    public const API = "api";
    public const EMAIL = "email";
    public const SMS = "sms";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
