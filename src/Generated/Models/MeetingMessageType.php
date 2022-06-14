<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class MeetingMessageType extends Enum {
    public const NONE = 'none';
    public const MEETING_REQUEST = 'meetingRequest';
    public const MEETING_CANCELLED = 'meetingCancelled';
    public const MEETING_ACCEPTED = 'meetingAccepted';
    public const MEETING_TENTATIVELY_ACCEPTED = 'meetingTentativelyAccepted';
    public const MEETING_DECLINED = 'meetingDeclined';
}
