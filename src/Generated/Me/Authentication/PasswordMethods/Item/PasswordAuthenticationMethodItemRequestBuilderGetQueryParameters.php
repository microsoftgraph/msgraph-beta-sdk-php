<?php

namespace Microsoft\Graph\Beta\Generated\Me\Authentication\PasswordMethods\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Represents the details of the password authentication method registered to a user for authentication.
*/
class PasswordAuthenticationMethodItemRequestBuilderGetQueryParameters 
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
