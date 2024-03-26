<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use Microsoft\Kiota\Abstractions\Enum;

class WindowsReleaseHealthStatus extends Enum {
    public const RESOLVED = 'resolved';
    public const MITIGATED_EXTERNAL = 'mitigatedExternal';
    public const MITIGATED = 'mitigated';
    public const RESOLVED_EXTERNAL = 'resolvedExternal';
    public const CONFIRMED = 'confirmed';
    public const REPORTED = 'reported';
    public const INVESTIGATING = 'investigating';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
