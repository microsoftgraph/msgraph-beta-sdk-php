<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsAnomalyDevice\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: UserExperienceAnalyticsAnomalyDeviceItemRequestBuilderGetRequestConfiguration
*/
class UserExperienceAnalyticsAnomalyDeviceItemRequestBuilderG_2cb22c0f extends BaseRequestConfiguration 
{
    /**
     * @var UserExperienceAnalyticsAnomalyDeviceItemRequestBuilderG_05429735|null $queryParameters Request query parameters
    */
    public ?UserExperienceAnalyticsAnomalyDeviceItemRequestBuilderG_05429735 $queryParameters = null;
    
    /**
     * Instantiates a new UserExperienceAnalyticsAnomalyDeviceItemRequestBuilderG_2cb22c0f and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UserExperienceAnalyticsAnomalyDeviceItemRequestBuilderG_05429735|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserExperienceAnalyticsAnomalyDeviceItemRequestBuilderG_05429735 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UserExperienceAnalyticsAnomalyDeviceItemRequestBuilderG_05429735.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UserExperienceAnalyticsAnomalyDeviceItemRequestBuilderG_05429735
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UserExperienceAnalyticsAnomalyDeviceItemRequestBuilderG_05429735 {
        return new UserExperienceAnalyticsAnomalyDeviceItemRequestBuilderG_05429735($expand, $select);
    }

}
