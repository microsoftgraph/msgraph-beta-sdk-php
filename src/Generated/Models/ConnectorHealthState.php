<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ConnectorHealthState extends Enum {
    public const HEALTHY = 'healthy';
    public const WARNING = 'warning';
    public const UNHEALTHY = 'unhealthy';
    public const UNKNOWN = 'unknown';
}
