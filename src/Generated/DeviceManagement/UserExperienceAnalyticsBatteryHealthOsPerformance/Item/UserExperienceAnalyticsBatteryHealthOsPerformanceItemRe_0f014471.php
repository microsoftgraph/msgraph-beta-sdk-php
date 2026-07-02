<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsBatteryHealthOsPerformance\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: UserExperienceAnalyticsBatteryHealthOsPerformanceItemRequestBuilderGetRequestConfiguration
*/
class UserExperienceAnalyticsBatteryHealthOsPerformanceItemRe_0f014471 extends BaseRequestConfiguration 
{
    /**
     * @var UserExperienceAnalyticsBatteryHealthOsPerformanceItemRe_62641907|null $queryParameters Request query parameters
    */
    public ?UserExperienceAnalyticsBatteryHealthOsPerformanceItemRe_62641907 $queryParameters = null;
    
    /**
     * Instantiates a new UserExperienceAnalyticsBatteryHealthOsPerformanceItemRe_0f014471 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UserExperienceAnalyticsBatteryHealthOsPerformanceItemRe_62641907|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserExperienceAnalyticsBatteryHealthOsPerformanceItemRe_62641907 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UserExperienceAnalyticsBatteryHealthOsPerformanceItemRe_62641907.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UserExperienceAnalyticsBatteryHealthOsPerformanceItemRe_62641907
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UserExperienceAnalyticsBatteryHealthOsPerformanceItemRe_62641907 {
        return new UserExperienceAnalyticsBatteryHealthOsPerformanceItemRe_62641907($expand, $select);
    }

}
