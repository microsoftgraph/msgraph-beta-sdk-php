<?php

namespace Microsoft\Graph\Beta\Generated\Models\IdentityGovernance;

use Microsoft\Kiota\Abstractions\Enum;

class LifecyclePolicyRelationship extends Enum {
    public const EFFECTIVE = "effective";
    public const IN_SCOPE_BUT_INEFFECTIVE = "inScopeButIneffective";
    public const PENDING = "pending";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
