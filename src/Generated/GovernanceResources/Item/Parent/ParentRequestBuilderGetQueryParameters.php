<?php

namespace Microsoft\Graph\Beta\Generated\GovernanceResources\Item\Parent;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Read-only. The parent resource. for pimforazurerbac scenario, it can represent the subscription the resource belongs to.
*/
class ParentRequestBuilderGetQueryParameters 
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
