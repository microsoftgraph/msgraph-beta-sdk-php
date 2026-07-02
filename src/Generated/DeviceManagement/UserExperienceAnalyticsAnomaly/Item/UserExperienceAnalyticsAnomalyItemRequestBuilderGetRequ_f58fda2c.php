<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsAnomaly\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: UserExperienceAnalyticsAnomalyItemRequestBuilderGetRequestConfiguration
*/
class UserExperienceAnalyticsAnomalyItemRequestBuilderGetRequ_f58fda2c extends BaseRequestConfiguration 
{
    /**
     * @var UserExperienceAnalyticsAnomalyItemRequestBuilderGetQuer_a224da59|null $queryParameters Request query parameters
    */
    public ?UserExperienceAnalyticsAnomalyItemRequestBuilderGetQuer_a224da59 $queryParameters = null;
    
    /**
     * Instantiates a new UserExperienceAnalyticsAnomalyItemRequestBuilderGetRequ_f58fda2c and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UserExperienceAnalyticsAnomalyItemRequestBuilderGetQuer_a224da59|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserExperienceAnalyticsAnomalyItemRequestBuilderGetQuer_a224da59 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UserExperienceAnalyticsAnomalyItemRequestBuilderGetQuer_a224da59.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UserExperienceAnalyticsAnomalyItemRequestBuilderGetQuer_a224da59
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UserExperienceAnalyticsAnomalyItemRequestBuilderGetQuer_a224da59 {
        return new UserExperienceAnalyticsAnomalyItemRequestBuilderGetQuer_a224da59($expand, $select);
    }

}
