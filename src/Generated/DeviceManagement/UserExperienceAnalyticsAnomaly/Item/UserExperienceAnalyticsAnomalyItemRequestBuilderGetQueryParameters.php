<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsAnomaly\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The user experience analytics anomaly entity contains anomaly details.
*/
class UserExperienceAnalyticsAnomalyItemRequestBuilderGetQueryParameters 
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
