<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class CloudPcCloudAppStatus extends Enum {
    public const PREPARING = "preparing";
    public const READY = "ready";
    public const PUBLISHING = "publishing";
    public const PUBLISHED = "published";
    public const UNPUBLISHING = "unpublishing";
    public const FAILED = "failed";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
