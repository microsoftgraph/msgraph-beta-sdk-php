<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Enum;

class EducationSynchronizationProfileState extends Enum {
    public const DELETING = 'deleting';
    public const DELETION_FAILED = 'deletionFailed';
    public const PROVISIONING_FAILED = 'provisioningFailed';
    public const PROVISIONED = 'provisioned';
    public const PROVISIONING = 'provisioning';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
