<?php

namespace Microsoft\Graph\Beta\Generated\Policies\ServicePrincipalCreationPolicies\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get servicePrincipalCreationPolicies from policies Original name: ServicePrincipalCreationPolicyItemRequestBuilderGetQueryParameters
*/
class ServicePrincipalCreationPolicyItemRequestBuilderGetQuer_b8a89460 
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
     * Instantiates a new ServicePrincipalCreationPolicyItemRequestBuilderGetQuer_b8a89460 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
