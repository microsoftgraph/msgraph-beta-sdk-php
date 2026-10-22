<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\CaseManagement;

use Microsoft\Kiota\Abstractions\Enum;

class CaseSlaPolicyStatus extends Enum {
    public const ACTIVE = "active";
    public const AT_RISK = "atRisk";
    public const BREACHED = "breached";
    public const PAUSED = "paused";
    public const COMPLETED_MET = "completedMet";
    public const COMPLETED_BREACHED = "completedBreached";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
