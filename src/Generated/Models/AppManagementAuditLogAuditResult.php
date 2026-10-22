<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class AppManagementAuditLogAuditResult extends Enum {
    public const NOT_APPLICABLE = "notApplicable";
    public const WOULD_HAVE_BEEN_ALLOWED = "wouldHaveBeenAllowed";
    public const WOULD_HAVE_BEEN_BLOCKED = "wouldHaveBeenBlocked";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
