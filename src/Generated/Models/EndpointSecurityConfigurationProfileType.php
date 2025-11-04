<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class EndpointSecurityConfigurationProfileType extends Enum {
    public const UNKNOWN = "unknown";
    public const ANTIVIRUS = "antivirus";
    public const WINDOWS_SECURITY = "windowsSecurity";
    public const BIT_LOCKER = "bitLocker";
    public const FILE_VAULT = "fileVault";
    public const FIREWALL = "firewall";
    public const FIREWALL_RULES = "firewallRules";
    public const ENDPOINT_DETECTION_AND_RESPONSE = "endpointDetectionAndResponse";
    public const DEVICE_CONTROL = "deviceControl";
    public const APP_AND_BROWSER_ISOLATION = "appAndBrowserIsolation";
    public const EXPLOIT_PROTECTION = "exploitProtection";
    public const WEB_PROTECTION = "webProtection";
    public const APPLICATION_CONTROL = "applicationControl";
    public const ATTACK_SURFACE_REDUCTION_RULES = "attackSurfaceReductionRules";
    public const ACCOUNT_PROTECTION = "accountProtection";
}
