<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Enum;

class RuleMode extends Enum {
    public const AUDIT = 'audit';
    public const AUDIT_AND_NOTIFY = 'auditAndNotify';
    public const ENFORCE = 'enforce';
    public const PENDING_DELETION = 'pendingDeletion';
    public const TEST = 'test';
}
