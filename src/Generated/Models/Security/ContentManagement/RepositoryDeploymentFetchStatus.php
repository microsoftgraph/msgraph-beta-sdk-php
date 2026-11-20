<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\ContentManagement;

use Microsoft\Kiota\Abstractions\Enum;

class RepositoryDeploymentFetchStatus extends Enum {
    public const SUCCESS = "success";
    public const UNAUTHORIZED = "unauthorized";
    public const NOT_FOUND = "notFound";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
    public const UNAVAILABLE = "unavailable";
}
