<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\Networkaccess;

use Microsoft\Kiota\Abstractions\Enum;

class IntentCategory extends Enum {
    public const INITIAL_ACCESS = "initialAccess";
    public const PERSISTENCE = "persistence";
    public const PRIVILEGE_ESCALATION = "privilegeEscalation";
    public const DEFENSE_EVASION = "defenseEvasion";
    public const CREDENTIAL_ACCESS = "credentialAccess";
    public const DISCOVERY = "discovery";
    public const LATERAL_MOVEMENT = "lateralMovement";
    public const EXECUTION = "execution";
    public const COLLECTION = "collection";
    public const EXFILTRATION = "exfiltration";
    public const COMMAND_AND_CONTROL = "commandAndControl";
    public const IMPACT = "impact";
    public const IMPAIR_PROCESS_CONTROL = "impairProcessControl";
    public const INHIBIT_RESPONSE_FUNCTION = "inhibitResponseFunction";
    public const RECONNAISSANCE = "reconnaissance";
    public const RESOURCE_DEVELOPMENT = "resourceDevelopment";
    public const EVASION = "evasion";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
