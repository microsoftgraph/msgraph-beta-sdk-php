<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class CloudPcExternalPartnerActionErrorCode extends Enum {
    public const NONE = "none";
    public const EXECUTE_ACTION_FAILED = "executeActionFailed";
    public const EXECUTE_ACTION_TIMEOUT = "executeActionTimeout";
    public const DEVICE_NOT_FOUND = "deviceNotFound";
    public const DEVICE_NOT_AVAILABLE = "deviceNotAvailable";
    public const CHECK_DISK_SPACE_FAILED = "checkDiskSpaceFailed";
    public const CHECK_NETWORK_CONNECTION_FAILED = "checkNetworkConnectionFailed";
    public const AGENT_NOT_FOUND = "agentNotFound";
    public const INVALID_AGENT_FORMAT = "invalidAgentFormat";
    public const INVALID_AGENT_CHECKSUM = "invalidAgentChecksum";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
