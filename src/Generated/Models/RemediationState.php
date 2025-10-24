<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class RemediationState extends Enum {
    public const UNKNOWN = "unknown";
    public const SKIPPED = "skipped";
    public const SUCCESS = "success";
    public const REMEDIATION_FAILED = "remediationFailed";
    public const SCRIPT_ERROR = "scriptError";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
