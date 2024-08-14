<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PerUserMfaState extends Enum {
    public const DISABLED = 'disabled';
    public const ENFORCED = 'enforced';
    public const ENABLED = 'enabled';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
