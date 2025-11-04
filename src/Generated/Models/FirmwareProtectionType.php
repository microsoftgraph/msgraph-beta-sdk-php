<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class FirmwareProtectionType extends Enum {
    public const NOT_APPLICABLE = "notApplicable";
    public const SYSTEM_GUARD_SECURE_LAUNCH = "systemGuardSecureLaunch";
    public const FIRMWARE_ATTACK_SURFACE_REDUCTION = "firmwareAttackSurfaceReduction";
    public const DISABLED = "disabled";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
