<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\SecurityCopilot;

use Microsoft\Kiota\Abstractions\Enum;

class EvaluationState extends Enum {
    public const UNKNOWN = "unknown";
    public const CREATED = "created";
    public const RUNNING = "running";
    public const COMPLETED = "completed";
    public const CANCELLED = "cancelled";
    public const PENDING = "pending";
    public const DEFERRED = "deferred";
    public const WAITING_FOR_INPUT = "waitingForInput";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
