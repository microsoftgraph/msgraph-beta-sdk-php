<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsNotAutopilotReadyDevice\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * User experience analytics devices not Windows Autopilot ready. Original name: UserExperienceAnalyticsNotAutopilotReadyDeviceItemRequestBuilderGetQueryParameters
*/
class UserExperienceAnalyticsNotAutopilotReadyDeviceItemReque_62901916 
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
     * Instantiates a new UserExperienceAnalyticsNotAutopilotReadyDeviceItemReque_62901916 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
