<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class DeviceManagementTemplateSubtype extends Enum {
    public const NONE = "none";
    public const FIREWALL = "firewall";
    public const DISK_ENCRYPTION = "diskEncryption";
    public const ATTACK_SURFACE_REDUCTION = "attackSurfaceReduction";
    public const ENDPOINT_DETECTION_REPONSE = "endpointDetectionReponse";
    public const ACCOUNT_PROTECTION = "accountProtection";
    public const ANTIVIRUS = "antivirus";
    public const FIREWALL_SHARED_APP_LIST = "firewallSharedAppList";
    public const FIREWALL_SHARED_IP_LIST = "firewallSharedIpList";
    public const FIREWALL_SHARED_PORTLIST = "firewallSharedPortlist";
}
