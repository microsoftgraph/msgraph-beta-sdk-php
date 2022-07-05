<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class LocalSecurityOptionsMinimumSessionSecurity extends Enum {
    public const NONE = 'none';
    public const REQUIRE_NTML_V2_SESSION_SECURITY = 'requireNtmlV2SessionSecurity';
    public const REQUIRE128_BIT_ENCRYPTION = 'require128BitEncryption';
    public const NTLM_V2_AND128_BIT_ENCRYPTION = 'ntlmV2And128BitEncryption';
}
