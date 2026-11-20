<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class InvestigationMessageType extends Enum {
    public const USER_MESSAGE = "userMessage";
    public const AGENT_MESSAGE = "agentMessage";
    public const TOOL_REQUEST = "toolRequest";
    public const TOOL_OUTPUT = "toolOutput";
    public const PERMISSION_REQUEST = "permissionRequest";
    public const PERMISSION_RESPONSE = "permissionResponse";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
