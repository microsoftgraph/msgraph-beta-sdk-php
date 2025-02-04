<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class Win32LobAppFileSystemDetectionType extends Enum {
    public const NOT_CONFIGURED = "notConfigured";
    public const EXISTS = "exists";
    public const MODIFIED_DATE = "modifiedDate";
    public const CREATED_DATE = "createdDate";
    public const VERSION = "version";
    public const SIZE_IN_M_B = "sizeInMB";
    public const DOES_NOT_EXIST = "doesNotExist";
}
