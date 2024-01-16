<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PlannerTaskCompletionRequirements extends Enum {
    public const NONE = 'none';
    public const CHECKLIST_COMPLETION = 'checklistCompletion';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
    public const FORM_COMPLETION = 'formCompletion';
    public const APPROVAL_COMPLETION = 'approvalCompletion';
}
