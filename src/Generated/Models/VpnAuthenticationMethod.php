<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class VpnAuthenticationMethod extends Enum {
    public const CERTIFICATE = "certificate";
    public const USERNAME_AND_PASSWORD = "usernameAndPassword";
    public const SHARED_SECRET = "sharedSecret";
    public const DERIVED_CREDENTIAL = "derivedCredential";
    public const AZURE_A_D = "azureAD";
}
