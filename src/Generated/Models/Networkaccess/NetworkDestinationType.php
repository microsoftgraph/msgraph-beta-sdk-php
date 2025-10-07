<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\Networkaccess;

use Microsoft\Kiota\Abstractions\Enum;

class NetworkDestinationType extends Enum {
    public const URL = "url";
    public const FQDN = "fqdn";
    public const IP_ADDRESS = "ipAddress";
    public const IP_RANGE = "ipRange";
    public const IP_SUBNET = "ipSubnet";
    public const WEB_CATEGORY = "webCategory";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
