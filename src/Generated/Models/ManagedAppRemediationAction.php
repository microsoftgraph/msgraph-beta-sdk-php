<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ManagedAppRemediationAction extends Enum {
    public const BLOCK = "block";
    public const WIPE = "wipe";
    public const WARN = "warn";
    public const BLOCK_WHEN_SETTING_IS_SUPPORTED = "blockWhenSettingIsSupported";
}
