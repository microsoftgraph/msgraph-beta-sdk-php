<?php

namespace Microsoft\Graph\Beta\Generated\Models\Networkaccess;

use Microsoft\Kiota\Abstractions\Enum;

class OnboardingStatus extends Enum {
    public const OFFBOARDED = "offboarded";
    public const OFFBOARDING_IN_PROGRESS = "offboardingInProgress";
    public const ONBOARDING_IN_PROGRESS = "onboardingInProgress";
    public const ONBOARDED = "onboarded";
    public const ONBOARDING_ERROR_OCCURRED = "onboardingErrorOccurred";
    public const OFFBOARDING_ERROR_OCCURRED = "offboardingErrorOccurred";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
