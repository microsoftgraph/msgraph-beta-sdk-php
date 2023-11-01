<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class AwsAccessType extends Enum {
    public const PUBLIC = 'public';
    public const RESTRICTED = 'restricted';
    public const CROSS_ACCOUNT = 'crossAccount';
    public const PRIVATE = 'private';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
