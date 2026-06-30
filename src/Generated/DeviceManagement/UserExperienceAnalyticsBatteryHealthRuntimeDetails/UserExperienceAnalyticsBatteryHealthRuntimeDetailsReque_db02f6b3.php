<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsBatteryHealthRuntimeDetails;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * User Experience Analytics Battery Health Runtime Details Original name: userExperienceAnalyticsBatteryHealthRuntimeDetailsRequestBuilderGetQueryParameters
*/
class UserExperienceAnalyticsBatteryHealthRuntimeDetailsReque_db02f6b3 
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
     * Instantiates a new UserExperienceAnalyticsBatteryHealthRuntimeDetailsReque_db02f6b3 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
