<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class DependencyType extends Enum {
    public const SOURCE_FINISH_DRIVES_TARGET_START = "sourceFinishDrivesTargetStart";
    public const SOURCE_START_DRIVES_TARGET_START = "sourceStartDrivesTargetStart";
    public const SOURCE_FINISH_DRIVES_TARGET_FINISH = "sourceFinishDrivesTargetFinish";
    public const TARGET_START_DRIVES_SOURCE_FINISH = "targetStartDrivesSourceFinish";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
