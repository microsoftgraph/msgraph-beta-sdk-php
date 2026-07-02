<?php

namespace Microsoft\Graph\Beta\Generated\Policies\ServicePrincipalCreationPolicies\Item\Excludes\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get excludes from policies Original name: ServicePrincipalCreationConditionSetItemRequestBuilderGetQueryParameters
*/
class ServicePrincipalCreationConditionSetItemRequestBuilderG_dca4d335 
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
     * Instantiates a new ServicePrincipalCreationConditionSetItemRequestBuilderG_dca4d335 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
