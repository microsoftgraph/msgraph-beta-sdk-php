<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class WindowsPrivacyDataAccessLevel extends Enum {
    public const NOT_CONFIGURED = "notConfigured";
    public const FORCE_ALLOW = "forceAllow";
    public const FORCE_DENY = "forceDeny";
    public const USER_IN_CONTROL = "userInControl";
}
