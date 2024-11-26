<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class AppInstallControlType extends Enum {
    public const NOT_CONFIGURED = "notConfigured";
    public const ANYWHERE = "anywhere";
    public const STORE_ONLY = "storeOnly";
    public const RECOMMENDATIONS = "recommendations";
    public const PREFER_STORE = "preferStore";
}
