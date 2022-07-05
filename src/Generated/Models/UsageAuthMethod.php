<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class UsageAuthMethod extends Enum {
    public const EMAIL = 'email';
    public const MOBILE_S_M_S = 'mobileSMS';
    public const MOBILE_CALL = 'mobileCall';
    public const OFFICE_PHONE = 'officePhone';
    public const SECURITY_QUESTION = 'securityQuestion';
    public const APP_NOTIFICATION = 'appNotification';
    public const APP_CODE = 'appCode';
    public const ALTERNATE_MOBILE_CALL = 'alternateMobileCall';
    public const FIDO = 'fido';
    public const APP_PASSWORD = 'appPassword';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
