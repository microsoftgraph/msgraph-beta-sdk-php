<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class AppInfoDataAtRestEncryptionMethod extends Enum {
    public const AES = "aes";
    public const BIT_LOCKER = "bitLocker";
    public const BLOWFISH = "blowfish";
    public const DES3 = "des3";
    public const DES = "des";
    public const RC4 = "rc4";
    public const RS_A = "rsA";
    public const NOT_SUPPORTED = "notSupported";
    public const UNKNOWN = "unknown";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
