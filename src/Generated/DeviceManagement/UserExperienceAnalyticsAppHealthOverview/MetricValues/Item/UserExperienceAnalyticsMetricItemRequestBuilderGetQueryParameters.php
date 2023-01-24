<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsAppHealthOverview\MetricValues\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The metric values for the user experience analytics category.
*/
class UserExperienceAnalyticsMetricItemRequestBuilderGetQueryParameters 
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
