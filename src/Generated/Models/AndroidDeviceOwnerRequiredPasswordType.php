<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class AndroidDeviceOwnerRequiredPasswordType extends Enum {
    public const DEVICE_DEFAULT = "deviceDefault";
    public const REQUIRED = "required";
    public const NUMERIC = "numeric";
    public const NUMERIC_COMPLEX = "numericComplex";
    public const ALPHABETIC = "alphabetic";
    public const ALPHANUMERIC = "alphanumeric";
    public const ALPHANUMERIC_WITH_SYMBOLS = "alphanumericWithSymbols";
    public const LOW_SECURITY_BIOMETRIC = "lowSecurityBiometric";
    public const CUSTOM_PASSWORD = "customPassword";
}
