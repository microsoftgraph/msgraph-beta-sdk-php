<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class PolicyStatus extends Enum {
    public const PENDING = 'pending';
    public const ERROR = 'error';
    public const SUCCESS = 'success';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
