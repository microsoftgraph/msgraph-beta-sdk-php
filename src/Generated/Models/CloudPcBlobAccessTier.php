<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class CloudPcBlobAccessTier extends Enum {
    public const HOT = "hot";
    public const COOL = "cool";
    public const COLD = "cold";
    public const ARCHIVE = "archive";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
