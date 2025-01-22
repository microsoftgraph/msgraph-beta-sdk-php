<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use Microsoft\Kiota\Abstractions\Enum;

class EnrollmentState extends Enum {
    public const NOT_ENROLLED = "notEnrolled";
    public const ENROLLED = "enrolled";
    public const ENROLLED_WITH_POLICY = "enrolledWithPolicy";
    public const ENROLLING = "enrolling";
    public const UNENROLLING = "unenrolling";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
