<?php

namespace Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\Tags\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TagItemRequestBuilderGetRequestConfiguration 
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
     * @var TagItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TagItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new TagItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return TagItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): TagItemRequestBuilderGetQueryParameters {
        return new TagItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new TagItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TagItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TagItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
