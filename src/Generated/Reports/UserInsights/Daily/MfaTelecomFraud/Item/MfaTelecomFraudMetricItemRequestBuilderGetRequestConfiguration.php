<?php

namespace Microsoft\Graph\Beta\Generated\Reports\UserInsights\Daily\MfaTelecomFraud\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MfaTelecomFraudMetricItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var MfaTelecomFraudMetricItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MfaTelecomFraudMetricItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new MfaTelecomFraudMetricItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MfaTelecomFraudMetricItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MfaTelecomFraudMetricItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MfaTelecomFraudMetricItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MfaTelecomFraudMetricItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): MfaTelecomFraudMetricItemRequestBuilderGetQueryParameters {
        return new MfaTelecomFraudMetricItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
