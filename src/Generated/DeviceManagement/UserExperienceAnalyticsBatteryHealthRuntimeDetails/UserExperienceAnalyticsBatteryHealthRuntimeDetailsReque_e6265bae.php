<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsBatteryHealthRuntimeDetails;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: userExperienceAnalyticsBatteryHealthRuntimeDetailsRequestBuilderGetRequestConfiguration
*/
class UserExperienceAnalyticsBatteryHealthRuntimeDetailsReque_e6265bae extends BaseRequestConfiguration 
{
    /**
     * @var UserExperienceAnalyticsBatteryHealthRuntimeDetailsReque_db02f6b3|null $queryParameters Request query parameters
    */
    public ?UserExperienceAnalyticsBatteryHealthRuntimeDetailsReque_db02f6b3 $queryParameters = null;
    
    /**
     * Instantiates a new UserExperienceAnalyticsBatteryHealthRuntimeDetailsReque_e6265bae and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UserExperienceAnalyticsBatteryHealthRuntimeDetailsReque_db02f6b3|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserExperienceAnalyticsBatteryHealthRuntimeDetailsReque_db02f6b3 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UserExperienceAnalyticsBatteryHealthRuntimeDetailsReque_db02f6b3.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UserExperienceAnalyticsBatteryHealthRuntimeDetailsReque_db02f6b3
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UserExperienceAnalyticsBatteryHealthRuntimeDetailsReque_db02f6b3 {
        return new UserExperienceAnalyticsBatteryHealthRuntimeDetailsReque_db02f6b3($expand, $select);
    }

}
