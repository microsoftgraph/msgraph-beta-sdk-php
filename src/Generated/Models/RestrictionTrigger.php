<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class RestrictionTrigger extends Enum {
    public const COPY_PASTE = 'copyPaste';
    public const COPY_TO_NETWORK_SHARE = 'copyToNetworkShare';
    public const COPY_TO_REMOVABLE_MEDIA = 'copyToRemovableMedia';
    public const SCREEN_CAPTURE = 'screenCapture';
    public const PRINT = 'print';
    public const CLOUD_EGRESS = 'cloudEgress';
    public const UNALLOWED_APPS = 'unallowedApps';
}
