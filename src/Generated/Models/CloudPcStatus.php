<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class CloudPcStatus extends Enum {
    public const NOT_PROVISIONED = 'notProvisioned';
    public const PROVISIONING = 'provisioning';
    public const PROVISIONED = 'provisioned';
    public const IN_GRACE_PERIOD = 'inGracePeriod';
    public const DEPROVISIONING = 'deprovisioning';
    public const FAILED = 'failed';
    public const PROVISIONED_WITH_WARNINGS = 'provisionedWithWarnings';
    public const RESIZING = 'resizing';
    public const RESTORING = 'restoring';
    public const PENDING_PROVISION = 'pendingProvision';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
