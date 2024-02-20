<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class DeviceManagementConfigurationTechnologies extends Enum {
    public const NONE = 'none';
    public const MDM = 'mdm';
    public const WINDOWS10_X_MANAGEMENT = 'windows10XManagement';
    public const CONFIG_MANAGER = 'configManager';
    public const APPLE_REMOTE_MANAGEMENT = 'appleRemoteManagement';
    public const MICROSOFT_SENSE = 'microsoftSense';
    public const EXCHANGE_ONLINE = 'exchangeOnline';
    public const MOBILE_APPLICATION_MANAGEMENT = 'mobileApplicationManagement';
    public const LINUX_MDM = 'linuxMdm';
    public const ENROLLMENT = 'enrollment';
    public const ENDPOINT_PRIVILEGE_MANAGEMENT = 'endpointPrivilegeManagement';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
    public const WINDOWS_OS_RECOVERY = 'windowsOsRecovery';
}
