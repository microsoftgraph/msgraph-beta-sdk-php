<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ApprovalState extends Enum {
    public const PENDING = "pending";
    public const APPROVED = "approved";
    public const DENIED = "denied";
    public const ABORTED = "aborted";
    public const CANCELED = "canceled";
}
