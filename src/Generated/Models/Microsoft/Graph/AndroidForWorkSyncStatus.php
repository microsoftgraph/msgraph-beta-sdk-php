<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Enum;

class AndroidForWorkSyncStatus extends Enum {
    public const SUCCESS = 'success';
    public const CREDENTIALS_NOT_VALID = 'credentialsNotValid';
    public const ANDROID_FOR_WORK_API_ERROR = 'androidForWorkApiError';
    public const MANAGEMENT_SERVICE_ERROR = 'managementServiceError';
    public const UNKNOWN_ERROR = 'unknownError';
    public const NONE = 'none';
}
