<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ZebraFotaDeploymentState extends Enum {
    public const PENDING_CREATION = "pendingCreation";
    public const CREATE_FAILED = "createFailed";
    public const CREATED = "created";
    public const IN_PROGRESS = "inProgress";
    public const COMPLETED = "completed";
    public const PENDING_CANCEL = "pendingCancel";
    public const CANCELED = "canceled";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
