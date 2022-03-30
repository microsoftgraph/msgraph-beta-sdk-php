<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Enum;

class CloudPcOnPremisesConnectionStatus extends Enum {
    public const PENDING = 'pending';
    public const RUNNING = 'running';
    public const PASSED = 'passed';
    public const FAILED = 'failed';
    public const WARNING = 'warning';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
