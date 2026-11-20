<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class VerificationState extends Enum {
    public const UNVERIFIED = "unverified";
    public const VERIFIED = "verified";
    public const REVOKED = "revoked";
    public const SUSPENDED = "suspended";
    public const ISSUED = "issued";
    public const BLOCKED = "blocked";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
