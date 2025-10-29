<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class SignInIdentifierType extends Enum {
    public const USER_PRINCIPAL_NAME = "userPrincipalName";
    public const PHONE_NUMBER = "phoneNumber";
    public const PROXY_ADDRESS = "proxyAddress";
    public const QR_CODE = "qrCode";
    public const ON_PREMISES_USER_PRINCIPAL_NAME = "onPremisesUserPrincipalName";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
