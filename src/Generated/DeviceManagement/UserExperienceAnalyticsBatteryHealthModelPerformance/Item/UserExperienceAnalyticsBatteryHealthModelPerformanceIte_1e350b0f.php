<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsBatteryHealthModelPerformance\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: UserExperienceAnalyticsBatteryHealthModelPerformanceItemRequestBuilderGetRequestConfiguration
*/
class UserExperienceAnalyticsBatteryHealthModelPerformanceIte_1e350b0f extends BaseRequestConfiguration 
{
    /**
     * @var UserExperienceAnalyticsBatteryHealthModelPerformanceIte_00dd5ac1|null $queryParameters Request query parameters
    */
    public ?UserExperienceAnalyticsBatteryHealthModelPerformanceIte_00dd5ac1 $queryParameters = null;
    
    /**
     * Instantiates a new UserExperienceAnalyticsBatteryHealthModelPerformanceIte_1e350b0f and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UserExperienceAnalyticsBatteryHealthModelPerformanceIte_00dd5ac1|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserExperienceAnalyticsBatteryHealthModelPerformanceIte_00dd5ac1 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UserExperienceAnalyticsBatteryHealthModelPerformanceIte_00dd5ac1.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UserExperienceAnalyticsBatteryHealthModelPerformanceIte_00dd5ac1
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UserExperienceAnalyticsBatteryHealthModelPerformanceIte_00dd5ac1 {
        return new UserExperienceAnalyticsBatteryHealthModelPerformanceIte_00dd5ac1($expand, $select);
    }

}
