<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use Microsoft\Kiota\Abstractions\Enum;

class DeploymentStateValue extends Enum {
    public const SCHEDULED = "scheduled";
    public const OFFERING = "offering";
    public const PAUSED = "paused";
    public const FAULTED = "faulted";
    public const ARCHIVED = "archived";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
