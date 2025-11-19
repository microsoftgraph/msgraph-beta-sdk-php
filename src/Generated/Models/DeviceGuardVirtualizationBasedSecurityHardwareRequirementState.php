<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class DeviceGuardVirtualizationBasedSecurityHardwareRequirementState extends Enum {
    public const MEET_HARDWARE_REQUIREMENTS = "meetHardwareRequirements";
    public const SECURE_BOOT_REQUIRED = "secureBootRequired";
    public const DMA_PROTECTION_REQUIRED = "dmaProtectionRequired";
    public const HYPER_V_NOT_SUPPORTED_FOR_GUEST_V_M = "hyperVNotSupportedForGuestVM";
    public const HYPER_V_NOT_AVAILABLE = "hyperVNotAvailable";
}
