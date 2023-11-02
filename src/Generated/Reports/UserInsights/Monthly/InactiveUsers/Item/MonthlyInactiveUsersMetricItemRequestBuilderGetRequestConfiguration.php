<?php

namespace Microsoft\Graph\Beta\Generated\Reports\UserInsights\Monthly\InactiveUsers\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MonthlyInactiveUsersMetricItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var MonthlyInactiveUsersMetricItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MonthlyInactiveUsersMetricItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new MonthlyInactiveUsersMetricItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MonthlyInactiveUsersMetricItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MonthlyInactiveUsersMetricItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MonthlyInactiveUsersMetricItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MonthlyInactiveUsersMetricItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): MonthlyInactiveUsersMetricItemRequestBuilderGetQueryParameters {
        return new MonthlyInactiveUsersMetricItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
