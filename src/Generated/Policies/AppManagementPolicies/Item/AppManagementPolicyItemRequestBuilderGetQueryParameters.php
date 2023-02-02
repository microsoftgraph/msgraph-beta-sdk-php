<?php

namespace Microsoft\Graph\Beta\Generated\Policies\AppManagementPolicies\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The policies that enforce app management restrictions for specific applications and service principals, overriding the defaultAppManagementPolicy.
*/
class AppManagementPolicyItemRequestBuilderGetQueryParameters 
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
