<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ProtectionUnitStatus extends Enum {
    public const PROTECT_REQUESTED = "protectRequested";
    public const PROTECTED = "protected";
    public const UNPROTECT_REQUESTED = "unprotectRequested";
    public const UNPROTECTED = "unprotected";
    public const REMOVE_REQUESTED = "removeRequested";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
    public const OFFBOARD_REQUESTED = "offboardRequested";
    public const OFFBOARDED = "offboarded";
    public const CANCEL_OFFBOARD_REQUESTED = "cancelOffboardRequested";
}
