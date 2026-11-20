<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class InvestigationMessageRole extends Enum {
    public const USER = "user";
    public const AGENT = "agent";
    public const SYSTEM = "system";
    public const TOOL = "tool";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
