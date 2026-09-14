<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\CaseManagement;

use Microsoft\Kiota\Abstractions\Enum;

class AttachmentOriginType extends Enum {
    public const CASE = "case";
    public const COMMENT = "comment";
    public const TASK = "task";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
