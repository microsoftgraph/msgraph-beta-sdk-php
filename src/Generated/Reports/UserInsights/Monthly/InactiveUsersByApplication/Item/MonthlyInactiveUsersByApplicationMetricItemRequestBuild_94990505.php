<?php

namespace Microsoft\Graph\Beta\Generated\Reports\UserInsights\Monthly\InactiveUsersByApplication\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get inactiveUsersByApplication from reports Original name: MonthlyInactiveUsersByApplicationMetricItemRequestBuilderGetQueryParameters
*/
class MonthlyInactiveUsersByApplicationMetricItemRequestBuild_94990505 
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
     * Instantiates a new MonthlyInactiveUsersByApplicationMetricItemRequestBuild_94990505 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
