<?php

namespace Microsoft\Graph\Beta\Generated\Groups\Item\Conversations\Item\Threads\Item\Posts\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PostItemRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var PostItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PostItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PostItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PostItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PostItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PostItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PostItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PostItemRequestBuilderGetQueryParameters {
        return new PostItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
