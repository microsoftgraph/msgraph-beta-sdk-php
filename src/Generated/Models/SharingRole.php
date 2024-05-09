<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class SharingRole extends Enum {
    public const NONE = 'none';
    public const VIEW = 'view';
    public const EDIT = 'edit';
    public const MANAGE_LIST = 'manageList';
    public const REVIEW = 'review';
    public const RESTRICTED_VIEW = 'restrictedView';
    public const SUBMIT_ONLY = 'submitOnly';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
