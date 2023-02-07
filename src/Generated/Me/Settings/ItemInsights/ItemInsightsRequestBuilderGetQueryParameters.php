<?php

namespace Microsoft\Graph\Beta\Generated\Me\Settings\ItemInsights;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get the user-customizable privacy settings for itemInsights and meeting hours insights.
*/
class ItemInsightsRequestBuilderGetQueryParameters 
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
