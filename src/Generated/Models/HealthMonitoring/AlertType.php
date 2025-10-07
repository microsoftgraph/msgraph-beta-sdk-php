<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\HealthMonitoring;

use Microsoft\Kiota\Abstractions\Enum;

class AlertType extends Enum {
    public const UNKNOWN = "unknown";
    public const MFA_SIGN_IN_FAILURE = "mfaSignInFailure";
    public const MANAGED_DEVICE_SIGN_IN_FAILURE = "managedDeviceSignInFailure";
    public const COMPLIANT_DEVICE_SIGN_IN_FAILURE = "compliantDeviceSignInFailure";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
    public const CONDITIONAL_ACCESS_BLOCKED_SIGN_IN = "conditionalAccessBlockedSignIn";
    public const SAML_SIGN_IN_FAILURE = "samlSignInFailure";
}
