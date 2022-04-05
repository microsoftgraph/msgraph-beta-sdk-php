<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class DeviceManagementTemplateLifecycleState extends Enum {
    public const INVALID = 'invalid';
    public const DRAFT = 'draft';
    public const ACTIVE = 'active';
    public const SUPERSEDED = 'superseded';
    public const DEPRECATED = 'deprecated';
    public const RETIRED = 'retired';
}
