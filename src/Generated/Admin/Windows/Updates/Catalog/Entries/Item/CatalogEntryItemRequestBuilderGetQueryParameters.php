<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\Catalog\Entries\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Lists the content that you can approve for deployment. Read-only.
*/
class CatalogEntryItemRequestBuilderGetQueryParameters 
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
