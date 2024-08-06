<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class DeviceAssignmentItemStatus extends Enum {
    public const INITIATED = 'initiated';
    public const IN_PROGRESS = 'inProgress';
    public const REMOVED = 'removed';
    public const ERROR = 'error';
    public const SUCCEEDED = 'succeeded';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
