<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ChangeAnnouncementChangeType extends Enum {
    public const BREAKING_CHANGE = "breakingChange";
    public const DEPRECATION = "deprecation";
    public const END_OF_SUPPORT = "endOfSupport";
    public const FEATURE_CHANGE = "featureChange";
    public const OTHER = "other";
    public const RETIREMENT = "retirement";
    public const SECURITY_INCIDENT = "securityIncident";
    public const UX_CHANGE = "uxChange";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
