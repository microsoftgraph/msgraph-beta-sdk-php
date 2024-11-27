<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class CloudPcDiskEncryptionType extends Enum {
    public const PLATFORM_MANAGED_KEY = "platformManagedKey";
    public const CUSTOMER_MANAGED_KEY = "customerManagedKey";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
