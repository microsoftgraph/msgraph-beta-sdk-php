<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class MacOSSoftwareUpdateScheduleType extends Enum {
    public const ALWAYS_UPDATE = 'alwaysUpdate';
    public const UPDATE_DURING_TIME_WINDOWS = 'updateDuringTimeWindows';
    public const UPDATE_OUTSIDE_OF_TIME_WINDOWS = 'updateOutsideOfTimeWindows';
}
