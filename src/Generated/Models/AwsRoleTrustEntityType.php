<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class AwsRoleTrustEntityType extends Enum {
    public const NONE = 'none';
    public const SERVICE = 'service';
    public const SSO = 'sso';
    public const CROSS_ACCOUNT = 'crossAccount';
    public const WEB_IDENTITY = 'webIdentity';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
