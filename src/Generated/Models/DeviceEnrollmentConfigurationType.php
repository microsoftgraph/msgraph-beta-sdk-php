<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class DeviceEnrollmentConfigurationType extends Enum {
    public const UNKNOWN = "unknown";
    public const LIMIT = "limit";
    public const PLATFORM_RESTRICTIONS = "platformRestrictions";
    public const WINDOWS_HELLO_FOR_BUSINESS = "windowsHelloForBusiness";
    public const DEFAULT_LIMIT = "defaultLimit";
    public const DEFAULT_PLATFORM_RESTRICTIONS = "defaultPlatformRestrictions";
    public const DEFAULT_WINDOWS_HELLO_FOR_BUSINESS = "defaultWindowsHelloForBusiness";
    public const DEFAULT_WINDOWS10_ENROLLMENT_COMPLETION_PAGE_CONFIGURATION = "defaultWindows10EnrollmentCompletionPageConfiguration";
    public const WINDOWS10_ENROLLMENT_COMPLETION_PAGE_CONFIGURATION = "windows10EnrollmentCompletionPageConfiguration";
    public const DEVICE_COMANAGEMENT_AUTHORITY_CONFIGURATION = "deviceComanagementAuthorityConfiguration";
    public const SINGLE_PLATFORM_RESTRICTION = "singlePlatformRestriction";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
    public const ENROLLMENT_NOTIFICATIONS_CONFIGURATION = "enrollmentNotificationsConfiguration";
}
