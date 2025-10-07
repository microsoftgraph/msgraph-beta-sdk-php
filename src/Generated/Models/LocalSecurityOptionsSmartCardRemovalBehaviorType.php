<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class LocalSecurityOptionsSmartCardRemovalBehaviorType extends Enum {
    public const NO_ACTION = "noAction";
    public const LOCK_WORKSTATION = "lockWorkstation";
    public const FORCE_LOGOFF = "forceLogoff";
    public const DISCONNECT_REMOTE_DESKTOP_SESSION = "disconnectRemoteDesktopSession";
}
