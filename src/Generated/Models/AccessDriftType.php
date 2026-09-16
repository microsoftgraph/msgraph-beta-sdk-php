<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class AccessDriftType extends Enum {
    public const UNAUTHORIZED = "unauthorized";
    public const MISSING = "missing";
    public const IN_SYNC = "inSync";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
