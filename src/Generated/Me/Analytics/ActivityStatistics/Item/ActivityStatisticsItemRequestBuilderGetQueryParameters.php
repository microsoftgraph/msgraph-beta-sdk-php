<?php

namespace Microsoft\Graph\Beta\Generated\Me\Analytics\ActivityStatistics\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The collection of work activities that a user spent time on during and outside of working hours. Read-only. Nullable.
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
