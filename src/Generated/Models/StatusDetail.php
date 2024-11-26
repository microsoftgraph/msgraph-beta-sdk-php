<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class StatusDetail extends Enum {
    public const SUBMITTED = "submitted";
    public const APPROVED = "approved";
    public const COMPLETED = "completed";
    public const CANCELED = "canceled";
    public const REJECTED = "rejected";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
