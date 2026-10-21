<?php

namespace Microsoft\Graph\Beta\Generated\Models\IdentityGovernance;

use Microsoft\Kiota\Abstractions\Enum;

class ComplianceState extends Enum {
    public const COMPLIANT = "compliant";
    public const WARNING = "warning";
    public const WARNING_NOTIFY = "warningNotify";
    public const NON_COMPLIANT = "nonCompliant";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
