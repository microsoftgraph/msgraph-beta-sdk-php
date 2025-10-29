<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class WindowsUpdateStatus extends Enum {
    public const UP_TO_DATE = "upToDate";
    public const PENDING_INSTALLATION = "pendingInstallation";
    public const PENDING_REBOOT = "pendingReboot";
    public const FAILED = "failed";
}
