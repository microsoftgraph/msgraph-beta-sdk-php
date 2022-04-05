<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class DeviceAppManagementTaskStatus extends Enum {
    public const UNKNOWN = 'unknown';
    public const PENDING = 'pending';
    public const ACTIVE = 'active';
    public const COMPLETED = 'completed';
    public const REJECTED = 'rejected';
}
