<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class DeviceManagementAutopilotPolicyComplianceStatus extends Enum {
    public const UNKNOWN = "unknown";
    public const COMPLIANT = "compliant";
    public const INSTALLED = "installed";
    public const NOT_COMPLIANT = "notCompliant";
    public const NOT_INSTALLED = "notInstalled";
    public const ERROR = "error";
}
