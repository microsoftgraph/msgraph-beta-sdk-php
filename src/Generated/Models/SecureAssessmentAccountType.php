<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class SecureAssessmentAccountType extends Enum {
    public const AZURE_A_D_ACCOUNT = "azureADAccount";
    public const DOMAIN_ACCOUNT = "domainAccount";
    public const LOCAL_ACCOUNT = "localAccount";
    public const LOCAL_GUEST_ACCOUNT = "localGuestAccount";
}
