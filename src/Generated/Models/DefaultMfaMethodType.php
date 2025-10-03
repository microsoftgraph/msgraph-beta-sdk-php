<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class DefaultMfaMethodType extends Enum {
    public const NONE = "none";
    public const MOBILE_PHONE = "mobilePhone";
    public const ALTERNATE_MOBILE_PHONE = "alternateMobilePhone";
    public const OFFICE_PHONE = "officePhone";
    public const MICROSOFT_AUTHENTICATOR_PUSH = "microsoftAuthenticatorPush";
    public const SOFTWARE_ONE_TIME_PASSCODE = "softwareOneTimePasscode";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
