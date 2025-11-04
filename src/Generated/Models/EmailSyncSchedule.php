<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class EmailSyncSchedule extends Enum {
    public const USER_DEFINED = "userDefined";
    public const AS_MESSAGES_ARRIVE = "asMessagesArrive";
    public const MANUAL = "manual";
    public const FIFTEEN_MINUTES = "fifteenMinutes";
    public const THIRTY_MINUTES = "thirtyMinutes";
    public const SIXTY_MINUTES = "sixtyMinutes";
    public const BASED_ON_MY_USAGE = "basedOnMyUsage";
}
