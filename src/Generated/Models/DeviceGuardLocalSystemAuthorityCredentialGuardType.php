<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class DeviceGuardLocalSystemAuthorityCredentialGuardType extends Enum {
    public const NOT_CONFIGURED = 'notConfigured';
    public const ENABLE_WITH_U_E_F_I_LOCK = 'enableWithUEFILock';
    public const ENABLE_WITHOUT_U_E_F_I_LOCK = 'enableWithoutUEFILock';
    public const DISABLE = 'disable';
}
