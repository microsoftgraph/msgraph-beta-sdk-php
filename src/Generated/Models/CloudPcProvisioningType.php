<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class CloudPcProvisioningType extends Enum {
    public const DEDICATED = "dedicated";
    public const SHARED = "shared";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
    public const SHARED_BY_USER = "sharedByUser";
    public const SHARED_BY_ENTRA_GROUP = "sharedByEntraGroup";
    public const RESERVE = "reserve";
}
