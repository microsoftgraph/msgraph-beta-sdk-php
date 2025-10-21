<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class AuthenticationFailureReasonCode extends Enum {
    public const INCOMPLETE = "incomplete";
    public const DENIED = "denied";
    public const SYSTEM_FAILURE = "systemFailure";
    public const BAD_REQUEST = "badRequest";
    public const OTHER = "other";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
    public const USER_ERROR = "userError";
    public const CONFIG_ERROR = "configError";
}
