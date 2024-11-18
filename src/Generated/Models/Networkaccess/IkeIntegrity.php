<?php

namespace Microsoft\Graph\Beta\Generated\Models\Networkaccess;

use Microsoft\Kiota\Abstractions\Enum;

class IkeIntegrity extends Enum {
    public const SHA256 = "sha256";
    public const SHA384 = "sha384";
    public const GCM_AES128 = "gcmAes128";
    public const GCM_AES256 = "gcmAes256";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
