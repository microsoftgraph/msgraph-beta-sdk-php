<?php

namespace Microsoft\Graph\Beta\Generated\Reports\UserInsights\Daily\InactiveUsersByApplication\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: DailyInactiveUsersByApplicationMetricItemRequestBuilderGetRequestConfiguration
*/
class DailyInactiveUsersByApplicationMetricItemRequestBuilder_d6d8d687 extends BaseRequestConfiguration 
{
    /**
     * @var DailyInactiveUsersByApplicationMetricItemRequestBuilder_64fce371|null $queryParameters Request query parameters
    */
    public ?DailyInactiveUsersByApplicationMetricItemRequestBuilder_64fce371 $queryParameters = null;
    
    /**
     * Instantiates a new DailyInactiveUsersByApplicationMetricItemRequestBuilder_d6d8d687 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DailyInactiveUsersByApplicationMetricItemRequestBuilder_64fce371|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DailyInactiveUsersByApplicationMetricItemRequestBuilder_64fce371 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DailyInactiveUsersByApplicationMetricItemRequestBuilder_64fce371.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DailyInactiveUsersByApplicationMetricItemRequestBuilder_64fce371
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DailyInactiveUsersByApplicationMetricItemRequestBuilder_64fce371 {
        return new DailyInactiveUsersByApplicationMetricItemRequestBuilder_64fce371($expand, $select);
    }

}
