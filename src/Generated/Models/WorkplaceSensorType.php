<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class WorkplaceSensorType extends Enum {
    public const OCCUPANCY = "occupancy";
    public const PEOPLE_COUNT = "peopleCount";
    public const INFERRED_OCCUPANCY = "inferredOccupancy";
    public const HEARTBEAT = "heartbeat";
    public const BADGE = "badge";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
