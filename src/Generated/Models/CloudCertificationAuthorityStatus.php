<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class CloudCertificationAuthorityStatus extends Enum {
    public const UNKNOWN = 'unknown';
    public const ACTIVE = 'active';
    public const PAUSED = 'paused';
    public const REVOKED = 'revoked';
    public const SIGNING_PENDING = 'signingPending';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
