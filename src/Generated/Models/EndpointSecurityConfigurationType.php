<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class EndpointSecurityConfigurationType extends Enum {
    public const UNKNOWN = 'unknown';
    public const ANTIVIRUS = 'antivirus';
    public const DISK_ENCRYPTION = 'diskEncryption';
    public const FIREWALL = 'firewall';
    public const ENDPOINT_DETECTION_AND_RESPONSE = 'endpointDetectionAndResponse';
    public const ATTACK_SURFACE_REDUCTION = 'attackSurfaceReduction';
    public const ACCOUNT_PROTECTION = 'accountProtection';
}
