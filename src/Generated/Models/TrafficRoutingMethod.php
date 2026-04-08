<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class TrafficRoutingMethod extends Enum {
    public const NONE = "none";
    public const RANDOM = "random";
    public const SESSION_PERSISTENCE = "sessionPersistence";
    public const PERFORMANCE = "performance";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
