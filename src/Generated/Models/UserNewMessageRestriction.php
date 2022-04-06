<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class UserNewMessageRestriction extends Enum {
    public const EVERYONE = 'everyone';
    public const EVERYONE_EXCEPT_GUESTS = 'everyoneExceptGuests';
    public const MODERATORS = 'moderators';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
