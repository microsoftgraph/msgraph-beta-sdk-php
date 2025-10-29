<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class AssignmentFilterEvaluationResult extends Enum {
    public const UNKNOWN = "unknown";
    public const MATCH = "match";
    public const NOT_MATCH = "notMatch";
    public const INCONCLUSIVE = "inconclusive";
    public const FAILURE = "failure";
    public const NOT_EVALUATED = "notEvaluated";
}
