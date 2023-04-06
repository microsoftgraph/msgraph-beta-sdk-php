<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class CloudPcResizeValidationCode extends Enum {
    public const SUCCESS = 'success';
    public const CLOUD_PC_NOT_FOUND = 'cloudPcNotFound';
    public const OPERATION_CONFLICT = 'operationConflict';
    public const OPERATION_NOT_SUPPORTED = 'operationNotSupported';
    public const TARGET_LICENSE_HAS_ASSIGNED = 'targetLicenseHasAssigned';
    public const INTERNAL_SERVER_ERROR = 'internalServerError';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
