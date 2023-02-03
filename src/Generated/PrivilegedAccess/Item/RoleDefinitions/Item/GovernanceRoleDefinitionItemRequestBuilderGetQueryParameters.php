<?php

namespace Microsoft\Graph\Beta\Generated\PrivilegedAccess\Item\RoleDefinitions\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * A collection of role defintions for the provider.
*/
class GovernanceRoleDefinitionItemRequestBuilderGetQueryParameters 
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
