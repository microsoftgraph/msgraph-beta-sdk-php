<?php

namespace Microsoft\Graph\Beta\Generated\ProgramControlTypes\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get entity from programControlTypes by key
*/
class ProgramControlTypeItemRequestBuilderGetQueryParameters 
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
