<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class HuntingRuleRunStatus extends Enum {
    public const RUNNING = 'running';
    public const COMPLETED = 'completed';
    public const FAILED = 'failed';
    public const PARTIALLY_FAILED = 'partiallyFailed';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
