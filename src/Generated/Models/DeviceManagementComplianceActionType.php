<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class DeviceManagementComplianceActionType extends Enum {
    public const NO_ACTION = "noAction";
    public const NOTIFICATION = "notification";
    public const BLOCK = "block";
    public const RETIRE = "retire";
    public const WIPE = "wipe";
    public const REMOVE_RESOURCE_ACCESS_PROFILES = "removeResourceAccessProfiles";
    public const PUSH_NOTIFICATION = "pushNotification";
    public const REMOTE_LOCK = "remoteLock";
}
