<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class IncidentTaskActionType extends Enum {
    public const TEXT = "text";
    public const ISOLATE_DEVICE = "isolateDevice";
    public const STOP_AND_QUARANTINE_FILE = "stopAndQuarantineFile";
    public const RUN_ANTI_VIRUS_SCAN = "runAntiVirusScan";
    public const COLLECT_INVESTIGATION_PACKAGE = "collectInvestigationPackage";
    public const RESTRICT_APP_EXECUTION = "restrictAppExecution";
    public const SUBMIT_IOC_RULE = "submitIocRule";
    public const FORCE_USER_PASSWORD_RESET = "forceUserPasswordReset";
    public const DISABLE_USER = "disableUser";
    public const MARK_USER_AS_COMPROMISED = "markUserAsCompromised";
    public const REQUIRE_SIGN_IN = "requireSignIn";
    public const HARD_DELETE_EMAIL = "hardDeleteEmail";
    public const SOFT_DELETE_EMAIL = "softDeleteEmail";
    public const UN_ISOLATE_DEVICE = "unIsolateDevice";
    public const UN_RESTRICT_APP_EXECUTION = "unRestrictAppExecution";
    public const ENABLE_USER = "enableUser";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
