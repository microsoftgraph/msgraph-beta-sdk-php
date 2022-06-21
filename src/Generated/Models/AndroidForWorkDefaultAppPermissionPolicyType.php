<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class AndroidForWorkDefaultAppPermissionPolicyType extends Enum {
    public const DEVICE_DEFAULT = 'deviceDefault';
    public const PROMPT = 'prompt';
    public const AUTO_GRANT = 'autoGrant';
    public const AUTO_DENY = 'autoDeny';
}
