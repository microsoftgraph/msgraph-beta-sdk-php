<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class TokenProtectionStatus extends Enum {
    public const NONE = "none";
    public const BOUND = "bound";
    public const UNBOUND = "unbound";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
