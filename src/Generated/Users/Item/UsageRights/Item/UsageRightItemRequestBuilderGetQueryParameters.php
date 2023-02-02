<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\UsageRights\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Represents the usage rights a user has been granted.
*/
class UsageRightItemRequestBuilderGetQueryParameters 
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
