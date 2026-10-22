<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class LifecyclePolicyComplianceState extends Enum {
    public const COMPLIANT = "compliant";
    public const WARNING = "warning";
    public const WARNING_NOTIFY = "warningNotify";
    public const NON_COMPLIANT = "nonCompliant";
}
