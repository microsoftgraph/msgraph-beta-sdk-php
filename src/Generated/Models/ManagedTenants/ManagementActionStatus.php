<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\ManagedTenants;

use Microsoft\Kiota\Abstractions\Enum;

class ManagementActionStatus extends Enum {
    public const TO_ADDRESS = "toAddress";
    public const COMPLETED = "completed";
    public const ERROR = "error";
    public const TIME_OUT = "timeOut";
    public const IN_PROGRESS = "inProgress";
    public const PLANNED = "planned";
    public const RESOLVED_BY3RD_PARTY = "resolvedBy3rdParty";
    public const RESOLVED_THROUGH_ALTERNATE_MITIGATION = "resolvedThroughAlternateMitigation";
    public const RISK_ACCEPTED = "riskAccepted";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
