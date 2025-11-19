<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class WindowsAutopilotDeviceRemediationState extends Enum {
    public const UNKNOWN = "unknown";
    public const NO_REMEDIATION_REQUIRED = "noRemediationRequired";
    public const AUTOMATIC_REMEDIATION_REQUIRED = "automaticRemediationRequired";
    public const MANUAL_REMEDIATION_REQUIRED = "manualRemediationRequired";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
