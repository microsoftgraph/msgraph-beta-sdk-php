<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Enum;

class DriverApprovalStatus extends Enum {
    public const NEEDS_REVIEW = 'needsReview';
    public const DECLINED = 'declined';
    public const APPROVED = 'approved';
    public const SUSPENDED = 'suspended';
}
