<?php

namespace Microsoft\Graph\Beta\Generated\Reports\UserInsights\Monthly\InactiveUsersByApplication\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: MonthlyInactiveUsersByApplicationMetricItemRequestBuilderGetRequestConfiguration
*/
class MonthlyInactiveUsersByApplicationMetricItemRequestBuild_216f2a26 extends BaseRequestConfiguration 
{
    /**
     * @var MonthlyInactiveUsersByApplicationMetricItemRequestBuild_94990505|null $queryParameters Request query parameters
    */
    public ?MonthlyInactiveUsersByApplicationMetricItemRequestBuild_94990505 $queryParameters = null;
    
    /**
     * Instantiates a new MonthlyInactiveUsersByApplicationMetricItemRequestBuild_216f2a26 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MonthlyInactiveUsersByApplicationMetricItemRequestBuild_94990505|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MonthlyInactiveUsersByApplicationMetricItemRequestBuild_94990505 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MonthlyInactiveUsersByApplicationMetricItemRequestBuild_94990505.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MonthlyInactiveUsersByApplicationMetricItemRequestBuild_94990505
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): MonthlyInactiveUsersByApplicationMetricItemRequestBuild_94990505 {
        return new MonthlyInactiveUsersByApplicationMetricItemRequestBuild_94990505($expand, $select);
    }

}
