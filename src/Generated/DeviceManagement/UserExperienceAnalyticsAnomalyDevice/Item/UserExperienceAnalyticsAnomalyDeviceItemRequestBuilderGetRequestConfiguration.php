<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceManagement\UserExperienceAnalyticsAnomalyDevice\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class UserExperienceAnalyticsAnomalyDeviceItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var UserExperienceAnalyticsAnomalyDeviceItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?UserExperienceAnalyticsAnomalyDeviceItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new UserExperienceAnalyticsAnomalyDeviceItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UserExperienceAnalyticsAnomalyDeviceItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserExperienceAnalyticsAnomalyDeviceItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UserExperienceAnalyticsAnomalyDeviceItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UserExperienceAnalyticsAnomalyDeviceItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UserExperienceAnalyticsAnomalyDeviceItemRequestBuilderGetQueryParameters {
        return new UserExperienceAnalyticsAnomalyDeviceItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
