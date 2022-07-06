<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class WiredNetworkAuthenticationMethod extends Enum {
    public const CERTIFICATE = 'certificate';
    public const USERNAME_AND_PASSWORD = 'usernameAndPassword';
    public const DERIVED_CREDENTIAL = 'derivedCredential';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
