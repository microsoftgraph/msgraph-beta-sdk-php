<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class AccessLevel extends Enum {
    public const EVERYONE = 'everyone';
    public const INVITED = 'invited';
    public const LOCKED = 'locked';
    public const SAME_ENTERPRISE = 'sameEnterprise';
    public const SAME_ENTERPRISE_AND_FEDERATED = 'sameEnterpriseAndFederated';
}
