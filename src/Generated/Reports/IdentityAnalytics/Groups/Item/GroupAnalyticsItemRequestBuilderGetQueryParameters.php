<?php

namespace Microsoft\Graph\Beta\Generated\Reports\IdentityAnalytics\Groups\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Read the properties of a groupAnalytics object that contains point-in-time analytics for a group in a Microsoft Entra tenant, as part of identity analytics.
*/
class GroupAnalyticsItemRequestBuilderGetQueryParameters 
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
    
    /**
     * Instantiates a new GroupAnalyticsItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
