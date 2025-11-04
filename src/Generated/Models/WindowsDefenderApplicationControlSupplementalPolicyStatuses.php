<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class WindowsDefenderApplicationControlSupplementalPolicyStatuses extends Enum {
    public const UNKNOWN = "unknown";
    public const SUCCESS = "success";
    public const TOKEN_ERROR = "tokenError";
    public const NOT_AUTHORIZED_BY_TOKEN = "notAuthorizedByToken";
    public const POLICY_NOT_FOUND = "policyNotFound";
}
