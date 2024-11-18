<?php

namespace Microsoft\Graph\Beta\Generated\Models\Ediscovery;

use Microsoft\Kiota\Abstractions\Enum;

class CaseStatus extends Enum {
    public const UNKNOWN = "unknown";
    public const ACTIVE = "active";
    public const PENDING_DELETE = "pendingDelete";
    public const CLOSING = "closing";
    public const CLOSED = "closed";
    public const CLOSED_WITH_ERROR = "closedWithError";
}
