<?php

namespace Microsoft\Graph\Beta\Generated\Models\IdentityGovernance;

use Microsoft\Kiota\Abstractions\Enum;

class LifecyclePolicyComplianceStatus extends Enum {
    public const NOT_EVALUATED = "notEvaluated";
    public const COMPLIANT = "compliant";
    public const NON_COMPLIANT = "nonCompliant";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
