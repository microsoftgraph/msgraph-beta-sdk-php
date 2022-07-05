<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class UserPurpose extends Enum {
    public const UNKNOWN = 'unknown';
    public const USER = 'user';
    public const LINKED = 'linked';
    public const SHARED = 'shared';
    public const ROOM = 'room';
    public const EQUIPMENT = 'equipment';
    public const OTHERS = 'others';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
