<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class VppTokenActionFailureReason extends Enum {
    public const NONE = "none";
    public const APPLE_FAILURE = "appleFailure";
    public const INTERNAL_ERROR = "internalError";
    public const EXPIRED_VPP_TOKEN = "expiredVppToken";
    public const EXPIRED_APPLE_PUSH_NOTIFICATION_CERTIFICATE = "expiredApplePushNotificationCertificate";
}
