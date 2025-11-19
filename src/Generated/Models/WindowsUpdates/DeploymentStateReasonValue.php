<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\WindowsUpdates;

use Microsoft\Kiota\Abstractions\Enum;

class DeploymentStateReasonValue extends Enum {
    public const SCHEDULED_BY_OFFER_WINDOW = "scheduledByOfferWindow";
    public const OFFERING_BY_REQUEST = "offeringByRequest";
    public const PAUSED_BY_REQUEST = "pausedByRequest";
    public const PAUSED_BY_MONITORING = "pausedByMonitoring";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
    public const FAULTED_BY_CONTENT_OUTDATED = "faultedByContentOutdated";
}
