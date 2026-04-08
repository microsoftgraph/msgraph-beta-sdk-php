<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class CloudPcExternalPartnerActionStatus extends Enum {
    public const CREATED = "created";
    public const PENDING = "pending";
    public const CANCELED = "canceled";
    public const RUNNING = "running";
    public const SUCCEEDED = "succeeded";
    public const FAILED = "failed";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
