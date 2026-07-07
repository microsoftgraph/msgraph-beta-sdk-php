<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsResourcePerformance\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: UserExperienceAnalyticsResourcePerformanceItemRequestBuilderGetRequestConfiguration
*/
class UserExperienceAnalyticsResourcePerformanceItemRequestBu_f81fac83 extends BaseRequestConfiguration 
{
    /**
     * @var UserExperienceAnalyticsResourcePerformanceItemRequestBu_21c9586c|null $queryParameters Request query parameters
    */
    public ?UserExperienceAnalyticsResourcePerformanceItemRequestBu_21c9586c $queryParameters = null;
    
    /**
     * Instantiates a new UserExperienceAnalyticsResourcePerformanceItemRequestBu_f81fac83 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UserExperienceAnalyticsResourcePerformanceItemRequestBu_21c9586c|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserExperienceAnalyticsResourcePerformanceItemRequestBu_21c9586c $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UserExperienceAnalyticsResourcePerformanceItemRequestBu_21c9586c.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UserExperienceAnalyticsResourcePerformanceItemRequestBu_21c9586c
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UserExperienceAnalyticsResourcePerformanceItemRequestBu_21c9586c {
        return new UserExperienceAnalyticsResourcePerformanceItemRequestBu_21c9586c($expand, $select);
    }

}
