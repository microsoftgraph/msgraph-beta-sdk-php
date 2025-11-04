<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class AssociatedAssignmentPayloadType extends Enum {
    public const UNKNOWN = "unknown";
    public const DEVICE_CONFIGURATION_AND_COMPLIANCE = "deviceConfigurationAndCompliance";
    public const APPLICATION = "application";
    public const ANDROID_ENTERPRISE_APP = "androidEnterpriseApp";
    public const ENROLLMENT_CONFIGURATION = "enrollmentConfiguration";
    public const GROUP_POLICY_CONFIGURATION = "groupPolicyConfiguration";
    public const ZERO_TOUCH_DEPLOYMENT_DEVICE_CONFIG_PROFILE = "zeroTouchDeploymentDeviceConfigProfile";
    public const ANDROID_ENTERPRISE_CONFIGURATION = "androidEnterpriseConfiguration";
    public const DEVICE_FIRMWARE_CONFIGURATION_INTERFACE_POLICY = "deviceFirmwareConfigurationInterfacePolicy";
    public const RESOURCE_ACCESS_POLICY = "resourceAccessPolicy";
    public const WIN32APP = "win32app";
    public const DEVICE_MANAGMENT_CONFIGURATION_AND_COMPLIANCE_POLICY = "deviceManagmentConfigurationAndCompliancePolicy";
}
