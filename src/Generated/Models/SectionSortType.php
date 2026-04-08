<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class SectionSortType extends Enum {
    public const MOST_RECENT = "mostRecent";
    public const UNREAD_THEN_MOST_RECENT = "unreadThenMostRecent";
    public const NAME_ALPHABETICAL = "nameAlphabetical";
    public const USER_DEFINED_CUSTOM_ORDER = "userDefinedCustomOrder";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
