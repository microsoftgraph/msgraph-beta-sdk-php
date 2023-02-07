<?php

namespace Microsoft\Graph\Beta\Generated\PrivilegedAccess\Item\RoleSettings\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * A collection of role settings for the provider.
*/
class GovernanceRoleSettingItemRequestBuilderGetQueryParameters 
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
