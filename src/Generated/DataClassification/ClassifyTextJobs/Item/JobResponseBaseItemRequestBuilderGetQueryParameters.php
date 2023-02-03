<?php

namespace Microsoft\Graph\Beta\Generated\DataClassification\ClassifyTextJobs\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get classifyTextJobs from dataClassification
*/
class JobResponseBaseItemRequestBuilderGetQueryParameters 
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
