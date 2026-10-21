<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class CustomFieldRollupType extends Enum {
    public const NO_ROLLUP = "noRollup";
    public const MAX = "max";
    public const MIN = "min";
    public const SUM = "sum";
    public const AVERAGE = "average";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
