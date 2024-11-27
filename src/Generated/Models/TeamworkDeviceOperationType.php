<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class TeamworkDeviceOperationType extends Enum {
    public const DEVICE_RESTART = "deviceRestart";
    public const CONFIG_UPDATE = "configUpdate";
    public const DEVICE_DIAGNOSTICS = "deviceDiagnostics";
    public const SOFTWARE_UPDATE = "softwareUpdate";
    public const DEVICE_MANAGEMENT_AGENT_CONFIG_UPDATE = "deviceManagementAgentConfigUpdate";
    public const REMOTE_LOGIN = "remoteLogin";
    public const REMOTE_LOGOUT = "remoteLogout";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
