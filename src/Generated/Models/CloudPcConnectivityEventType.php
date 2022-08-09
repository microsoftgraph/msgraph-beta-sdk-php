<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class CloudPcConnectivityEventType extends Enum {
    public const UNKNOWN = 'unknown';
    public const USER_CONNECTION = 'userConnection';
    public const USER_TROUBLESHOOTING = 'userTroubleshooting';
    public const DEVICE_HEALTH_CHECK = 'deviceHealthCheck';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
