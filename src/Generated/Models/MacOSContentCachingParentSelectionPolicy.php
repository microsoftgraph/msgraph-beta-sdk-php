<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class MacOSContentCachingParentSelectionPolicy extends Enum {
    public const NOT_CONFIGURED = "notConfigured";
    public const ROUND_ROBIN = "roundRobin";
    public const FIRST_AVAILABLE = "firstAvailable";
    public const URL_PATH_HASH = "urlPathHash";
    public const RANDOM = "random";
    public const STICKY_AVAILABLE = "stickyAvailable";
}
