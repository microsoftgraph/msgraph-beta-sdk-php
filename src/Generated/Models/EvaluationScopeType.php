<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class EvaluationScopeType extends Enum {
    public const TENANT = "tenant";
    public const AGENT = "agent";
    public const ANONYMOUS_USER = "anonymousUser";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
