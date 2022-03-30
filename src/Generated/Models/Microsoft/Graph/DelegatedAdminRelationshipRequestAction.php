<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Enum;

class DelegatedAdminRelationshipRequestAction extends Enum {
    public const LOCK_FOR_APPROVAL = 'lockForApproval';
    public const APPROVE = 'approve';
    public const TERMINATE = 'terminate';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
