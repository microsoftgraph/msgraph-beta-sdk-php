<?php

namespace Microsoft\Graph\Beta\Generated\Models\Partner\Security;

use Microsoft\Kiota\Abstractions\Enum;

class SecurityAlertStatus extends Enum {
    public const ACTIVE = 'active';
    public const RESOLVED = 'resolved';
    public const INVESTIGATING = 'investigating';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
