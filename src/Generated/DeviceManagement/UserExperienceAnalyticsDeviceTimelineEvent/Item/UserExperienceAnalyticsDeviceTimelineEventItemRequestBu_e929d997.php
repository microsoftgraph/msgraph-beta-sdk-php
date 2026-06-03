<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsDeviceTimelineEvent\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: UserExperienceAnalyticsDeviceTimelineEventItemRequestBuilderGetRequestConfiguration
*/
class UserExperienceAnalyticsDeviceTimelineEventItemRequestBu_e929d997 extends BaseRequestConfiguration 
{
    /**
     * @var UserExperienceAnalyticsDeviceTimelineEventItemRequestBu_096f2bac|null $queryParameters Request query parameters
    */
    public ?UserExperienceAnalyticsDeviceTimelineEventItemRequestBu_096f2bac $queryParameters = null;
    
    /**
     * Instantiates a new UserExperienceAnalyticsDeviceTimelineEventItemRequestBu_e929d997 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UserExperienceAnalyticsDeviceTimelineEventItemRequestBu_096f2bac|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserExperienceAnalyticsDeviceTimelineEventItemRequestBu_096f2bac $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UserExperienceAnalyticsDeviceTimelineEventItemRequestBu_096f2bac.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UserExperienceAnalyticsDeviceTimelineEventItemRequestBu_096f2bac
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UserExperienceAnalyticsDeviceTimelineEventItemRequestBu_096f2bac {
        return new UserExperienceAnalyticsDeviceTimelineEventItemRequestBu_096f2bac($expand, $select);
    }

}
