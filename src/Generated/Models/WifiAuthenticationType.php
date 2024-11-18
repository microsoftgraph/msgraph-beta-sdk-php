<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class WifiAuthenticationType extends Enum {
    public const NONE = "none";
    public const USER = "user";
    public const MACHINE = "machine";
    public const MACHINE_OR_USER = "machineOrUser";
    public const GUEST = "guest";
}
