<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class MfaType extends Enum {
    public const EOTP = "eotp";
    public const ONE_WAY_SMS = "oneWaySms";
    public const TWO_WAY_SMS = "twoWaySms";
    public const TWO_WAY_SMS_OTHER_MOBILE = "twoWaySmsOtherMobile";
    public const PHONE_APP_NOTIFICATION = "phoneAppNotification";
    public const PHONE_APP_OTP = "phoneAppOtp";
    public const TWO_WAY_VOICE_MOBILE = "twoWayVoiceMobile";
    public const TWO_WAY_VOICE_OFFICE = "twoWayVoiceOffice";
    public const TWO_WAY_VOICE_OTHER_MOBILE = "twoWayVoiceOtherMobile";
    public const FIDO = "fido";
    public const CERTIFICATE = "certificate";
    public const OTHER = "other";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
