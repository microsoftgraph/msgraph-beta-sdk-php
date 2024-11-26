<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ClassificationMethod extends Enum {
    public const PATTERN_MATCH = "patternMatch";
    public const EXACT_DATA_MATCH = "exactDataMatch";
    public const FINGERPRINT = "fingerprint";
    public const MACHINE_LEARNING = "machineLearning";
}
