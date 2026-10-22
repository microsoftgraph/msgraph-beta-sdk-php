<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class SpendingPolicyStatus extends Enum {
    public const ENABLED = "enabled";
    public const DISABLED = "disabled";
    public const PROVISIONING = "provisioning";
    public const PROVISIONING_FAILED = "provisioningFailed";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
