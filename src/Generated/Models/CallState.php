<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class CallState extends Enum {
    public const INCOMING = "incoming";
    public const ESTABLISHING = "establishing";
    public const RINGING = "ringing";
    public const ESTABLISHED = "established";
    public const HOLD = "hold";
    public const TRANSFERRING = "transferring";
    public const TRANSFER_ACCEPTED = "transferAccepted";
    public const REDIRECTING = "redirecting";
    public const TERMINATING = "terminating";
    public const TERMINATED = "terminated";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
