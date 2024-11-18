<?php

namespace Microsoft\Graph\Beta\Generated\Models\DeviceManagement;

use Microsoft\Kiota\Abstractions\Enum;

class AggregationType extends Enum {
    public const COUNT = "count";
    public const PERCENTAGE = "percentage";
    public const AFFECTED_CLOUD_PC_COUNT = "affectedCloudPcCount";
    public const AFFECTED_CLOUD_PC_PERCENTAGE = "affectedCloudPcPercentage";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
