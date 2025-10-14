<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ProvisionState extends Enum {
    public const NOT_PROVISIONED = "notProvisioned";
    public const PROVISIONING_IN_PROGRESS = "provisioningInProgress";
    public const PROVISIONING_FAILED = "provisioningFailed";
    public const PROVISIONING_COMPLETED = "provisioningCompleted";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
