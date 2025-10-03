<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PermissionsDefinitionIdentityType extends Enum {
    public const USER = "user";
    public const ROLE = "role";
    public const APPLICATION = "application";
    public const MANAGED_IDENTITY = "managedIdentity";
    public const SERVICE_ACCOUNT = "serviceAccount";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
