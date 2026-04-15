<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class DeviceType extends Enum {
    public const DOMAIN_CONTROLLER = "domainController";
    public const ADFS = "adfs";
    public const ADCS = "adcs";
    public const ENTRA_CONNECT = "entraConnect";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
