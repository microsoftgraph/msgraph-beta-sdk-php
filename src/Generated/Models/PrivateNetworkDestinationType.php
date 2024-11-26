<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PrivateNetworkDestinationType extends Enum {
    public const IP_ADDRESS = "ipAddress";
    public const IP_RANGE = "ipRange";
    public const IP_RANGE_CIDR = "ipRangeCidr";
    public const FQDN = "fqdn";
    public const DNS_SUFFIX = "dnsSuffix";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
