<?php

namespace Microsoft\Graph\Beta\Generated\DeviceAppManagement\PolicySets\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The PolicySet of Policies and Applications
*/
class PolicySetItemRequestBuilderGetQueryParameters 
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
