<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class DeviceEnrollmentType extends Enum {
    public const UNKNOWN = 'unknown';
    public const USER_ENROLLMENT = 'userEnrollment';
    public const DEVICE_ENROLLMENT_MANAGER = 'deviceEnrollmentManager';
    public const APPLE_BULK_WITH_USER = 'appleBulkWithUser';
    public const APPLE_BULK_WITHOUT_USER = 'appleBulkWithoutUser';
    public const WINDOWS_AZURE_A_D_JOIN = 'windowsAzureADJoin';
    public const WINDOWS_BULK_USERLESS = 'windowsBulkUserless';
    public const WINDOWS_AUTO_ENROLLMENT = 'windowsAutoEnrollment';
    public const WINDOWS_BULK_AZURE_DOMAIN_JOIN = 'windowsBulkAzureDomainJoin';
    public const WINDOWS_CO_MANAGEMENT = 'windowsCoManagement';
    public const WINDOWS_AZURE_A_D_JOIN_USING_DEVICE_AUTH = 'windowsAzureADJoinUsingDeviceAuth';
    public const APPLE_USER_ENROLLMENT = 'appleUserEnrollment';
    public const APPLE_USER_ENROLLMENT_WITH_SERVICE_ACCOUNT = 'appleUserEnrollmentWithServiceAccount';
    public const AZURE_AD_JOIN_USING_AZURE_VM_EXTENSION = 'azureAdJoinUsingAzureVmExtension';
    public const ANDROID_ENTERPRISE_DEDICATED_DEVICE = 'androidEnterpriseDedicatedDevice';
    public const ANDROID_ENTERPRISE_FULLY_MANAGED = 'androidEnterpriseFullyManaged';
    public const ANDROID_ENTERPRISE_CORPORATE_WORK_PROFILE = 'androidEnterpriseCorporateWorkProfile';
    public const ANDROID_A_O_S_P_USER_OWNED_DEVICE_ENROLLMENT = 'androidAOSPUserOwnedDeviceEnrollment';
    public const ANDROID_A_O_S_P_USERLESS_DEVICE_ENROLLMENT = 'androidAOSPUserlessDeviceEnrollment';
}
