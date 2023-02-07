<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsAnomalyDevice\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The user experience analytics anomaly entity contains device details.
*/
class UserExperienceAnalyticsAnomalyDeviceItemRequestBuilderGetQueryParameters 
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
