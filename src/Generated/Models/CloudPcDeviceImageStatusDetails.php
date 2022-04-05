<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class CloudPcDeviceImageStatusDetails extends Enum {
    public const INTERNAL_SERVER_ERROR = 'internalServerError';
    public const SOURCE_IMAGE_NOT_FOUND = 'sourceImageNotFound';
    public const OS_VERSION_NOT_SUPPORTED = 'osVersionNotSupported';
    public const SOURCE_IMAGE_INVALID = 'sourceImageInvalid';
    public const SOURCE_IMAGE_NOT_GENERALIZED = 'sourceImageNotGeneralized';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
