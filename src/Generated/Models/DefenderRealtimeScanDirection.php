<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class DefenderRealtimeScanDirection extends Enum {
    public const MONITOR_ALL_FILES = "monitorAllFiles";
    public const MONITOR_INCOMING_FILES_ONLY = "monitorIncomingFilesOnly";
    public const MONITOR_OUTGOING_FILES_ONLY = "monitorOutgoingFilesOnly";
}
