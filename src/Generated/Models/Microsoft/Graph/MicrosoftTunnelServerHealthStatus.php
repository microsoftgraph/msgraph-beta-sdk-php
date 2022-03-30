<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Enum;

class MicrosoftTunnelServerHealthStatus extends Enum {
    public const UNKNOWN = 'unknown';
    public const HEALTHY = 'healthy';
    public const UNHEALTHY = 'unhealthy';
    public const WARNING = 'warning';
    public const OFFLINE = 'offline';
    public const UPGRADE_IN_PROGRESS = 'upgradeInProgress';
    public const UPGRADE_FAILED = 'upgradeFailed';
}
