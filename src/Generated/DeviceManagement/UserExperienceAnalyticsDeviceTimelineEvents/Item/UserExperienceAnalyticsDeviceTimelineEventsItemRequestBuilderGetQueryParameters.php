<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsDeviceTimelineEvents\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The user experience analytics device events entity contains NRT device timeline events details.
*/
class UserExperienceAnalyticsDeviceTimelineEventsItemRequestBuilderGetQueryParameters 
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
