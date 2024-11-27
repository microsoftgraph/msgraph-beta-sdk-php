<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class AuthenticationAppPolicyStatus extends Enum {
    public const UNKNOWN = "unknown";
    public const APP_LOCK_OUT_OF_DATE = "appLockOutOfDate";
    public const APP_LOCK_ENABLED = "appLockEnabled";
    public const APP_LOCK_DISABLED = "appLockDisabled";
    public const APP_CONTEXT_OUT_OF_DATE = "appContextOutOfDate";
    public const APP_CONTEXT_SHOWN = "appContextShown";
    public const APP_CONTEXT_NOT_SHOWN = "appContextNotShown";
    public const LOCATION_CONTEXT_OUT_OF_DATE = "locationContextOutOfDate";
    public const LOCATION_CONTEXT_SHOWN = "locationContextShown";
    public const LOCATION_CONTEXT_NOT_SHOWN = "locationContextNotShown";
    public const NUMBER_MATCH_OUT_OF_DATE = "numberMatchOutOfDate";
    public const NUMBER_MATCH_CORRECT_NUMBER_ENTERED = "numberMatchCorrectNumberEntered";
    public const NUMBER_MATCH_INCORRECT_NUMBER_ENTERED = "numberMatchIncorrectNumberEntered";
    public const NUMBER_MATCH_DENY = "numberMatchDeny";
    public const TAMPER_RESISTANT_HARDWARE_OUT_OF_DATE = "tamperResistantHardwareOutOfDate";
    public const TAMPER_RESISTANT_HARDWARE_USED = "tamperResistantHardwareUsed";
    public const TAMPER_RESISTANT_HARDWARE_NOT_USED = "tamperResistantHardwareNotUsed";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
