<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\SecurityCopilot;

use Microsoft\Kiota\Abstractions\Enum;

class PluginCatalogScope extends Enum {
    public const NONE = "none";
    public const USER = "user";
    public const WORKSPACE = "workspace";
    public const TENANT = "tenant";
    public const GLOBAL = "global";
    public const GEO_GLOBAL = "geoGlobal";
    public const USER_WORKSPACE = "userWorkspace";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
