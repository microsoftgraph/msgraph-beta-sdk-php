<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\CaseManagement;

use Microsoft\Kiota\Abstractions\Enum;

class CaseTaskCategory extends Enum {
    public const UNCATEGORIZED = "uncategorized";
    public const TRIAGE = "triage";
    public const CONTAIN = "contain";
    public const INVESTIGATE = "investigate";
    public const REMEDIATE = "remediate";
    public const PREVENT = "prevent";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
