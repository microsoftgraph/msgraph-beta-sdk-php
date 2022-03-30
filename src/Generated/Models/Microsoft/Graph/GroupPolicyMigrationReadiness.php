<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Enum;

class GroupPolicyMigrationReadiness extends Enum {
    public const NONE = 'none';
    public const PARTIAL = 'partial';
    public const COMPLETE = 'complete';
    public const ERROR = 'error';
    public const NOT_APPLICABLE = 'notApplicable';
}
