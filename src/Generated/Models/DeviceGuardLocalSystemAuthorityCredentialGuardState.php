<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class DeviceGuardLocalSystemAuthorityCredentialGuardState extends Enum {
    public const RUNNING = "running";
    public const REBOOT_REQUIRED = "rebootRequired";
    public const NOT_LICENSED = "notLicensed";
    public const NOT_CONFIGURED = "notConfigured";
    public const VIRTUALIZATION_BASED_SECURITY_NOT_RUNNING = "virtualizationBasedSecurityNotRunning";
}
