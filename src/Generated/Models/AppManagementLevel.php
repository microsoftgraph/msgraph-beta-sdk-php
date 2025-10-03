<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class AppManagementLevel extends Enum {
    public const UNSPECIFIED = "unspecified";
    public const UNMANAGED = "unmanaged";
    public const MDM = "mdm";
    public const ANDROID_ENTERPRISE = "androidEnterprise";
    public const ANDROID_ENTERPRISE_DEDICATED_DEVICES_WITH_AZURE_AD_SHARED_MODE = "androidEnterpriseDedicatedDevicesWithAzureAdSharedMode";
    public const ANDROID_OPEN_SOURCE_PROJECT_USER_ASSOCIATED = "androidOpenSourceProjectUserAssociated";
    public const ANDROID_OPEN_SOURCE_PROJECT_USERLESS = "androidOpenSourceProjectUserless";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
