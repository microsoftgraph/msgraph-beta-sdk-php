<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Enum;

class RoutingPolicy extends Enum {
    public const NONE = 'none';
    public const NO_MISSED_CALL = 'noMissedCall';
    public const DISABLE_FORWARDING_EXCEPT_PHONE = 'disableForwardingExceptPhone';
    public const DISABLE_FORWARDING = 'disableForwarding';
    public const PREFER_SKYPE_FOR_BUSINESS = 'preferSkypeForBusiness';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
