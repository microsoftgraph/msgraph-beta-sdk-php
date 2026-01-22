<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class EnforcementResultStatus extends Enum {
    public const SUCCESS = "success";
    public const MISSING_OR_INVALID_CONFIGURATION = "missingOrInvalidConfiguration";
    public const USER_OVERRIDE = "userOverride";
    public const AGENT_FAILURE = "agentFailure";
    public const ENFORCEMENT_TIMEOUT = "enforcementTimeout";
    public const O_S_OVERRIDE = "oSOverride";
    public const PROCESS_NON_EXISTENT = "processNonExistent";
    public const OTHER = "other";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
