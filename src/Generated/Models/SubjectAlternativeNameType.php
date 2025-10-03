<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class SubjectAlternativeNameType extends Enum {
    public const NONE = "none";
    public const EMAIL_ADDRESS = "emailAddress";
    public const USER_PRINCIPAL_NAME = "userPrincipalName";
    public const CUSTOM_AZURE_A_D_ATTRIBUTE = "customAzureADAttribute";
    public const DOMAIN_NAME_SERVICE = "domainNameService";
    public const UNIVERSAL_RESOURCE_IDENTIFIER = "universalResourceIdentifier";
}
