<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use Microsoft\Kiota\Abstractions\Enum;

class OsStatus extends Enum {
    public const END_OF_SERVICING = "endOfServicing";
    public const IN_SERVICING = "inServicing";
    public const NEAR_END_OF_SERVICING = "nearEndOfServicing";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
