<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class OrganizationalMessageStatus extends Enum {
    public const SCHEDULED = 'scheduled';
    public const ACTIVE = 'active';
    public const COMPLETED = 'completed';
    public const CANCELLED = 'cancelled';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
