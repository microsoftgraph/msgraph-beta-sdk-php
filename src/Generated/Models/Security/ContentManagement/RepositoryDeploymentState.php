<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\ContentManagement;

use Microsoft\Kiota\Abstractions\Enum;

class RepositoryDeploymentState extends Enum {
    public const IN_PROGRESS = "inProgress";
    public const COMPLETED = "completed";
    public const QUEUED = "queued";
    public const CANCELING = "canceling";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
