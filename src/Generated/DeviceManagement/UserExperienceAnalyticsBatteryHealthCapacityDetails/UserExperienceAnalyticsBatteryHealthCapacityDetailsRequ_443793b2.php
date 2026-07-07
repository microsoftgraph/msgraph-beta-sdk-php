<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsBatteryHealthCapacityDetails;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: userExperienceAnalyticsBatteryHealthCapacityDetailsRequestBuilderGetRequestConfiguration
*/
class UserExperienceAnalyticsBatteryHealthCapacityDetailsRequ_443793b2 extends BaseRequestConfiguration 
{
    /**
     * @var UserExperienceAnalyticsBatteryHealthCapacityDetailsRequ_f7db1407|null $queryParameters Request query parameters
    */
    public ?UserExperienceAnalyticsBatteryHealthCapacityDetailsRequ_f7db1407 $queryParameters = null;
    
    /**
     * Instantiates a new UserExperienceAnalyticsBatteryHealthCapacityDetailsRequ_443793b2 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UserExperienceAnalyticsBatteryHealthCapacityDetailsRequ_f7db1407|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserExperienceAnalyticsBatteryHealthCapacityDetailsRequ_f7db1407 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UserExperienceAnalyticsBatteryHealthCapacityDetailsRequ_f7db1407.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UserExperienceAnalyticsBatteryHealthCapacityDetailsRequ_f7db1407
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UserExperienceAnalyticsBatteryHealthCapacityDetailsRequ_f7db1407 {
        return new UserExperienceAnalyticsBatteryHealthCapacityDetailsRequ_f7db1407($expand, $select);
    }

}
