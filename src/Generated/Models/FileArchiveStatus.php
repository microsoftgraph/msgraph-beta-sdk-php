<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class FileArchiveStatus extends Enum {
    public const NOT_ARCHIVED = "notArchived";
    public const FULLY_ARCHIVED = "fullyArchived";
    public const REACTIVATING = "reactivating";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
