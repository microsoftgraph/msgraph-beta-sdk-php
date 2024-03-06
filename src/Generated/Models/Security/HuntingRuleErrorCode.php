<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class HuntingRuleErrorCode extends Enum {
    public const QUERY_EXECUTION_FAILED = 'queryExecutionFailed';
    public const QUERY_EXECUTION_THROTTLING = 'queryExecutionThrottling';
    public const QUERY_EXCEEDED_RESULT_SIZE = 'queryExceededResultSize';
    public const QUERY_LIMITS_EXCEEDED = 'queryLimitsExceeded';
    public const QUERY_TIMEOUT = 'queryTimeout';
    public const ALERT_CREATION_FAILED = 'alertCreationFailed';
    public const ALERT_REPORT_NOT_FOUND = 'alertReportNotFound';
    public const PARTIAL_ROWS_FAILED = 'partialRowsFailed';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
    public const NO_IMPACTED_ENTITY = 'noImpactedEntity';
}
