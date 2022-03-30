<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Enum;

class Mutability extends Enum {
    public const READ_WRITE = 'ReadWrite';
    public const READ_ONLY = 'ReadOnly';
    public const IMMUTABLE = 'Immutable';
    public const WRITE_ONLY = 'WriteOnly';
}
