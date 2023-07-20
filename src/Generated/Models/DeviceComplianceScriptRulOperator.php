<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class DeviceComplianceScriptRulOperator extends Enum {
    public const NONE = 'none';
    public const AND = 'and';
    public const OR = 'or';
    public const IS_EQUALS = 'isEquals';
    public const NOT_EQUALS = 'notEquals';
    public const GREATER_THAN = 'greaterThan';
    public const LESS_THAN = 'lessThan';
    public const BETWEEN = 'between';
    public const NOT_BETWEEN = 'notBetween';
    public const GREATER_EQUALS = 'greaterEquals';
    public const LESS_EQUALS = 'lessEquals';
    public const DAY_TIME_BETWEEN = 'dayTimeBetween';
    public const BEGINS_WITH = 'beginsWith';
    public const NOT_BEGINS_WITH = 'notBeginsWith';
    public const ENDS_WITH = 'endsWith';
    public const NOT_ENDS_WITH = 'notEndsWith';
    public const CONTAINS = 'contains';
    public const NOT_CONTAINS = 'notContains';
    public const ALL_OF = 'allOf';
    public const ONE_OF = 'oneOf';
    public const NONE_OF = 'noneOf';
    public const SET_EQUALS = 'setEquals';
    public const ORDERED_SET_EQUALS = 'orderedSetEquals';
    public const SUBSET_OF = 'subsetOf';
    public const EXCLUDES_ALL = 'excludesAll';
}
