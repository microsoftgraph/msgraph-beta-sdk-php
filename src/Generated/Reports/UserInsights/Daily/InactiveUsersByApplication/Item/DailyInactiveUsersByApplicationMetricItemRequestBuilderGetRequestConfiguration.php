<?php

namespace Microsoft\Graph\Beta\Generated\Reports\UserInsights\Daily\InactiveUsersByApplication\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DailyInactiveUsersByApplicationMetricItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DailyInactiveUsersByApplicationMetricItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DailyInactiveUsersByApplicationMetricItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DailyInactiveUsersByApplicationMetricItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DailyInactiveUsersByApplicationMetricItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DailyInactiveUsersByApplicationMetricItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DailyInactiveUsersByApplicationMetricItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DailyInactiveUsersByApplicationMetricItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DailyInactiveUsersByApplicationMetricItemRequestBuilderGetQueryParameters {
        return new DailyInactiveUsersByApplicationMetricItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
