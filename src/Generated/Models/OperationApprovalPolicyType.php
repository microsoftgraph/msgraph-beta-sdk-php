<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class OperationApprovalPolicyType extends Enum {
    public const DEVICE_ACTION = 'deviceAction';
    public const DEVICE_WIPE = 'deviceWipe';
    public const DEVICE_RETIRE = 'deviceRetire';
    public const DEVICE_RETIRE_NON_COMPLIANT = 'deviceRetireNonCompliant';
    public const DEVICE_DELETE = 'deviceDelete';
    public const DEVICE_LOCK = 'deviceLock';
    public const DEVICE_ERASE = 'deviceErase';
    public const DEVICE_DISABLE_ACTIVATION_LOCK = 'deviceDisableActivationLock';
    public const WINDOWS_ENROLLMENT = 'windowsEnrollment';
    public const COMPLIANCE_POLICY = 'compliancePolicy';
    public const CONFIGURATION_POLICY = 'configurationPolicy';
    public const APP_PROTECTION_POLICY = 'appProtectionPolicy';
    public const POLICY_SET = 'policySet';
    public const FILTER = 'filter';
    public const ENDPOINT_SECURITY_POLICY = 'endpointSecurityPolicy';
    public const APP = 'app';
    public const SCRIPTS = 'scripts';
    public const ROLE = 'role';
    public const DEVICE_RESET_PASSCODE = 'deviceResetPasscode';
    public const CUSTOM_ORGANIZATIONAL_MESSAGE = 'customOrganizationalMessage';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
