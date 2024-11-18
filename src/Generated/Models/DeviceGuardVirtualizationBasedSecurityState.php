<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class DeviceGuardVirtualizationBasedSecurityState extends Enum {
    public const RUNNING = "running";
    public const REBOOT_REQUIRED = "rebootRequired";
    public const REQUIRE64_BIT_ARCHITECTURE = "require64BitArchitecture";
    public const NOT_LICENSED = "notLicensed";
    public const NOT_CONFIGURED = "notConfigured";
    public const DOES_NOT_MEET_HARDWARE_REQUIREMENTS = "doesNotMeetHardwareRequirements";
    public const OTHER = "other";
}
