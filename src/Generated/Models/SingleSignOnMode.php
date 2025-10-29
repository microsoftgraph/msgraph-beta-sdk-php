<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class SingleSignOnMode extends Enum {
    public const NONE = "none";
    public const ON_PREMISES_KERBEROS = "onPremisesKerberos";
    public const SAML = "saml";
    public const PING_HEADER_BASED = "pingHeaderBased";
    public const AAD_HEADER_BASED = "aadHeaderBased";
    public const O_AUTH_TOKEN = "oAuthToken";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
