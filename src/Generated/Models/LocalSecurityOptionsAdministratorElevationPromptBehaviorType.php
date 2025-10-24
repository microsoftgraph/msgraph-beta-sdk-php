<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class LocalSecurityOptionsAdministratorElevationPromptBehaviorType extends Enum {
    public const NOT_CONFIGURED = "notConfigured";
    public const ELEVATE_WITHOUT_PROMPTING = "elevateWithoutPrompting";
    public const PROMPT_FOR_CREDENTIALS_ON_THE_SECURE_DESKTOP = "promptForCredentialsOnTheSecureDesktop";
    public const PROMPT_FOR_CONSENT_ON_THE_SECURE_DESKTOP = "promptForConsentOnTheSecureDesktop";
    public const PROMPT_FOR_CREDENTIALS = "promptForCredentials";
    public const PROMPT_FOR_CONSENT = "promptForConsent";
    public const PROMPT_FOR_CONSENT_FOR_NON_WINDOWS_BINARIES = "promptForConsentForNonWindowsBinaries";
}
