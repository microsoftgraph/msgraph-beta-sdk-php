<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\Dlp;

use Microsoft\Kiota\Abstractions\Enum;

class RemediationActivityType extends Enum {
    public const UNKNOWN = "unknown";
    public const TEMPLATE_TRIGGERED = "templateTriggered";
    public const IW_UNABLE_TO_TAKE_ACTION = "iwUnableToTakeAction";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
