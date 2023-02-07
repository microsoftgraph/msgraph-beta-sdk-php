<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\UpdatePolicies\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * A collection of policies for approving the deployment of different content to an audience over time.
*/
class UpdatePolicyItemRequestBuilderGetQueryParameters 
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
