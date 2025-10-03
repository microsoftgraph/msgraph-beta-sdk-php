<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class UserPersona extends Enum {
    public const UNKNOWN = "unknown";
    public const EXTERNAL_MEMBER = "externalMember";
    public const EXTERNAL_GUEST = "externalGuest";
    public const INTERNAL_MEMBER = "internalMember";
    public const INTERNAL_GUEST = "internalGuest";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
