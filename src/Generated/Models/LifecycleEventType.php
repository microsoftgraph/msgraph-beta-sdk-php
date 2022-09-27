<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class LifecycleEventType extends Enum {
    public const MISSED = 'missed';
    public const SUBSCRIPTION_REMOVED = 'subscriptionRemoved';
    public const REAUTHORIZATION_REQUIRED = 'reauthorizationRequired';
}
