<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class WindowsAutopilotProfileAssignmentStatus extends Enum {
    public const UNKNOWN = 'unknown';
    public const ASSIGNED_IN_SYNC = 'assignedInSync';
    public const ASSIGNED_OUT_OF_SYNC = 'assignedOutOfSync';
    public const ASSIGNED_UNKOWN_SYNC_STATE = 'assignedUnkownSyncState';
    public const NOT_ASSIGNED = 'notAssigned';
    public const PENDING = 'pending';
    public const FAILED = 'failed';
}
