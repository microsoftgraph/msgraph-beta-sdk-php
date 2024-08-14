<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class AssignmentFilterOperator extends Enum {
    public const NOT_SET = 'notSet';
    public const EQUALS = 'equals';
    public const NOT_EQUALS = 'notEquals';
    public const STARTS_WITH = 'startsWith';
    public const NOT_STARTS_WITH = 'notStartsWith';
    public const CONTAINS = 'contains';
    public const NOT_CONTAINS = 'notContains';
    public const IN = 'in';
    public const NOT_IN = 'notIn';
    public const ENDS_WITH = 'endsWith';
    public const NOT_ENDS_WITH = 'notEndsWith';
    public const GREATER_THAN = 'greaterThan';
    public const GREATER_THAN_OR_EQUALS = 'greaterThanOrEquals';
    public const LESS_THAN = 'lessThan';
    public const LESS_THAN_OR_EQUALS = 'lessThanOrEquals';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
