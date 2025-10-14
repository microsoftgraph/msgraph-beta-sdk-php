<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class UserPfxIntendedPurpose extends Enum {
    public const UNASSIGNED = "unassigned";
    public const SMIME_ENCRYPTION = "smimeEncryption";
    public const SMIME_SIGNING = "smimeSigning";
    public const VPN = "vpn";
    public const WIFI = "wifi";
}
