<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class EmbeddedSIMDeviceStateValue extends Enum {
    public const NOT_EVALUATED = "notEvaluated";
    public const FAILED = "failed";
    public const INSTALLING = "installing";
    public const INSTALLED = "installed";
    public const DELETING = "deleting";
    public const ERROR = "error";
    public const DELETED = "deleted";
    public const REMOVED_BY_USER = "removedByUser";
}
