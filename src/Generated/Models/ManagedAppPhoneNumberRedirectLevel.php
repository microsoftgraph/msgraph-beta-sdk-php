<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ManagedAppPhoneNumberRedirectLevel extends Enum {
    public const ALL_APPS = "allApps";
    public const MANAGED_APPS = "managedApps";
    public const CUSTOM_APP = "customApp";
    public const BLOCKED = "blocked";
}
