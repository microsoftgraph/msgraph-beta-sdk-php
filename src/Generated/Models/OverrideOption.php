<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class OverrideOption extends Enum {
    public const NOT_ALLOWED = 'notAllowed';
    public const ALLOW_FALSE_POSITIVE_OVERRIDE = 'allowFalsePositiveOverride';
    public const ALLOW_WITH_JUSTIFICATION = 'allowWithJustification';
    public const ALLOW_WITHOUT_JUSTIFICATION = 'allowWithoutJustification';
}
