<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class SetupStatus extends Enum {
    public const UNKNOWN = "unknown";
    public const NOT_REGISTERED_YET = "notRegisteredYet";
    public const REGISTERED_SETUP_NOT_STARTED = "registeredSetupNotStarted";
    public const REGISTERED_SETUP_IN_PROGRESS = "registeredSetupInProgress";
    public const REGISTRATION_AND_SETUP_COMPLETED = "registrationAndSetupCompleted";
    public const REGISTRATION_FAILED = "registrationFailed";
    public const REGISTRATION_TIMED_OUT = "registrationTimedOut";
    public const DISABLED = "disabled";
}
