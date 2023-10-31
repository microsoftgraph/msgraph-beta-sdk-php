<?php

namespace Microsoft\Graph\Beta\Generated\Reports\UserInsights\Monthly\ActiveUsersBreakdown\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ActiveUsersBreakdownMetricItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ActiveUsersBreakdownMetricItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ActiveUsersBreakdownMetricItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ActiveUsersBreakdownMetricItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ActiveUsersBreakdownMetricItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ActiveUsersBreakdownMetricItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ActiveUsersBreakdownMetricItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ActiveUsersBreakdownMetricItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ActiveUsersBreakdownMetricItemRequestBuilderGetQueryParameters {
        return new ActiveUsersBreakdownMetricItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
