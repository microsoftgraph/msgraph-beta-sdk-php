<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ChainBreakReason extends Enum {
    public const NONE = "none";
    public const IDV_REVOKED = "idvRevoked";
    public const SOURCE_CREDENTIAL_REVOKED = "sourceCredentialRevoked";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
