<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class VerificationEventLifecycleState extends Enum {
    public const ACTIVE = "active";
    public const REVOKED = "revoked";
    public const SUSPENDED = "suspended";
    public const INVALIDATED = "invalidated";
    public const ISSUED = "issued";
    public const BLOCKED = "blocked";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
