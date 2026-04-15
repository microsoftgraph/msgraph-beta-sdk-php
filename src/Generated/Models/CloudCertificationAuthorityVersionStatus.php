<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class CloudCertificationAuthorityVersionStatus extends Enum {
    public const UNKNOWN = "unknown";
    public const ACTIVE = "active";
    public const STAGED = "staged";
    public const PAUSED = "paused";
    public const RETIRED = "retired";
    public const EXPIRED = "expired";
    public const REVOKED = "revoked";
    public const DECOMMISSIONED = "decommissioned";
    public const SIGNING_PENDING = "signingPending";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
