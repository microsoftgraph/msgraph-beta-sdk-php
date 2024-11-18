<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class IncomingTokenType extends Enum {
    public const NONE = "none";
    public const PRIMARY_REFRESH_TOKEN = "primaryRefreshToken";
    public const SAML11 = "saml11";
    public const SAML20 = "saml20";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
    public const REMOTE_DESKTOP_TOKEN = "remoteDesktopToken";
    public const REFRESH_TOKEN = "refreshToken";
}
