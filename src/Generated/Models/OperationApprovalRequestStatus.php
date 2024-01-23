<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class OperationApprovalRequestStatus extends Enum {
    public const UNKNOWN = 'unknown';
    public const NEEDS_APPROVAL = 'needsApproval';
    public const APPROVED = 'approved';
    public const REJECTED = 'rejected';
    public const CANCELLED = 'cancelled';
    public const COMPLETED = 'completed';
    public const EXPIRED = 'expired';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
