<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class TeamworkSupportedClient extends Enum {
    public const UNKNOWN = "unknown";
    public const SKYPE_DEFAULT_AND_TEAMS = "skypeDefaultAndTeams";
    public const TEAMS_DEFAULT_AND_SKYPE = "teamsDefaultAndSkype";
    public const SKYPE_ONLY = "skypeOnly";
    public const TEAMS_ONLY = "teamsOnly";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
