<?php

namespace Microsoft\\Graph\\Beta\\Generated\Reports\UserInsights\Monthly\InactiveUsersByApplication\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MonthlyInactiveUsersByApplicationMetricItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var MonthlyInactiveUsersByApplicationMetricItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MonthlyInactiveUsersByApplicationMetricItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new MonthlyInactiveUsersByApplicationMetricItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MonthlyInactiveUsersByApplicationMetricItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MonthlyInactiveUsersByApplicationMetricItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MonthlyInactiveUsersByApplicationMetricItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MonthlyInactiveUsersByApplicationMetricItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): MonthlyInactiveUsersByApplicationMetricItemRequestBuilderGetQueryParameters {
        return new MonthlyInactiveUsersByApplicationMetricItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
