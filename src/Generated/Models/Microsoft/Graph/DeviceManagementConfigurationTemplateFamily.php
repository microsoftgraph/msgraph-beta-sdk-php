<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Enum;

class DeviceManagementConfigurationTemplateFamily extends Enum {
    public const NONE = 'none';
    public const ENDPOINT_SECURITY_ANTIVIRUS = 'endpointSecurityAntivirus';
    public const ENDPOINT_SECURITY_DISK_ENCRYPTION = 'endpointSecurityDiskEncryption';
    public const ENDPOINT_SECURITY_FIREWALL = 'endpointSecurityFirewall';
    public const ENDPOINT_SECURITY_ENDPOINT_DETECTION_AND_RESPONSE = 'endpointSecurityEndpointDetectionAndResponse';
    public const ENDPOINT_SECURITY_ATTACK_SURFACE_REDUCTION = 'endpointSecurityAttackSurfaceReduction';
    public const ENDPOINT_SECURITY_ACCOUNT_PROTECTION = 'endpointSecurityAccountProtection';
    public const ENDPOINT_SECURITY_APPLICATION_CONTROL = 'endpointSecurityApplicationControl';
    public const BASELINE = 'baseline';
}
