<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class WindowsAutopilotDeploymentState extends Enum {
    public const UNKNOWN = "unknown";
    public const SUCCESS = "success";
    public const IN_PROGRESS = "inProgress";
    public const FAILURE = "failure";
    public const SUCCESS_WITH_TIMEOUT = "successWithTimeout";
    public const NOT_ATTEMPTED = "notAttempted";
    public const DISABLED = "disabled";
    public const SUCCESS_ON_RETRY = "successOnRetry";
}
