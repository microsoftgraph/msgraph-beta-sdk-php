<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class RecordCompletionReason extends Enum {
    public const OPERATION_CANCELED = 'operationCanceled';
    public const STOP_TONE_DETECTED = 'stopToneDetected';
    public const MAX_RECORD_DURATION_REACHED = 'maxRecordDurationReached';
    public const INITIAL_SILENCE_TIMEOUT = 'initialSilenceTimeout';
    public const MAX_SILENCE_TIMEOUT = 'maxSilenceTimeout';
    public const PLAY_PROMPT_FAILED = 'playPromptFailed';
    public const PLAY_BEEP_FAILED = 'playBeepFailed';
    public const MEDIA_RECEIVE_TIMEOUT = 'mediaReceiveTimeout';
    public const UNSPECIFIED_ERROR = 'unspecifiedError';
}
