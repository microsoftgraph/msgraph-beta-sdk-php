<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class MfaFailureReasonCode extends Enum {
    public const MFA_INCOMPLETE = 'mfaIncomplete';
    public const MFA_DENIED = 'mfaDenied';
    public const SYSTEM_FAILURE = 'systemFailure';
    public const BAD_REQUEST = 'badRequest';
    public const OTHER = 'other';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
