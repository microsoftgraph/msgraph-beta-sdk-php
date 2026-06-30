<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsImpactingProcess\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * User experience analytics impacting process Original name: UserExperienceAnalyticsImpactingProcessItemRequestBuilderGetQueryParameters
*/
class UserExperienceAnalyticsImpactingProcessItemRequestBuild_5f0604ab 
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
     * Instantiates a new UserExperienceAnalyticsImpactingProcessItemRequestBuild_5f0604ab and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
