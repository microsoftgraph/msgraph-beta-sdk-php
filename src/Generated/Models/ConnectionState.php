<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ConnectionState extends Enum {
    public const DRAFT = 'draft';
    public const READY = 'ready';
    public const OBSOLETE = 'obsolete';
    public const LIMIT_EXCEEDED = 'limitExceeded';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
