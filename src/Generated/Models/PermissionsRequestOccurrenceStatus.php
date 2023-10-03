<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PermissionsRequestOccurrenceStatus extends Enum {
    public const GRANTING_FAILED = 'grantingFailed';
    public const GRANTED = 'granted';
    public const GRANTING = 'granting';
    public const REVOKED = 'revoked';
    public const REVOKING = 'revoking';
    public const REVOKING_FAILED = 'revokingFailed';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
