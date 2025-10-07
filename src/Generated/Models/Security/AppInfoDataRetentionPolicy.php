<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class AppInfoDataRetentionPolicy extends Enum {
    public const DATA_RETAINED = "dataRetained";
    public const DELETED_IMMEDIATELY = "deletedImmediately";
    public const DELETED_WITHIN_TWO_WEEKS = "deletedWithinTwoWeeks";
    public const DELETED_WITHIN_ONE_MONTH = "deletedWithinOneMonth";
    public const DELETED_WITHIN_THREE_MONTHS = "deletedWithinThreeMonths";
    public const DELETED_WITHIN_MORE_THAN_THREE_MONTHS = "deletedWithinMoreThanThreeMonths";
    public const UNKNOWN = "unknown";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
