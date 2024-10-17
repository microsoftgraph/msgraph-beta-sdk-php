<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class CloudCertificationAuthorityLeafCertificateStatus extends Enum {
    public const UNKNOWN = 'unknown';
    public const ACTIVE = 'active';
    public const REVOKED = 'revoked';
    public const EXPIRED = 'expired';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
