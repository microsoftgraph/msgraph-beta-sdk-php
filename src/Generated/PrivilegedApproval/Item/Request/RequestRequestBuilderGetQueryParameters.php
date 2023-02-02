<?php

namespace Microsoft\Graph\Beta\Generated\PrivilegedApproval\Item\Request;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Read-only. The role assignment request for this approval object
*/
class RequestRequestBuilderGetQueryParameters 
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
