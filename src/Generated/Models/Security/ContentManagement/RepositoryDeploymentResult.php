<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\ContentManagement;

use Microsoft\Kiota\Abstractions\Enum;

class RepositoryDeploymentResult extends Enum {
    public const SUCCESS = "success";
    public const CANCELED = "canceled";
    public const FAILED = "failed";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
    public const PENDING = "pending";
}
