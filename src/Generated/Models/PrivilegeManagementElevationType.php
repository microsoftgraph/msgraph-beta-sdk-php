<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PrivilegeManagementElevationType extends Enum {
    public const UNDETERMINED = "undetermined";
    public const UNMANAGED_ELEVATION = "unmanagedElevation";
    public const ZERO_TOUCH_ELEVATION = "zeroTouchElevation";
    public const USER_CONFIRMED_ELEVATION = "userConfirmedElevation";
    public const SUPPORT_APPROVED_ELEVATION = "supportApprovedElevation";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
