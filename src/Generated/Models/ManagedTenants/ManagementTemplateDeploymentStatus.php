<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use Microsoft\Kiota\Abstractions\Enum;

class ManagementTemplateDeploymentStatus extends Enum {
    public const UNKNOWN = 'unknown';
    public const IN_PROGRESS = 'inProgress';
    public const COMPLETED = 'completed';
    public const FAILED = 'failed';
    public const INELIGIBLE = 'ineligible';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
