<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class HistoryEventType extends Enum {
    public const CREATED = "created";
    public const UPDATED = "updated";
    public const DELETED = "deleted";
    public const UNDELETED = "undeleted";
    public const MOVED = "moved";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
