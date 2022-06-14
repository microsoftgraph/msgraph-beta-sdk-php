<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use Microsoft\Kiota\Abstractions\Enum;

class QualityUpdateClassification extends Enum {
    public const ALL = 'all';
    public const SECURITY = 'security';
    public const NON_SECURITY = 'nonSecurity';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
