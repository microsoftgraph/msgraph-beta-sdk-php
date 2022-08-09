<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class DeviceLicensingStatus extends Enum {
    public const UNKNOWN = 'unknown';
    public const LICENSE_REFRESH_STARTED = 'licenseRefreshStarted';
    public const LICENSE_REFRESH_PENDING = 'licenseRefreshPending';
    public const DEVICE_IS_NOT_AZURE_ACTIVE_DIRECTORY_JOINED = 'deviceIsNotAzureActiveDirectoryJoined';
    public const VERIFYING_MICROSOFT_DEVICE_IDENTITY = 'verifyingMicrosoftDeviceIdentity';
    public const DEVICE_IDENTITY_VERIFICATION_FAILED = 'deviceIdentityVerificationFailed';
    public const VERIFYING_MIROSOFT_ACCOUNT_IDENTITY = 'verifyingMirosoftAccountIdentity';
    public const MIROSOFT_ACCOUNT_VERIFICATION_FAILED = 'mirosoftAccountVerificationFailed';
    public const ACQUIRING_DEVICE_LICENSE = 'acquiringDeviceLicense';
    public const REFRESHING_DEVICE_LICENSE = 'refreshingDeviceLicense';
    public const DEVICE_LICENSE_REFRESH_SUCCEED = 'deviceLicenseRefreshSucceed';
    public const DEVICE_LICENSE_REFRESH_FAILED = 'deviceLicenseRefreshFailed';
    public const REMOVING_DEVICE_LICENSE = 'removingDeviceLicense';
    public const DEVICE_LICENSE_REMOVE_SUCCEED = 'deviceLicenseRemoveSucceed';
    public const DEVICE_LICENSE_REMOVE_FAILED = 'deviceLicenseRemoveFailed';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
