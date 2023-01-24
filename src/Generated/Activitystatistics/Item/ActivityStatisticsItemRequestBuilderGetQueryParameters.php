<?php

namespace Microsoft\Graph\Beta\Generated\Activitystatistics\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get entity from activitystatistics by key (id)
*/
class ActivityStatisticsItemRequestBuilderGetQueryParameters 
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
