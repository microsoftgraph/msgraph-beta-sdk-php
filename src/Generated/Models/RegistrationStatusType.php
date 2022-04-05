<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class RegistrationStatusType extends Enum {
    public const REGISTERED = 'registered';
    public const ENABLED = 'enabled';
    public const CAPABLE = 'capable';
    public const MFA_REGISTERED = 'mfaRegistered';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
