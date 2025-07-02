<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class CallEventType extends Enum {
    public const CALL_STARTED = "callStarted";
    public const CALL_ENDED = "callEnded";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
    public const ROSTER_UPDATED = "rosterUpdated";
    public const TRANSCRIPTION_STARTED = "transcriptionStarted";
    public const TRANSCRIPTION_STOPPED = "transcriptionStopped";
    public const RECORDING_STARTED = "recordingStarted";
    public const RECORDING_STOPPED = "recordingStopped";
}
