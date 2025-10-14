<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class FolderProtectionType extends Enum {
    public const USER_DEFINED = "userDefined";
    public const ENABLE = "enable";
    public const AUDIT_MODE = "auditMode";
    public const BLOCK_DISK_MODIFICATION = "blockDiskModification";
    public const AUDIT_DISK_MODIFICATION = "auditDiskModification";
}
