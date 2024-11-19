<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class KeyStorageProviderOption extends Enum {
    public const USE_TPM_KSP_OTHERWISE_USE_SOFTWARE_KSP = "useTpmKspOtherwiseUseSoftwareKsp";
    public const USE_TPM_KSP_OTHERWISE_FAIL = "useTpmKspOtherwiseFail";
    public const USE_PASSPORT_FOR_WORK_KSP_OTHERWISE_FAIL = "usePassportForWorkKspOtherwiseFail";
    public const USE_SOFTWARE_KSP = "useSoftwareKsp";
}
