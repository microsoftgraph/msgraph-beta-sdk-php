<?php

namespace Microsoft\Graph\Beta\Generated\Models\Networkaccess;

use Microsoft\Kiota\Abstractions\Enum;

class IpSecEncryption extends Enum {
    public const NONE = "none";
    public const GCM_AES128 = "gcmAes128";
    public const GCM_AES192 = "gcmAes192";
    public const GCM_AES256 = "gcmAes256";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
