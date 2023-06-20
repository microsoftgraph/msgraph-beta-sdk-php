<?php

namespace Microsoft\Graph\Beta\Generated\Models\Networkaccess;

use Microsoft\Kiota\Abstractions\Enum;

class ConnectivityState extends Enum {
    public const PENDING = 'pending';
    public const CONNECTED = 'connected';
    public const INACTIVE = 'inactive';
    public const ERROR = 'error';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
