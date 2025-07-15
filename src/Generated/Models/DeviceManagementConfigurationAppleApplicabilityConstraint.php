<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class DeviceManagementConfigurationAppleApplicabilityConstraint extends Enum {
    public const NOT_SUPPORTED = "notSupported";
    public const DEVICE_CHANNEL = "deviceChannel";
    public const USER_CHANNEL = "userChannel";
    public const REQUIRE_SUPERVISED = "requireSupervised";
    public const REQUIRE_DEP_ENROLLED = "requireDepEnrolled";
    public const REQUIRE_USER_APPROVED = "requireUserApproved";
    public const ALLOW_USER_ENROLLMENT = "allowUserEnrollment";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
