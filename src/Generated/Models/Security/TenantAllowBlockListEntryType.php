<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class TenantAllowBlockListEntryType extends Enum {
    public const URL = "url";
    public const FILE_HASH = "fileHash";
    public const SENDER = "sender";
    public const RECIPIENT = "recipient";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
