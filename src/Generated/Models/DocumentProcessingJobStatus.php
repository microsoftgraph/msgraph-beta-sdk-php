<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class DocumentProcessingJobStatus extends Enum {
    public const IN_PROGRESS = "inProgress";
    public const COMPLETED = "completed";
    public const FAILED = "failed";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
