<?php

namespace Microsoft\\Graph\\Beta\\Generated\Reports\UserInsights\Daily\InactiveUsers\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DailyInactiveUsersMetricItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DailyInactiveUsersMetricItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DailyInactiveUsersMetricItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DailyInactiveUsersMetricItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DailyInactiveUsersMetricItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DailyInactiveUsersMetricItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DailyInactiveUsersMetricItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DailyInactiveUsersMetricItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DailyInactiveUsersMetricItemRequestBuilderGetQueryParameters {
        return new DailyInactiveUsersMetricItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
