<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\Networkaccess;

use Microsoft\Kiota\Abstractions\Enum;

class TlsCertificateStatus extends Enum {
    public const CSR_GENERATED = "csrGenerated";
    public const ENROLLING = "enrolling";
    public const ACTIVE = "active";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
    public const EXPIRING = "expiring";
    public const EXPIRED = "expired";
}
