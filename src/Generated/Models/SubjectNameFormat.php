<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class SubjectNameFormat extends Enum {
    public const COMMON_NAME = "commonName";
    public const COMMON_NAME_INCLUDING_EMAIL = "commonNameIncludingEmail";
    public const COMMON_NAME_AS_EMAIL = "commonNameAsEmail";
    public const CUSTOM = "custom";
    public const COMMON_NAME_AS_I_M_E_I = "commonNameAsIMEI";
    public const COMMON_NAME_AS_SERIAL_NUMBER = "commonNameAsSerialNumber";
    public const COMMON_NAME_AS_AAD_DEVICE_ID = "commonNameAsAadDeviceId";
    public const COMMON_NAME_AS_INTUNE_DEVICE_ID = "commonNameAsIntuneDeviceId";
    public const COMMON_NAME_AS_DURABLE_DEVICE_ID = "commonNameAsDurableDeviceId";
}
