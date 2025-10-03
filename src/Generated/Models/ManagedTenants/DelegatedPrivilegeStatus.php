<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\ManagedTenants;

use Microsoft\Kiota\Abstractions\Enum;

class DelegatedPrivilegeStatus extends Enum {
    public const NONE = "none";
    public const DELEGATED_ADMIN_PRIVILEGES = "delegatedAdminPrivileges";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
    public const GRANULAR_DELEGATED_ADMIN_PRIVILEGES = "granularDelegatedAdminPrivileges";
    public const DELEGATED_AND_GRANULAR_DELEGETED_ADMIN_PRIVILEGES = "delegatedAndGranularDelegetedAdminPrivileges";
}
