<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\CaseManagement;

use Microsoft\Kiota\Abstractions\Enum;

class IncidentClassification extends Enum {
    public const UNKNOWN = "unknown";
    public const FALSE_POSITIVE = "falsePositive";
    public const TRUE_POSITIVE = "truePositive";
    public const INFORMATIONAL_EXPECTED_ACTIVITY = "informationalExpectedActivity";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
