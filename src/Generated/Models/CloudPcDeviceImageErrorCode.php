<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class CloudPcDeviceImageErrorCode extends Enum {
    public const INTERNAL_SERVER_ERROR = "internalServerError";
    public const SOURCE_IMAGE_NOT_FOUND = "sourceImageNotFound";
    public const OS_VERSION_NOT_SUPPORTED = "osVersionNotSupported";
    public const SOURCE_IMAGE_INVALID = "sourceImageInvalid";
    public const SOURCE_IMAGE_NOT_GENERALIZED = "sourceImageNotGeneralized";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
    public const VM_ALREADY_AZURE_ADJOINED = "vmAlreadyAzureAdjoined";
    public const PAID_SOURCE_IMAGE_NOT_SUPPORT = "paidSourceImageNotSupport";
    public const SOURCE_IMAGE_NOT_SUPPORT_CUSTOMIZE_V_M_NAME = "sourceImageNotSupportCustomizeVMName";
    public const SOURCE_IMAGE_SIZE_EXCEEDS_LIMITATION = "sourceImageSizeExceedsLimitation";
    public const SOURCE_IMAGE_WITH_DATA_DISK_NOT_SUPPORTED = "sourceImageWithDataDiskNotSupported";
    public const SOURCE_IMAGE_WITH_DISK_ENCRYPTION_SET_NOT_SUPPORTED = "sourceImageWithDiskEncryptionSetNotSupported";
    public const SOURCE_IMAGE_WITH_AZURE_DISK_ENCRYPTION_NOT_SUPPORTED = "sourceImageWithAzureDiskEncryptionNotSupported";
}
