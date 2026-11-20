<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\ContentManagement;

use Microsoft\Kiota\Abstractions\Enum;

class RepositoryPullRequestState extends Enum {
    public const OPEN = "open";
    public const CLOSED = "closed";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
    public const MERGED = "merged";
}
