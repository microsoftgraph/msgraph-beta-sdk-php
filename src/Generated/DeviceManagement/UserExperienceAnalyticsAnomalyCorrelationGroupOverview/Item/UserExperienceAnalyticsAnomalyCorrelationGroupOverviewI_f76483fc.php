<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsAnomalyCorrelationGroupOverview\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: UserExperienceAnalyticsAnomalyCorrelationGroupOverviewItemRequestBuilderGetRequestConfiguration
*/
class UserExperienceAnalyticsAnomalyCorrelationGroupOverviewI_f76483fc extends BaseRequestConfiguration 
{
    /**
     * @var UserExperienceAnalyticsAnomalyCorrelationGroupOverviewI_e427ff9e|null $queryParameters Request query parameters
    */
    public ?UserExperienceAnalyticsAnomalyCorrelationGroupOverviewI_e427ff9e $queryParameters = null;
    
    /**
     * Instantiates a new UserExperienceAnalyticsAnomalyCorrelationGroupOverviewI_f76483fc and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UserExperienceAnalyticsAnomalyCorrelationGroupOverviewI_e427ff9e|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserExperienceAnalyticsAnomalyCorrelationGroupOverviewI_e427ff9e $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UserExperienceAnalyticsAnomalyCorrelationGroupOverviewI_e427ff9e.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UserExperienceAnalyticsAnomalyCorrelationGroupOverviewI_e427ff9e
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UserExperienceAnalyticsAnomalyCorrelationGroupOverviewI_e427ff9e {
        return new UserExperienceAnalyticsAnomalyCorrelationGroupOverviewI_e427ff9e($expand, $select);
    }

}
