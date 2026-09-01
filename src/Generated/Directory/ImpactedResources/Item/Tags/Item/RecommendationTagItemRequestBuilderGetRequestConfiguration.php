<?php

namespace Microsoft\Graph\Beta\Generated\Directory\ImpactedResources\Item\Tags\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RecommendationTagItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var RecommendationTagItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RecommendationTagItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new RecommendationTagItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RecommendationTagItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RecommendationTagItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new RecommendationTagItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return RecommendationTagItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): RecommendationTagItemRequestBuilderGetQueryParameters {
        return new RecommendationTagItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
