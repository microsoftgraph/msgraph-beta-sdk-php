<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class LocalSecurityOptionsStandardUserElevationPromptBehaviorType extends Enum {
    public const NOT_CONFIGURED = "notConfigured";
    public const AUTOMATICALLY_DENY_ELEVATION_REQUESTS = "automaticallyDenyElevationRequests";
    public const PROMPT_FOR_CREDENTIALS_ON_THE_SECURE_DESKTOP = "promptForCredentialsOnTheSecureDesktop";
    public const PROMPT_FOR_CREDENTIALS = "promptForCredentials";
}
