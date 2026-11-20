<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\CaseManagement;

use Microsoft\Kiota\Abstractions\Enum;

class SlaPolicyConditionOperator extends Enum {
    public const EQUALS = "equals";
    public const NOT_EQUALS = "notEquals";
    public const CONTAINS = "contains";
    public const DOES_NOT_CONTAIN = "doesNotContain";
    public const IS_EMPTY = "isEmpty";
    public const IS_NOT_EMPTY = "isNotEmpty";
    public const CHANGED = "changed";
    public const CHANGED_TO = "changedTo";
    public const CHANGED_FROM = "changedFrom";
    public const IS_BEFORE = "isBefore";
    public const IS_AFTER = "isAfter";
    public const GREATER_THAN = "greaterThan";
    public const LESS_THAN = "lessThan";
    public const ANY_OF = "anyOf";
    public const NONE_OF = "noneOf";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
