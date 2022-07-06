<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ProtocolType extends Enum {
    public const NONE = 'none';
    public const O_AUTH2 = 'oAuth2';
    public const ROPC = 'ropc';
    public const WS_FEDERATION = 'wsFederation';
    public const SAML20 = 'saml20';
    public const DEVICE_CODE = 'deviceCode';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
