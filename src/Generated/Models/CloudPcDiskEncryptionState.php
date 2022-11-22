<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class CloudPcDiskEncryptionState extends Enum {
    public const NOT_AVAILABLE = 'notAvailable';
    public const NOT_ENCRYPTED = 'notEncrypted';
    public const ENCRYPTED_USING_PLATFORM_MANAGED_KEY = 'encryptedUsingPlatformManagedKey';
    public const ENCRYPTED_USING_CUSTOMER_MANAGED_KEY = 'encryptedUsingCustomerManagedKey';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
