<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class GroupAccessType extends Enum {
    public const NONE = 'none';
    public const ESCAPED_PRIVATE = 'private';
    public const SECRET = 'secret';
    public const ESCAPED_PUBLIC = 'public';
}
