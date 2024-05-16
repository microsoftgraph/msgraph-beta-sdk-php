<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ManagedAppLogUploadState extends Enum {
    public const PENDING = 'pending';
    public const IN_PROGRESS = 'inProgress';
    public const COMPLETED = 'completed';
    public const DECLINED_BY_USER = 'declinedByUser';
    public const TIMED_OUT = 'timedOut';
    public const FAILED = 'failed';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
