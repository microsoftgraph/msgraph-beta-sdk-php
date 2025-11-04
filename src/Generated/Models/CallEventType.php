<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class CallEventType extends Enum {
    public const CALL_STARTED = "callStarted";
    public const CALL_ENDED = "callEnded";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
    public const ROSTER_UPDATED = "rosterUpdated";
    public const TRANSCRIPTION_STATE_UPDATED = "transcriptionStateUpdated";
    public const RECORDING_STATE_UPDATED = "recordingStateUpdated";
}
