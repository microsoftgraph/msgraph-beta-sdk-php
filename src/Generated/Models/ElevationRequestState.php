<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ElevationRequestState extends Enum {
    public const NONE = 'none';
    public const PENDING = 'pending';
    public const APPROVED = 'approved';
    public const DENIED = 'denied';
    public const EXPIRED = 'expired';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
    public const REVOKED = 'revoked';
}
