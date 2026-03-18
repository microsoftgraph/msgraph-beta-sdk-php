<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class OperationApprovalPolicyType extends Enum {
    public const UNKNOWN = "unknown";
    public const DEVICE_WIPE = "deviceWipe";
    public const DEVICE_RETIRE = "deviceRetire";
    public const DEVICE_DELETE = "deviceDelete";
    public const APP = "app";
    public const SCRIPT = "script";
    public const ROLE = "role";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
    public const TENANT_CONFIGURATION = "tenantConfiguration";
}
