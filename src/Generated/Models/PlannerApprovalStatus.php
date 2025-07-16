<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PlannerApprovalStatus extends Enum {
    public const REQUESTED = "requested";
    public const APPROVED = "approved";
    public const REJECTED = "rejected";
    public const CANCELLED = "cancelled";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
