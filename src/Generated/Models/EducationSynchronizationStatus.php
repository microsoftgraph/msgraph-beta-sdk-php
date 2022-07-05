<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class EducationSynchronizationStatus extends Enum {
    public const PAUSED = 'paused';
    public const IN_PROGRESS = 'inProgress';
    public const SUCCESS = 'success';
    public const ERROR = 'error';
    public const VALIDATION_ERROR = 'validationError';
    public const QUARANTINED = 'quarantined';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
    public const EXTRACTING = 'extracting';
    public const VALIDATING = 'validating';
}
