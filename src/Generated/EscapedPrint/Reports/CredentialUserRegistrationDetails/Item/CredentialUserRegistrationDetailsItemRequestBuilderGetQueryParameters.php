<?php

namespace Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\CredentialUserRegistrationDetails\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Details of the usage of self-service password reset and multi-factor authentication (MFA) for all registered users.
*/
class CredentialUserRegistrationDetailsItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24expand")
     * @var array<string>|null $expand Expand related entities
    */
    public ?array $expand = null;
    
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
}
