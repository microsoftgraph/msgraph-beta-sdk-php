<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ChainBreakSource extends Enum {
    public const NONE = "none";
    public const IDENTITY_PROTECTION = "identityProtection";
    public const ADMIN_ACTION = "adminAction";
    public const SYSTEM = "system";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
