<?php

namespace Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagedTenantTicketingEndpoints\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get managedTenantTicketingEndpoints from tenantRelationships Original name: ManagedTenantTicketingEndpointItemRequestBuilderGetQueryParameters
*/
class ManagedTenantTicketingEndpointItemRequestBuilderGetQuer_a0176f13 
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
    
    /**
     * Instantiates a new ManagedTenantTicketingEndpointItemRequestBuilderGetQuer_a0176f13 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
