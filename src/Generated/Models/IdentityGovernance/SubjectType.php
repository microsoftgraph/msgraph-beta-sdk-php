<?php

namespace Microsoft\Graph\Beta\Generated\Models\IdentityGovernance;

use Microsoft\Kiota\Abstractions\Enum;

class SubjectType extends Enum {
    public const USER = "user";
    public const AGENT_IDENTITY = "agentIdentity";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
    public const PROVISIONING_OBJECT = "provisioningObject";
}
