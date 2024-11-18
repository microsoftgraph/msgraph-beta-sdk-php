<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class EapFastConfiguration extends Enum {
    public const NO_PROTECTED_ACCESS_CREDENTIAL = "noProtectedAccessCredential";
    public const USE_PROTECTED_ACCESS_CREDENTIAL = "useProtectedAccessCredential";
    public const USE_PROTECTED_ACCESS_CREDENTIAL_AND_PROVISION = "useProtectedAccessCredentialAndProvision";
    public const USE_PROTECTED_ACCESS_CREDENTIAL_AND_PROVISION_ANONYMOUSLY = "useProtectedAccessCredentialAndProvisionAnonymously";
}
