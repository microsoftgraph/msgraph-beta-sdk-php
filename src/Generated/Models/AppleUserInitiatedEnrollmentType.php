<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class AppleUserInitiatedEnrollmentType extends Enum {
    public const UNKNOWN = 'unknown';
    public const DEVICE = 'device';
    public const USER = 'user';
    public const ACCOUNT_DRIVEN_USER_ENROLLMENT = 'accountDrivenUserEnrollment';
    public const WEB_DEVICE_ENROLLMENT = 'webDeviceEnrollment';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
