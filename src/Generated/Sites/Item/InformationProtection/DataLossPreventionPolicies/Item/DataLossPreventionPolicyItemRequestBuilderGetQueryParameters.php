<?php

namespace Microsoft\Graph\Beta\Generated\Sites\Item\InformationProtection\DataLossPreventionPolicies\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get dataLossPreventionPolicies from sites
*/
class DataLossPreventionPolicyItemRequestBuilderGetQueryParameters 
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
