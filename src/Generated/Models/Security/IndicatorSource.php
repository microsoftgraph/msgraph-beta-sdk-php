<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class IndicatorSource extends Enum {
    public const MICROSOFT_DEFENDER_THREAT_INTELLIGENCE = 'microsoftDefenderThreatIntelligence';
    public const OPEN_SOURCE_INTELLIGENCE = 'openSourceIntelligence';
    public const ESCAPED_PUBLIC = 'public';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
