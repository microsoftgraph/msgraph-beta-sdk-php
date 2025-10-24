<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class UsageAuthMethod extends Enum {
    public const EMAIL = "email";
    public const MOBILE_S_M_S = "mobileSMS";
    public const MOBILE_CALL = "mobileCall";
    public const OFFICE_PHONE = "officePhone";
    public const SECURITY_QUESTION = "securityQuestion";
    public const APP_NOTIFICATION = "appNotification";
    public const APP_CODE = "appCode";
    public const ALTERNATE_MOBILE_CALL = "alternateMobileCall";
    public const FIDO = "fido";
    public const APP_PASSWORD = "appPassword";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
    public const EXTERNAL_AUTH_METHOD = "externalAuthMethod";
    public const HARDWARE_ONE_TIME_PASSCODE = "hardwareOneTimePasscode";
    public const WINDOWS_HELLO_FOR_BUSINESS = "windowsHelloForBusiness";
    public const MICROSOFT_AUTHENTICATOR_PASSWORDLESS = "microsoftAuthenticatorPasswordless";
    public const TEMPORARY_ACCESS_PASS = "temporaryAccessPass";
    public const MAC_OS_SECURE_ENCLAVE_KEY = "macOsSecureEnclaveKey";
    public const PASS_KEY_DEVICE_BOUND = "passKeyDeviceBound";
    public const PASS_KEY_DEVICE_BOUND_AUTHENTICATOR = "passKeyDeviceBoundAuthenticator";
    public const PASS_KEY_DEVICE_BOUND_WINDOWS_HELLO = "passKeyDeviceBoundWindowsHello";
    public const SOFTWARE_ONE_TIME_PASSCODE = "softwareOneTimePasscode";
    public const MICROSOFT_AUTHENTICATOR_PUSH = "microsoftAuthenticatorPush";
    public const MOBILE_PHONE = "mobilePhone";
    public const SMS = "sms";
    public const ALTERNATE_MOBILE_PHONE = "alternateMobilePhone";
    public const FIDO2_SECURITY_KEY = "fido2SecurityKey";
    public const ONE_TIME_PASSCODE = "oneTimePasscode";
    public const PASS_KEY_SYNCED = "passKeySynced";
}
