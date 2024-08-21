<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ApprovalItemType extends Enum {
    public const BASIC = 'basic';
    public const BASIC_AWAIT_ALL = 'basicAwaitAll';
    public const CUSTOM = 'custom';
    public const CUSTOM_AWAIT_ALL = 'customAwaitAll';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
