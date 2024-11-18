<?php

namespace Microsoft\Graph\Beta\Generated\Models\Partner\Security;

use Microsoft\Kiota\Abstractions\Enum;

class SecurityAlertResolvedReason extends Enum {
    public const LEGITIMATE = "legitimate";
    public const IGNORE = "ignore";
    public const FRAUD = "fraud";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
