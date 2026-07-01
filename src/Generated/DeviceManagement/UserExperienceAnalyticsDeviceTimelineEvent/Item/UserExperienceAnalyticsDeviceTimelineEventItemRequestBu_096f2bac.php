<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsDeviceTimelineEvent\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The user experience analytics device events entity contains NRT device timeline event details. Original name: UserExperienceAnalyticsDeviceTimelineEventItemRequestBuilderGetQueryParameters
*/
class UserExperienceAnalyticsDeviceTimelineEventItemRequestBu_096f2bac 
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
     * Instantiates a new UserExperienceAnalyticsDeviceTimelineEventItemRequestBu_096f2bac and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
