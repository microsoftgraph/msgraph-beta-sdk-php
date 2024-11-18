<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class OnboardingStatus extends Enum {
    public const UNKNOWN = "unknown";
    public const INPROGRESS = "inprogress";
    public const ONBOARDED = "onboarded";
    public const FAILED = "failed";
    public const OFFBOARDING = "offboarding";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
