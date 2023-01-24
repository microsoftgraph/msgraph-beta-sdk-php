<?php

namespace Microsoft\Graph\Beta\Generated\Me\Profile\EducationalActivities\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Represents data that a user has supplied related to undergraduate, graduate, postgraduate or other educational activities.
*/
class EducationalActivityItemRequestBuilderGetQueryParameters 
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
