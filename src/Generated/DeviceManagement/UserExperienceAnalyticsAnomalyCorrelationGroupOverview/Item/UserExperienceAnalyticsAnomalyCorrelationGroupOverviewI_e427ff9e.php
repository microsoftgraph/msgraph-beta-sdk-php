<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsAnomalyCorrelationGroupOverview\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The user experience analytics anomaly correlation group overview entity contains the information for each correlation group of an anomaly. Original name: UserExperienceAnalyticsAnomalyCorrelationGroupOverviewItemRequestBuilderGetQueryParameters
*/
class UserExperienceAnalyticsAnomalyCorrelationGroupOverviewI_e427ff9e 
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
     * Instantiates a new UserExperienceAnalyticsAnomalyCorrelationGroupOverviewI_e427ff9e and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
