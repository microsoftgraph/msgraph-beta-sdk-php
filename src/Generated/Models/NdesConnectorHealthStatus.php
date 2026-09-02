<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class NdesConnectorHealthStatus extends Enum {
    public const UNKNOWN = "unknown";
    public const NO_ACTION_REQUIRED = "noActionRequired";
    public const ATTENTION_REQUIRED = "attentionRequired";
    public const ACTION_REQUIRED = "actionRequired";
    public const DISCONNECTED = "disconnected";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
