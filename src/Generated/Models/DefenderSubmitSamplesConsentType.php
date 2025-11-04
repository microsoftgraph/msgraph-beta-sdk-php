<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class DefenderSubmitSamplesConsentType extends Enum {
    public const SEND_SAFE_SAMPLES_AUTOMATICALLY = "sendSafeSamplesAutomatically";
    public const ALWAYS_PROMPT = "alwaysPrompt";
    public const NEVER_SEND = "neverSend";
    public const SEND_ALL_SAMPLES_AUTOMATICALLY = "sendAllSamplesAutomatically";
}
