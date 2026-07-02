<?php

namespace Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagedTenantEmailNotifications\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get managedTenantEmailNotifications from tenantRelationships Original name: ManagedTenantEmailNotificationItemRequestBuilderGetQueryParameters
*/
class ManagedTenantEmailNotificationItemRequestBuilderGetQuer_274d62b0 
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
     * Instantiates a new ManagedTenantEmailNotificationItemRequestBuilderGetQuer_274d62b0 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
