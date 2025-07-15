<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class IncidentTaskStatus extends Enum {
    public const OPEN = "open";
    public const IN_PROGRESS = "inProgress";
    public const COMPLETED = "completed";
    public const FAILED = "failed";
    public const NOT_RELEVANT = "notRelevant";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
