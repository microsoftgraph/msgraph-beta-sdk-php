<?php

namespace Microsoft\\Graph\\Beta\\Generated\Reports\UserInsights\Daily\UserCount\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class UserCountMetricItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var UserCountMetricItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?UserCountMetricItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new UserCountMetricItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UserCountMetricItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserCountMetricItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UserCountMetricItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UserCountMetricItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UserCountMetricItemRequestBuilderGetQueryParameters {
        return new UserCountMetricItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
