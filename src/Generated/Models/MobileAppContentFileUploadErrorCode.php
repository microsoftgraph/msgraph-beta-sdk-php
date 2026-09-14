<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class MobileAppContentFileUploadErrorCode extends Enum {
    public const APK_IS_INVALID = "apkIsInvalid";
    public const APK_IS_MISSING_SIGNER_CERTIFICATES = "apkIsMissingSignerCertificates";
    public const APK_HAS_INVALID_PACKAGE_NAME = "apkHasInvalidPackageName";
    public const APK_PACKAGE_NAME_MISMATCH = "apkPackageNameMismatch";
    public const APK_HAS_INVALID_VERSION_CODE = "apkHasInvalidVersionCode";
    public const APK_HAS_VERSION_CODE_MISMATCH = "apkHasVersionCodeMismatch";
    public const APK_HAS_INVALID_MIN_SDK = "apkHasInvalidMinSdk";
    public const APK_MIN_SDK_MISMATCH = "apkMinSdkMismatch";
    public const APK_VERSION_NAME_MISMATCH = "apkVersionNameMismatch";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
