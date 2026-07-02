<?php

namespace Microsoft\Graph\Beta\Generated\NetworkAccess\Logs\GenerativeAIInsights\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: GenerativeAIInsightTransactionItemRequestBuilderGetRequestConfiguration
*/
class GenerativeAIInsightTransactionItemRequestBuilderGetRequ_49524f4d extends BaseRequestConfiguration 
{
    /**
     * @var GenerativeAIInsightTransactionItemRequestBuilderGetQuer_eaa04d06|null $queryParameters Request query parameters
    */
    public ?GenerativeAIInsightTransactionItemRequestBuilderGetQuer_eaa04d06 $queryParameters = null;
    
    /**
     * Instantiates a new GenerativeAIInsightTransactionItemRequestBuilderGetRequ_49524f4d and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GenerativeAIInsightTransactionItemRequestBuilderGetQuer_eaa04d06|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GenerativeAIInsightTransactionItemRequestBuilderGetQuer_eaa04d06 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GenerativeAIInsightTransactionItemRequestBuilderGetQuer_eaa04d06.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return GenerativeAIInsightTransactionItemRequestBuilderGetQuer_eaa04d06
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): GenerativeAIInsightTransactionItemRequestBuilderGetQuer_eaa04d06 {
        return new GenerativeAIInsightTransactionItemRequestBuilderGetQuer_eaa04d06($expand, $select);
    }

}
