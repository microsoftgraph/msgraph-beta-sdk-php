<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class CertificateRevocationStatus extends Enum {
    public const NONE = 'none';
    public const PENDING = 'pending';
    public const ISSUED = 'issued';
    public const FAILED = 'failed';
    public const REVOKED = 'revoked';
}
