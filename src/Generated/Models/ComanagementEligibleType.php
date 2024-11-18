<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ComanagementEligibleType extends Enum {
    public const COMANAGED = "comanaged";
    public const ELIGIBLE = "eligible";
    public const ELIGIBLE_BUT_NOT_AZURE_AD_JOINED = "eligibleButNotAzureAdJoined";
    public const NEEDS_OS_UPDATE = "needsOsUpdate";
    public const INELIGIBLE = "ineligible";
    public const SCHEDULED_FOR_ENROLLMENT = "scheduledForEnrollment";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
