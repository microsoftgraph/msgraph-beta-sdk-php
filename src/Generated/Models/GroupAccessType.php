<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class GroupAccessType extends Enum {
    public const NONE = 'none';
    public const ESCAPED_PRIVATE = 'EscapedPrivate';
    public const SECRET = 'secret';
    public const ESCAPED_PUBLIC = 'EscapedPublic';
}
