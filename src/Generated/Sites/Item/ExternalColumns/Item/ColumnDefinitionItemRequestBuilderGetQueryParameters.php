<?php

namespace Microsoft\Graph\Beta\Generated\Sites\Item\ExternalColumns\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The collection of column definitions available in the site that are referenced from the sites in the parent hierarchy of the current site.
*/
class ColumnDefinitionItemRequestBuilderGetQueryParameters 
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
