<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class Win32LobAppInUseActionType extends Enum {
    public const NOT_ENABLED = "notEnabled";
    public const FAIL = "fail";
    public const TERMINATE_WITHOUT_USER_INTERACTION = "terminateWithoutUserInteraction";
    public const TERMINATE_WITH_USER_INTERACTION = "terminateWithUserInteraction";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
