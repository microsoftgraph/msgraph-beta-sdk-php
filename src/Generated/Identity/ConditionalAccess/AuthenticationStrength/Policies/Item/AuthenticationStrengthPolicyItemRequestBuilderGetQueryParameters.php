<?php

namespace Microsoft\Graph\Beta\Generated\Identity\ConditionalAccess\AuthenticationStrength\Policies\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * A collection of authentication strength policies that exist for this tenant, including both built-in and custom policies.
*/
class AuthenticationStrengthPolicyItemRequestBuilderGetQueryParameters 
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
