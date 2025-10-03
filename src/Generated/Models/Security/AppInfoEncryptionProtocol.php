<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class AppInfoEncryptionProtocol extends Enum {
    public const TLS1_0 = "tls1_0";
    public const TLS1_1 = "tls1_1";
    public const TLS1_2 = "tls1_2";
    public const TLS1_3 = "tls1_3";
    public const NOT_APPLICABLE = "notApplicable";
    public const NOT_SUPPORTED = "notSupported";
    public const UNKNOWN = "unknown";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
    public const SSL3 = "ssl3";
}
