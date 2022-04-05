<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class GroupPolicyUploadedDefinitionFileStatus extends Enum {
    public const NONE = 'none';
    public const UPLOAD_IN_PROGRESS = 'uploadInProgress';
    public const AVAILABLE = 'available';
    public const ASSIGNED = 'assigned';
    public const REMOVAL_IN_PROGRESS = 'removalInProgress';
    public const UPLOAD_FAILED = 'uploadFailed';
    public const REMOVAL_FAILED = 'removalFailed';
}
