<?php

namespace Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\TenantGroups\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The collection of a logical grouping of managed tenants used by the multi-tenant management platform.
*/
class TenantGroupItemRequestBuilderGetQueryParameters 
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
