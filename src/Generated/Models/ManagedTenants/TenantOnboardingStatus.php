<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use Microsoft\Kiota\Abstractions\Enum;

class TenantOnboardingStatus extends Enum {
    public const INELIGIBLE = 'ineligible';
    public const IN_PROCESS = 'inProcess';
    public const ACTIVE = 'active';
    public const INACTIVE = 'inactive';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
    public const DISABLED = 'disabled';
}
