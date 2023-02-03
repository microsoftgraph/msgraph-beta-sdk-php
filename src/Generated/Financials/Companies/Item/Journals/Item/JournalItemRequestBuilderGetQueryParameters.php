<?php

namespace Microsoft\Graph\Beta\Generated\Financials\Companies\Item\Journals\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get journals from financials
*/
class JournalItemRequestBuilderGetQueryParameters 
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
