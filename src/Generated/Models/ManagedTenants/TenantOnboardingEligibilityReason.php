<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use Microsoft\Kiota\Abstractions\Enum;

class TenantOnboardingEligibilityReason extends Enum {
    public const NONE = 'none';
    public const CONTRACT_TYPE = 'contractType';
    public const DELEGATED_ADMIN_PRIVILEGES = 'delegatedAdminPrivileges';
    public const USERS_COUNT = 'usersCount';
    public const LICENSE = 'license';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
