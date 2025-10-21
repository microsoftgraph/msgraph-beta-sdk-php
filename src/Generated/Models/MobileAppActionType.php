<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class MobileAppActionType extends Enum {
    public const UNKNOWN = "unknown";
    public const INSTALL_COMMAND_SENT = "installCommandSent";
    public const INSTALLED = "installed";
    public const UNINSTALLED = "uninstalled";
    public const USER_REQUESTED_INSTALL = "userRequestedInstall";
}
