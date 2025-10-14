<?php

namespace Microsoft\\Graph\\Beta\\Generated\NetworkAccess\Settings\CrossTenantAccess;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Retrieve the cross-tenant access settings, which include network packet tagging to enforce Tenant Restrictions Policies (TRv2 Policies) aimed at preventing data exfiltration to external tenants.
*/
class CrossTenantAccessRequestBuilderGetQueryParameters 
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
     * Instantiates a new CrossTenantAccessRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
