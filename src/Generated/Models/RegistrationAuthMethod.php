<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class RegistrationAuthMethod extends Enum {
    public const EMAIL = "email";
    public const MOBILE_PHONE = "mobilePhone";
    public const OFFICE_PHONE = "officePhone";
    public const SECURITY_QUESTION = "securityQuestion";
    public const APP_NOTIFICATION = "appNotification";
    public const APP_CODE = "appCode";
    public const ALTERNATE_MOBILE_PHONE = "alternateMobilePhone";
    public const FIDO = "fido";
    public const APP_PASSWORD = "appPassword";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
    public const EXTERNAL_AUTH_METHOD = "externalAuthMethod";
}
