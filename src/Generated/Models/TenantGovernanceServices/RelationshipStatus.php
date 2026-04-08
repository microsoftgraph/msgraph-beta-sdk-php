<?php

namespace Microsoft\Graph\Beta\Generated\Models\TenantGovernanceServices;

use Microsoft\Kiota\Abstractions\Enum;

class RelationshipStatus extends Enum {
    public const ACTIVE = "active";
    public const TERMINATED = "terminated";
    public const TERMINATION_REQUESTED_BY_GOVERNING_TENANT = "terminationRequestedByGoverningTenant";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
