<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use Microsoft\Kiota\Abstractions\Enum;

class WorkloadActionStatus extends Enum {
    public const TO_ADDRESS = "toAddress";
    public const COMPLETED = "completed";
    public const ERROR = "error";
    public const TIME_OUT = "timeOut";
    public const IN_PROGRESS = "inProgress";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
