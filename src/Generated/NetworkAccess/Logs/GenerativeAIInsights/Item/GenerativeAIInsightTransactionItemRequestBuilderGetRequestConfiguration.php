<?php

namespace Microsoft\Graph\Beta\Generated\NetworkAccess\Logs\GenerativeAIInsights\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GenerativeAIInsightTransactionItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var GenerativeAIInsightTransactionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GenerativeAIInsightTransactionItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new GenerativeAIInsightTransactionItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GenerativeAIInsightTransactionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GenerativeAIInsightTransactionItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GenerativeAIInsightTransactionItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return GenerativeAIInsightTransactionItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): GenerativeAIInsightTransactionItemRequestBuilderGetQueryParameters {
        return new GenerativeAIInsightTransactionItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
