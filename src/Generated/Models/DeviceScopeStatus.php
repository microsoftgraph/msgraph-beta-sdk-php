<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class DeviceScopeStatus extends Enum {
    public const NONE = 'none';
    public const COMPUTING = 'computing';
    public const INSUFFICIENT_DATA = 'insufficientData';
    public const COMPLETED = 'completed';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
