<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsAnomaly\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The user experience analytics anomaly entity contains anomaly details. Original name: UserExperienceAnalyticsAnomalyItemRequestBuilderGetQueryParameters
*/
class UserExperienceAnalyticsAnomalyItemRequestBuilderGetQuer_a224da59 
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
     * Instantiates a new UserExperienceAnalyticsAnomalyItemRequestBuilderGetQuer_a224da59 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
