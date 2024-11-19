<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class FileVaultState extends Enum {
    public const SUCCESS = "success";
    public const DRIVE_ENCRYPTED_BY_USER = "driveEncryptedByUser";
    public const USER_DEFERRED_ENCRYPTION = "userDeferredEncryption";
    public const ESCROW_NOT_ENABLED = "escrowNotEnabled";
}
