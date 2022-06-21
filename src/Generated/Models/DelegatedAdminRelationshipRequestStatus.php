<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class DelegatedAdminRelationshipRequestStatus extends Enum {
    public const CREATED = 'created';
    public const PENDING = 'pending';
    public const COMPLETE = 'complete';
    public const FAILED = 'failed';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
