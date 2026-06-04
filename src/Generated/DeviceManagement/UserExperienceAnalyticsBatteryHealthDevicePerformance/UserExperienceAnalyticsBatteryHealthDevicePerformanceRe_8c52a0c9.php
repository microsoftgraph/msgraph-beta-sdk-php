<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsBatteryHealthDevicePerformance;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: userExperienceAnalyticsBatteryHealthDevicePerformanceRequestBuilderGetRequestConfiguration
*/
class UserExperienceAnalyticsBatteryHealthDevicePerformanceRe_8c52a0c9 extends BaseRequestConfiguration 
{
    /**
     * @var UserExperienceAnalyticsBatteryHealthDevicePerformanceRe_504bd638|null $queryParameters Request query parameters
    */
    public ?UserExperienceAnalyticsBatteryHealthDevicePerformanceRe_504bd638 $queryParameters = null;
    
    /**
     * Instantiates a new UserExperienceAnalyticsBatteryHealthDevicePerformanceRe_8c52a0c9 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UserExperienceAnalyticsBatteryHealthDevicePerformanceRe_504bd638|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserExperienceAnalyticsBatteryHealthDevicePerformanceRe_504bd638 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UserExperienceAnalyticsBatteryHealthDevicePerformanceRe_504bd638.
     * @param bool|null $count Include count of items
     * @param array<string>|null $expand Expand related entities
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return UserExperienceAnalyticsBatteryHealthDevicePerformanceRe_504bd638
    */
    public static function createQueryParameters(?bool $count = null, ?array $expand = null, ?string $filter = null, ?array $orderby = null, ?string $search = null, ?array $select = null, ?int $skip = null, ?int $top = null): UserExperienceAnalyticsBatteryHealthDevicePerformanceRe_504bd638 {
        return new UserExperienceAnalyticsBatteryHealthDevicePerformanceRe_504bd638($count, $expand, $filter, $orderby, $search, $select, $skip, $top);
    }

}
