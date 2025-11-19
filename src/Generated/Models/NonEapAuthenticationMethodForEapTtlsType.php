<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class NonEapAuthenticationMethodForEapTtlsType extends Enum {
    public const UNENCRYPTED_PASSWORD = "unencryptedPassword";
    public const CHALLENGE_HANDSHAKE_AUTHENTICATION_PROTOCOL = "challengeHandshakeAuthenticationProtocol";
    public const MICROSOFT_CHAP = "microsoftChap";
    public const MICROSOFT_CHAP_VERSION_TWO = "microsoftChapVersionTwo";
}
