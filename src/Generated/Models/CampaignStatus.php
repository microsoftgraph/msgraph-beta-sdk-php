<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class CampaignStatus extends Enum {
    public const UNKNOWN = "unknown";
    public const DRAFT = "draft";
    public const IN_PROGRESS = "inProgress";
    public const SCHEDULED = "scheduled";
    public const COMPLETED = "completed";
    public const FAILED = "failed";
    public const CANCELLED = "cancelled";
    public const EXCLUDED = "excluded";
    public const DELETED = "deleted";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
