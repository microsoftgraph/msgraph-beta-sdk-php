<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Enum;

class MembershipRuleProcessingStatusDetails extends Enum {
    public const NOT_STARTED = 'NotStarted';
    public const RUNNING = 'Running';
    public const FAILED = 'Failed';
    public const SUCCEEDED = 'Succeeded';
    public const UNSUPPORTED_FUTURE_VALUE = 'UnsupportedFutureValue';
}
