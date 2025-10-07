<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceManagement\UserExperienceAnalyticsDeviceTimelineEvent\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class UserExperienceAnalyticsDeviceTimelineEventItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var UserExperienceAnalyticsDeviceTimelineEventItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?UserExperienceAnalyticsDeviceTimelineEventItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new UserExperienceAnalyticsDeviceTimelineEventItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UserExperienceAnalyticsDeviceTimelineEventItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserExperienceAnalyticsDeviceTimelineEventItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UserExperienceAnalyticsDeviceTimelineEventItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UserExperienceAnalyticsDeviceTimelineEventItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UserExperienceAnalyticsDeviceTimelineEventItemRequestBuilderGetQueryParameters {
        return new UserExperienceAnalyticsDeviceTimelineEventItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
