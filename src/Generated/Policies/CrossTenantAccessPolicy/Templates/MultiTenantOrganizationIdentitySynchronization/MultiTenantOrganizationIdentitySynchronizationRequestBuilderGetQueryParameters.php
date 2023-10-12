<?php

namespace Microsoft\Graph\Beta\Generated\Policies\CrossTenantAccessPolicy\Templates\MultiTenantOrganizationIdentitySynchronization;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get the cross-tenant access policy template with user synchronization settings for a multitenant organization. This API is available in the following national cloud deployments.
*/
class MultiTenantOrganizationIdentitySynchronizationRequestBuilderGetQueryParameters 
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
     * Instantiates a new multiTenantOrganizationIdentitySynchronizationRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
