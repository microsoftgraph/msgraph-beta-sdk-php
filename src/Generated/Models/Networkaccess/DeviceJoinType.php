<?php

namespace Microsoft\Graph\Beta\Generated\Models\Networkaccess;

use Microsoft\Kiota\Abstractions\Enum;

class DeviceJoinType extends Enum {
    public const NONE = "none";
    public const MICROSOFT_ENTRA_JOINED = "microsoftEntraJoined";
    public const MICROSOFT_ENTRA_REGISTERED = "microsoftEntraRegistered";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
