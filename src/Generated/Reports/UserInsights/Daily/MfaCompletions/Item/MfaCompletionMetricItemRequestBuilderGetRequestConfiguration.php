<?php

namespace Microsoft\Graph\Beta\Generated\Reports\UserInsights\Daily\MfaCompletions\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MfaCompletionMetricItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var MfaCompletionMetricItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MfaCompletionMetricItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new MfaCompletionMetricItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MfaCompletionMetricItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MfaCompletionMetricItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MfaCompletionMetricItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MfaCompletionMetricItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): MfaCompletionMetricItemRequestBuilderGetQueryParameters {
        return new MfaCompletionMetricItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
