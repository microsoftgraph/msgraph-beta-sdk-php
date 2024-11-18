<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ConfigurationManagerClientState extends Enum {
    public const UNKNOWN = "unknown";
    public const INSTALLED = "installed";
    public const HEALTHY = "healthy";
    public const INSTALL_FAILED = "installFailed";
    public const UPDATE_FAILED = "updateFailed";
    public const COMMUNICATION_ERROR = "communicationError";
}
