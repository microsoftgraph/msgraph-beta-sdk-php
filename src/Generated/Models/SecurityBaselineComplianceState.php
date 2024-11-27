<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class SecurityBaselineComplianceState extends Enum {
    public const UNKNOWN = "unknown";
    public const SECURE = "secure";
    public const NOT_APPLICABLE = "notApplicable";
    public const NOT_SECURE = "notSecure";
    public const ERROR = "error";
    public const CONFLICT = "conflict";
}
