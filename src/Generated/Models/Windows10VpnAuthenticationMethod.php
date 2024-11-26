<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class Windows10VpnAuthenticationMethod extends Enum {
    public const CERTIFICATE = "certificate";
    public const USERNAME_AND_PASSWORD = "usernameAndPassword";
    public const CUSTOM_EAP_XML = "customEapXml";
    public const DERIVED_CREDENTIAL = "derivedCredential";
}
