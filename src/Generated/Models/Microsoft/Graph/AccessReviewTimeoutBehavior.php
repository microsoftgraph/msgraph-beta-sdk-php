<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Enum;

class AccessReviewTimeoutBehavior extends Enum {
    public const KEEP_ACCESS = 'keepAccess';
    public const REMOVE_ACCESS = 'removeAccess';
    public const ACCEPT_ACCESS_RECOMMENDATION = 'acceptAccessRecommendation';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
