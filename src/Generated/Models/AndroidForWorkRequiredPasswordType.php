<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class AndroidForWorkRequiredPasswordType extends Enum {
    public const DEVICE_DEFAULT = 'deviceDefault';
    public const LOW_SECURITY_BIOMETRIC = 'lowSecurityBiometric';
    public const REQUIRED = 'required';
    public const AT_LEAST_NUMERIC = 'atLeastNumeric';
    public const NUMERIC_COMPLEX = 'numericComplex';
    public const AT_LEAST_ALPHABETIC = 'atLeastAlphabetic';
    public const AT_LEAST_ALPHANUMERIC = 'atLeastAlphanumeric';
    public const ALPHANUMERIC_WITH_SYMBOLS = 'alphanumericWithSymbols';
}
