<?php

namespace Microsoft\Graph\Beta\Generated\Directory\Recommendations\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RecommendationItemRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<string, RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var RecommendationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RecommendationItemRequestBuilderGetQueryParameters $queryParameters = null;
    
}
