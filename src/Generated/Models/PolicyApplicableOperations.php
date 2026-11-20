<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PolicyApplicableOperations extends Enum {
    public const CREATE = "create";
    public const UPDATE_OR_UPSERT = "updateOrUpsert";
    public const DELETE = "delete";
    public const INVOKE_ACTION = "invokeAction";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
