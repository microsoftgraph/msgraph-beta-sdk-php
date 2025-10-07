<?php

namespace Microsoft\\Graph\\Beta\\Generated\Compliance\Ediscovery\Cases\Item\ReviewSets\Item\Queries\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ReviewSetQueryItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ReviewSetQueryItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ReviewSetQueryItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ReviewSetQueryItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ReviewSetQueryItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ReviewSetQueryItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ReviewSetQueryItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ReviewSetQueryItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ReviewSetQueryItemRequestBuilderGetQueryParameters {
        return new ReviewSetQueryItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
