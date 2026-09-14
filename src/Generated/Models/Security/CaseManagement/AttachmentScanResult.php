<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\CaseManagement;

use Microsoft\Kiota\Abstractions\Enum;

class AttachmentScanResult extends Enum {
    public const UNSCANNED = "unscanned";
    public const NO_THREATS_FOUND = "noThreatsFound";
    public const MALICIOUS = "malicious";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
