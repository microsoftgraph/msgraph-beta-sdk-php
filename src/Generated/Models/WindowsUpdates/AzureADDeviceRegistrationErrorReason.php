<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\WindowsUpdates;

use Microsoft\Kiota\Abstractions\Enum;

class AzureADDeviceRegistrationErrorReason extends Enum {
    public const INVALID_GLOBAL_DEVICE_ID = "invalidGlobalDeviceId";
    public const INVALID_AZURE_A_D_DEVICE_ID = "invalidAzureADDeviceId";
    public const MISSING_TRUST_TYPE = "missingTrustType";
    public const INVALID_AZURE_A_D_JOIN = "invalidAzureADJoin";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
