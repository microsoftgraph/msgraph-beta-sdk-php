<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class EvidenceRemediationStatus extends Enum {
    public const NONE = 'none';
    public const REMEDIATED = 'remediated';
    public const PREVENTED = 'prevented';
    public const BLOCKED = 'blocked';
    public const NOT_FOUND = 'notFound';
    public const ACTIVE = 'active';
    public const PENDING_APPROVAL = 'pendingApproval';
    public const DECLINED = 'declined';
    public const NOT_REMEDIATED = 'notRemediated';
    public const RUNNING = 'running';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
